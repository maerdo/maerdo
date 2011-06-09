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
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schema
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_OpenLdap
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/AttributeTypephp/OpenLdapphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_OpenLdap
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Nodephp/Schemaphp/ObjectClassphp/OpenLdapphp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Nodephp_Schemaphp_OpenLdapphp providesphp aphp simplephp dataphp-containerphp forphp thephp Schemaphp nodephp of
php php*php anphp OpenLDAPphp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Schema
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Nodephp_Schemaphp_OpenLdapphp extendsphp Zendphp_Ldapphp_Nodephp_Schema
php{
php php php php php/php*php*
php php php php php php*php Thephp attributephp Types
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attributeTypesphp php=php nullphp;
php php php php php/php*php*
php php php php php php*php Thephp objectphp classes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_objectClassesphp php=php nullphp;
php php php php php/php*php*
php php php php php php*php Thephp LDAPphp syntaxes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_ldapSyntaxesphp php=php nullphp;
php php php php php/php*php*
php php php php php php*php Thephp matchingphp rules
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_matchingRulesphp php=php nullphp;
php php php php php/php*php*
php php php php php php*php Thephp matchingphp rulephp use
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_matchingRuleUsephp php=php nullphp;

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
php php php php php php php php php$thisphp-php>php_loadAttributeTypesphp(php)php;
php php php php php php php php php$thisphp-php>php_loadLdapSyntaxesphp(php)php;
php php php php php php php php php$thisphp-php>php_loadMatchingRulesphp(php)php;
php php php php php php php php php$thisphp-php>php_loadMatchingRuleUsephp(php)php;
php php php php php php php php php$thisphp-php>php_loadObjectClassesphp(php)php;
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

php php php php php/php*php*
php php php php php php*php Getsphp thephp LDAPphp syntaxes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getLdapSyntaxesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_ldapSyntaxesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp matchingphp rules
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMatchingRulesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_matchingRulesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp matchingphp rulephp use
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMatchingRuleUsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_matchingRuleUsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp thephp attributephp Types
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadAttributeTypesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_attributeTypesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>getAttributephp(php'attributeTypesphp'php)php asphp php$valuephp)php php{
php php php php php php php php php php php php php$valphp php=php php$thisphp-php>php_parseAttributeTypephp(php$valuephp)php;
php php php php php php php php php php php php php$valphp php=php newphp Zendphp_Ldapphp_Nodephp_Schemaphp_AttributeTypephp_OpenLdapphp(php$valphp)php;
php php php php php php php php php php php php php$thisphp-php>php_attributeTypesphp[php$valphp-php>getNamephp(php)php]php php=php php$valphp;

php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_attributeTypesphp asphp php$valphp)php php{
php php php php php php php php php php php php ifphp php(countphp(php$valphp-php>supphp)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_resolveInheritancephp(php$valphp,php php$thisphp-php>php_attributeTypesphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php foreachphp php(php$valphp-php>aliasesphp asphp php$aliasphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_attributeTypesphp[php$aliasphp]php php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ksortphp(php$thisphp-php>php_attributeTypesphp,php SORTphp_STRINGphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp anphp attributeTypephp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_parseAttributeTypephp(php$valuephp)
php php php php php{
php php php php php php php php php$attributeTypephp php=php arrayphp(
php php php php php php php php php php php php php'oidphp'php php php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'namephp'php php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'descphp'php php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'obsoletephp'php php php php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'supphp'php php php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'equalityphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'orderingphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'substrphp'php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'syntaxphp'php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'maxphp-lengthphp'php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'singlephp-valuephp'php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'collectivephp'php php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'nophp-userphp-modificationphp'php php=php>php falsephp,
php php php php php php php php php php php php php'usagephp'php php php php php php php php php php php php php php php php php=php>php php'userApplicationsphp'php,
php php php php php php php php php php php php php'php_stringphp'php php php php php php php php php php php php php php php=php>php php$valuephp,
php php php php php php php php php php php php php'php_parentsphp'php php php php php php php php php php php php php php=php>php arrayphp(php)php)php;

php php php php php php php php php$tokensphp php=php php$thisphp-php>php_tokenizeStringphp(php$valuephp)php;
php php php php php php php php php$attributeTypephp[php'oidphp'php]php php=php arrayphp_shiftphp(php$tokensphp)php;php php/php/php firstphp tokenphp isphp thephp oid
php php php php php php php php php$thisphp-php>php_parseLdapSchemaSyntaxphp(php$attributeTypephp,php php$tokensphp)php;

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'syntaxphp'php,php php$attributeTypephp)php)php php{
php php php php php php php php php php php php php/php/php getphp maxphp lengthphp fromphp syntax
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php(php.php+php)php{php(php\dphp+php)php}php$php/php'php,php php$attributeTypephp[php'syntaxphp'php]php,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php$attributeTypephp[php'syntaxphp'php]php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php$attributeTypephp[php'maxphp-lengthphp'php]php php=php php$matchesphp[php2php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_ensureNameAttributephp(php$attributeTypephp)php;

php php php php php php php php returnphp php$attributeTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp thephp objectphp classes
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadObjectClassesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_objectClassesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>getAttributephp(php'objectClassesphp'php)php asphp php$valuephp)php php{
php php php php php php php php php php php php php$valphp php=php php$thisphp-php>php_parseObjectClassphp(php$valuephp)php;
php php php php php php php php php php php php php$valphp php=php newphp Zendphp_Ldapphp_Nodephp_Schemaphp_ObjectClassphp_OpenLdapphp(php$valphp)php;
php php php php php php php php php php php php php$thisphp-php>php_objectClassesphp[php$valphp-php>getNamephp(php)php]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_objectClassesphp asphp php$valphp)php php{
php php php php php php php php php php php php ifphp php(countphp(php$valphp-php>supphp)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_resolveInheritancephp(php$valphp,php php$thisphp-php>php_objectClassesphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php foreachphp php(php$valphp-php>aliasesphp asphp php$aliasphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_objectClassesphp[php$aliasphp]php php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ksortphp(php$thisphp-php>php_objectClassesphp,php SORTphp_STRINGphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp anphp objectClassesphp value
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_parseObjectClassphp(php$valuephp)
php php php php php{
php php php php php php php php php$objectClassphp php=php arrayphp(
php php php php php php php php php php php php php'oidphp'php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'descphp'php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'obsoletephp'php php php php=php>php falsephp,
php php php php php php php php php php php php php'supphp'php php php php php php php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'abstractphp'php php php php=php>php falsephp,
php php php php php php php php php php php php php'structuralphp'php php=php>php falsephp,
php php php php php php php php php php php php php'auxiliaryphp'php php php=php>php falsephp,
php php php php php php php php php php php php php'mustphp'php php php php php php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'mayphp'php php php php php php php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'php_stringphp'php php php php php=php>php php$valuephp,
php php php php php php php php php php php php php'php_parentsphp'php php php php=php>php arrayphp(php)php)php;

php php php php php php php php php$tokensphp php=php php$thisphp-php>php_tokenizeStringphp(php$valuephp)php;
php php php php php php php php php$objectClassphp[php'oidphp'php]php php=php arrayphp_shiftphp(php$tokensphp)php;php php/php/php firstphp tokenphp isphp thephp oid
php php php php php php php php php$thisphp-php>php_parseLdapSchemaSyntaxphp(php$objectClassphp,php php$tokensphp)php;

php php php php php php php php php$thisphp-php>php_ensureNameAttributephp(php$objectClassphp)php;

php php php php php php php php returnphp php$objectClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resolvesphp inheritancephp inphp objectClassesphp andphp attributes
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Ldapphp_Nodephp_Schemaphp_Itemphp php$node
php php php php php php*php php@paramphp arrayphp php php php php php php php php php php php php php php php php php php php php php php$repository
php php php php php php*php/
php php php php protectedphp functionphp php_resolveInheritancephp(Zendphp_Ldapphp_Nodephp_Schemaphp_Itemphp php$nodephp,php arrayphp php$repositoryphp)
php php php php php{
php php php php php php php php php$dataphp php=php php$nodephp-php>getDataphp(php)php;
php php php php php php php php php$parentsphp php=php php$dataphp[php'supphp'php]php;
php php php php php php php php ifphp php(php$parentsphp php=php=php=php nullphp php|php|php php!isphp_arrayphp(php$parentsphp)php php|php|php countphp(php$parentsphp)php <php php1php)php returnphp;
php php php php php php php php foreachphp php(php$parentsphp asphp php$parentphp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$parentphp,php php$repositoryphp)php)php continuephp;
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'php_parentsphp'php,php php$dataphp)php php|php|php php!isphp_arrayphp(php$dataphp[php'php_parentsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php$dataphp[php'php_parentsphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php}
php php php php php php php php php php php php$dataphp[php'php_parentsphp'php]php[php]php php=php php$repositoryphp[php$parentphp]php;
php php php php php php php php php}
php php php php php php php php php$nodephp-php>setDataphp(php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp thephp LDAPphp syntaxes
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadLdapSyntaxesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_ldapSyntaxesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>getAttributephp(php'ldapSyntaxesphp'php)php asphp php$valuephp)php php{
php php php php php php php php php php php php php$valphp php=php php$thisphp-php>php_parseLdapSyntaxphp(php$valuephp)php;
php php php php php php php php php php php php php$thisphp-php>php_ldapSyntaxesphp[php$valphp[php'oidphp'php]php]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php ksortphp(php$thisphp-php>php_ldapSyntaxesphp,php SORTphp_STRINGphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp anphp ldapSyntaxesphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_parseLdapSyntaxphp(php$valuephp)
php php php php php{
php php php php php php php php php$ldapSyntaxphp php=php arrayphp(
php php php php php php php php php php php php php'oidphp'php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'descphp'php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'php_stringphp'php php=php>php php$valuephp)php;

php php php php php php php php php$tokensphp php=php php$thisphp-php>php_tokenizeStringphp(php$valuephp)php;
php php php php php php php php php$ldapSyntaxphp[php'oidphp'php]php php=php arrayphp_shiftphp(php$tokensphp)php;php php/php/php firstphp tokenphp isphp thephp oid
php php php php php php php php php$thisphp-php>php_parseLdapSchemaSyntaxphp(php$ldapSyntaxphp,php php$tokensphp)php;

php php php php php php php php returnphp php$ldapSyntaxphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp thephp matchingphp rules
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadMatchingRulesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_matchingRulesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>getAttributephp(php'matchingRulesphp'php)php asphp php$valuephp)php php{
php php php php php php php php php php php php php$valphp php=php php$thisphp-php>php_parseMatchingRulephp(php$valuephp)php;
php php php php php php php php php php php php php$thisphp-php>php_matchingRulesphp[php$valphp[php'namephp'php]php]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php ksortphp(php$thisphp-php>php_matchingRulesphp,php SORTphp_STRINGphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp anphp matchingRulesphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_parseMatchingRulephp(php$valuephp)
php php php php php{
php php php php php php php php php$matchingRulephp php=php arrayphp(
php php php php php php php php php php php php php'oidphp'php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'namephp'php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'descphp'php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'obsoletephp'php php=php>php falsephp,
php php php php php php php php php php php php php'syntaxphp'php php php php=php>php nullphp,
php php php php php php php php php php php php php'php_stringphp'php php php=php>php php$valuephp)php;

php php php php php php php php php$tokensphp php=php php$thisphp-php>php_tokenizeStringphp(php$valuephp)php;
php php php php php php php php php$matchingRulephp[php'oidphp'php]php php=php arrayphp_shiftphp(php$tokensphp)php;php php/php/php firstphp tokenphp isphp thephp oid
php php php php php php php php php$thisphp-php>php_parseLdapSchemaSyntaxphp(php$matchingRulephp,php php$tokensphp)php;

php php php php php php php php php$thisphp-php>php_ensureNameAttributephp(php$matchingRulephp)php;

php php php php php php php php returnphp php$matchingRulephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp thephp matchingphp rulephp use
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadMatchingRuleUsephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_matchingRuleUsephp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>getAttributephp(php'matchingRuleUsephp'php)php asphp php$valuephp)php php{
php php php php php php php php php php php php php$valphp php=php php$thisphp-php>php_parseMatchingRuleUsephp(php$valuephp)php;
php php php php php php php php php php php php php$thisphp-php>php_matchingRuleUsephp[php$valphp[php'namephp'php]php]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php ksortphp(php$thisphp-php>php_matchingRuleUsephp,php SORTphp_STRINGphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp anphp matchingRuleUsephp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_parseMatchingRuleUsephp(php$valuephp)
php php php php php{
php php php php php php php php php$matchingRuleUsephp php=php arrayphp(
php php php php php php php php php php php php php'oidphp'php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'namephp'php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'descphp'php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'obsoletephp'php php=php>php falsephp,
php php php php php php php php php php php php php'appliesphp'php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'php_stringphp'php php php=php>php php$valuephp)php;

php php php php php php php php php$tokensphp php=php php$thisphp-php>php_tokenizeStringphp(php$valuephp)php;
php php php php php php php php php$matchingRuleUsephp[php'oidphp'php]php php=php arrayphp_shiftphp(php$tokensphp)php;php php/php/php firstphp tokenphp isphp thephp oid
php php php php php php php php php$thisphp-php>php_parseLdapSchemaSyntaxphp(php$matchingRuleUsephp,php php$tokensphp)php;

php php php php php php php php php$thisphp-php>php_ensureNameAttributephp(php$matchingRuleUsephp)php;

php php php php php php php php returnphp php$matchingRuleUsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Ensuresphp thatphp aphp namephp elementphp isphp presentphp andphp thatphp itphp isphp singlephp-valuesphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$data
php php php php php php*php/
php php php php protectedphp functionphp php_ensureNameAttributephp(arrayphp php&php$dataphp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'namephp'php,php php$dataphp)php php|php|php emptyphp(php$dataphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php/php/php forcephp aphp name
php php php php php php php php php php php php php$dataphp[php'namephp'php]php php=php php$dataphp[php'oidphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_arrayphp(php$dataphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php/php/php makephp onephp namephp thephp defaultphp andphp putphp thephp otherphp onesphp intophp aliases
php php php php php php php php php php php php php$aliasesphp php=php php$dataphp[php'namephp'php]php;
php php php php php php php php php php php php php$dataphp[php'namephp'php]php php=php arrayphp_shiftphp(php$aliasesphp)php;
php php php php php php php php php php php php php$dataphp[php'aliasesphp'php]php php=php php$aliasesphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp[php'aliasesphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp thephp givenphp tokensphp intophp aphp dataphp structure
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@paramphp php arrayphp php$tokens
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_parseLdapSchemaSyntaxphp(arrayphp php&php$dataphp,php arrayphp php$tokensphp)
php php php php php{
php php php php php php php php php/php/php tokensphp thatphp havephp nophp valuephp associated
php php php php php php php php php$noValuephp php=php arrayphp(php'singlephp-valuephp'php,
php php php php php php php php php php php php php'obsoletephp'php,
php php php php php php php php php php php php php'collectivephp'php,
php php php php php php php php php php php php php'nophp-userphp-modificationphp'php,
php php php php php php php php php php php php php'abstractphp'php,
php php php php php php php php php php php php php'structuralphp'php,
php php php php php php php php php php php php php'auxiliaryphp'php)php;
php php php php php php php php php/php/php tokensphp thatphp canphp havephp multiplephp values
php php php php php php php php php$multiValuephp php=php arrayphp(php'mustphp'php,php php'mayphp'php,php php'supphp'php)php;

php php php php php php php php whilephp php(countphp(php$tokensphp)php php>php php0php)php php{
php php php php php php php php php php php php php$tokenphp php=php strtolowerphp(arrayphp_shiftphp(php$tokensphp)php)php;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$tokenphp,php php$noValuephp)php)php php{
php php php php php php php php php php php php php php php php php$dataphp[php$tokenphp]php php=php truephp;php php/php/php singlephp valuephp token
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$dataphp[php$tokenphp]php php=php arrayphp_shiftphp(php$tokensphp)php;
php php php php php php php php php php php php php php php php php/php/php thisphp onephp followsphp aphp stringphp orphp aphp listphp ifphp itphp isphp multivalued
php php php php php php php php php php php php php php php php ifphp php(php$dataphp[php$tokenphp]php php=php=php php'php(php'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php thisphp createsphp thephp listphp ofphp valuesphp andphp cyclesphp throughphp thephp tokens
php php php php php php php php php php php php php php php php php php php php php/php/php untilphp thephp endphp ofphp thephp listphp isphp reachedphp php'php)php'
php php php php php php php php php php php php php php php php php php php php php$dataphp[php$tokenphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php whilephp php(php$tmpphp php=php arrayphp_shiftphp(php$tokensphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$tmpphp php=php=php php'php)php'php)php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$tmpphp php!php=php php'php$php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp[php$tokenphp]php[php]php php=php Zendphp_Ldapphp_Attributephp:php:convertFromLdapValuephp(php$tmpphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$dataphp[php$tokenphp]php php=php Zendphp_Ldapphp_Attributephp:php:convertFromLdapValuephp(php$dataphp[php$tokenphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php createphp aphp arrayphp ifphp thephp valuephp shouldphp bephp multivaluedphp butphp wasphp not
php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$tokenphp,php php$multiValuephp)php php&php&php php!isphp_arrayphp(php$dataphp[php$tokenphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$dataphp[php$tokenphp]php php=php arrayphp(php$dataphp[php$tokenphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php*php Tokenizesphp thephp givenphp valuephp intophp anphp array
php php php php php*
php php php php php*php php@paramphp php stringphp php$value
php php php php php*php php@returnphp arrayphp tokens
php php php php php*php/
php php php php protectedphp functionphp php_tokenizeStringphp(php$valuephp)
php php php php php{
php php php php php php php php php$tokensphp php=php arrayphp(php)php;
php php php php php php php php php$matchesphp php=php arrayphp(php)php;
php php php php php php php php php/php/php thisphp onephp isphp takenphp fromphp PEARphp:php:Netphp_LDAPphp2
php php php php php php php php php$patternphp php=php php"php/php\sphp*php php(php?php:php(php[php(php)php]php)php php|php php(php[php^php'php\sphp(php)php]php+php)php php|php php'php(php(php?php:php[php^php'php]php+php|php'php[php^php\sphp)php]php)php*php)php'php)php php\sphp*php/xphp"php;
php php php php php php php php pregphp_matchphp_allphp(php$patternphp,php php$valuephp,php php$matchesphp)php;
php php php php php php php php php$cMatchesphp php=php countphp(php$matchesphp[php0php]php)php;
php php php php php php php php php$cPatternphp php=php countphp(php$matchesphp)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$cMatchesphp;php php$iphp+php+php)php php{php php php php php php/php/php numberphp ofphp tokensphp php(fullphp patternphp matchphp)
php php php php php php php php php php php php forphp php(php$jphp php=php php1php;php php$jphp <php php$cPatternphp;php php$jphp+php+php)php php{php php/php/php eachphp subpattern
php php php php php php php php php php php php php php php php php$tokphp php=php trimphp(php$matchesphp[php$jphp]php[php$iphp]php)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$tokphp)php)php php{php php php php php php php php php php php php php php php/php/php patternphp matchphp inphp thisphp subpattern
php php php php php php php php php php php php php php php php php php php php php$tokensphp[php$iphp]php php=php php$tokphp;php php php php php php php php php php php/php/php thisphp isphp thephp token
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$tokensphp[php0php]php php=php=php php'php(php'php)php arrayphp_shiftphp(php$tokensphp)php;
php php php php php php php php ifphp php(php$tokensphp[countphp(php$tokensphp)php php-php php1php]php php=php=php php'php)php'php)php arrayphp_popphp(php$tokensphp)php;
php php php php php php php php returnphp php$tokensphp;
php php php php php}
php}
