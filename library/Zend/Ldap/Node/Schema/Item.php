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
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Schema
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Itemphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_Schemaphp_Itemphp providesphp aphp basephp implementationphp forphp managingphp schema
php php*php itemsphp likephp objectClassphp andphp attributephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Schema
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Ldapphp_Nodephp_Schemaphp_Itemphp implementsphp ArrayAccessphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php Thephp underlyingphp data
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$data
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>setDataphp(php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp data
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_Schemaphp_Itemphp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setDataphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php php$dataphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp data
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDataphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp specificphp attributephp fromphp thisphp item
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$namephp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp whetherphp aphp specificphp attributephp existsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_dataphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Alwaysphp throwsphp BadMethodCallException
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php Thisphp methodphp isphp neededphp forphp aphp fullphp implementationphp ofphp ArrayAccess
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp BadMethodCallException
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php throwphp newphp BadMethodCallExceptionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp specificphp attributephp fromphp thisphp item
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_php_getphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Alwaysphp throwsphp BadMethodCallException
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php Thisphp methodphp isphp neededphp forphp aphp fullphp implementationphp ofphp ArrayAccess
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp BadMethodCallException
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$namephp)
php php php php php{
php php php php php php php php throwphp newphp BadMethodCallExceptionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp whetherphp aphp specificphp attributephp existsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_php_issetphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp attributesphp.
php php php php php php*php Implementsphp Countable
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_dataphp)php;
php php php php php}
php}