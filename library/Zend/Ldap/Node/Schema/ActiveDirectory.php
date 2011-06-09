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
php php*php php@versionphp php php php php$Idphp:php ActiveDirectoryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schema
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_ActiveDirectory
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/AttributeTypephp/ActiveDirectoryphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_ActiveDirectory
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/ObjectClassphp/ActiveDirectoryphp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_Schemaphp_ActiveDirectoryphp providesphp aphp simplephp dataphp-containerphp forphp thephp Schemaphp nodephp of
php php*php anphp Activephp Directoryphp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Schema
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_Schemaphp_ActiveDirectoryphp extendsphp Zendphp_Ldapphp_Nodephp_Schema
php{
php php php php php/php*php*
php php php php php php*php Thephp attributephp Types
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attributeTypesphp php=php arrayphp(php)php;
php php php php php/php*php*
php php php php php php*php Thephp objectphp classes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_objectClassesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Parsesphp thephp schema
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp php$dn
php php php php php php*php php@paramphp php Zendphp_Ldapphp php php php php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_Schemaphp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php protectedphp functionphp php_parseSchemaphp(Zendphp_Ldapphp_Dnphp php$dnphp,php Zendphp_Ldapphp php$ldapphp)
php php php php php{
php php php php php php php php parentphp:php:php_parseSchemaphp(php$dnphp,php php$ldapphp)php;
php php php php php php php php foreachphp php(php$ldapphp-php>searchphp(php'php(objectClassphp=classSchemaphp)php'php,php php$dnphp,
php php php php php php php php php php php php php php php php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_ONEphp)php asphp php$nodephp)php php{
php php php php php php php php php php php php php$valphp php=php newphp Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_ActiveDirectoryphp(php$nodephp)php;
php php php php php php php php php php php php php$thisphp-php>php_objectClassesphp[php$valphp-php>getNamephp(php)php]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$ldapphp-php>searchphp(php'php(objectClassphp=attributeSchemaphp)php'php,php php$dnphp,
php php php php php php php php php php php php php php php php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_ONEphp)php asphp php$nodephp)php php{
php php php php php php php php php php php php php$valphp php=php newphp Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_ActiveDirectoryphp(php$nodephp)php;
php php php php php php php php php php php php php$thisphp-php>php_attributeTypesphp[php$valphp-php>getNamephp(php)php]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp attributephp Types
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttributeTypesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_attributeTypesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp objectphp classes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getObjectClassesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objectClassesphp;
php php php php php}
php}