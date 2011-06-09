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
php php*php php@versionphp php php php php$Idphp:php OpenLdapphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_Item
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/Itemphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/ObjectClassphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_OpenLdapphp providesphp accessphp tophp thephp objectClass
php php*php schemaphp informationphp onphp anphp OpenLDAPphp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Schema
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_OpenLdapphp extendsphp Zendphp_Ldapphp_Nodephp_Schemaphp_Item
php php php php implementsphp Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Allphp inheritedphp php"MUSTphp"php attributes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_inheritedMustphp php=php nullphp;
php php php php php/php*php*
php php php php php php*php Allphp inheritedphp php"MAYphp"php attributes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_inheritedMayphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Getsphp thephp objectClassphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp objectClassphp OID
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getOidphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>oidphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp attributesphp thatphp thisphp objectClassphp mustphp contain
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMustContainphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_inheritedMustphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_resolveInheritancephp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_inheritedMustphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp attributesphp thatphp thisphp objectClassphp mayphp contain
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMayContainphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_inheritedMayphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_resolveInheritancephp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_inheritedMayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resolvesphp thephp inheritancephp tree
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_resolveInheritancephp(php)
php php php php php{
php php php php php php php php php$mustphp php=php php$thisphp-php>mustphp;
php php php php php php php php php$mayphp php=php php$thisphp-php>mayphp;
php php php php php php php php foreachphp php(php$thisphp-php>getParentsphp(php)php asphp php$pphp)php php{
php php php php php php php php php php php php php$mustphp php=php arrayphp_mergephp(php$mustphp,php php$pphp-php>getMustContainphp(php)php)php;
php php php php php php php php php php php php php$mayphp php=php arrayphp_mergephp(php$mayphp,php php$pphp-php>getMayContainphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$mustphp php=php arrayphp_uniquephp(php$mustphp)php;
php php php php php php php php php$mayphp php=php arrayphp_uniquephp(php$mayphp)php;
php php php php php php php php php$mayphp php=php arrayphp_diffphp(php$mayphp,php php$mustphp)php;
php php php php php php php php sortphp(php$mustphp,php SORTphp_STRINGphp)php;
php php php php php php php php sortphp(php$mayphp,php SORTphp_STRINGphp)php;
php php php php php php php php php$thisphp-php>php_inheritedMustphp php=php php$mustphp;
php php php php php php php php php$thisphp-php>php_inheritedMayphp php=php php$mayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp objectClassphp description
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>descphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp objectClassphp type
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>structuralphp)php php{
php php php php php php php php php php php php returnphp Zendphp_Ldapphp_Nodephp_Schemaphp:php:OBJECTCLASSphp_TYPEphp_STRUCTURALphp;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>abstractphp)php php{
php php php php php php php php php php php php returnphp Zendphp_Ldapphp_Nodephp_Schemaphp:php:OBJECTCLASSphp_TYPEphp_ABSTRACTphp;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>auxiliaryphp)php php{
php php php php php php php php php php php php returnphp Zendphp_Ldapphp_Nodephp_Schemaphp:php:OBJECTCLASSphp_TYPEphp_AUXILIARYphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp Zendphp_Ldapphp_Nodephp_Schemaphp:php:OBJECTCLASSphp_TYPEphp_UNKNOWNphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp parentphp objectClassesphp ofphp thisphp classphp.
php php php php php php*php Thisphp includesphp structuralphp,php abstractphp andphp auxiliaryphp objectClasses
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParentClassesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>supphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp parentphp objectphp classesphp inphp thephp inhertitancephp treephp ifphp onephp exists
php php php php php php*
php php php php php php*php php@returnphp arrayphp ofphp Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_OpenLdap
php php php php php php*php/
php php php php publicphp functionphp getParentsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parentsphp;
php php php php php}
php}