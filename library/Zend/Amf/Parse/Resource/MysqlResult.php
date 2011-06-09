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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Parse
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php MysqlResultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Thisphp classphp willphp convertphp mysqlphp resultphp resourcephp tophp arrayphp suitablephp forphp passing
php php*php tophp thephp externalphp entitiesphp.
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Parse
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Parsephp_Resourcephp_MysqlResult
php{
php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Listphp ofphp Mysqlphp typesphp withphp PHPphp counterparts
php php php php php php*
php php php php php php*php Keyphp php=php>php Valuephp isphp Mysqlphp typephp php(exactphp stringphp)php php=php>php PHPphp type
php php php php php php*php/
php php php php staticphp publicphp php$fieldTypesphp php=php arrayphp(
php php php php php php php php php"intphp"php php=php>php php"intphp"php,
php php php php php php php php php"timestampphp"php php=php>php php"intphp"php,
php php php php php php php php php"yearphp"php php=php>php php"intphp"php,
php php php php php php php php php"realphp"php php=php>php php"floatphp"php,
php php php php php)php;
php php php php php/php*php*
php php php php php php*php Parsephp resourcephp intophp array
php php php php php php*
php php php php php php*php php@paramphp resourcephp php$resource
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp parsephp(php$resourcephp)php php{
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php$fieldcntphp php=php mysqlphp_numphp_fieldsphp(php$resourcephp)php;
php php php php php php php php php$fieldsphp_transformphp php=php arrayphp(php)php;
php php php php php php php php forphp(php$iphp=php0php;php$i<php$fieldcntphp;php$iphp+php+php)php php{
php php php php php php php php php php php php php$typephp php=php mysqlphp_fieldphp_typephp(php$resourcephp,php php$iphp)php;
php php php php php php php php php php php php ifphp(issetphp(selfphp:php:php$fieldTypesphp[php$typephp]php)php)php php{
php php php php php php php php php php php php php php php php php$fieldsphp_transformphp[mysqlphp_fieldphp_namephp(php$resourcephp,php php$iphp)php]php php=php selfphp:php:php$fieldTypesphp[php$typephp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php whilephp(php$rowphp php=php mysqlphp_fetchphp_objectphp(php$resourcephp)php)php php{
php php php php php php php php php php php php foreachphp(php$fieldsphp_transformphp asphp php$fieldnamephp php=php>php php$fieldtypephp)php php{
php php php php php php php php php php php php php php php settypephp(php$rowphp-php>php$fieldnamephp,php php$fieldtypephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp[php]php php=php php$rowphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}
php}
