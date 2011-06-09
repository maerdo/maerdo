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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Attribute
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Attributephp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Dn
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Dnphp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_Abstractphp providesphp aphp basphp eimplementationphp forphp LDAPphp nodes
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Node
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Ldapphp_Nodephp_Abstractphp implementsphp ArrayAccessphp,php Countable
php{
php php php php protectedphp staticphp php$php_systemAttributesphp=arrayphp(php'createtimestampphp'php,php php'creatorsnamephp'php,
php php php php php php php php php'entrycsnphp'php,php php'entrydnphp'php,php php'entryuuidphp'php,php php'hassubordinatesphp'php,php php'modifiersnamephp'php,
php php php php php php php php php'modifytimestampphp'php,php php'structuralobjectclassphp'php,php php'subschemasubentryphp'php,
php php php php php php php php php'distinguishednamephp'php,php php'instancetypephp'php,php php'namephp'php,php php'objectcategoryphp'php,php php'objectguidphp'php,
php php php php php php php php php'usnchangedphp'php,php php'usncreatedphp'php,php php'whenchangedphp'php,php php'whencreatedphp'php)php;

php php php php php/php*php*
php php php php php php*php Holdsphp thephp nodephp'sphp DNphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Ldapphp_Dn
php php php php php php*php/
php php php php protectedphp php$php_dnphp;

php php php php php/php*php*
php php php php php php*php Holdsphp thephp nodephp'sphp currentphp dataphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_currentDataphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php Constructorphp isphp protectedphp tophp enforcephp thephp usephp ofphp factoryphp methodsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Dnphp php$dn
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$data
php php php php php php*php php@paramphp php booleanphp php php php php php php$fromDataSource
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(Zendphp_Ldapphp_Dnphp php$dnphp,php arrayphp php$dataphp,php php$fromDataSourcephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dnphp php=php php$dnphp;
php php php php php php php php php$thisphp-php>php_loadDataphp(php$dataphp,php php$fromDataSourcephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php arrayphp php php php$data
php php php php php php*php php@paramphp php booleanphp php$fromDataSource
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_loadDataphp(arrayphp php$dataphp,php php$fromDataSourcephp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'dnphp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php unsetphp(php$dataphp[php'dnphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ksortphp(php$dataphp,php SORTphp_STRINGphp)php;
php php php php php php php php php$thisphp-php>php_currentDataphp php=php php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Reloadphp nodephp attributesphp fromphp LDAPphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp onlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp php$ldap
php php php php php php*php php@returnphp Zendphp_Ldapphp_Nodephp_Abstractphp Providesphp aphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp reloadphp(Zendphp_Ldapphp php$ldapphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$ldapphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$dataphp php=php php$ldapphp-php>getEntryphp(php$thisphp-php>php_getDnphp(php)php,php arrayphp(php'php*php'php,php php'php+php'php)php,php truephp)php;
php php php php php php php php php php php php php$thisphp-php>php_loadDataphp(php$dataphp,php truephp)php;
php php php php php php php php php}
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
php php php php php php php php returnphp php$thisphp-php>php_dnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp DNphp ofphp thephp currentphp nodephp asphp aphp Zendphp_Ldapphp_Dnphp.
php php php php php php*php Thephp methodphp returnsphp aphp clonephp ofphp thephp nodephp'sphp DNphp tophp prohibitphp modificationphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Ldapphp_Dn
php php php php php php*php/
php php php php publicphp functionphp getDnphp(php)
php php php php php{
php php php php php php php php php$dnphp php=php clonephp php$thisphp-php>php_getDnphp(php)php;
php php php php php php php php returnphp php$dnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp DNphp ofphp thephp currentphp nodephp asphp aphp stringphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDnStringphp(php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getDnphp(php)php-php>toStringphp(php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp DNphp ofphp thephp currentphp nodephp asphp anphp arrayphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDnArrayphp(php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getDnphp(php)php-php>toArrayphp(php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp RDNphp ofphp thephp currentphp nodephp asphp aphp stringphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRdnStringphp(php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getDnphp(php)php-php>getRdnStringphp(php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp RDNphp ofphp thephp currentphp nodephp asphp anphp arrayphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$caseFold
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getRdnArrayphp(php$caseFoldphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getDnphp(php)php-php>getRdnphp(php$caseFoldphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp objectClassphp ofphp thephp node
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getObjectClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php'objectClassphp'php,php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp allphp attributesphp ofphp nodephp.
php php php php php php*
php php php php php php*php Thephp collectionphp containsphp allphp attributesphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$includeSystemAttributes
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttributesphp(php$includeSystemAttributesphp php=php truephp)
php php php php php{
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>getDataphp(php$includeSystemAttributesphp)php asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$dataphp[php$namephp]php php=php php$thisphp-php>getAttributephp(php$namephp,php nullphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp DNphp ofphp thephp currentphp nodephp.php php{php@seephp getDnStringphp(php)php}
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDnStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp stringphp representationphp php{php@seephp toStringphp(php)php}
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp representationphp ofphp thephp currentphp node
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$includeSystemAttributes
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php$includeSystemAttributesphp php=php truephp)
php php php php php{
php php php php php php php php php$attributesphp php=php php$thisphp-php>getAttributesphp(php$includeSystemAttributesphp)php;
php php php php php php php php returnphp arrayphp_mergephp(arrayphp(php'dnphp'php php=php>php php$thisphp-php>getDnStringphp(php)php)php,php php$attributesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp JSONphp representationphp ofphp thephp currentphp node
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$includeSystemAttributes
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toJsonphp(php$includeSystemAttributesphp php=php truephp)
php php php php php{
php php php php php php php php returnphp jsonphp_encodephp(php$thisphp-php>toArrayphp(php$includeSystemAttributesphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp nodephp attributesphp.
php php php php php php*
php php php php php php*php Thephp arrayphp containsphp allphp attributesphp inphp itsphp internalphp formatphp php(nophp conversionphp)php.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$includeSystemAttributes
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDataphp(php$includeSystemAttributesphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$includeSystemAttributesphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_currentDataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$keyphp,php selfphp:php:php$php_systemAttributesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$dataphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$dataphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_currentDataphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp whetherphp aphp givenphp attributephp existsphp.
php php php php php php*
php php php php php php*php Ifphp php$emptyExistsphp isphp falsephp emptyphp attributesphp php(containingphp onlyphp arrayphp(php)php)php are
php php php php php php*php treatedphp asphp nonphp-existentphp returningphp falsephp.
php php php php php php*php Ifphp php$emptyExistsphp isphp truephp emptyphp attributesphp arephp treatedphp asphp existentphp returning
php php php php php php*php truephp.php Inphp thisphp casephp methodphp returnsphp falsephp onlyphp ifphp thephp attributephp namephp is
php php php php php php*php missingphp inphp thephp keyphp-collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@paramphp php booleanphp php$emptyExists
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp existsAttributephp(php$namephp,php php$emptyExistsphp php=php falsephp)
php php php php php{
php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_currentDataphp[php$namephp]php)php)php php{
php php php php php php php php php php php php ifphp php(php$emptyExistsphp)php returnphp truephp;
php php php php php php php php php php php php returnphp countphp(php$thisphp-php>php_currentDataphp[php$namephp]php)php>php0php;
php php php php php php php php php}
php php php php php php php php elsephp returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp givenphp valuephp(sphp)php existphp inphp thephp attribute
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php$attribName
php php php php php php*php php@paramphp php mixedphp|arrayphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp attributeHasValuephp(php$attribNamephp,php php$valuephp)
php php php php php{
php php php php php php php php returnphp Zendphp_Ldapphp_Attributephp:php:attributeHasValuephp(php$thisphp-php>php_currentDataphp,php php$attribNamephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@paramphp php integerphp php$index
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getAttributephp(php$namephp,php php$indexphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php php'dnphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getDnStringphp(php)php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php returnphp Zendphp_Ldapphp_Attributephp:php:getAttributephp(php$thisphp-php>php_currentDataphp,php php$namephp,php php$indexphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp LDAPphp datephp/timephp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@paramphp php integerphp php$index
php php php php php php*php php@returnphp arrayphp|integer
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getDateTimeAttributephp(php$namephp,php php$indexphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp Zendphp_Ldapphp_Attributephp:php:getDateTimeAttributephp(php$thisphp-php>php_currentDataphp,php php$namephp,php php$indexphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php php$value
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp BadMethodCallException
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php throwphp newphp BadMethodCallExceptionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp LDAPphp attributephp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php$namephp,php nullphp)php;
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
php php php php php php*php php@throwsphp BadMethodCallException
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$namephp)
php php php php php{
php php php php php php php php throwphp newphp BadMethodCallExceptionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp whetherphp aphp givenphp attributephp existsphp.
php php php php php php*
php php php php php php*php Emptyphp attributesphp willphp bephp treatedphp asphp nonphp-existentphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>existsAttributephp(php$namephp,php falsephp)php;
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
php php php php php php*php php@throwsphp BadMethodCallException
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php throwphp newphp BadMethodCallExceptionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp LDAPphp attributephp.
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php Thisphp isphp anphp offlinephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Ldapphp_Exception
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAttributephp(php$namephp,php nullphp)php;
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
php php php php php php*php php@throwsphp BadMethodCallException
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$namephp)
php php php php php{
php php php php php php php php throwphp newphp BadMethodCallExceptionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp whetherphp aphp givenphp attributephp existsphp.
php php php php php php*php Implementsphp ArrayAccessphp.
php php php php php php*
php php php php php php*php Emptyphp attributesphp willphp bephp treatedphp asphp nonphp-existentphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>existsAttributephp(php$namephp,php falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp attributesphp inphp nodephp.
php php php php php php*php Implementsphp Countable
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_currentDataphp)php;
php php php php php}
php}