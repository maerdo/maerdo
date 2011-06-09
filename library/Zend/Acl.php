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
php php*php php@packagephp php php php Zendphp_Acl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Aclphp.phpphp php2php3php5php3php0php php2php0php1php0php-php1php2php-php1php7php php1php2php:php3php1php:php2php4Zphp andriesphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Aclphp_Resourcephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Aclphp/Resourcephp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Aclphp_Rolephp_Registry
php php*php/
requirephp_oncephp php'Zendphp/Aclphp/Rolephp/Registryphp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Aclphp_Assertphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Aclphp/Assertphp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Aclphp_Role
php php*php/
requirephp_oncephp php'Zendphp/Aclphp/Rolephp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Aclphp_Resource
php php*php/
requirephp_oncephp php'Zendphp/Aclphp/Resourcephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Acl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Acl
php{
php php php php php/php*php*
php php php php php php*php Rulephp typephp:php allow
php php php php php php*php/
php php php php constphp TYPEphp_ALLOWphp php=php php'TYPEphp_ALLOWphp'php;

php php php php php/php*php*
php php php php php php*php Rulephp typephp:php deny
php php php php php php*php/
php php php php constphp TYPEphp_DENYphp php php=php php'TYPEphp_DENYphp'php;

php php php php php/php*php*
php php php php php php*php Rulephp operationphp:php add
php php php php php php*php/
php php php php constphp OPphp_ADDphp php=php php'OPphp_ADDphp'php;

php php php php php/php*php*
php php php php php php*php Rulephp operationphp:php remove
php php php php php php*php/
php php php php constphp OPphp_REMOVEphp php=php php'OPphp_REMOVEphp'php;

php php php php php/php*php*
php php php php php php*php Rolephp registry
php php php php php php*
php php php php php php*php php@varphp Zendphp_Aclphp_Rolephp_Registry
php php php php php php*php/
php php php php protectedphp php$php_roleRegistryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Resourcephp tree
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_resourcesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Aclphp_Rolephp_Interface
php php php php php php*php/
php php php php protectedphp php$php_isAllowedRolephp php php php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Aclphp_Resourcephp_Interface
php php php php php php*php/
php php php php protectedphp php$php_isAllowedResourcephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp String
php php php php php php*php/
php php php php protectedphp php$php_isAllowedPrivilegephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php ACLphp rulesphp;php whitelistphp php(denyphp everythingphp tophp allphp)php byphp default
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_rulesphp php=php arrayphp(
php php php php php php php php php'allResourcesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php'allRolesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'allPrivilegesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php selfphp:php:TYPEphp_DENYphp,
php php php php php php php php php php php php php php php php php php php php php'assertphp'php php=php>php null
php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php php php php php'byPrivilegeIdphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'byRoleIdphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php)php,
php php php php php php php php php'byResourceIdphp'php php=php>php arrayphp(php)
php php php php php php php php php)php;

php php php php php/php*php*
php php php php php php*php Addsphp aphp Rolephp havingphp anphp identifierphp uniquephp tophp thephp registry
php php php php php php*
php php php php php php*php Thephp php$parentsphp parameterphp mayphp bephp aphp referencephp tophp,php orphp thephp stringphp identifierphp forphp,
php php php php php php*php aphp Rolephp existingphp inphp thephp registryphp,php orphp php$parentsphp mayphp bephp passedphp asphp anphp arrayphp of
php php php php php php*php thesephp php-php mixingphp stringphp identifiersphp andphp objectsphp isphp okphp php-php tophp indicatephp thephp Roles
php php php php php php*php fromphp whichphp thephp newlyphp addedphp Rolephp willphp directlyphp inheritphp.
php php php php php php*
php php php php php php*php Inphp orderphp tophp resolvephp potentialphp ambiguitiesphp withphp conflictingphp rulesphp inherited
php php php php php php*php fromphp differentphp parentsphp,php thephp mostphp recentlyphp addedphp parentphp takesphp precedencephp over
php php php php php php*php parentsphp thatphp werephp previouslyphp addedphp.php Inphp otherphp wordsphp,php thephp firstphp parentphp added
php php php php php php*php willphp havephp thephp leastphp priorityphp,php andphp thephp lastphp parentphp addedphp willphp havephp the
php php php php php php*php highestphp priorityphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp php php php php php php php php php php php php php php$role
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp|arrayphp php$parents
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:addphp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addRolephp(php$rolephp,php php$parentsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$rolephp)php)php php{
php php php php php php php php php php php php php$rolephp php=php newphp Zendphp_Aclphp_Rolephp(php$rolephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$rolephp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php'addRolephp(php)php expectsphp php$rolephp tophp bephp ofphp typephp Zendphp_Aclphp_Rolephp_Interfacephp'php)php;
php php php php php php php php php}


