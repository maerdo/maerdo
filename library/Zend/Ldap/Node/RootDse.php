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
php php*php php@subpackagephp RootDSE
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php RootDsephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_RootDsephp providesphp aphp simplephp dataphp-containerphp forphp thephp RootDSEphp nodephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp RootDSE
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_RootDsephp extendsphp Zendphp_Ldapphp_Nodephp_Abstract
php{
php php php php constphp SERVERphp_TYPEphp_GENERICphp php php php php php php php php php=php php1php;
php php php php constphp SERVERphp_TYPEphp_OPENLDAPphp php php php php php php php php=php php2php;
php php php php constphp SERVERphp_TYPEphp_ACTIVEDIRECTORYphp php=php php3php;
php php php php constphp SERVERphp_TYPEphp_EDIRECTORYphp php php php php php php=php php4php;

php php php php php/php*php*
php php php php php php*php Factoryphp methodphp tophp createphp thephp RootDSEphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_RootDse
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(Zendphp_Ldapphp php$ldapphp)
php php php php php{
php php php php php php php php php$dnphp php=php Zendphp_Ldapphp_Dnphp:php:fromStringphp(php'php'php)php;
php php php php php php php php php$dataphp php=php php$ldapphp-php>getEntryphp(php$dnphp,php arrayphp(php'php*php'php,php php'php+php'php)php,php truephp)php;
php php php php php php php php ifphp php(issetphp(php$dataphp[php'domainfunctionalityphp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Nodephp_RootDsephp_ActiveDirectory
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/RootDsephp/ActiveDirectoryphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Ldapphp_Nodephp_RootDsephp_ActiveDirectoryphp(php$dnphp,php php$dataphp)php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$dataphp[php'dsanamephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Nodephp_RootDsephp_ActiveDirectory
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/RootDsephp/eDirectoryphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Ldapphp_Nodephp_RootDsephp_eDirectoryphp(php$dnphp,php php$dataphp)php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$dataphp[php'structuralobjectclassphp'php]php)php php&php&
php php php php php php php php php php php php php php php php php$dataphp[php'structuralobjectclassphp'php]php[php0php]php php=php=php=php php'OpenLDAProotDSEphp'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Nodephp_RootDsephp_OpenLdap
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/RootDsephp/OpenLdapphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Ldapphp_Nodephp_RootDsephp_OpenLdapphp(php$dnphp,php php$dataphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp newphp selfphp(php$dnphp,php php$dataphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php Constructorphp isphp protectedphp tophp enforcephp thephp usephp ofphp factoryphp methodsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp php$dn
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$data
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(Zendphp_Ldapphp_Dnphp php$dnphp,php arrayphp php$dataphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$dnphp,php php$dataphp,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp namingContextsphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getNamingContextsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'namingContextsphp'php,php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp subschemaSubentryphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getSubschemaSubentryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'subschemaSubentryphp'php,php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp ifphp thephp versionphp isphp supported
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp|arrayphp php$versionsphp versionphp(sphp)php tophp check
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp supportsVersionphp(php$versionsphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>attributeHasValuephp(php'supportedLDAPVersionphp'php,php php$versionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp ifphp thephp saslphp mechanismphp isphp supported
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$mechlistphp SASLphp mechanismsphp tophp check
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp supportsSaslMechanismphp(php$mechlistphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>attributeHasValuephp(php'supportedSASLMechanismsphp'php,php php$mechlistphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp serverphp type
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getServerTypephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:SERVERphp_TYPEphp_GENERICphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp schemaphp DN
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dn
php php php php php php*php/
php php php php publicphp functionphp getSchemaDnphp(php)
php php php php php{
php php php php php php php php php$schemaDnphp php=php php$thisphp-php>getSubschemaSubentryphp(php)php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Dn
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Dnphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Ldapphp_Dnphp:php:fromStringphp(php$schemaDnphp)php;
php php php php php}
php}