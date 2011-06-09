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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Navigationphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstract
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Navigationphp/HelperAbstractphp.phpphp'php;

php/php*php*
php php*php Proxyphp helperphp forphp retrievingphp navigationalphp helpersphp andphp forwardingphp calls
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Navigation
php php php php extendsphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstract
php{
php php php php php/php*php*
php php php php php php*php Viewphp helperphp namespace
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp NSphp php=php php'Zendphp_Viewphp_Helperphp_Navigationphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp proxyphp tophp usephp inphp php{php@linkphp renderphp(php)php}
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultProxyphp php=php php'menuphp'php;

php php php php php/php*php*
php php php php php php*php Containsphp referencesphp tophp proxiedphp helpers
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_helpersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp containerphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_injectContainerphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Whetherphp ACLphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_injectAclphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Whetherphp translatorphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_injectTranslatorphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Helperphp entryphp point
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php[optionalphp]php containerphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php operatephp on
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp php php php php php php php php php php fluentphp interfacephp,php returns
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php self
php php php php php php*php/
php php php php publicphp functionphp navigationphp(Zendphp_Navigationphp_Containerphp php$containerphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$containerphp)php php{
php php php php php php php php php php php php php$thisphp-php>setContainerphp(php$containerphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp overloadphp:php Proxyphp tophp otherphp navigationphp helpersphp orphp thephp container
php php php php php php*
php php php php php php*php Examplesphp ofphp usagephp fromphp aphp viewphp scriptphp orphp layoutphp:
php php php php php php*php php<codephp>
php php php php php php*php php/php/php proxyphp tophp Menuphp helperphp andphp renderphp containerphp:
php php php php php php*php echophp php$thisphp-php>navigationphp(php)php-php>menuphp(php)php;
php php php php php php*
php php php php php php*php php/php/php proxyphp tophp Breadcrumbsphp helperphp andphp setphp indentationphp:
php php php php php php*php php$thisphp-php>navigationphp(php)php-php>breadcrumbsphp(php)php-php>setIndentphp(php8php)php;
php php php php php php*
php php php php php php*php php/php/php proxyphp tophp containerphp andphp findphp allphp pagesphp withphp php'blogphp'php routephp:
php php php php php php*php php$blogPagesphp php=php php$thisphp-php>navigationphp(php)php-php>findAllByRoutephp(php'blogphp'php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodphp php php php php php php php php php php php php helperphp namephp orphp methodphp namephp in
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php container
php php php php php php*php php@paramphp php arrayphp php php$argumentsphp php php php php php php php php php php[optionalphp]php argumentsphp tophp pass
php php php php php php*php php@returnphp mixedphp php php php php php php php php php php php php php php php php php php php php php returnsphp whatphp thephp proxiedphp callphp returns
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp php php php php php php php ifphp proxyingphp tophp aphp helperphp,php andphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php helperphp isphp notphp anphp instancephp ofphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php interfacephp specifiedphp in
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp findHelperphp(php)php}
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp methodphp doesphp notphp existphp inphp container
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$argumentsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php checkphp ifphp callphp shouldphp proxyphp tophp anotherphp helper
php php php php php php php php ifphp php(php$helperphp php=php php$thisphp-php>findHelperphp(php$methodphp,php falsephp)php)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$helperphp,php php$methodphp)php,php php$argumentsphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php defaultphp behaviourphp:php proxyphp callphp tophp container
php php php php php php php php returnphp parentphp:php:php_php_callphp(php$methodphp,php php$argumentsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp helperphp matchingphp php$proxy
php php php php php php*
php php php php php php*php Thephp helperphp mustphp implementphp thephp interface
php php php php php php*php php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp}php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$proxyphp php php php php php php php php php php php php php php php php php php php php php php php helperphp name
php php php php php php*php php@paramphp boolphp php php php$strictphp php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php whether
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php exceptionsphp shouldphp be
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thrownphp ifphp somethingphp goes
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php wrongphp.php Defaultphp isphp truephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp php helperphp instance
php php php php php php*php php@throwsphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp php ifphp php$strictphp isphp truephp and
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php helperphp cannotphp bephp found
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp php php php php php php php php php php php php php php php php ifphp php$strictphp isphp truephp and
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php helperphp doesphp notphp implement
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp specifiedphp interface
php php php php php php*php/
php php php php publicphp functionphp findHelperphp(php$proxyphp,php php$strictphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_helpersphp[php$proxyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_helpersphp[php$proxyphp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>viewphp-php>getPluginLoaderphp(php'helperphp'php)php-php>getPathsphp(selfphp:php:NSphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>viewphp-php>addHelperPathphp(
php php php php php php php php php php php php php php php php php php php php strphp_replacephp(php'php_php'php,php php'php/php'php,php selfphp:php:NSphp)php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:NSphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$strictphp)php php{
php php php php php php php php php php php php php$helperphp php=php php$thisphp-php>viewphp-php>getHelperphp(php$proxyphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$helperphp php=php php$thisphp-php>viewphp-php>getHelperphp(php$proxyphp)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$helperphp instanceofphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp)php php{
php php php php php php php php php php php php ifphp php(php$strictphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Proxyphp helperphp php"php%sphp"php isphp notphp anphp instancephp ofphp php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php'Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php getphp_classphp(php$helperphp)php)php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_injectphp(php$helperphp)php;
php php php php php php php php php$thisphp-php>php_helpersphp[php$proxyphp]php php=php php$helperphp;

php php php php php php php php returnphp php$helperphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Injectsphp containerphp,php ACLphp,php andphp translatorphp tophp thephp givenphp php$helperphp ifphp this
php php php php php php*php helperphp isphp configuredphp tophp dophp so
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp php$helperphp php helperphp instance
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_injectphp(Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp php$helperphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getInjectContainerphp(php)php php&php&php php!php$helperphp-php>hasContainerphp(php)php)php php{
php php php php php php php php php php php php php$helperphp-php>setContainerphp(php$thisphp-php>getContainerphp(php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getInjectAclphp(php)php)php php{
php php php php php php php php php php php php ifphp php(php!php$helperphp-php>hasAclphp(php)php)php php{
php php php php php php php php php php php php php php php php php$helperphp-php>setAclphp(php$thisphp-php>getAclphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!php$helperphp-php>hasRolephp(php)php)php php{
php php php php php php php php php php php php php php php php php$helperphp-php>setRolephp(php$thisphp-php>getRolephp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getInjectTranslatorphp(php)php php&php&php php!php$helperphp-php>hasTranslatorphp(php)php)php php{
php php php php php php php php php php php php php$helperphp-php>setTranslatorphp(php$thisphp-php>getTranslatorphp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php/php Accessorsphp:

php php php php php/php*php*
php php php php php php*php Setsphp thephp defaultphp proxyphp tophp usephp inphp php{php@linkphp renderphp(php)php}
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$proxyphp php php php php php php php php php php php php php php php defaultphp proxy
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setDefaultProxyphp(php$proxyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultProxyphp php=php php(stringphp)php php$proxyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp defaultphp proxyphp tophp usephp inphp php{php@linkphp renderphp(php)php}
php php php php php php*
php php php php php php*php php@returnphp stringphp php thephp defaultphp proxyphp tophp usephp inphp php{php@linkphp renderphp(php)php}
php php php php php php*php/
php php php php publicphp functionphp getDefaultProxyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultProxyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp whetherphp containerphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@paramphp boolphp php$injectContainerphp php php php php php php php php php[optionalphp]php whetherphp containerphp should
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php bephp injectedphp whenphp proxyingphp.php Default
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp truephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setInjectContainerphp(php$injectContainerphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_injectContainerphp php=php php(boolphp)php php$injectContainerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp whetherphp containerphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp containerphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*php/
php php php php publicphp functionphp getInjectContainerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_injectContainerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp whetherphp ACLphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$injectAclphp php php php php php php php php php php php php php php[optionalphp]php whetherphp ACLphp shouldphp be
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php injectedphp whenphp proxyingphp.php Defaultphp is
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setInjectAclphp(php$injectAclphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_injectAclphp php=php php(boolphp)php php$injectAclphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp whetherphp ACLphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp ACLphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*php/
php php php php publicphp functionphp getInjectAclphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_injectAclphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp whetherphp translatorphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$injectTranslatorphp php php php php php php php[optionalphp]php whetherphp translatorphp should
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php bephp injectedphp whenphp proxyingphp.php Default
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp truephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setInjectTranslatorphp(php$injectTranslatorphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_injectTranslatorphp php=php php(boolphp)php php$injectTranslatorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp whetherphp translatorphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp translatorphp shouldphp bephp injectedphp whenphp proxying
php php php php php php*php/
php php php php publicphp functionphp getInjectTranslatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_injectTranslatorphp;
php php php php php}

php php php php php/php/php Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:

php php php php php/php*php*
php php php php php php*php Rendersphp helper
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php[optionalphp]php containerphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderphp.php Defaultphp isphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderphp thephp container
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php registeredphp inphp thephp helperphp.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php helperphp output
php php php php php php*php php@throwsphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp php php php ifphp helperphp cannotphp bephp found
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp php php php php php php php php php php php php php php php php php php ifphp helperphp doesnphp'tphp implement
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp interfacephp specifiedphp in
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp findHelperphp(php)php}
php php php php php php*php/
php php php php publicphp functionphp renderphp(Zendphp_Navigationphp_Containerphp php$containerphp php=php nullphp)
php php php php php{
php php php php php php php php php$helperphp php=php php$thisphp-php>findHelperphp(php$thisphp-php>getDefaultProxyphp(php)php)php;
php php php php php php php php returnphp php$helperphp-php>renderphp(php$containerphp)php;
php php php php php}
php}
