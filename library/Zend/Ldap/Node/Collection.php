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
php php*php php@subpackagephp Node
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Collectionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Collection
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Collectionphp.phpphp'php;


php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_Collectionphp providesphp aphp collecionphp ofphp nodesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Node
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_Collectionphp extendsphp Zendphp_Ldapphp_Collection
php{
php php php php php/php*php*
php php php php php php*php Createsphp thephp dataphp structurephp forphp thephp givenphp entryphp data
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@returnphp Zendphp_Ldapphp_Node
php php php php php php*php/
php php php php protectedphp functionphp php_createEntryphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Node
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Nodephp.phpphp'php;
php php php php php php php php php$nodephp php=php Zendphp_Ldapphp_Nodephp:php:fromArrayphp(php$dataphp,php truephp)php;
php php php php php php php php php$nodephp-php>attachLdapphp(php$thisphp-php>php_iteratorphp-php>getLdapphp(php)php)php;
php php php php php php php php returnphp php$nodephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp childphp keyphp php(DNphp)php.
php php php php php php*php Implementsphp Iteratorphp andphp RecursiveIterator
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_iteratorphp-php>keyphp(php)php;
php php php php php}
php}