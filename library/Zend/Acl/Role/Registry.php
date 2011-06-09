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
php php*php php@versionphp php php php php$Idphp:php Registryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Aclphp_Rolephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Aclphp/Rolephp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Acl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Aclphp_Rolephp_Registry
php{
php php php php php/php*php*
php php php php php php*php Internalphp Rolephp registryphp dataphp storage
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_rolesphp php=php arrayphp(php)php;

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
php php php php php php*php php@throwsphp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php*php php@returnphp Zendphp_Aclphp_Rolephp_Registryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addphp(Zendphp_Aclphp_Rolephp_Interfacephp php$rolephp,php php$parentsphp php=php nullphp)
php php php php php{
php php php php php php php php php$roleIdphp php=php php$rolephp-php>getRoleIdphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>hasphp(php$roleIdphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Rolephp/Registryphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Rolephp_Registryphp_Exceptionphp(php"Rolephp idphp php'php$roleIdphp'php alreadyphp existsphp inphp thephp registryphp"php)php;
php php php php php php php php php}

php php php php php php php php php$roleParentsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php$parentsphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$parentsphp)php)php php{
php php php php php php php php php php php php php php php php php$parentsphp php=php arrayphp(php$parentsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Rolephp/Registryphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$parentsphp asphp php$parentphp)php php{
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$parentphp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$roleParentIdphp php=php php$parentphp-php>getRoleIdphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$roleParentIdphp php=php php$parentphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$roleParentphp php=php php$thisphp-php>getphp(php$roleParentIdphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Aclphp_Rolephp_Registryphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Rolephp_Registryphp_Exceptionphp(php"Parentphp Rolephp idphp php'php$roleParentIdphp'php doesphp notphp existphp"php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$roleParentsphp[php$roleParentIdphp]php php=php php$roleParentphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_rolesphp[php$roleParentIdphp]php[php'childrenphp'php]php[php$roleIdphp]php php=php php$rolephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_rolesphp[php$roleIdphp]php php=php arrayphp(
php php php php php php php php php php php php php'instancephp'php php=php>php php$rolephp,
php php php php php php php php php php php php php'parentsphp'php php php=php>php php$roleParentsphp,
php php php php php php php php php php php php php'childrenphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp identifiedphp Role
php php php php php php*
php php php php php php*php Thephp php$rolephp parameterphp canphp eitherphp bephp aphp Rolephp orphp aphp Rolephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$role
php php php php php php*php php@throwsphp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php*php php@returnphp Zendphp_Aclphp_Rolephp_Interface
php php php php php php*php/
php php php php publicphp functionphp getphp(php$rolephp)
php php php php php{
php php php php php php php php ifphp php(php$rolephp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php{
php php php php php php php php php php php php php$roleIdphp php=php php$rolephp-php>getRoleIdphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$roleIdphp php=php php(stringphp)php php$rolephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>hasphp(php$rolephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Rolephp/Registryphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Rolephp_Registryphp_Exceptionphp(php"Rolephp php'php$roleIdphp'php notphp foundphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_rolesphp[php$roleIdphp]php[php'instancephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp Rolephp existsphp inphp thephp registry
php php php php php php*
php php php php php php*php Thephp php$rolephp parameterphp canphp eitherphp bephp aphp Rolephp orphp aphp Rolephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$role
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasphp(php$rolephp)
php php php php php{
php php php php php php php php ifphp php(php$rolephp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php{
php php php php php php php php php php php php php$roleIdphp php=php php$rolephp-php>getRoleIdphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$roleIdphp php=php php(stringphp)php php$rolephp;
php php php php php php php php php}

php php php php php php php php returnphp issetphp(php$thisphp-php>php_rolesphp[php$roleIdphp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp anphp existingphp Rolephp'sphp parents
php php php php php php*
php php php php php php*php Thephp arrayphp keysphp arephp thephp identifiersphp ofphp thephp parentphp Rolesphp,php andphp thephp valuesphp are
php php php php php php*php thephp parentphp Rolephp instancesphp.php Thephp parentphp Rolesphp arephp orderedphp inphp thisphp arrayphp by
php php php php php php*php ascendingphp priorityphp.php Thephp highestphp priorityphp parentphp Rolephp,php lastphp inphp thephp arrayphp,
php php php php php php*php correspondsphp withphp thephp parentphp Rolephp mostphp recentlyphp addedphp.
php php php php php php*
php php php php php php*php Ifphp thephp Rolephp doesphp notphp havephp anyphp parentsphp,php thenphp anphp emptyphp arrayphp isphp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$role
php php php php php php*php php@usesphp php php Zendphp_Aclphp_Rolephp_Registryphp:php:getphp(php)
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParentsphp(php$rolephp)
php php php php php{
php php php php php php php php php$roleIdphp php=php php$thisphp-php>getphp(php$rolephp)php-php>getRoleIdphp(php)php;

php php php php php php php php returnphp php$thisphp-php>php_rolesphp[php$roleIdphp]php[php'parentsphp'php]php;
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
php php php php php php*php php@throwsphp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp inheritsphp(php$rolephp,php php$inheritphp,php php$onlyParentsphp php=php falsephp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Rolephp/Registryphp/Exceptionphp.phpphp'php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$roleIdphp php php php php php=php php$thisphp-php>getphp(php$rolephp)php-php>getRoleIdphp(php)php;
php php php php php php php php php php php php php$inheritIdphp php=php php$thisphp-php>getphp(php$inheritphp)php-php>getRoleIdphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Aclphp_Rolephp_Registryphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Rolephp_Registryphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$inheritsphp php=php issetphp(php$thisphp-php>php_rolesphp[php$roleIdphp]php[php'parentsphp'php]php[php$inheritIdphp]php)php;

php php php php php php php php ifphp php(php$inheritsphp php|php|php php$onlyParentsphp)php php{
php php php php php php php php php php php php returnphp php$inheritsphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_rolesphp[php$roleIdphp]php[php'parentsphp'php]php asphp php$parentIdphp php=php>php php$parentphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>inheritsphp(php$parentIdphp,php php$inheritIdphp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp thephp Rolephp fromphp thephp registry
php php php php php php*
php php php php php php*php Thephp php$rolephp parameterphp canphp eitherphp bephp aphp Rolephp orphp aphp Rolephp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp_Rolephp_Interfacephp|stringphp php$role
php php php php php php*php php@throwsphp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php*php php@returnphp Zendphp_Aclphp_Rolephp_Registryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removephp(php$rolephp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Aclphp_Rolephp_Registryphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Rolephp/Registryphp/Exceptionphp.phpphp'php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$roleIdphp php=php php$thisphp-php>getphp(php$rolephp)php-php>getRoleIdphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Aclphp_Rolephp_Registryphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Aclphp_Rolephp_Registryphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_rolesphp[php$roleIdphp]php[php'childrenphp'php]php asphp php$childIdphp php=php>php php$childphp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_rolesphp[php$childIdphp]php[php'parentsphp'php]php[php$roleIdphp]php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_rolesphp[php$roleIdphp]php[php'parentsphp'php]php asphp php$parentIdphp php=php>php php$parentphp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_rolesphp[php$parentIdphp]php[php'childrenphp'php]php[php$roleIdphp]php)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$thisphp-php>php_rolesphp[php$roleIdphp]php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp allphp Rolesphp fromphp thephp registry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Aclphp_Rolephp_Registryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removeAllphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_rolesphp php=php arrayphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getRolesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_rolesphp;
php php php php php}

php}
