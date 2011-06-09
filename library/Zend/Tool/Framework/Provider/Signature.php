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
php php*php php@versionphp php php php php$Idphp:php Signaturephp.phpphp php2php3php2php0php2php php2php0php1php0php-php1php0php-php2php1php php1php5php:php0php8php:php1php5Zphp ralphphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Reflectionphp_Class
php php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Classphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Registry
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/EnabledInterfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Actionphp_Base
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Actionphp/Basephp.phpphp'php;

php/php*php*
php php*php Thephp purposephp ofphp Zendphp_Toolphp_Frameworkphp_Providerphp_Signaturephp isphp tophp derive
php php*php callablephp signaturesphp fromphp thephp providedphp providerphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Providerphp_Signaturephp implementsphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Registry
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_providerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_specialtiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_actionableMethodsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_actionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Reflectionphp_Class
php php php php php php*php/
php php php php protectedphp php$php_providerReflectionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isProcessedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp php$provider
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp php$providerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_providerphp php=php php$providerphp;
php php php php php php php php php$thisphp-php>php_providerReflectionphp php=php newphp Zendphp_Reflectionphp_Classphp(php$providerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setRegistryphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registry
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Providerphp_Signature
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp processphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_isProcessedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)php ofphp thephp provider
php php php php php php*
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp providerphp forphp thisphp signature
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getProviderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_providerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getProviderReflectionphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Class
php php php php php php*php/
php php php php publicphp functionphp getProviderReflectionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_providerReflectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getSpecialitiesphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getSpecialtiesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_specialtiesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getActionsphp(php)
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Actions
php php php php php php*php/
php php php php publicphp functionphp getActionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getActionableMethodsphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getActionableMethodsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionableMethodsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getActionableMethodphp(php)php php-php Getphp anphp actionablephp methodphp byphp namephp,php thisphp willphp returnphp anphp arrayphp of
php php php php php php*php usefulphp informationphp aboutphp whatphp canphp bephp exectuedphp onphp thisphp provider
php php php php php php*
php php php php php php*php php@paramphp stringphp php$methodName
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getActionableMethodphp(php$methodNamephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_actionableMethodsphp[php$methodNamephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_actionableMethodsphp[php$methodNamephp]php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getActionableMethodByActionNamephp(php)php php-php Getphp anphp actionablephp methodphp byphp itsphp actionphp namephp,php this
php php php php php php*php willphp returnphp anphp arrayphp ofphp usefulphp informationphp aboutphp whatphp canphp bephp exectuedphp onphp thisphp provider
php php php php php php*
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getActionableMethodByActionNamephp(php$actionNamephp,php php$specialtyNamephp php=php php'php_Globalphp'php)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_actionableMethodsphp asphp php$actionableMethodphp)php php{
php php php php php php php php php php php php ifphp php(php$actionNamephp php=php=php php$actionableMethodphp[php'actionNamephp'php]
php php php php php php php php php php php php php php php php php&php&php php$specialtyNamephp php=php=php php$actionableMethodphp[php'specialtyphp'php]php)php php{
php php php php php php php php php php php php php php php php returnphp php$actionableMethodphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_processphp(php)php isphp calledphp atphp constructionphp timephp andphp isphp whatphp willphp buildphp thephp signaturephp information
php php php php php php*php forphp determiningphp whatphp isphp actionable
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_processphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_isProcessedphp php=php truephp;
php php php php php php php php php$thisphp-php>php_processNamephp(php)php;
php php php php php php php php php$thisphp-php>php_processSpecialtiesphp(php)php;
php php php php php php php php php$thisphp-php>php_processActionableMethodsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_processNamephp(php)php;
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_processNamephp(php)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_providerphp,php php'getNamephp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_namephp php=php php$thisphp-php>php_providerphp-php>getNamephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_namephp php=php=php nullphp)php php{
php php php php php php php php php php php php php$classNamephp php=php getphp_classphp(php$thisphp-php>php_providerphp)php;
php php php php php php php php php php php php php$namephp php=php php$classNamephp;
php php php php php php php php php php php php ifphp php(strposphp(php$namephp,php php'php_php'php)php)php php{
php php php php php php php php php php php php php php php php php$namephp php=php substrphp(php$namephp,php strrposphp(php$namephp,php php'php_php'php)php+php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$namephp php=php pregphp_replacephp(php'php#php(Providerphp|Manifestphp)php$php#php'php,php php'php'php,php php$namephp)php;
php php php php php php php php php php php php php$thisphp-php>php_namephp php=php php$namephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php_processSpecialtiesphp(php)php php-php Breakphp outphp thephp specialtyphp namesphp forphp thisphp provider
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_processSpecialtiesphp(php)
php php php php php{
php php php php php php php php php$specialtiesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_providerReflectionphp-php>hasMethodphp(php'getSpecialtiesphp'php)php)php php{
php php php php php php php php php php php php php$specialtiesphp php=php php$thisphp-php>php_providerphp-php>getSpecialtiesphp(php)php;
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$specialtiesphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Providerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Providerphp php'php php.php getphp_classphp(php$thisphp-php>php_providerphp)php php.php php'php mustphp returnphp anphp arrayphp forphp methodphp getSpecialtiesphp(php)php.php'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$defaultPropertiesphp php=php php$thisphp-php>php_providerReflectionphp-php>getDefaultPropertiesphp(php)php;
php php php php php php php php php php php php php$specialtiesphp php=php php(issetphp(php$defaultPropertiesphp[php'php_specialtiesphp'php]php)php)php php?php php$defaultPropertiesphp[php'php_specialtiesphp'php]php php:php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$specialtiesphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Providerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Providerphp php'php php.php getphp_classphp(php$thisphp-php>php_providerphp)php php.php php'php\php'sphp propertyphp php$php_specialtiesphp mustphp bephp anphp arrayphp.php'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_specialtiesphp php=php arrayphp_mergephp(arrayphp(php'php_Globalphp'php)php,php php$specialtiesphp)php;

php php php php php}

php php php php php/php*php*
php php php php php php*php php_processActionableMethodsphp(php)php php-php processphp allphp methodsphp thatphp canphp bephp calledphp onphp thisphp providerphp.
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_processActionableMethodsphp(php)
php php php php php{

php php php php php php php php php$specialtyRegexphp php=php php'php#php(php.php*php)php(php'php php.php implodephp(php'php|php'php,php php$thisphp-php>php_specialtiesphp)php php.php php'php)php$php#iphp'php;


php php php php php php php php php$methodsphp php=php php$thisphp-php>php_providerReflectionphp-php>getMethodsphp(php)php;

php php php php php php php php php$actionableMethodsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$methodsphp asphp php$methodphp)php php{

php php php php php php php php php php php php php$methodNamephp php=php php$methodphp-php>getNamephp(php)php;

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php thephp followingphp willphp determinephp whatphp methodsphp arephp actuallyphp actionable
php php php php php php php php php php php php php php*php publicphp,php nonphp-staticphp,php nonphp-underscorephp prefixedphp,php classesphp thatphp dont
php php php php php php php php php php php php php php*php containphp thephp namephp php"
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php!php$methodphp-php>getDeclaringClassphp(php)php-php>isInstantiablephp(php)
php php php php php php php php php php php php php php php php php|php|php php!php$methodphp-php>isPublicphp(php)
php php php php php php php php php php php php php php php php php|php|php php$methodNamephp[php0php]php php=php=php php'php_php'
php php php php php php php php php php php php php php php php php|php|php php$methodphp-php>isStaticphp(php)
php php php php php php php php php php php php php php php php php|php|php inphp_arrayphp(php$methodNamephp,php arrayphp(php'getContextClassesphp'php,php php'getNamephp'php)php)php php/php/php otherphp protectedphp publicphp methodsphp willphp neephp tophp gophp here
php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php checkphp tophp seephp ifphp thephp methodphp wasphp aphp requiredphp methodphp byphp aphp Zendphp_Toolphp_php*php interface
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php foreachphp php(php$methodphp-php>getDeclaringClassphp(php)php-php>getInterfacesphp(php)php asphp php$methodDeclaringClassInterfacephp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$methodDeclaringClassInterfacephp-php>getNamephp(php)php,php php'Zendphp_Toolphp_php'php)php php=php=php=php php0
php php php php php php php php php php php php php php php php php php php php php&php&php php$methodDeclaringClassInterfacephp-php>hasMethodphp(php$methodNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp php2php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$actionableNamephp php=php ucfirstphp(php$methodNamephp)php;

php php php php php php php php php php php php ifphp php(substrphp(php$actionableNamephp,php php-php6php)php php=php=php php'Actionphp'php)php php{
php php php php php php php php php php php php php php php php php$actionableNamephp php=php substrphp(php$actionableNamephp,php php0php,php php-php6php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$actionableMethodsphp[php$methodNamephp]php[php'methodNamephp'php]php php=php php$methodNamephp;

php php php php php php php php php php php php php$matchesphp php=php nullphp;
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php$specialtyRegexphp,php php$actionableNamephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php php$actionableMethodsphp[php$methodNamephp]php[php'actionNamephp'php]php php=php php$matchesphp[php1php]php;
php php php php php php php php php php php php php php php php php$actionableMethodsphp[php$methodNamephp]php[php'specialtyphp'php]php php=php php$matchesphp[php2php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$actionableMethodsphp[php$methodNamephp]php[php'actionNamephp'php]php php=php php$actionableNamephp;
php php php php php php php php php php php php php php php php php$actionableMethodsphp[php$methodNamephp]php[php'specialtyphp'php]php php=php php'php_Globalphp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php getphp thephp actionphp,php andphp createphp nonphp-existentphp actionsphp whenphp theyphp dontphp existphp php(thephp truephp partphp belowphp)
php php php php php php php php php php php php php$actionphp php=php php$thisphp-php>php_registryphp-php>getActionRepositoryphp(php)php-php>getActionphp(php$actionableMethodsphp[php$methodNamephp]php[php'actionNamephp'php]php)php;
php php php php php php php php php php php php ifphp php(php$actionphp php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$actionphp php=php newphp Zendphp_Toolphp_Frameworkphp_Actionphp_Basephp(php$actionableMethodsphp[php$methodNamephp]php[php'actionNamephp'php]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getActionRepositoryphp(php)php-php>addActionphp(php$actionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$actionableMethodsphp[php$methodNamephp]php[php'actionphp'php]php php=php php$actionphp;

php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$actionableMethodsphp[php$methodNamephp]php[php'actionphp'php]php,php php$thisphp-php>php_actionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_actionsphp[php]php php=php php$actionableMethodsphp[php$methodNamephp]php[php'actionphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$parameterInfophp php=php arrayphp(php)php;
php php php php php php php php php php php php php$positionphp php=php php1php;
php php php php php php php php php php php php foreachphp php(php$methodphp-php>getParametersphp(php)php asphp php$parameterphp)php php{
php php php php php php php php php php php php php php php php php$currentParamphp php=php php$parameterphp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php$parameterInfophp[php$currentParamphp]php[php'positionphp'php]php php php php php=php php$positionphp+php+php;
php php php php php php php php php php php php php php php php php$parameterInfophp[php$currentParamphp]php[php'optionalphp'php]php php php php php=php php$parameterphp-php>isOptionalphp(php)php;
php php php php php php php php php php php php php php php php php$parameterInfophp[php$currentParamphp]php[php'defaultphp'php]php php php php php php=php php(php$parameterphp-php>isOptionalphp(php)php)php php?php php$parameterphp-php>getDefaultValuephp(php)php php:php nullphp;
php php php php php php php php php php php php php php php php php$parameterInfophp[php$currentParamphp]php[php'namephp'php]php php php php php php php php php=php php$currentParamphp;
php php php php php php php php php php php php php php php php php$parameterInfophp[php$currentParamphp]php[php'typephp'php]php php php php php php php php php=php php'stringphp'php;
php php php php php php php php php php php php php php php php php$parameterInfophp[php$currentParamphp]php[php'descriptionphp'php]php php=php nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$matchesphp php=php nullphp;
php php php php php php php php php php php php ifphp php(php(php$docCommentphp php=php php$methodphp-php>getDocCommentphp(php)php)php php!php=php php'php'php php&php&
php php php php php php php php php php php php php php php php php(pregphp_matchphp_allphp(php'php/php@paramphp\sphp+php(php\wphp+php)php+php\sphp+php(php\php$php\Sphp+php)php\sphp+php(php.php*php?php)php(php?php=php(php?php:php\php*php\sphp*php@php)php|php(php?php:php\php*php\php/php)php)php/sphp'php,php php$docCommentphp,php php$matchesphp)php)php)
php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php forphp php(php$iphp=php0php;php php$iphp <php=php countphp(php$matchesphp[php0php]php)php-php1php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$currentParamphp php=php ltrimphp(php$matchesphp[php2php]php[php$iphp]php,php php'php$php'php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$currentParamphp php!php=php php'php'php php&php&php issetphp(php$parameterInfophp[php$currentParamphp]php)php)php php{

php php php php php php php php php php php php php php php php php php php php php php php php php$parameterInfophp[php$currentParamphp]php[php'typephp'php]php php=php php$matchesphp[php1php]php[php$iphp]php;

php php php php php php php php php php php php php php php php php php php php php php php php php$descriptionSourcephp php=php php$matchesphp[php3php]php[php$iphp]php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$descriptionSourcephp php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$parameterInfophp[php$currentParamphp]php[php'descriptionphp'php]php php=php trimphp(php$descriptionSourcephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}

php php php php php php php php php php php php php$actionableMethodsphp[php$methodNamephp]php[php'parameterInfophp'php]php php=php php$parameterInfophp;

php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_actionableMethodsphp php=php php$actionableMethodsphp;
php php php php php}

php}