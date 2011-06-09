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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Resourcephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Resourcephp/Containerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Repository
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Repositoryphp.phpphp'php;

php/php*php*
php php*php Thisphp classphp isphp anphp iteratorphp thatphp willphp iteratephp onlyphp overphp enabledphp resources
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp extendsphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profile
php php php php php php*php/
php php php php protectedphp php$php_profilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php protectedphp php$php_parentResourcephp php=php nullphp;

php php php php php/php*php*php#php@php+
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_deletedphp php=php falsephp;
php php php php protectedphp php$php_enabledphp php=php truephp;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Contextphp|string
php php php php php php*php/
php php php php protectedphp php$php_contextphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attributesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isContextInitializedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$context
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>setContextphp(php$contextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setContextphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$context
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp setContextphp(php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextphp php=php php$contextphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContextphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getContextphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)php php-php Getphp thephp resourcephp name
php php php php php php*
php php php php php php*php Namephp isphp derivedphp fromphp thephp contextphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$thisphp-php>php_contextphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_contextphp;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_contextphp instanceofphp Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_contextphp-php>getNamephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'Invalidphp contextphp inphp resourcephp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php setProfilephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Profilephp php$profile
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp setProfilephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_profilephp php=php php$profilephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getProfile
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profile
php php php php php php*php/
php php php php publicphp functionphp getProfilephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_profilephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPersistentAttributesphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPersistentAttributesphp(php)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_contextphp,php php'getPersistentAttributesphp'php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_contextphp-php>getPersistentAttributesphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setEnabledphp(php)
php php php php php php*
php php php php php php*php php@paramphp boolphp php$enabled
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp setEnabledphp(php$enabledphp php=php truephp)
php php php php php{
php php php php php php php php php/php/php convertphp fuzzyphp typesphp tophp bool
php php php php php php php php php$thisphp-php>php_enabledphp php=php php(php!inphp_arrayphp(php$enabledphp,php arrayphp(php'falsephp'php,php php'disabledphp'php,php php0php,php php-php1php,php falsephp)php,php truephp)php)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php isEnabledphp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isEnabledphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_enabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setDeletedphp(php)
php php php php php php*
php php php php php php*php php@paramphp boolphp php$deleted
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp setDeletedphp(php$deletedphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_deletedphp php=php php(boolphp)php php$deletedphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php isDeletedphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp isDeletedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_deletedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php initializeContextphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp initializeContextphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_isContextInitializedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_stringphp(php$thisphp-php>php_contextphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_contextphp php=php Zendphp_Toolphp_Projectphp_Contextphp_Repositoryphp:php:getInstancephp(php)php-php>getContextphp(php$thisphp-php>php_contextphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_contextphp,php php'setResourcephp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_contextphp-php>setResourcephp(php$thisphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_contextphp,php php'initphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_contextphp-php>initphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_isContextInitializedphp php=php truephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_toStringphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contextphp-php>getNamephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_callphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@paramphp arrayphp php$arguments
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resource
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argumentsphp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_contextphp,php php$methodphp)php)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>isEnabledphp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setEnabledphp(truephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_contextphp,php php$methodphp)php,php php$argumentsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Profilephp_Exceptionphp(php'cannotphp callphp php'php php.php php$methodphp)php;
php php php php php php php php php}
php php php php php}

php}