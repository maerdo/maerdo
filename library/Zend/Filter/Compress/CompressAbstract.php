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
php php*php php@versionphp php php php php$Idphp:php CompressAbstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Compressphp_CompressInterface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Compressphp/CompressInterfacephp.phpphp'php;

php/php*php*
php php*php Abstractphp compressionphp adapter
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Filterphp_Compressphp_CompressAbstractphp implementsphp Zendphp_Filterphp_Compressphp_CompressInterface
php{
php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$optionsphp php(Optionalphp)php Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp onephp orphp allphp setphp options
php php php php php php*
php php php php php php*php php@paramphp stringphp php$optionphp php(Optionalphp)php Optionphp tophp return
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php$optionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$optionphp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php$optionphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp allphp orphp onephp option
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Filterphp_Compressphp_Bzphp2
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$optionphp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php php$keyphp;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$optionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
