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
php php*php php@versionphp php php php php$Idphp:php Schemaphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_Schemaphp providesphp aphp simplephp dataphp-containerphp forphp thephp Schemaphp nodephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Schema
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_Schemaphp extendsphp Zendphp_Ldapphp_Nodephp_Abstract
php{
php php php php constphp OBJECTCLASSphp_TYPEphp_UNKNOWNphp php php php php=php php0php;
php php php php constphp OBJECTCLASSphp_TYPEphp_STRUCTURALphp php=php php1php;
php php php php constphp OBJECTCLASSphp_TYPEphp_ABSTRACTphp php php php=php php3php;
php php php php constphp OBJECTCLASSphp_TYPEphp_AUXILIARYphp php php=php php4php;

php php php php php/php*php*
php php php php php php*php Factoryphp methodphp tophp createphp thephp Schemaphp nodephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_Schema
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(Zendphp_Ldapphp php$ldapphp)
php php php php php{
php php php php php php php php php$dnphp php=php php$ldapphp-php>getRootDsephp(php)php-php>getSchemaDnphp(php)php;
php php php php php php php php php$dataphp php=php php$ldapphp-php>getEntryphp(php$dnphp,php arrayphp(php'php*php'php,php php'php+php'php)php,php truephp)php;
php php php php php php php php switchphp php(php$ldapphp-php>getRootDsephp(php)php-php>getServerTypephp(php)php)php php{
php php php php php php php php php php php php casephp Zendphp_Ldapphp_Nodephp_RootDsephp:php:SERVERphp_TYPEphp_ACTIVEDIRECTORYphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_ActiveDirectory
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/ActiveDirectoryphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Ldapphp_Nodephp_Schemaphp_ActiveDirectoryphp(php$dnphp,php php$dataphp,php php$ldapphp)php;
php php php php php php php php php php php php casephp Zendphp_Ldapphp_Nodephp_RootDsephp:php:SERVERphp_TYPEphp_OPENLDAPphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Nodephp_RootDsephp_ActiveDirectory
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/OpenLdapphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Ldapphp_Nodephp_Schemaphp_OpenLdapphp(php$dnphp,php php$dataphp,php php$ldapphp)php;
php php php php php php php php php php php php casephp Zendphp_Ldapphp_Nodephp_RootDsephp:php:SERVERphp_TYPEphp_EDIRECTORYphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp newphp selfphp(php$dnphp,php php$dataphp,php php$ldapphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php Constructorphp isphp protectedphp tophp enforcephp thephp usephp ofphp factoryphp methodsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp php$dn
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$data
php php php php php php*php php@paramphp php Zendphp_Ldapphp php php php php$ldap
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(Zendphp_Ldapphp_Dnphp php$dnphp,php arrayphp php$dataphp,php Zendphp_Ldapphp php$ldapphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$dnphp,php php$dataphp,php truephp)php;
php php php php php php php php php$thisphp-php>php_parseSchemaphp(php$dnphp,php php$ldapphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp thephp schema
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp php$dn
php php php php php php*php php@paramphp php Zendphp_Ldapphp php php php php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_Schemaphp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php protectedphp functionphp php_parseSchemaphp(Zendphp_Ldapphp_Dnphp php$dnphp,php Zendphp_Ldapphp php$ldapphp)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp attributephp Types
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttributeTypesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp objectphp classes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getObjectClassesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}
php}