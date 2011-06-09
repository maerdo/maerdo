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
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Definitionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Classphp forphp SQLphp tablephp interfacephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Db
php php*php php@subpackagephp Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dbphp_Tablephp_Definition
php{

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tableConfigsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$optionsphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php setConfigphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Definition
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setOptionsphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Definition
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionNamephp php=php>php php$optionValuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setTableConfigphp(php$optionNamephp,php php$optionValuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@paramphp arrayphp php php$tableConfig
php php php php php php*php php@returnphp Zendphp_Dbphp_Tablephp_Definition
php php php php php php*php/
php php php php publicphp functionphp setTableConfigphp(php$tableNamephp,php arrayphp php$tableConfigphp)
php php php php php{
php php php php php php php php php/php/php php@todophp logicphp here
php php php php php php php php php$tableConfigphp[Zendphp_Dbphp_Tablephp:php:DEFINITIONphp_CONFIGphp_NAMEphp]php php=php php$tableNamephp;
php php php php php php php php php$tableConfigphp[Zendphp_Dbphp_Tablephp:php:DEFINITIONphp]php php=php php$thisphp;

php php php php php php php php ifphp php(php!issetphp(php$tableConfigphp[Zendphp_Dbphp_Tablephp:php:NAMEphp]php)php)php php{
php php php php php php php php php php php php php$tableConfigphp[Zendphp_Dbphp_Tablephp:php:NAMEphp]php php=php php$tableNamephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_tableConfigsphp[php$tableNamephp]php php=php php$tableConfigphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getTableConfigphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getTableConfigphp(php$tableNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tableConfigsphp[php$tableNamephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php removeTableConfigphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php/
php php php php publicphp functionphp removeTableConfigphp(php$tableNamephp)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_tableConfigsphp[php$tableNamephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasTableConfigphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tableName
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasTableConfigphp(php$tableNamephp)
php php php php php{
php php php php php php php php returnphp php(issetphp(php$thisphp-php>php_tableConfigsphp[php$tableNamephp]php)php)php;
php php php php php}

php}