php php php php php php php php php$thisphp-php>php_getRoleRegistryphp(php)php-php>addphp(php$rolephp,php php$parentsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp identifiedphp Role
php php php php php php*
php php php php php php*php Thephp php$rolephp parameterphp canphp eitherphp bephp aphp Rolephp orphp Rolephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$role
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:getphp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp_Rolephp_Interface
php php php php php php*php/
php php php php publicphp functionphp getRolephp(php$rolephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getRoleRegistryphp(php)php-php>getphp(php$rolephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp Rolephp existsphp inphp thephp registry
php php php php php php*
php php php php php php*php Thephp php$rolephp parameterphp canphp eitherphp bephp aphp Rolephp orphp aphp Rolephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$role
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:hasphp(php)
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasRolephp(php$rolephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getRoleRegistryphp(php)php-php>hasphp(php$rolephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$rolephp inheritsphp fromphp php$inherit
php php php php php php*
php php php php php php*php Bothphp parametersphp mayphp bephp eitherphp aphp Rolephp orphp aphp Rolephp identifierphp.php If
php php php php php php*php php$onlyParentsphp isphp truephp,php thenphp php$rolephp mustphp inheritphp directlyphp from
php php php php php php*php php$inheritphp inphp orderphp tophp returnphp truephp.php Byphp defaultphp,php thisphp methodphp looks
php php php php php php*php throughphp thephp entirephp inheritancephp DAGphp tophp determinephp whetherphp php$role
php php php php php php*php inheritsphp fromphp php$inheritphp throughphp itsphp ancestorphp Rolesphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$role
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$inherit
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php php php php php php php php php php php php$onlyParents
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:inheritsphp(php)
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp inheritsRolephp(php$rolephp,php php$inheritphp,php php$onlyParentsphp php=php falsephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getRoleRegistryphp(php)php-php>inheritsphp(php$rolephp,php php$inheritphp,php php$onlyParentsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp thephp Rolephp fromphp thephp registry
php php php php php php*
php php php php php php*php Thephp php$rolephp parameterphp canphp eitherphp bephp aphp Rolephp orphp aphp Rolephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$role
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:removephp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removeRolephp(php$rolephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_getRoleRegistryphp(php)php-php>removephp(php$rolephp)php;

php php php php php php php php ifphp php(php$rolephp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php{
php php php php php php php php php php php php php$roleIdphp php=php php$rolephp-php>getRoleIdphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$roleIdphp php=php php$rolephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_rulesphp[php'allResourcesphp'php]php[php'byRoleIdphp'php]php asphp php$roleIdCurrentphp php=php>php php$rulesphp)php php{
php php php php php php php php php php php php ifphp php(php$roleIdphp php=php=php=php php$roleIdCurrentphp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_rulesphp[php'allResourcesphp'php]php[php'byRoleIdphp'php]php[php$roleIdCurrentphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php asphp php$resourceIdCurrentphp php=php>php php$visitorphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'byRoleIdphp'php,php php$visitorphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$visitorphp[php'byRoleIdphp'php]php asphp php$roleIdCurrentphp php=php>php php$rulesphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$roleIdphp php=php=php=php php$roleIdCurrentphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php[php$resourceIdCurrentphp]php[php'byRoleIdphp'php]php[php$roleIdCurrentphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp allphp Rolesphp fromphp thephp registry
php php php php php php*
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:removeAllphp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removeRoleAllphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_getRoleRegistryphp(php)php-php>removeAllphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_rulesphp[php'allResourcesphp'php]php[php'byRoleIdphp'php]php asphp php$roleIdCurrentphp php=php>php php$rulesphp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_rulesphp[php'allResourcesphp'php]php[php'byRoleIdphp'php]php[php$roleIdCurrentphp]php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php asphp php$resourceIdCurrentphp php=php>php php$visitorphp)php php{
php php php php php php php php php php php php foreachphp php(php$visitorphp[php'byRoleIdphp'php]php asphp php$roleIdCurrentphp php=php>php php$rulesphp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php[php$resourceIdCurrentphp]php[php'byRoleIdphp'php]php[php$roleIdCurrentphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp Resourcephp havingphp anphp identifierphp uniquephp tophp thephp ACL
php php php php php php*
php php php php php php*php Thephp php$parentphp parameterphp mayphp bephp aphp referencephp tophp,php orphp thephp stringphp identifierphp forphp,
php php php php php php*php thephp existingphp Resourcephp fromphp whichphp thephp newlyphp addedphp Resourcephp willphp inheritphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$resource
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$parent
php php php php php php*php php@throwsphp Zendphp_Aclphp_Exception
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addResourcephp(php$resourcephp,php php$parentphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$resourcephp)php)php php{
php php php php php php php php php php php php php$resourcephp php=php newphp Zendphp_Aclphp_Resourcephp(php$resourcephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$resourcephp instanceofphp Zendphp_Aclphp_Resourcephp_Interfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php'addResourcephp(php)php expectsphp php$resourcephp tophp bephp ofphp typephp Zendphp_Aclphp_Resourcephp_Interfacephp'php)php;
php php php php php php php php php}

php php php php php php php php php$resourceIdphp php=php php$resourcephp-php>getResourceIdphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>hasphp(php$resourceIdphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php"Resourcephp idphp php'php$resourceIdphp'php alreadyphp existsphp inphp thephp ACLphp"php)php;
php php php php php php php php php}

php php php php php php php php php$resourceParentphp php=php nullphp;

php php php php php php php php ifphp php(nullphp php!php=php=php php$parentphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php ifphp php(php$parentphp instanceofphp Zendphp_Aclphp_Resourcephp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php php php php php$resourceParentIdphp php=php php$parentphp-php>getResourceIdphp(php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$resourceParentIdphp php=php php$parentphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$resourceParentphp php=php php$thisphp-php>getphp(php$resourceParentIdphp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Aclphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php"Parentphp Resourcephp idphp php'php$resourceParentIdphp'php doesphp notphp existphp"php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_resourcesphp[php$resourceParentIdphp]php[php'childrenphp'php]php[php$resourceIdphp]php php=php php$resourcephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_resourcesphp[php$resourceIdphp]php php=php arrayphp(
php php php php php php php php php php php php php'instancephp'php php=php>php php$resourcephp,
php php php php php php php php php php php php php'parentphp'php php php php=php>php php$resourceParentphp,
php php php php php php php php php php php php php'childrenphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp Resourcephp havingphp anphp identifierphp uniquephp tophp thephp ACL
php php php php php php*
php php php php php php*php Thephp php$parentphp parameterphp mayphp bephp aphp referencephp tophp,php orphp thephp stringphp identifierphp forphp,
php php php php php php*php thephp existingphp Resourcephp fromphp whichphp thephp newlyphp addedphp Resourcephp willphp inheritphp.
php php php php php php*
php php php php php php*php php@deprecatedphp inphp versionphp php1php.php9php.php1php andphp willphp bephp availablephp tillphp php2php.php0php.php php Newphp code
php php php php php php*php php php php php php php php php php php php php shouldphp usephp addResourcephp(php)php insteadphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp php php php php php php php php$resource
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$parent
php php php php php php*php php@throwsphp Zendphp_Aclphp_Exception
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addphp(Zendphp_Aclphp_Resourcephp_Interfacephp php$resourcephp,php php$parentphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>addResourcephp(php$resourcephp,php php$parentphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp identifiedphp Resource
php php php php php php*
php php php php php php*php Thephp php$resourcephp parameterphp canphp eitherphp bephp aphp Resourcephp orphp aphp Resourcephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$resource
php php php php php php*php php@throwsphp Zendphp_Aclphp_Exception
php php php php php php*php php@returnphp Zendphp_Aclphp_Resourcephp_Interface
php php php php php php*php/
php php php php publicphp functionphp getphp(php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(php$resourcephp instanceofphp Zendphp_Aclphp_Resourcephp_Interfacephp)php php{
php php php php php php php php php php php php php$resourceIdphp php=php php$resourcephp-php>getResourceIdphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$resourceIdphp php=php php(stringphp)php php$resourcephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>hasphp(php$resourcephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php"Resourcephp php'php$resourceIdphp'php notphp foundphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_resourcesphp[php$resourceIdphp]php[php'instancephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp Resourcephp existsphp inphp thephp ACL
php php php php php php*
php php php php php php*php Thephp php$resourcephp parameterphp canphp eitherphp bephp aphp Resourcephp orphp aphp Resourcephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$resource
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasphp(php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(php$resourcephp instanceofphp Zendphp_Aclphp_Resourcephp_Interfacephp)php php{
php php php php php php php php php php php php php$resourceIdphp php=php php$resourcephp-php>getResourceIdphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$resourceIdphp php=php php(stringphp)php php$resourcephp;
php php php php php php php php php}

php php php php php php php php returnphp issetphp(php$thisphp-php>php_resourcesphp[php$resourceIdphp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$resourcephp inheritsphp fromphp php$inherit
php php php php php php*
php php php php php php*php Bothphp parametersphp mayphp bephp eitherphp aphp Resourcephp orphp aphp Resourcephp identifierphp.php If
php php php php php php*php php$onlyParentphp isphp truephp,php thenphp php$resourcephp mustphp inheritphp directlyphp from
php php php php php php*php php$inheritphp inphp orderphp tophp returnphp truephp.php Byphp defaultphp,php thisphp methodphp looks
php php php php php php*php throughphp thephp entirephp inheritancephp treephp tophp determinephp whetherphp php$resource
php php php php php php*php inheritsphp fromphp php$inheritphp throughphp itsphp ancestorphp Resourcesphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$resource
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$inherit
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php$onlyParent
php php php php php php*php php@throwsphp Zendphp_Aclphp_Resourcephp_Registryphp_Exception
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp inheritsphp(php$resourcephp,php php$inheritphp,php php$onlyParentphp php=php falsephp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$resourceIdphp php php php php php=php php$thisphp-php>getphp(php$resourcephp)php-php>getResourceIdphp(php)php;
php php php php php php php php php php php php php$inheritIdphp php=php php$thisphp-php>getphp(php$inheritphp)php-php>getResourceIdphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Aclphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_resourcesphp[php$resourceIdphp]php[php'parentphp'php]php)php php{
php php php php php php php php php php php php php$parentIdphp php=php php$thisphp-php>php_resourcesphp[php$resourceIdphp]php[php'parentphp'php]php-php>getResourceIdphp(php)php;
php php php php php php php php php php php php ifphp php(php$inheritIdphp php=php=php=php php$parentIdphp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$onlyParentphp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php whilephp php(nullphp php!php=php=php php$thisphp-php>php_resourcesphp[php$parentIdphp]php[php'parentphp'php]php)php php{
php php php php php php php php php php php php php$parentIdphp php=php php$thisphp-php>php_resourcesphp[php$parentIdphp]php[php'parentphp'php]php-php>getResourceIdphp(php)php;
php php php php php php php php php php php php ifphp php(php$inheritIdphp php=php=php=php php$parentIdphp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp aphp Resourcephp andphp allphp ofphp itsphp children
php php php php php php*
php php php php php php*php Thephp php$resourcephp parameterphp canphp eitherphp bephp aphp Resourcephp orphp aphp Resourcephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$resource
php php php php php php*php php@throwsphp Zendphp_Aclphp_Exception
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removephp(php$resourcephp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$resourceIdphp php=php php$thisphp-php>getphp(php$resourcephp)php-php>getResourceIdphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Aclphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$resourcesRemovedphp php=php arrayphp(php$resourceIdphp)php;
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$resourceParentphp php=php php$thisphp-php>php_resourcesphp[php$resourceIdphp]php[php'parentphp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_resourcesphp[php$resourceParentphp-php>getResourceIdphp(php)php]php[php'childrenphp'php]php[php$resourceIdphp]php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_resourcesphp[php$resourceIdphp]php[php'childrenphp'php]php asphp php$childIdphp php=php>php php$childphp)php php{
php php php php php php php php php php php php php$thisphp-php>removephp(php$childIdphp)php;
php php php php php php php php php php php php php$resourcesRemovedphp[php]php php=php php$childIdphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$resourcesRemovedphp asphp php$resourceIdRemovedphp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php asphp php$resourceIdCurrentphp php=php>php php$rulesphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$resourceIdRemovedphp php=php=php=php php$resourceIdCurrentphp)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php[php$resourceIdCurrentphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php unsetphp(php$thisphp-php>php_resourcesphp[php$resourceIdphp]php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp allphp Resources
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removeAllphp(php)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_resourcesphp asphp php$resourceIdphp php=php>php php$resourcephp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php asphp php$resourceIdCurrentphp php=php>php php$rulesphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$resourceIdphp php=php=php=php php$resourceIdCurrentphp)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php[php$resourceIdCurrentphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_resourcesphp php=php arrayphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp anphp php"allowphp"php rulephp tophp thephp ACL
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp|arrayphp php php php php php$roles
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp|arrayphp php$resources
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privileges
php php php php php php*php php@paramphp php Zendphp_Aclphp_Assertphp_Interfacephp php php php php php php php php php php php php php php php php$assert
php php php php php php*php php@usesphp php php Zendphp_Aclphp:php:setRulephp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp allowphp(php$rolesphp php=php nullphp,php php$resourcesphp php=php nullphp,php php$privilegesphp php=php nullphp,php Zendphp_Aclphp_Assertphp_Interfacephp php$assertphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setRulephp(selfphp:php:OPphp_ADDphp,php selfphp:php:TYPEphp_ALLOWphp,php php$rolesphp,php php$resourcesphp,php php$privilegesphp,php php$assertphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp php"denyphp"php rulephp tophp thephp ACL
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp|arrayphp php php php php php$roles
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp|arrayphp php$resources
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privileges
php php php php php php*php php@paramphp php Zendphp_Aclphp_Assertphp_Interfacephp php php php php php php php php php php php php php php php php$assert
php php php php php php*php php@usesphp php php Zendphp_Aclphp:php:setRulephp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp denyphp(php$rolesphp php=php nullphp,php php$resourcesphp php=php nullphp,php php$privilegesphp php=php nullphp,php Zendphp_Aclphp_Assertphp_Interfacephp php$assertphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setRulephp(selfphp:php:OPphp_ADDphp,php selfphp:php:TYPEphp_DENYphp,php php$rolesphp,php php$resourcesphp,php php$privilegesphp,php php$assertphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp php"allowphp"php permissionsphp fromphp thephp ACL
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp|arrayphp php php php php php$roles
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp|arrayphp php$resources
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privileges
php php php php php php*php php@usesphp php php Zendphp_Aclphp:php:setRulephp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removeAllowphp(php$rolesphp php=php nullphp,php php$resourcesphp php=php nullphp,php php$privilegesphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setRulephp(selfphp:php:OPphp_REMOVEphp,php selfphp:php:TYPEphp_ALLOWphp,php php$rolesphp,php php$resourcesphp,php php$privilegesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp php"denyphp"php restrictionsphp fromphp thephp ACL
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp|arrayphp php php php php php$roles
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp|arrayphp php$resources
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privileges
php php php php php php*php php@usesphp php php Zendphp_Aclphp:php:setRulephp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removeDenyphp(php$rolesphp php=php nullphp,php php$resourcesphp php=php nullphp,php php$privilegesphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setRulephp(selfphp:php:OPphp_REMOVEphp,php selfphp:php:TYPEphp_DENYphp,php php$rolesphp,php php$resourcesphp,php php$privilegesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp operationsphp onphp ACLphp rules
php php php php php php*
php php php php php php*php Thephp php$operationphp parameterphp mayphp bephp eitherphp OPphp_ADDphp orphp OPphp_REMOVEphp,php dependingphp onphp whetherphp the
php php php php php php*php userphp wantsphp tophp addphp orphp removephp aphp rulephp,php respectivelyphp:
php php php php php php*
php php php php php php*php OPphp_ADDphp specificsphp:
php php php php php php*
php php php php php php*php php php php php php Aphp rulephp isphp addedphp thatphp wouldphp allowphp onephp orphp morephp Rolesphp accessphp tophp php[certainphp php$privileges
php php php php php php*php php php php php php uponphp]php thephp specifiedphp Resourcephp(sphp)php.
php php php php php php*
php php php php php php*php OPphp_REMOVEphp specificsphp:
php php php php php php*
php php php php php php*php php php php php php Thephp rulephp isphp removedphp onlyphp inphp thephp contextphp ofphp thephp givenphp Rolesphp,php Resourcesphp,php andphp privilegesphp.
php php php php php php*php php php php php php Existingphp rulesphp tophp whichphp thephp removephp operationphp doesphp notphp applyphp wouldphp remainphp inphp the
php php php php php php*php php php php php php ACLphp.
php php php php php php*
php php php php php php*php Thephp php$typephp parameterphp mayphp bephp eitherphp TYPEphp_ALLOWphp orphp TYPEphp_DENYphp,php dependingphp onphp whetherphp the
php php php php php php*php rulephp isphp intendedphp tophp allowphp orphp denyphp permissionphp,php respectivelyphp.
php php php php php php*
php php php php php php*php Thephp php$rolesphp andphp php$resourcesphp parametersphp mayphp bephp referencesphp tophp,php orphp thephp stringphp identifiersphp forphp,
php php php php php php*php existingphp Resourcesphp/Rolesphp,php orphp theyphp mayphp bephp passedphp asphp arraysphp ofphp thesephp php-php mixingphp stringphp identifiers
php php php php php php*php andphp objectsphp isphp okphp php-php tophp indicatephp thephp Resourcesphp andphp Rolesphp tophp whichphp thephp rulephp appliesphp.php Ifphp either
php php php php php php*php php$rolesphp orphp php$resourcesphp isphp nullphp,php thenphp thephp rulephp appliesphp tophp allphp Rolesphp orphp allphp Resourcesphp,php respectivelyphp.
php php php php php php*php Bothphp mayphp bephp nullphp inphp orderphp tophp workphp withphp thephp defaultphp rulephp ofphp thephp ACLphp.
php php php php php php*
php php php php php php*php Thephp php$privilegesphp parameterphp mayphp bephp usedphp tophp furtherphp specifyphp thatphp thephp rulephp appliesphp only
php php php php php php*php tophp certainphp privilegesphp uponphp thephp Resourcephp(sphp)php inphp questionphp.php Thisphp mayphp bephp specifiedphp tophp bephp aphp single
php php php php php php*php privilegephp withphp aphp stringphp,php andphp multiplephp privilegesphp mayphp bephp specifiedphp asphp anphp arrayphp ofphp stringsphp.
php php php php php php*
php php php php php php*php Ifphp php$assertphp isphp providedphp,php thenphp itsphp assertphp(php)php methodphp mustphp returnphp truephp inphp orderphp for
php php php php php php*php thephp rulephp tophp applyphp.php Ifphp php$assertphp isphp providedphp withphp php$rolesphp,php php$resourcesphp,php andphp php$privilegesphp all
php php php php php php*php equalphp tophp nullphp,php thenphp aphp rulephp havingphp aphp typephp ofphp:
php php php php php php*
php php php php php php*php php php php php php TYPEphp_ALLOWphp willphp implyphp aphp typephp ofphp TYPEphp_DENYphp,php and
php php php php php php*
php php php php php php*php php php php php php TYPEphp_DENYphp willphp implyphp aphp typephp ofphp TYPEphp_ALLOW
php php php php php php*
php php php php php php*php whenphp thephp rulephp'sphp assertionphp failsphp.php Thisphp isphp becausephp thephp ACLphp needsphp tophp providephp expected
php php php php php php*php behaviorphp whenphp anphp assertionphp uponphp thephp defaultphp ACLphp rulephp failsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$operation
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$type
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp|arrayphp php php php php php$roles
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp|arrayphp php$resources
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privileges
php php php php php php*php php@paramphp php Zendphp_Aclphp_Assertphp_Interfacephp php php php php php php php php php php php php php php php php$assert
php php php php php php*php php@throwsphp Zendphp_Aclphp_Exception
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:getphp(php)
php php php php php php*php php@usesphp php php Zendphp_Aclphp:php:getphp(php)
php php php php php php*php php@returnphp Zendphp_Aclphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setRulephp(php$operationphp,php php$typephp,php php$rolesphp php=php nullphp,php php$resourcesphp php=php nullphp,php php$privilegesphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Aclphp_Assertphp_Interfacephp php$assertphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php ensurephp thatphp thephp rulephp typephp isphp validphp;php normalizephp inputphp tophp uppercase
php php php php php php php php php$typephp php=php strtoupperphp(php$typephp)php;
php php php php php php php php ifphp php(selfphp:php:TYPEphp_ALLOWphp php!php=php=php php$typephp php&php&php selfphp:php:TYPEphp_DENYphp php!php=php=php php$typephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php"Unsupportedphp rulephp typephp;php mustphp bephp eitherphp php'php"php php.php selfphp:php:TYPEphp_ALLOWphp php.php php"php'php orphp php'php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php selfphp:php:TYPEphp_DENYphp php.php php"php'php"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ensurephp thatphp allphp specifiedphp Rolesphp existphp;php normalizephp inputphp tophp arrayphp ofphp Rolephp objectsphp orphp null
php php php php php php php php ifphp php(php!isphp_arrayphp(php$rolesphp)php)php php{
php php php php php php php php php php php php php$rolesphp php=php arrayphp(php$rolesphp)php;
php php php php php php php php php}php elsephp ifphp php(php0php php=php=php=php countphp(php$rolesphp)php)php php{
php php php php php php php php php php php php php$rolesphp php=php arrayphp(nullphp)php;
php php php php php php php php php}
php php php php php php php php php$rolesTempphp php=php php$rolesphp;
php php php php php php php php php$rolesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$rolesTempphp asphp php$rolephp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$rolephp)php php{
php php php php php php php php php php php php php php php php php$rolesphp[php]php php=php php$thisphp-php>php_getRoleRegistryphp(php)php-php>getphp(php$rolephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$rolesphp[php]php php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php unsetphp(php$rolesTempphp)php;

php php php php php php php php php/php/php ensurephp thatphp allphp specifiedphp Resourcesphp existphp;php normalizephp inputphp tophp arrayphp ofphp Resourcephp objectsphp orphp null
php php php php php php php php ifphp php(php$resourcesphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$resourcesphp)php)php php{
php php php php php php php php php php php php php php php php php$resourcesphp php=php arrayphp(php$resourcesphp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php0php php=php=php=php countphp(php$resourcesphp)php)php php{
php php php php php php php php php php php php php php php php php$resourcesphp php=php arrayphp(nullphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resourcesTempphp php=php php$resourcesphp;
php php php php php php php php php php php php php$resourcesphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$resourcesTempphp asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$resourcephp)php php{
php php php php php php php php php php php php php php php php php php php php php$resourcesphp[php]php php=php php$thisphp-php>getphp(php$resourcephp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$resourcesphp[php]php php=php nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$resourcesTempphp,php php$resourcephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$allResourcesphp php=php arrayphp(php)php;php php/php/php thisphp mightphp bephp usedphp laterphp ifphp resourcephp iterationphp isphp required
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_resourcesphp asphp php$rTargetphp)php php{
php php php php php php php php php php php php php php php php php$allResourcesphp[php]php php=php php$rTargetphp[php'instancephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$rTargetphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php normalizephp privilegesphp tophp array
php php php php php php php php ifphp php(nullphp php=php=php=php php$privilegesphp)php php{
php php php php php php php php php php php php php$privilegesphp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$privilegesphp)php)php php{
php php php php php php php php php php php php php$privilegesphp php=php arrayphp(php$privilegesphp)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$operationphp)php php{

php php php php php php php php php php php php php/php/php addphp tophp thephp rules
php php php php php php php php php php php php casephp selfphp:php:OPphp_ADDphp:
php php php php php php php php php php php php php php php php ifphp php(php$resourcesphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php thisphp blockphp willphp iteratephp thephp providedphp resources
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$resourcesphp asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$rolesphp asphp php$rolephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp php=php&php php$thisphp-php>php_getRulesphp(php$resourcephp,php php$rolephp,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php countphp(php$privilegesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'allPrivilegesphp'php]php[php'typephp'php]php php php php=php php$typephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'allPrivilegesphp'php]php[php'assertphp'php]php php=php php$assertphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$rulesphp[php'byPrivilegeIdphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'byPrivilegeIdphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$privilegesphp asphp php$privilegephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php[php'typephp'php]php php php php=php php$typephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php[php'assertphp'php]php php=php php$assertphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php thisphp blockphp willphp applyphp tophp allphp resourcesphp inphp aphp globalphp rule
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$rolesphp asphp php$rolephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp php=php&php php$thisphp-php>php_getRulesphp(nullphp,php php$rolephp,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php countphp(php$privilegesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'allPrivilegesphp'php]php[php'typephp'php]php php php php=php php$typephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'allPrivilegesphp'php]php[php'assertphp'php]php php=php php$assertphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$privilegesphp asphp php$privilegephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php[php'typephp'php]php php php php=php php$typephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php[php'assertphp'php]php php=php php$assertphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php removephp fromphp thephp rules
php php php php php php php php php php php php casephp selfphp:php:OPphp_REMOVEphp:
php php php php php php php php php php php php php php php php ifphp php(php$resourcesphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php thisphp blockphp willphp iteratephp thephp providedphp resources
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$resourcesphp asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$rolesphp asphp php$rolephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp php=php&php php$thisphp-php>php_getRulesphp(php$resourcephp,php php$rolephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$rulesphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php countphp(php$privilegesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$resourcephp php&php&php nullphp php=php=php=php php$rolephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$typephp php=php=php=php php$rulesphp[php'allPrivilegesphp'php]php[php'typephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'allPrivilegesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php selfphp:php:TYPEphp_DENYphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'assertphp'php php=php>php null
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'byPrivilegeIdphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$rulesphp[php'allPrivilegesphp'php]php[php'typephp'php]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php=php=php php$rulesphp[php'allPrivilegesphp'php]php[php'typephp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$rulesphp[php'allPrivilegesphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$privilegesphp asphp php$privilegephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php=php=php php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php[php'typephp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php thisphp blockphp willphp applyphp tophp allphp resourcesphp inphp aphp globalphp rule
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$rolesphp asphp php$rolephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php php php php php*php sincephp nullphp php(allphp resourcesphp)php wasphp passedphp tophp thisphp setRulephp(php)php callphp,php wephp need
php php php php php php php php php php php php php php php php php php php php php php php php php php*php cleanphp upphp allphp thephp rulesphp forphp thephp globalphp allResourcesphp,php asphp wellphp asphp thephp indivually
php php php php php php php php php php php php php php php php php php php php php php php php php php*php setphp resourcesphp php(perphp privilegephp asphp wellphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(arrayphp_mergephp(arrayphp(nullphp)php,php php$allResourcesphp)php asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp php=php&php php$thisphp-php>php_getRulesphp(php$resourcephp,php php$rolephp,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$rulesphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php countphp(php$privilegesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$rolephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$typephp php=php=php=php php$rulesphp[php'allPrivilegesphp'php]php[php'typephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$rulesphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'allPrivilegesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php selfphp:php:TYPEphp_DENYphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'assertphp'php php=php>php null
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'byPrivilegeIdphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$rulesphp[php'allPrivilegesphp'php]php[php'typephp'php]php)php php&php&php php$typephp php=php=php=php php$rulesphp[php'allPrivilegesphp'php]php[php'typephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$rulesphp[php'allPrivilegesphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$privilegesphp asphp php$privilegephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php=php=php php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php[php'typephp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php"Unsupportedphp operationphp;php mustphp bephp eitherphp php'php"php php.php selfphp:php:OPphp_ADDphp php.php php"php'php orphp php'php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php selfphp:php:OPphp_REMOVEphp php.php php"php'php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp Rolephp hasphp accessphp tophp thephp Resource
php php php php php php*
php php php php php php*php Thephp php$rolephp andphp php$resourcephp parametersphp mayphp bephp referencesphp tophp,php orphp thephp stringphp identifiersphp forphp,
php php php php php php*php anphp existingphp Resourcephp andphp Rolephp combinationphp.
php php php php php php*
php php php php php php*php Ifphp eitherphp php$rolephp orphp php$resourcephp isphp nullphp,php thenphp thephp queryphp appliesphp tophp allphp Rolesphp orphp allphp Resourcesphp,
php php php php php php*php respectivelyphp.php Bothphp mayphp bephp nullphp tophp queryphp whetherphp thephp ACLphp hasphp aphp php"blacklistphp"php rule
php php php php php php*php php(allowphp everythingphp tophp allphp)php.php Byphp defaultphp,php Zendphp_Aclphp createsphp aphp php"whitelistphp"php rulephp php(deny
php php php php php php*php everythingphp tophp allphp)php,php andphp thisphp methodphp wouldphp returnphp falsephp unlessphp thisphp defaultphp has
php php php php php php*php beenphp overriddenphp php(iphp.ephp.php,php byphp executingphp php$aclphp-php>allowphp(php)php)php.
php php php php php php*
php php php php php php*php Ifphp aphp php$privilegephp isphp notphp providedphp,php thenphp thisphp methodphp returnsphp falsephp ifphp andphp onlyphp ifphp the
php php php php php php*php Rolephp isphp deniedphp accessphp tophp atphp leastphp onephp privilegephp uponphp thephp Resourcephp.php Inphp otherphp wordsphp,php this
php php php php php php*php methodphp returnsphp truephp ifphp andphp onlyphp ifphp thephp Rolephp isphp allowedphp allphp privilegesphp onphp thephp Resourcephp.
php php php php php php*
php php php php php php*php Thisphp methodphp checksphp Rolephp inheritancephp usingphp aphp depthphp-firstphp traversalphp ofphp thephp Rolephp registryphp.
php php php php php php*php Thephp highestphp priorityphp parentphp php(iphp.ephp.php,php thephp parentphp mostphp recentlyphp addedphp)php isphp checkedphp firstphp,
php php php php php php*php andphp itsphp respectivephp parentsphp arephp checkedphp similarlyphp beforephp thephp lowerphp-priorityphp parentsphp of
php php php php php php*php thephp Rolephp arephp checkedphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php php php php php$role
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp|stringphp php$resource
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privilege
php php php php php php*php php@usesphp php php Zendphp_Aclphp:php:getphp(php)
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:getphp(php)
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isAllowedphp(php$rolephp php=php nullphp,php php$resourcephp php=php nullphp,php php$privilegephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php resetphp rolephp php&php resourcephp tophp null
php php php php php php php php php$thisphp-php>php_isAllowedRolephp php=php nullphp;
php php php php php php php php php$thisphp-php>php_isAllowedResourcephp php=php nullphp;
php php php php php php php php php$thisphp-php>php_isAllowedPrivilegephp php=php nullphp;

php php php php php php php php ifphp php(nullphp php!php=php=php php$rolephp)php php{
php php php php php php php php php php php php php/php/php keepphp trackphp ofphp originallyphp calledphp role
php php php php php php php php php php php php php$thisphp-php>php_isAllowedRolephp php=php php$rolephp;
php php php php php php php php php php php php php$rolephp php=php php$thisphp-php>php_getRoleRegistryphp(php)php-php>getphp(php$rolephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_isAllowedRolephp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_isAllowedRolephp php=php php$rolephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$resourcephp)php php{
php php php php php php php php php php php php php/php/php keepphp trackphp ofphp originallyphp calledphp resource
php php php php php php php php php php php php php$thisphp-php>php_isAllowedResourcephp php=php php$resourcephp;
php php php php php php php php php php php php php$resourcephp php=php php$thisphp-php>getphp(php$resourcephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_isAllowedResourcephp instanceofphp Zendphp_Aclphp_Resourcephp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_isAllowedResourcephp php=php php$resourcephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$privilegephp)php php{
php php php php php php php php php php php php php/php/php queryphp onphp allphp privileges
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php/php/php depthphp-firstphp searchphp onphp php$rolephp ifphp itphp isphp notphp php'allRolesphp'php pseudophp-parent
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$rolephp php&php&php nullphp php!php=php=php php(php$resultphp php=php php$thisphp-php>php_roleDFSAllPrivilegesphp(php$rolephp,php php$resourcephp,php php$privilegephp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php lookphp forphp rulephp onphp php'allRolesphp'php psuedophp-parent
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$rulesphp php=php php$thisphp-php>php_getRulesphp(php$resourcephp,php nullphp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$rulesphp[php'byPrivilegeIdphp'php]php asphp php$privilegephp php=php>php php$rulephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:TYPEphp_DENYphp php=php=php=php php(php$ruleTypeOnePrivilegephp php=php php$thisphp-php>php_getRuleTypephp(php$resourcephp,php nullphp,php php$privilegephp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$ruleTypeAllPrivilegesphp php=php php$thisphp-php>php_getRuleTypephp(php$resourcephp,php nullphp,php nullphp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_ALLOWphp php=php=php=php php$ruleTypeAllPrivilegesphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php tryphp nextphp Resource
php php php php php php php php php php php php php php php php php$resourcephp php=php php$thisphp-php>php_resourcesphp[php$resourcephp-php>getResourceIdphp(php)php]php[php'parentphp'php]php;

php php php php php php php php php php php php php}php whilephp php(truephp)php;php php/php/php loopphp terminatesphp atphp php'allResourcesphp'php pseudophp-parent
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_isAllowedPrivilegephp php=php php$privilegephp;
php php php php php php php php php php php php php/php/php queryphp onphp onephp privilege
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php/php/php depthphp-firstphp searchphp onphp php$rolephp ifphp itphp isphp notphp php'allRolesphp'php pseudophp-parent
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$rolephp php&php&php nullphp php!php=php=php php(php$resultphp php=php php$thisphp-php>php_roleDFSOnePrivilegephp(php$rolephp,php php$resourcephp,php php$privilegephp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php lookphp forphp rulephp onphp php'allRolesphp'php pseudophp-parent
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$ruleTypephp php=php php$thisphp-php>php_getRuleTypephp(php$resourcephp,php nullphp,php php$privilegephp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_ALLOWphp php=php=php=php php$ruleTypephp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(nullphp php!php=php=php php(php$ruleTypeAllPrivilegesphp php=php php$thisphp-php>php_getRuleTypephp(php$resourcephp,php nullphp,php nullphp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_ALLOWphp php=php=php=php php$ruleTypeAllPrivilegesphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php tryphp nextphp Resource
php php php php php php php php php php php php php php php php php$resourcephp php=php php$thisphp-php>php_resourcesphp[php$resourcephp-php>getResourceIdphp(php)php]php[php'parentphp'php]php;

php php php php php php php php php php php php php}php whilephp php(truephp)php;php php/php/php loopphp terminatesphp atphp php'allResourcesphp'php pseudophp-parent
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Rolephp registryphp forphp thisphp ACL
php php php php php php*
php php php php php php*php Ifphp nophp Rolephp registryphp hasphp beenphp createdphp yetphp,php aphp newphp defaultphp Rolephp registry
php php php php php php*php isphp createdphp andphp returnedphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Aclphp_Rolephp_Registry
php php php php php php*php/
php php php php protectedphp functionphp php_getRoleRegistryphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_roleRegistryphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_roleRegistryphp php=php newphp Zendphp_Aclphp_Rolephp_Registryphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_roleRegistryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp aphp depthphp-firstphp searchphp ofphp thephp Rolephp DAGphp,php startingphp atphp php$rolephp,php inphp orderphp tophp findphp aphp rule
php php php php php php*php allowingphp/denyingphp php$rolephp accessphp tophp allphp privilegesphp uponphp php$resource
php php php php php php*
php php php php php php*php Thisphp methodphp returnsphp truephp ifphp aphp rulephp isphp foundphp andphp allowsphp accessphp.php Ifphp aphp rulephp existsphp andphp deniesphp accessphp,
php php php php php php*php thenphp thisphp methodphp returnsphp falsephp.php Ifphp nophp applicablephp rulephp isphp foundphp,php thenphp thisphp methodphp returnsphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp php php php php php$role
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp php$resource
php php php php php php*php php@returnphp booleanphp|null
php php php php php php*php/
php php php php protectedphp functionphp php_roleDFSAllPrivilegesphp(Zendphp_Aclphp_Rolephp_Interfacephp php$rolephp,php Zendphp_Aclphp_Resourcephp_Interfacephp php$resourcephp php=php nullphp)
php php php php php{
php php php php php php php php php$dfsphp php=php arrayphp(
php php php php php php php php php php php php php'visitedphp'php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'stackphp'php php php php=php>php arrayphp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$resultphp php=php php$thisphp-php>php_roleDFSVisitAllPrivilegesphp(php$rolephp,php php$resourcephp,php php$dfsphp)php)php)php php{
php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php}

php php php php php php php php whilephp php(nullphp php!php=php=php php(php$rolephp php=php arrayphp_popphp(php$dfsphp[php'stackphp'php]php)php)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$dfsphp[php'visitedphp'php]php[php$rolephp-php>getRoleIdphp(php)php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$resultphp php=php php$thisphp-php>php_roleDFSVisitAllPrivilegesphp(php$rolephp,php php$resourcephp,php php$dfsphp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Visitsphp anphp php$rolephp inphp orderphp tophp lookphp forphp aphp rulephp allowingphp/denyingphp php$rolephp accessphp tophp allphp privilegesphp uponphp php$resource
php php php php php php*
php php php php php php*php Thisphp methodphp returnsphp truephp ifphp aphp rulephp isphp foundphp andphp allowsphp accessphp.php Ifphp aphp rulephp existsphp andphp deniesphp accessphp,
php php php php php php*php thenphp thisphp methodphp returnsphp falsephp.php Ifphp nophp applicablephp rulephp isphp foundphp,php thenphp thisphp methodphp returnsphp nullphp.
php php php php php php*
php php php php php php*php Thisphp methodphp isphp usedphp byphp thephp internalphp depthphp-firstphp searchphp algorithmphp andphp mayphp modifyphp thephp DFSphp dataphp structurephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp php php php php php$role
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp php$resource
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php$dfs
php php php php php php*php php@returnphp booleanphp|null
php php php php php php*php php@throwsphp Zendphp_Aclphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_roleDFSVisitAllPrivilegesphp(Zendphp_Aclphp_Rolephp_Interfacephp php$rolephp,php Zendphp_Aclphp_Resourcephp_Interfacephp php$resourcephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php&php$dfsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$dfsphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php'php$dfsphp parameterphp mayphp notphp bephp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$rulesphp php=php php$thisphp-php>php_getRulesphp(php$resourcephp,php php$rolephp)php)php)php php{
php php php php php php php php php php php php foreachphp php(php$rulesphp[php'byPrivilegeIdphp'php]php asphp php$privilegephp php=php>php php$rulephp)php php{
php php php php php php php php php php php php php php php php ifphp php(selfphp:php:TYPEphp_DENYphp php=php=php=php php(php$ruleTypeOnePrivilegephp php=php php$thisphp-php>php_getRuleTypephp(php$resourcephp,php php$rolephp,php php$privilegephp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$ruleTypeAllPrivilegesphp php=php php$thisphp-php>php_getRuleTypephp(php$resourcephp,php php$rolephp,php nullphp)php)php)php php{
php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_ALLOWphp php=php=php=php php$ruleTypeAllPrivilegesphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$dfsphp[php'visitedphp'php]php[php$rolephp-php>getRoleIdphp(php)php]php php=php truephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_getRoleRegistryphp(php)php-php>getParentsphp(php$rolephp)php asphp php$roleParentIdphp php=php>php php$roleParentphp)php php{
php php php php php php php php php php php php php$dfsphp[php'stackphp'php]php[php]php php=php php$roleParentphp;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp aphp depthphp-firstphp searchphp ofphp thephp Rolephp DAGphp,php startingphp atphp php$rolephp,php inphp orderphp tophp findphp aphp rule
php php php php php php*php allowingphp/denyingphp php$rolephp accessphp tophp aphp php$privilegephp uponphp php$resource
php php php php php php*
php php php php php php*php Thisphp methodphp returnsphp truephp ifphp aphp rulephp isphp foundphp andphp allowsphp accessphp.php Ifphp aphp rulephp existsphp andphp deniesphp accessphp,
php php php php php php*php thenphp thisphp methodphp returnsphp falsephp.php Ifphp nophp applicablephp rulephp isphp foundphp,php thenphp thisphp methodphp returnsphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp php php php php php$role
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp php$resource
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php$privilege
php php php php php php*php php@returnphp booleanphp|null
php php php php php php*php php@throwsphp Zendphp_Aclphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_roleDFSOnePrivilegephp(Zendphp_Aclphp_Rolephp_Interfacephp php$rolephp,php Zendphp_Aclphp_Resourcephp_Interfacephp php$resourcephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privilegephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$privilegephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php'php$privilegephp parameterphp mayphp notphp bephp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php php$dfsphp php=php arrayphp(
php php php php php php php php php php php php php'visitedphp'php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'stackphp'php php php php=php>php arrayphp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$resultphp php=php php$thisphp-php>php_roleDFSVisitOnePrivilegephp(php$rolephp,php php$resourcephp,php php$privilegephp,php php$dfsphp)php)php)php php{
php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php}

php php php php php php php php whilephp php(nullphp php!php=php=php php(php$rolephp php=php arrayphp_popphp(php$dfsphp[php'stackphp'php]php)php)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$dfsphp[php'visitedphp'php]php[php$rolephp-php>getRoleIdphp(php)php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$resultphp php=php php$thisphp-php>php_roleDFSVisitOnePrivilegephp(php$rolephp,php php$resourcephp,php php$privilegephp,php php$dfsphp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Visitsphp anphp php$rolephp inphp orderphp tophp lookphp forphp aphp rulephp allowingphp/denyingphp php$rolephp accessphp tophp aphp php$privilegephp uponphp php$resource
php php php php php php*
php php php php php php*php Thisphp methodphp returnsphp truephp ifphp aphp rulephp isphp foundphp andphp allowsphp accessphp.php Ifphp aphp rulephp existsphp andphp deniesphp accessphp,
php php php php php php*php thenphp thisphp methodphp returnsphp falsephp.php Ifphp nophp applicablephp rulephp isphp foundphp,php thenphp thisphp methodphp returnsphp nullphp.
php php php php php php*
php php php php php php*php Thisphp methodphp isphp usedphp byphp thephp internalphp depthphp-firstphp searchphp algorithmphp andphp mayphp modifyphp thephp DFSphp dataphp structurephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp php php php php php$role
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp php$resource
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php$privilege
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php php php php$dfs
php php php php php php*php php@returnphp booleanphp|null
php php php php php php*php php@throwsphp Zendphp_Aclphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_roleDFSVisitOnePrivilegephp(Zendphp_Aclphp_Rolephp_Interfacephp php$rolephp,php Zendphp_Aclphp_Resourcephp_Interfacephp php$resourcephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privilegephp php=php nullphp,php php&php$dfsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$privilegephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php'php$privilegephp parameterphp mayphp notphp bephp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$dfsphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Exceptionphp(php'php$dfsphp parameterphp mayphp notphp bephp nullphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$ruleTypeOnePrivilegephp php=php php$thisphp-php>php_getRuleTypephp(php$resourcephp,php php$rolephp,php php$privilegephp)php)php)php php{
php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_ALLOWphp php=php=php=php php$ruleTypeOnePrivilegephp;
php php php php php php php php php}php elsephp ifphp php(nullphp php!php=php=php php(php$ruleTypeAllPrivilegesphp php=php php$thisphp-php>php_getRuleTypephp(php$resourcephp,php php$rolephp,php nullphp)php)php)php php{
php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_ALLOWphp php=php=php=php php$ruleTypeAllPrivilegesphp;
php php php php php php php php php}

php php php php php php php php php$dfsphp[php'visitedphp'php]php[php$rolephp-php>getRoleIdphp(php)php]php php=php truephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_getRoleRegistryphp(php)php-php>getParentsphp(php$rolephp)php asphp php$roleParentIdphp php=php>php php$roleParentphp)php php{
php php php php php php php php php php php php php$dfsphp[php'stackphp'php]php[php]php php=php php$roleParentphp;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp rulephp typephp associatedphp withphp thephp specifiedphp Resourcephp,php Rolephp,php andphp privilege
php php php php php php*php combinationphp.
php php php php php php*
php php php php php php*php Ifphp aphp rulephp doesphp notphp existphp orphp itsphp attachedphp assertionphp failsphp,php whichphp meansphp that
php php php php php php*php thephp rulephp isphp notphp applicablephp,php thenphp thisphp methodphp returnsphp nullphp.php Otherwisephp,php the
php php php php php php*php rulephp typephp appliesphp andphp isphp returnedphp asphp eitherphp TYPEphp_ALLOWphp orphp TYPEphp_DENYphp.
php php php php php php*
php php php php php php*php Ifphp php$resourcephp orphp php$rolephp isphp nullphp,php thenphp thisphp meansphp thatphp thephp rulephp mustphp applyphp to
php php php php php php*php allphp Resourcesphp orphp Rolesphp,php respectivelyphp.
php php php php php php*
php php php php php php*php Ifphp php$privilegephp isphp nullphp,php thenphp thephp rulephp mustphp applyphp tophp allphp privilegesphp.
php php php php php php*
php php php php php php*php Ifphp allphp threephp parametersphp arephp nullphp,php thenphp thephp defaultphp ACLphp rulephp typephp isphp returnedphp,
php php php php php php*php basedphp onphp whetherphp itsphp assertionphp methodphp passesphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp php$resource
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp php php php php php$role
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php$privilege
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php protectedphp functionphp php_getRuleTypephp(Zendphp_Aclphp_Resourcephp_Interfacephp php$resourcephp php=php nullphp,php Zendphp_Aclphp_Rolephp_Interfacephp php$rolephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$privilegephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php getphp thephp rulesphp forphp thephp php$resourcephp andphp php$role
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$rulesphp php=php php$thisphp-php>php_getRulesphp(php$resourcephp,php php$rolephp)php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php/php/php followphp php$privilege
php php php php php php php php ifphp php(nullphp php=php=php=php php$privilegephp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$rulesphp[php'allPrivilegesphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$rulephp php=php php$rulesphp[php'allPrivilegesphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!issetphp(php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$rulephp php=php php$rulesphp[php'byPrivilegeIdphp'php]php[php$privilegephp]php;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp assertionphp first
php php php php php php php php ifphp php(php$rulephp[php'assertphp'php]php)php php{
php php php php php php php php php php php php php$assertionphp php=php php$rulephp[php'assertphp'php]php;
php php php php php php php php php php php php php$assertionValuephp php=php php$assertionphp-php>assertphp(
php php php php php php php php php php php php php php php php php$thisphp,
php php php php php php php php php php php php php php php php php(php$thisphp-php>php_isAllowedRolephp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php?php php$thisphp-php>php_isAllowedRolephp php:php php$rolephp,
php php php php php php php php php php php php php php php php php(php$thisphp-php>php_isAllowedResourcephp instanceofphp Zendphp_Aclphp_Resourcephp_Interfacephp)php php?php php$thisphp-php>php_isAllowedResourcephp php:php php$resourcephp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_isAllowedPrivilege
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$rulephp[php'assertphp'php]php php|php|php php$assertionValuephp)php php{
php php php php php php php php php php php php returnphp php$rulephp[php'typephp'php]php;
php php php php php php php php php}php elsephp ifphp php(nullphp php!php=php=php php$resourcephp php|php|php nullphp php!php=php=php php$rolephp php|php|php nullphp php!php=php=php php$privilegephp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}php elsephp ifphp php(selfphp:php:TYPEphp_ALLOWphp php=php=php=php php$rulephp[php'typephp'php]php)php php{
php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_DENYphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_ALLOWphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp rulesphp associatedphp withphp aphp Resourcephp andphp aphp Rolephp,php orphp nullphp ifphp nophp suchphp rulesphp exist
php php php php php php*
php php php php php php*php Ifphp eitherphp php$resourcephp orphp php$rolephp isphp nullphp,php thisphp meansphp thatphp thephp rulesphp returnedphp arephp forphp allphp Resourcesphp orphp allphp Rolesphp,
php php php php php php*php respectivelyphp.php Bothphp canphp bephp nullphp tophp returnphp thephp defaultphp rulephp setphp forphp allphp Resourcesphp andphp allphp Rolesphp.
php php php php php php*
php php php php php php*php Ifphp thephp php$createphp parameterphp isphp truephp,php thenphp aphp rulephp setphp isphp firstphp createdphp andphp thenphp returnedphp tophp thephp callerphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Resourcephp_Interfacephp php$resource
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp php php php php php$role
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php php php php php php php php php$create
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php protectedphp functionphp php&php_getRulesphp(Zendphp_Aclphp_Resourcephp_Interfacephp php$resourcephp php=php nullphp,php Zendphp_Aclphp_Rolephp_Interfacephp php$rolephp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$createphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php createphp aphp referencephp tophp null
php php php php php php php php php$nullphp php=php nullphp;
php php php php php php php php php$nullRefphp php=php&php php$nullphp;

php php php php php php php php php/php/php followphp php$resource
php php php php php php php php dophp php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$resourcephp)php php{
php php php php php php php php php php php php php php php php php$visitorphp php=php&php php$thisphp-php>php_rulesphp[php'allResourcesphp'php]php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resourceIdphp php=php php$resourcephp-php>getResourceIdphp(php)php;
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php[php$resourceIdphp]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$createphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$nullRefphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php[php$resourceIdphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$visitorphp php=php&php php$thisphp-php>php_rulesphp[php'byResourceIdphp'php]php[php$resourceIdphp]php;
php php php php php php php php php}php whilephp php(falsephp)php;


php php php php php php php php php/php/php followphp php$role
php php php php php php php php ifphp php(nullphp php=php=php=php php$rolephp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$visitorphp[php'allRolesphp'php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$createphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$nullRefphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$visitorphp[php'allRolesphp'php]php[php'byPrivilegeIdphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$visitorphp[php'allRolesphp'php]php;
php php php php php php php php php}
php php php php php php php php php$roleIdphp php=php php$rolephp-php>getRoleIdphp(php)php;
php php php php php php php php ifphp php(php!issetphp(php$visitorphp[php'byRoleIdphp'php]php[php$roleIdphp]php)php)php php{
php php php php php php php php php php php php ifphp php(php!php$createphp)php php{
php php php php php php php php php php php php php php php php returnphp php$nullRefphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$visitorphp[php'byRoleIdphp'php]php[php$roleIdphp]php[php'byPrivilegeIdphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php$visitorphp[php'byRoleIdphp'php]php[php$roleIdphp]php[php'allPrivilegesphp'php]php php=php arrayphp(php'typephp'php php=php>php nullphp,php php'assertphp'php php=php>php nullphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$visitorphp[php'byRoleIdphp'php]php[php$roleIdphp]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php php@returnphp arrayphp ofphp registeredphp rolesphp php(Deprecatedphp)
php php php php php php*php php@deprecatedphp Deprecatedphp sincephp versionphp php1php.php1php0php php(Decemberphp php2php0php0php9php)
php php php php php php*php/
php php php php publicphp functionphp getRegisteredRolesphp(php)
php php php php php{
php php php php php php php php triggerphp_errorphp(php'Thephp methodphp getRegisteredRolesphp(php)php wasphp deprecatedphp asphp ofphp php'
php php php php php php php php php php php php php php php php php php php php php.php php'versionphp php1php.php0php,php andphp mayphp bephp removedphp.php Youphp\php'rephp encouragedphp php'
php php php php php php php php php php php php php php php php php php php php php.php php'tophp usephp getRolesphp(php)php insteadphp.php'php)php;

php php php php php php php php returnphp php$thisphp-php>php_getRoleRegistryphp(php)php-php>getRolesphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp registeredphp rolesphp.
php php php php php php*
php php php php php php*php Notephp thatphp thisphp methodphp doesphp notphp returnphp instancesphp ofphp registeredphp rolesphp,
php php php php php php*php butphp onlyphp thephp rolephp identifiersphp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp ofphp registeredphp roles
php php php php php php*php/
php php php php publicphp functionphp getRolesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_getRoleRegistryphp(php)php-php>getRolesphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp arrayphp ofphp registeredphp resources
php php php php php php*php/
php php php php publicphp functionphp getResourcesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_resourcesphp)php;
php php php php php}

php}

