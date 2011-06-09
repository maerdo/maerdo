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
php php*php php@versionphp php php php php$Idphp:php Nodephp.phpphp php2php2php6php6php2php php2php0php1php0php-php0php7php-php2php4php php1php7php:php3php7php:php3php6Zphp mabephp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldap
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp providesphp anphp objectphp orientedphp viewphp intophp aphp LDAPphp nodephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Node
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp extendsphp Zendphp_Ldapphp_Nodephp_Abstractphp implementsphp Iteratorphp,php RecursiveIterator
php{
php php php php php/php*php*
php php php php php php*php Holdsphp thephp nodephp'sphp newphp DNphp ifphp nodephp isphp renamedphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Ldapphp_Dn
php php php php php php*php/
php php php php protectedphp php$php_newDnphp;
php php php php php/php*php*
php php php php php php*php Holdsphp thephp nodephp'sphp orginalphp attributesphp php(asphp loadedphp)php.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_originalDataphp;
php php php php php/php*php*
php php php php php php*php Thisphp nodephp willphp bephp added
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_newphp;
php php php php php/php*php*
php php php php php php*php Thisphp nodephp willphp bephp deleted
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_deletephp;
php php php php php/php*php*
php php php php php php*php Holdsphp thephp connectionphp tophp thephp LDAPphp serverphp ifphp inphp connectedphp modephp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Ldap
php php php php php php*php/
php php php php protectedphp php$php_ldapphp;

php php php php php/php*php*
php php php php php php*php Holdsphp anphp arrayphp ofphp thephp currentphp nodephp'sphp childrenphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_childrenphp;

php php php php php/php*php*
php php php php php php*php Controlsphp iterationphp status
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_iteratorRewindphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php Constructorphp isphp protectedphp tophp enforcephp thephp usephp ofphp factoryphp methodsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp php$dn
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$data
php php php php php php*php php@paramphp php booleanphp php php php php php php$fromDataSource
php php php php php php*php php@paramphp php Zendphp_Ldapphp php php php php$ldap
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(Zendphp_Ldapphp_Dnphp php$dnphp,php arrayphp php$dataphp,php php$fromDataSourcephp,php Zendphp_Ldapphp php$ldapphp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$dnphp,php php$dataphp,php php$fromDataSourcephp)php;
php php php php php php php php ifphp php(php$ldapphp php!php=php=php nullphp)php php$thisphp-php>attachLdapphp(php$ldapphp)php;
php php php php php php php php elsephp php$thisphp-php>detachLdapphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializationphp callback
php php php php php php*
php php php php php php*php Onlyphp DNphp andphp attributesphp willphp bephp serializedphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'php_dnphp'php,php php'php_currentDataphp'php,php php'php_newDnphp'php,php php'php_originalDataphp'php,
php php php php php php php php php php php php php'php_newphp'php,php php'php_deletephp'php,php php'php_childrenphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deserializationphp callback
php php php php php php*
php php php php php php*php Enforcesphp aphp detachedphp nodephp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>detachLdapphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp currentphp LDAPphp connectionphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldap
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getLdapphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_ldapphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'Nophp LDAPphp connectionphp specifiedphp.php'php,php Zendphp_Ldapphp_Exceptionphp:php:LDAPphp_OTHERphp)php;
php php php php php php php php php}
php php php php php php php php elsephp returnphp php$thisphp-php>php_ldapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp nodephp tophp anphp LDAPphp connection
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@usesphp php php Zendphp_Ldapphp_Dnphp:php:isChildOfphp(php)
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp attachLdapphp(Zendphp_Ldapphp php$ldapphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Ldapphp_Dnphp:php:isChildOfphp(php$thisphp-php>php_getDnphp(php)php,php php$ldapphp-php>getBaseDnphp(php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'LDAPphp connectionphp isphp notphp responsiblephp forphp givenphp nodephp.php'php,
php php php php php php php php php php php php php php php php Zendphp_Ldapphp_Exceptionphp:php:LDAPphp_OTHERphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$ldapphp php!php=php=php php$thisphp-php>php_ldapphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_ldapphp php=php php$ldapphp;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_childrenphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_childrenphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php php php php php$childphp-php>attachLdapphp(php$ldapphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Detachphp nodephp fromphp LDAPphp connection
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp detachLdapphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_ldapphp php=php nullphp;
php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_childrenphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_childrenphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php$childphp-php>detachLdapphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp currentphp nodephp isphp attachedphp tophp aphp LDAPphp serverphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isAttachedphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>php_ldapphp php!php=php=php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php arrayphp php php php$data
php php php php php php*php php@paramphp php booleanphp php$fromDataSource
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_loadDataphp(arrayphp php$dataphp,php php$fromDataSourcephp)
php php php php php{
php php php php php php php php parentphp:php:php_loadDataphp(php$dataphp,php php$fromDataSourcephp)php;
php php php php php php php php ifphp php(php$fromDataSourcephp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_originalDataphp php=php php$dataphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_originalDataphp php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_childrenphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_markAsNewphp(php(php$fromDataSourcephp php=php=php=php truephp)php php?php falsephp php:php truephp)php;
php php php php php php php php php$thisphp-php>php_markAsToBeDeletedphp(falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Factoryphp methodphp tophp createphp aphp newphp detachedphp Zendphp_Ldapphp_Nodephp forphp aphp givenphp DNphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Ldapphp_Dnphp php$dn
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php php$objectClass
php php php php php php*php php@returnphp Zendphp_Ldapphp_Node
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(php$dnphp,php arrayphp php$objectClassphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$dnphp)php php|php|php isphp_arrayphp(php$dnphp)php)php php{
php php php php php php php php php php php php php$dnphp php=php Zendphp_Ldapphp_Dnphp:php:factoryphp(php$dnphp)php;
php php php php php php php php php}php elsephp ifphp php(php$dnphp instanceofphp Zendphp_Ldapphp_Dnphp)php php{
php php php php php php php php php php php php php$dnphp php=php clonephp php$dnphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'php$dnphp isphp ofphp aphp wrongphp dataphp typephp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$newphp php=php newphp selfphp(php$dnphp,php arrayphp(php)php,php falsephp,php nullphp)php;
php php php php php php php php php$newphp-php>php_ensureRdnAttributeValuesphp(php)php;
php php php php php php php php php$newphp-php>setAttributephp(php'objectClassphp'php,php php$objectClassphp)php;
php php php php php php php php returnphp php$newphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Factoryphp methodphp tophp createphp anphp attachedphp Zendphp_Ldapphp_Nodephp forphp aphp givenphp DNphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Ldapphp_Dnphp php$dn
php php php php php php*php php@paramphp php Zendphp_Ldapphp php php php php php php php php php php php php php php php php php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp|null
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp fromLdapphp(php$dnphp,php Zendphp_Ldapphp php$ldapphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$dnphp)php php|php|php isphp_arrayphp(php$dnphp)php)php php{
php php php php php php php php php php php php php$dnphp php=php Zendphp_Ldapphp_Dnphp:php:factoryphp(php$dnphp)php;
php php php php php php php php php}php elsephp ifphp php(php$dnphp instanceofphp Zendphp_Ldapphp_Dnphp)php php{
php php php php php php php php php php php php php$dnphp php=php clonephp php$dnphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'php$dnphp isphp ofphp aphp wrongphp dataphp typephp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$dataphp php=php php$ldapphp-php>getEntryphp(php$dnphp,php arrayphp(php'php*php'php,php php'php+php'php)php,php truephp)php;
php php php php php php php php ifphp php(php$dataphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php php$entryphp php=php newphp selfphp(php$dnphp,php php$dataphp,php truephp,php php$ldapphp)php;
php php php php php php php php returnphp php$entryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Factoryphp methodphp tophp createphp aphp detachedphp Zendphp_Ldapphp_Nodephp fromphp arrayphp dataphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$data
php php php php php php*php php@paramphp php booleanphp php$fromDataSource
php php php php php php*php php@returnphp Zendphp_Ldapphp_Node
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp fromArrayphp(arrayphp php$dataphp,php php$fromDataSourcephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dnphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'php\php'dnphp\php'php keyphp isphp missingphp inphp arrayphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_stringphp(php$dataphp[php'dnphp'php]php)php php|php|php isphp_arrayphp(php$dataphp[php'dnphp'php]php)php)php php{
php php php php php php php php php php php php php$dnphp php=php Zendphp_Ldapphp_Dnphp:php:factoryphp(php$dataphp[php'dnphp'php]php)php;
php php php php php php php php php}php elsephp ifphp php(php$dataphp[php'dnphp'php]php instanceofphp Zendphp_Ldapphp_Dnphp)php php{
php php php php php php php php php php php php php$dnphp php=php clonephp php$dataphp[php'dnphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'php\php'dnphp\php'php keyphp isphp ofphp aphp wrongphp dataphp typephp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$fromDataSourcephp php=php php(php$fromDataSourcephp php=php=php=php truephp)php php?php truephp php:php falsephp;
php php php php php php php php php$newphp php=php newphp selfphp(php$dnphp,php php$dataphp,php php$fromDataSourcephp,php nullphp)php;
php php php php php php php php php$newphp-php>php_ensureRdnAttributeValuesphp(php)php;
php php php php php php php php returnphp php$newphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Ensuresphp thatphp tehphp RDNphp attributesphp arephp correctlyphp setphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_ensureRdnAttributeValuesphp(php)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>getRdnArrayphp(php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php Zendphp_Ldapphp_Attributephp:php:setAttributephp(php$thisphp-php>php_currentDataphp,php php$keyphp,php php$valuephp,php falsephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Marksphp thisphp nodephp asphp newphp.
php php php php php php*
php php php php php php*php Nodephp willphp bephp addedphp php(insteadphp ofphp updatedphp)php onphp callingphp updatephp(php)php ifphp php$newphp isphp truephp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$new
php php php php php php*php/
php php php php protectedphp functionphp php_markAsNewphp(php$newphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_newphp php=php php(php$newphp php=php=php=php falsephp)php php?php falsephp php:php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Tellsphp ifphp thephp nodephp isphp consiederedphp asphp newphp php(notphp presentphp onphp thephp serverphp)
php php php php php php*
php php php php php php*php Pleasephp notephp,php thatphp thisphp doesnphp'tphp tellphp youphp ifphp thephp nodephp isphp presentphp onphp thephp serverphp.
php php php php php php*php Usephp php{php@linkphp exitsphp(php)php}php tophp seephp ifphp aphp nodephp isphp alreadyphp therephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isNewphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_newphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Marksphp thisphp nodephp asphp tophp bephp deletedphp.
php php php php php php*
php php php php php php*php Nodephp willphp bephp deletedphp onphp callingphp updatephp(php)php ifphp php$deletephp isphp truephp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$delete
php php php php php php*php/
php php php php protectedphp functionphp php_markAsToBeDeletedphp(php$deletephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_deletephp php=php php(php$deletephp php=php=php=php truephp)php php?php truephp php:php falsephp;
php php php php php}


php php php php php/php*php*
php php php php php*php Isphp thisphp nodephp goingphp tophp bephp deletedphp oncephp updatephp(php)php isphp calledphp?
php php php php php*
php php php php php*php php@returnphp boolean
php php php php php*php/
php php php php publicphp functionphp willBeDeletedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_deletephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Marksphp thisphp nodephp asphp tophp bephp deleted
php php php php php php*
php php php php php php*php Nodephp willphp bephp deletedphp onphp callingphp updatephp(php)php ifphp php$deletephp isphp truephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp deletephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_markAsToBeDeletedphp(truephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php*php Isphp thisphp nodephp goingphp tophp bephp movedphp oncephp updatephp(php)php isphp calledphp?
php php php php php*
php php php php php*php php@returnphp boolean
php php php php php*php/
php php php php publicphp functionphp willBeMovedphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isNewphp(php)php php|php|php php$thisphp-php>willBeDeletedphp(php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_newDnphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php(php$thisphp-php>php_dnphp php!php=php php$thisphp-php>php_newDnphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendsphp allphp pendingphp changesphp tophp thephp LDAPphp server
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp updatephp(Zendphp_Ldapphp php$ldapphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$ldapphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>attachLdapphp(php$ldapphp)php;
php php php php php php php php php}
php php php php php php php php php$ldapphp php=php php$thisphp-php>getLdapphp(php)php;
php php php php php php php php ifphp php(php!php(php$ldapphp instanceofphp Zendphp_Ldapphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'Nophp LDAPphp connectionphp availablephp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>willBeDeletedphp(php)php)php php{
php php php php php php php php php php php php ifphp php(php$ldapphp-php>existsphp(php$thisphp-php>php_dnphp)php)php php{
php php php php php php php php php php php php php php php php php$ldapphp-php>deletephp(php$thisphp-php>php_dnphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>isNewphp(php)php)php php{
php php php php php php php php php php php php php$dataphp php=php php$thisphp-php>getDataphp(php)php;
php php php php php php php php php php php php php$ldapphp-php>addphp(php$thisphp-php>php_getDnphp(php)php,php php$dataphp)php;
php php php php php php php php php php php php php$thisphp-php>php_loadDataphp(php$dataphp,php truephp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$changedDataphp php=php php$thisphp-php>getChangedDataphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>willBeMovedphp(php)php)php php{
php php php php php php php php php php php php php$recursivephp php=php php$thisphp-php>hasChildrenphp(php)php;
php php php php php php php php php php php php php$ldapphp-php>renamephp(php$thisphp-php>php_dnphp,php php$thisphp-php>php_newDnphp,php php$recursivephp,php falsephp)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_newDnphp-php>getRdnphp(php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$changedDataphp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$changedDataphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_dnphp php=php php$thisphp-php>php_newDnphp;
php php php php php php php php php php php php php$thisphp-php>php_newDnphp php=php nullphp;
php php php php php php php php php}
php php php php php php php php ifphp php(countphp(php$changedDataphp)php php>php php0php)php php{
php php php php php php php php php php php php php$ldapphp-php>updatephp(php$thisphp-php>php_getDnphp(php)php,php php$changedDataphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_originalDataphp php=php php$thisphp-php>php_currentDataphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp DNphp ofphp thephp currentphp nodephp asphp aphp Zendphp_Ldapphp_Dnphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dn
php php php php php php*php/
php php php php protectedphp functionphp php_getDnphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>php_newDnphp php=php=php=php nullphp)php php?php parentphp:php:php_getDnphp(php)php php:php php$thisphp-php>php_newDnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp currentphp DNphp ofphp thephp currentphp nodephp asphp aphp Zendphp_Ldapphp_Dnphp.
php php php php php php*php Thephp methodphp returnsphp aphp clonephp ofphp thephp nodephp'sphp DNphp tophp prohibitphp modificationphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dn
php php php php php php*php/
php php php php publicphp functionphp getCurrentDnphp(php)
php php php php php{
php php php php php php php php php$dnphp php=php clonephp parentphp:php:php_getDnphp(php)php;
php php php php php php php php returnphp php$dnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp newphp DNphp forphp thisphp node
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp|stringphp|arrayphp php$newDn
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setDnphp(php$newDnphp)
php php php php php{
php php php php php php php php ifphp php(php$newDnphp instanceofphp Zendphp_Ldapphp_Dnphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_newDnphp php=php clonephp php$newDnphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_newDnphp php=php Zendphp_Ldapphp_Dnphp:php:factoryphp(php$newDnphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_ensureRdnAttributeValuesphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php{php@seephp setDnphp(php)php}
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp|stringphp|arrayphp php$newDn
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp movephp(php$newDnphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setDnphp(php$newDnphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php{php@seephp setDnphp(php)php}
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp|stringphp|arrayphp php$newDn
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp renamephp(php$newDnphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setDnphp(php$newDnphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp objectClassphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp php$value
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setObjectClassphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>setAttributephp(php'objectClassphp'php,php php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendsphp tophp thephp objectClassphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp php$value
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp appendObjectClassphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>appendToAttributephp(php'objectClassphp'php,php php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp LDIFphp representationphp ofphp thephp currentphp node
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Additionalphp optionsphp usedphp duringphp encoding
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toLdifphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$attributesphp php=php arrayphp_mergephp(arrayphp(php'dnphp'php php=php>php php$thisphp-php>getDnStringphp(php)php)php,php php$thisphp-php>getDataphp(falsephp)php)php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php Zendphp_Ldapphp_Ldifphp_Encoder
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Ldifphp/Encoderphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Ldapphp_Ldifphp_Encoderphp:php:encodephp(php$attributesphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp changedphp nodephp dataphp.
php php php php php php*
php php php php php php*php Thephp arrayphp containsphp allphp changedphp attributesphp.
php php php php php php*php Thisphp formatphp canphp bephp usedphp inphp php{php@linkphp Zendphp_Ldapphp:php:addphp(php)php}php andphp php{php@linkphp Zendphp_Ldapphp:php:updatephp(php)php}php.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getChangedDataphp(php)
php php php php php{
php php php php php php php php php$changedphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_currentDataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_originalDataphp)php php&php&php php!emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$changedphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_originalDataphp[php$keyphp]php php!php=php=php php$thisphp-php>php_currentDataphp[php$keyphp]php)php php{
php php php php php php php php php php php php php php php php php$changedphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$changedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp changesphp madephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getChangesphp(php)
php php php php php{
php php php php php php php php php$changesphp php=php arrayphp(
php php php php php php php php php php php php php'addphp'php php php php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'deletephp'php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'replacephp'php php=php>php arrayphp(php)php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_currentDataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_originalDataphp)php php&php&php php!emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$changesphp[php'addphp'php]php[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}php elsephp ifphp php(countphp(php$thisphp-php>php_originalDataphp[php$keyphp]php)php php=php=php=php php0php php&php&php php!emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$changesphp[php'addphp'php]php[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_originalDataphp[php$keyphp]php php!php=php=php php$thisphp-php>php_currentDataphp[php$keyphp]php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$changesphp[php'deletephp'php]php[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$changesphp[php'replacephp'php]php[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$changesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php php$value
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAttributephp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setAttributephp(php$namephp,php php$valuephp,php falsephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendsphp tophp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php php$value
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp appendToAttributephp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setAttributephp(php$namephp,php php$valuephp,php truephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp attributephp canphp bephp setphp andphp setsphp itphp accordinglyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@paramphp php mixedphp php php php$value
php php php php php php*php php@paramphp php booleanphp php$append
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_setAttributephp(php$namephp,php php$valuephp,php php$appendphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_assertChangeableAttributephp(php$namephp)php;
php php php php php php php php Zendphp_Ldapphp_Attributephp:php:setAttributephp(php$thisphp-php>php_currentDataphp,php php$namephp,php php$valuephp,php php$appendphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp datephp/timephp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php$name
php php php php php php*php php@paramphp php integerphp|arrayphp php$value
php php php php php php*php php@paramphp php booleanphp php php php php php php php$utc
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setDateTimeAttributephp(php$namephp,php php$valuephp,php php$utcphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setDateTimeAttributephp(php$namephp,php php$valuephp,php php$utcphp,php falsephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendsphp tophp aphp LDAPphp datephp/timephp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php$name
php php php php php php*php php@paramphp php integerphp|arrayphp php$value
php php php php php php*php php@paramphp php booleanphp php php php php php php php$utc
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp appendToDateTimeAttributephp(php$namephp,php php$valuephp,php php$utcphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setDateTimeAttributephp(php$namephp,php php$valuephp,php php$utcphp,php truephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp attributephp canphp bephp setphp andphp setsphp itphp accordinglyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php$name
php php php php php php*php php@paramphp php integerphp|arrayphp php$value
php php php php php php*php php@paramphp php booleanphp php php php php php php php$utc
php php php php php php*php php@paramphp php booleanphp php php php php php php php$append
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_setDateTimeAttributephp(php$namephp,php php$valuephp,php php$utcphp,php php$appendphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_assertChangeableAttributephp(php$namephp)php;
php php php php php php php php Zendphp_Ldapphp_Attributephp:php:setDateTimeAttributephp(php$thisphp-php>php_currentDataphp,php php$namephp,php php$valuephp,php php$utcphp,php php$appendphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp passwordphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$password
php php php php php php*php php@paramphp php stringphp php$hashType
php php php php php php*php php@paramphp php stringphp php$attribName
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setPasswordAttributephp(php$passwordphp,php php$hashTypephp php=php Zendphp_Ldapphp_Attributephp:php:PASSWORDphp_HASHphp_MDphp5php,
php php php php php php php php php$attribNamephp php=php php'userPasswordphp'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_assertChangeableAttributephp(php$attribNamephp)php;
php php php php php php php php Zendphp_Ldapphp_Attributephp:php:setPasswordphp(php$thisphp-php>php_currentDataphp,php php$passwordphp,php php$hashTypephp,php php$attribNamephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php Thisphp methodphp deletesphp thephp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp deleteAttributephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>existsAttributephp(php$namephp,php truephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setAttributephp(php$namephp,php nullphp,php falsephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp duplicatephp valuesphp fromphp aphp LDAPphp attribute
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$attribName
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp removeDuplicatesFromAttributephp(php$attribNamephp)
php php php php php{
php php php php php php php php Zendphp_Ldapphp_Attributephp:php:removeDuplicatesFromAttributephp(php$thisphp-php>php_currentDataphp,php php$attribNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp givenphp valuesphp fromphp aphp LDAPphp attribute
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php$attribName
php php php php php php*php php@paramphp php mixedphp|arrayphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp removeFromAttributephp(php$attribNamephp,php php$valuephp)
php php php php php{
php php php php php php php php Zendphp_Ldapphp_Attributephp:php:removeFromAttributephp(php$thisphp-php>php_currentDataphp,php php$attribNamephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_assertChangeableAttributephp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php php$rdnphp php=php php$thisphp-php>getRdnArrayphp(Zendphp_Ldapphp_Dnphp:php:ATTRphp_CASEFOLDphp_LOWERphp)php;
php php php php php php php php ifphp php(php$namephp php=php=php php'dnphp'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'DNphp cannotphp bephp changedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php elsephp ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$rdnphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'Cannotphp changephp attributephp becausephp itphp\php'sphp partphp ofphp thephp RDNphp'php)php;
php php php php php php php php php}php elsephp ifphp php(inphp_arrayphp(php$namephp,php selfphp:php:php$php_systemAttributesphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Exceptionphp(nullphp,php php'Cannotphp changephp attributephp becausephp itphp\php'sphp readphp-onlyphp'php)php;
php php php php php php php php php}
php php php php php php php php elsephp returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php php$value
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>setAttributephp(php$namephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php Thisphp methodphp deletesphp thephp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>deleteAttributephp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp attributephp.
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php php$value
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>setAttributephp(php$namephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp LDAPphp attributephp.
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php Thisphp methodphp deletesphp thephp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>deleteAttributephp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp nodephp existsphp onphp LDAPphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp onlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp existsphp(Zendphp_Ldapphp php$ldapphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$ldapphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>attachLdapphp(php$ldapphp)php;
php php php php php php php php php}
php php php php php php php php php$ldapphp php=php php$thisphp-php>getLdapphp(php)php;
php php php php php php php php returnphp php$ldapphp-php>existsphp(php$thisphp-php>php_getDnphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Reloadphp nodephp attributesphp fromphp LDAPphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp onlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp reloadphp(Zendphp_Ldapphp php$ldapphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$ldapphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>attachLdapphp(php$ldapphp)php;
php php php php php php php php php}
php php php php php php php php php$ldapphp php=php php$thisphp-php>getLdapphp(php)php;
php php php php php php php php parentphp:php:reloadphp(php$ldapphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Searchphp currentphp subtreephp withphp givenphp optionsphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp onlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Ldapphp_Filterphp_Abstractphp php$filter
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php php php php php php php php php php php php php php php$scope
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php$sort
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_Collection
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp searchSubtreephp(php$filterphp,php php$scopephp php=php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_SUBphp,php php$sortphp php=php nullphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Nodephp_Collection
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Collectionphp.phpphp'php;
php php php php php php php php returnphp php$thisphp-php>getLdapphp(php)php-php>searchphp(php$filterphp,php php$thisphp-php>php_getDnphp(php)php,php php$scopephp,php arrayphp(php'php*php'php,php php'php+php'php)php,php php$sortphp,
php php php php php php php php php php php php php'Zendphp_Ldapphp_Nodephp_Collectionphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Countphp itemsphp inphp currentphp subtreephp foundphp byphp givenphp filterphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp onlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Ldapphp_Filterphp_Abstractphp php$filter
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php php php php php php php php php php php php php php php$scope
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp countSubtreephp(php$filterphp,php php$scopephp php=php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_SUBphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getLdapphp(php)php-php>countphp(php$filterphp,php php$thisphp-php>php_getDnphp(php)php,php php$scopephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Countphp childrenphp ofphp currentphp nodephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp onlinephp methodphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp countChildrenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>countSubtreephp(php'php(objectClassphp=php*php)php'php,php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_ONEphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp childrenphp ofphp currentphp nodephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp onlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Ldapphp_Filterphp_Abstractphp php$filter
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php$sort
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_Collection
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp searchChildrenphp(php$filterphp,php php$sortphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>searchSubtreephp(php$filterphp,php Zendphp_Ldapphp:php:SEARCHphp_SCOPEphp_ONEphp,php php$sortphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp currentphp nodephp hasphp childrenphp.
php php php php php php*php Returnsphp whetherphp thephp currentphp elementphp hasphp childrenphp.
php php php php php php*
php php php php php php*php Canphp bephp usedphp offlinephp butphp returnsphp falsephp ifphp childrenphp havephp notphp beenphp retrievedphp yetphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$thisphp-php>php_childrenphp)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>isAttachedphp(php)php)php php{
php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>countChildrenphp(php)php php>php php0php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php(countphp(php$thisphp-php>php_childrenphp)php php>php php0php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp childrenphp forphp thephp currentphp nodephp.
php php php php php php*
php php php php php php*php Canphp bephp usedphp offlinephp butphp returnsphp anphp emptyphp arrayphp ifphp childrenphp havephp notphp beenphp retrievedphp yetphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_ChildrenIterator
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$thisphp-php>php_childrenphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_childrenphp php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>isAttachedphp(php)php)php php{
php php php php php php php php php php php php php php php php php$childrenphp php=php php$thisphp-php>searchChildrenphp(php'php(objectClassphp=php*php)php'php,php nullphp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$childrenphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_childrenphp[php$childphp-php>getRdnStringphp(Zendphp_Ldapphp_Dnphp:php:ATTRphp_CASEFOLDphp_LOWERphp)php]php php=php php$childphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Nodephp_ChildrenIterator
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/ChildrenIteratorphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Ldapphp_Nodephp_ChildrenIteratorphp(php$thisphp-php>php_childrenphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp parentphp ofphp thephp currentphp nodephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Node
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getParentphp(Zendphp_Ldapphp php$ldapphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$ldapphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>attachLdapphp(php$ldapphp)php;
php php php php php php php php php}
php php php php php php php php php$ldapphp php=php php$thisphp-php>getLdapphp(php)php;
php php php php php php php php php$parentDnphp php=php php$thisphp-php>php_getDnphp(php)php-php>getParentDnphp(php1php)php;
php php php php php php php php returnphp selfphp:php:fromLdapphp(php$parentDnphp,php php$ldapphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp attributephp.
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp attributephp namephp.
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getRdnStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp forwardphp tophp nextphp attributephp.
php php php php php php*php Implementsphp Iterator
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_iteratorRewindphp php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp thephp Iteratorphp tophp thephp firstphp attributephp.
php php php php php php*php Implementsphp Iterator
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_iteratorRewindphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp therephp isphp aphp currentphp attribute
php php php php php php*php afterphp callsphp tophp rewindphp(php)php orphp nextphp(php)php.
php php php php php php*php Implementsphp Iterator
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_iteratorRewindphp;
php php php php php}
php}