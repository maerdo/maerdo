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
php php*php php@versionphp php php php php$Idphp:php HelperAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Viewphp_Helperphp_Navigationphp_Helper
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Navigationphp/Helperphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Viewphp_Helperphp_HtmlElement
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/HtmlElementphp.phpphp'php;

php/php*php*
php php*php Basephp classphp forphp navigationalphp helpers
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstract
php php php php extendsphp Zendphp_Viewphp_Helperphp_HtmlElement
php php php php implementsphp Zendphp_Viewphp_Helperphp_Navigationphp_Helper
php{
php php php php php/php*php*
php php php php php php*php Containerphp tophp operatephp onphp byphp default
php php php php php php*
php php php php php php*php php@varphp Zendphp_Navigationphp_Container
php php php php php php*php/
php php php php protectedphp php$php_containerphp;

php php php php php/php*php*
php php php php php php*php Thephp minimumphp depthphp aphp pagephp mustphp havephp tophp bephp includedphp whenphp rendering
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_minDepthphp;

php php php php php/php*php*
php php php php php php*php Thephp maximumphp depthphp aphp pagephp canphp havephp tophp bephp includedphp whenphp rendering
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_maxDepthphp;

php php php php php/php*php*
php php php php php php*php Indentationphp string
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_indentphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Translator
php php php php php php*
php php php php php php*php php@varphp Zendphp_Translatephp_Adapter
php php php php php php*php/
php php php php protectedphp php$php_translatorphp;

php php php php php/php*php*
php php php php php php*php ACLphp tophp usephp whenphp iteratingphp pages
php php php php php php*
php php php php php php*php php@varphp Zendphp_Acl
php php php php php php*php/
php php php php protectedphp php$php_aclphp;

php php php php php/php*php*
php php php php php php*php Wheterphp invisiblephp itemsphp shouldphp bephp renderedphp byphp thisphp helper
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_renderInvisiblephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php ACLphp rolephp tophp usephp whenphp iteratingphp pages
php php php php php php*
php php php php php php*php php@varphp stringphp|Zendphp_Aclphp_Rolephp_Interface
php php php php php php*php/
php php php php protectedphp php$php_rolephp;

php php php php php/php*php*
php php php php php php*php Whetherphp translatorphp shouldphp bephp usedphp forphp pagephp labelsphp andphp titles
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_useTranslatorphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Whetherphp ACLphp shouldphp bephp usedphp forphp filteringphp outphp pages
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_useAclphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Defaultphp ACLphp tophp usephp whenphp iteratingphp pagesphp ifphp notphp explicitlyphp setphp inphp the
php php php php php php*php instancephp byphp callingphp php{php@linkphp setAclphp(php)php}
php php php php php php*
php php php php php php*php php@varphp Zendphp_Acl
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultAclphp;

php php php php php/php*php*
php php php php php php*php Defaultphp ACLphp rolephp tophp usephp whenphp iteratingphp pagesphp ifphp notphp explicitlyphp setphp inphp the
php php php php php php*php instancephp byphp callingphp php{php@linkphp setRolephp(php)php}
php php php php php php*
php php php php php php*php php@varphp stringphp|Zendphp_Aclphp_Rolephp_Interface
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultRolephp;

php php php php php/php/php Accessorsphp:

php php php php php/php*php*
php php php php php php*php Setsphp navigationphp containerphp thephp helperphp operatesphp onphp byphp default
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Interfacephp:php:setContainerphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php php php php php php php[optionalphp]php container
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php tophp operatephp onphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Defaultphp isphp nullphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php meaningphp container
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php willphp bephp resetphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setContainerphp(Zendphp_Navigationphp_Containerphp php$containerphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_containerphp php=php php$containerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp navigationphp containerphp helperphp operatesphp onphp byphp default
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Interfacephp:php:getContainerphp(php)php}php.
php php php php php php*
php php php php php php*php Ifphp aphp helperphp isphp notphp explicitlyphp setphp inphp thisphp helperphp instancephp byphp calling
php php php php php php*php php{php@linkphp setContainerphp(php)php}php orphp byphp passingphp itphp throughphp thephp helperphp entryphp pointphp,
php php php php php php*php thisphp methodphp willphp lookphp inphp php{php@linkphp Zendphp_Registryphp}php forphp aphp containerphp byphp using
php php php php php php*php thephp keyphp php'Zendphp_Navigationphp'php.
php php php php php php*
php php php php php php*php Ifphp nophp containerphp isphp setphp,php andphp nothingphp isphp foundphp inphp Zendphp_Registryphp,php aphp new
php php php php php php*php containerphp willphp bephp instantiatedphp andphp storedphp inphp thephp helperphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Navigationphp_Containerphp php navigationphp container
php php php php php php*php/
php php php php publicphp functionphp getContainerphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_containerphp)php php{
php php php php php php php php php php php php php/php/php tryphp tophp fetchphp fromphp registryphp first
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Navigationphp'php)php)php php{
php php php php php php php php php php php php php php php php php$navphp php=php Zendphp_Registryphp:php:getphp(php'Zendphp_Navigationphp'php)php;
php php php php php php php php php php php php php php php php ifphp php(php$navphp instanceofphp Zendphp_Navigationphp_Containerphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_containerphp php=php php$navphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php nothingphp foundphp inphp registryphp,php createphp newphp container
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_containerphp php=php newphp Zendphp_Navigationphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp minimumphp depthphp aphp pagephp mustphp havephp tophp bephp includedphp whenphp rendering
php php php php php php*
php php php php php php*php php@paramphp php intphp php$minDepthphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php minimum
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php depthphp.php Defaultphp is
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp,php whichphp sets
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nophp minimumphp depthphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setMinDepthphp(php$minDepthphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$minDepthphp php|php|php isphp_intphp(php$minDepthphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_minDepthphp php=php php$minDepthphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_minDepthphp php=php php(intphp)php php$minDepthphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp minimumphp depthphp aphp pagephp mustphp havephp tophp bephp includedphp whenphp rendering
php php php php php php*
php php php php php php*php php@returnphp intphp|nullphp php minimumphp depthphp orphp null
php php php php php php*php/
php php php php publicphp functionphp getMinDepthphp(php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_intphp(php$thisphp-php>php_minDepthphp)php php|php|php php$thisphp-php>php_minDepthphp <php php0php)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_minDepthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maximumphp depthphp aphp pagephp canphp havephp tophp bephp includedphp whenphp rendering
php php php php php php*
php php php php php php*php php@paramphp php intphp php$maxDepthphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php maximum
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php depthphp.php Defaultphp is
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp,php whichphp setsphp no
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php maximumphp depthphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setMaxDepthphp(php$maxDepthphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$maxDepthphp php|php|php isphp_intphp(php$maxDepthphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_maxDepthphp php=php php$maxDepthphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_maxDepthphp php=php php(intphp)php php$maxDepthphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp maximumphp depthphp aphp pagephp canphp havephp tophp bephp includedphp whenphp rendering
php php php php php php*
php php php php php php*php php@returnphp intphp|nullphp php maximumphp depthphp orphp null
php php php php php php*php/
php php php php publicphp functionphp getMaxDepthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_maxDepthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp indentationphp stringphp forphp usingphp inphp php{php@linkphp renderphp(php)php}php,php optionallyphp a
php php php php php php*php numberphp ofphp spacesphp tophp indentphp with
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$indentphp php php php php php php php php php php php php php php php php php php php php php php php php php indentationphp stringphp or
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php numberphp ofphp spaces
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setIndentphp(php$indentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_indentphp php=php php$thisphp-php>php_getWhitespacephp(php$indentphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp indentation
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIndentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_indentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp translatorphp tophp usephp inphp helper
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:setTranslatorphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$translatorphp php php php php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php translatorphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Expectsphp anphp objectphp of
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php type
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp Zendphp_Translatephp_Adapterphp}
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php orphp php{php@linkphp Zendphp_Translatephp}php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php orphp nullphp.php Defaultphp is
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp,php whichphp setsphp no
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php translatorphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setTranslatorphp(php$translatorphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php php$translatorphp php|php|
php php php php php php php php php php php php php$translatorphp instanceofphp Zendphp_Translatephp_Adapterphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatorphp;
php php php php php php php php php}php elseifphp php(php$translatorphp instanceofphp Zendphp_Translatephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatorphp-php>getAdapterphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp translatorphp usedphp inphp helper
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:getTranslatorphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp|nullphp php translatorphp orphp null
php php php php php php*php/
php php php php publicphp functionphp getTranslatorphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_translatorphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Translatephp'php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setTranslatorphp(Zendphp_Registryphp:php:getphp(php'Zendphp_Translatephp'php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp ACLphp tophp usephp whenphp iteratingphp pages
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:setAclphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp php$aclphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php ACLphp objectphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Defaultphp isphp nullphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setAclphp(Zendphp_Aclphp php$aclphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_aclphp php=php php$aclphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ACLphp orphp nullphp ifphp itphp isnphp'tphp setphp usingphp php{php@linkphp setAclphp(php)php}php or
php php php php php php*php php{php@linkphp setDefaultAclphp(php)php}
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:getAclphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Aclphp|nullphp php ACLphp objectphp orphp null
php php php php php php*php/
php php php php publicphp functionphp getAclphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_aclphp php=php=php=php nullphp php&php&php selfphp:php:php$php_defaultAclphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp selfphp:php:php$php_defaultAclphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_aclphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp ACLphp rolephp(sphp)php tophp usephp whenphp iteratingphp pages
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:setRolephp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$rolephp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php rolephp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php setphp.php Expectsphp aphp stringphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php anphp instancephp ofphp type
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp Zendphp_Aclphp_Rolephp_Interfacephp}php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php orphp nullphp.php Defaultphp is
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp,php whichphp willphp set
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nophp rolephp.
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp php php php php php php php php php php php php php php php php php php php php php php php php ifphp php$rolephp isphp invalid
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setRolephp(php$rolephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$rolephp php|php|php isphp_stringphp(php$rolephp)php php|php|
php php php php php php php php php php php php php$rolephp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_rolephp php=php php$rolephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php'php$rolephp mustphp bephp aphp stringphp,php nullphp,php orphp anphp instancephp ofphp php'
php php php php php php php php php php php php php php php php php.php php php'Zendphp_Aclphp_Rolephp_Interfacephp;php php%sphp givenphp'php,
php php php php php php php php php php php php php php php php gettypephp(php$rolephp)
php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ACLphp rolephp tophp usephp whenphp iteratingphp pagesphp,php orphp nullphp ifphp itphp isnphp'tphp set
php php php php php php*php usingphp php{php@linkphp setRolephp(php)php}php orphp php{php@linkphp setDefaultRolephp(php)php}
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:getRolephp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp stringphp|Zendphp_Aclphp_Rolephp_Interfacephp|nullphp php rolephp orphp null
php php php php php php*php/
php php php php publicphp functionphp getRolephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_rolephp php=php=php=php nullphp php&php&php selfphp:php:php$php_defaultRolephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp selfphp:php:php$php_defaultRolephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_rolephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp whetherphp ACLphp shouldphp bephp used
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:setUseAclphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$useAclphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php whetherphp ACL
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php shouldphp bephp usedphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Defaultphp isphp truephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setUseAclphp(php$useAclphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_useAclphp php=php php(boolphp)php php$useAclphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp whetherphp ACLphp shouldphp bephp used
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:getUseAclphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp ACLphp shouldphp bephp used
php php php php php php*php/
php php php php publicphp functionphp getUseAclphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_useAclphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp renderInvisiblephp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getRenderInvisiblephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_renderInvisiblephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp invisiblephp itemsphp?
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$renderInvisiblephp php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php booleanphp flag
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interface
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setRenderInvisiblephp(php$renderInvisiblephp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_renderInvisiblephp php=php php(boolphp)php php$renderInvisiblephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp whetherphp translatorphp shouldphp bephp used
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:setUseTranslatorphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$useTranslatorphp php php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php whether
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php translatorphp shouldphp be
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php usedphp.php Defaultphp isphp truephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstractphp php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setUseTranslatorphp(php$useTranslatorphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_useTranslatorphp php=php php(boolphp)php php$useTranslatorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp whetherphp translatorphp shouldphp bephp used
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:getUseTranslatorphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp translatorphp shouldphp bephp used
php php php php php php*php/
php php php php publicphp functionphp getUseTranslatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_useTranslatorphp;
php php php php php}

php php php php php/php/php Magicphp overloadsphp:

php php php php php/php*php*
php php php php php php*php Magicphp overloadphp:php Proxyphp callsphp tophp thephp navigationphp container
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodphp php php php php php php php php php php php php methodphp namephp inphp container
php php php php php php*php php@paramphp php arrayphp php php$argumentsphp php php php php php php php php php php[optionalphp]php argumentsphp tophp pass
php php php php php php*php php@returnphp mixedphp php php php php php php php php php php php php php php php php php php php php php returnsphp whatphp thephp containerphp returns
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp methodphp doesphp notphp existphp inphp container
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$argumentsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(
php php php php php php php php php php php php php php php php arrayphp(php$thisphp-php>getContainerphp(php)php,php php$methodphp)php,
php php php php php php php php php php php php php php php php php$argumentsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp overloadphp:php Proxyphp tophp php{php@linkphp renderphp(php)php}php.
php php php php php php*
php php php php php php*php Thisphp methodphp willphp triggerphp anphp Ephp_USERphp_ERRORphp ifphp renderingphp thephp helperphp causes
php php php php php php*php anphp exceptionphp tophp bephp thrownphp.
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:php_php_toStringphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp php$thisphp-php>renderphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$msgphp php=php getphp_classphp(php$ephp)php php.php php'php:php php'php php.php php$ephp-php>getMessagephp(php)php;
php php php php php php php php php php php php triggerphp_errorphp(php$msgphp,php Ephp_USERphp_ERRORphp)php;
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php}

php php php php php/php/php Publicphp methodsphp:

php php php php php/php*php*
php php php php php php*php Findsphp thephp deepestphp activephp pagephp inphp thephp givenphp container
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php containerphp tophp search
php php php php php php*php php@paramphp php intphp|nullphp php php php php php php php php php php php php php php php php php php$minDepthphp php php php[optionalphp]php minimumphp depth
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php requiredphp forphp pagephp tophp be
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php validphp.php Defaultphp isphp tophp use
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp getMinDepthphp(php)php}php.php A
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp valuephp meansphp nophp minimum
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php depthphp requiredphp.
php php php php php php*php php@paramphp php intphp|nullphp php php php php php php php php php php php php php php php php php php$minDepthphp php php php[optionalphp]php maximumphp depth
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php aphp pagephp canphp havephp tophp be
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php validphp.php Defaultphp isphp tophp use
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp getMaxDepthphp(php)php}php.php A
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp valuephp meansphp nophp maximum
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php depthphp requiredphp.
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php anphp associativephp arrayphp with
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp valuesphp php'depthphp'php and
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'pagephp'php,php orphp anphp emptyphp array
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp notphp found
php php php php php php*php/
php php php php publicphp functionphp findActivephp(Zendphp_Navigationphp_Containerphp php$containerphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$minDepthphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$maxDepthphp php=php php-php1php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_intphp(php$minDepthphp)php)php php{
php php php php php php php php php php php php php$minDepthphp php=php php$thisphp-php>getMinDepthphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php!isphp_intphp(php$maxDepthphp)php php|php|php php$maxDepthphp <php php0php)php php&php&php nullphp php!php=php=php php$maxDepthphp)php php{
php php php php php php php php php php php php php$maxDepthphp php=php php$thisphp-php>getMaxDepthphp(php)php;
php php php php php php php php php}

php php php php php php php php php$foundphp php php=php nullphp;
php php php php php php php php php$foundDepthphp php=php php-php1php;
php php php php php php php php php$iteratorphp php=php newphp RecursiveIteratorIteratorphp(php$containerphp,
php php php php php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:CHILDphp_FIRSTphp)php;

php php php php php php php php foreachphp php(php$iteratorphp asphp php$pagephp)php php{
php php php php php php php php php php php php php$currDepthphp php=php php$iteratorphp-php>getDepthphp(php)php;
php php php php php php php php php php php php ifphp php(php$currDepthphp <php php$minDepthphp php|php|php php!php$thisphp-php>acceptphp(php$pagephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php pagephp isphp notphp accepted
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$pagephp-php>isActivephp(falsephp)php php&php&php php$currDepthphp php>php php$foundDepthphp)php php{
php php php php php php php php php php php php php php php php php/php/php foundphp anphp activephp pagephp atphp aphp deeperphp levelphp thanphp before
php php php php php php php php php php php php php php php php php$foundphp php=php php$pagephp;
php php php php php php php php php php php php php php php php php$foundDepthphp php=php php$currDepthphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_intphp(php$maxDepthphp)php php&php&php php$foundDepthphp php>php php$maxDepthphp)php php{
php php php php php php php php php php php php whilephp php(php$foundDepthphp php>php php$maxDepthphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php-php-php$foundDepthphp <php php$minDepthphp)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$foundphp php=php php$foundphp-php>getParentphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$foundphp instanceofphp Zendphp_Navigationphp_Pagephp)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$foundphp)php php{
php php php php php php php php php php php php returnphp arrayphp(php'pagephp'php php=php>php php$foundphp,php php'depthphp'php php=php>php php$foundDepthphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp helperphp hasphp aphp container
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:hasContainerphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp thephp helperphp hasphp aphp containerphp orphp not
php php php php php php*php/
php php php php publicphp functionphp hasContainerphp(php)
php php php php php{
php php php php php php php php returnphp nullphp php!php=php=php php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp helperphp hasphp anphp ACLphp instance
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:hasAclphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp thephp helperphp hasphp aphp anphp ACLphp instancephp orphp not
php php php php php php*php/
php php php php publicphp functionphp hasAclphp(php)
php php php php php{
php php php php php php php php returnphp nullphp php!php=php=php php$thisphp-php>php_aclphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp helperphp hasphp anphp ACLphp role
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:hasRolephp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp thephp helperphp hasphp aphp anphp ACLphp rolephp orphp not
php php php php php php*php/
php php php php publicphp functionphp hasRolephp(php)
php php php php php{
php php php php php php php php returnphp nullphp php!php=php=php php$thisphp-php>php_rolephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp helperphp hasphp aphp translator
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:hasTranslatorphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp thephp helperphp hasphp aphp translatorphp orphp not
php php php php php php*php/
php php php php publicphp functionphp hasTranslatorphp(php)
php php php php php{
php php php php php php php php returnphp nullphp php!php=php=php php$thisphp-php>php_translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp HTMLphp stringphp containingphp anphp php'aphp'php elementphp forphp thephp givenphp page
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Pagephp php$pagephp php pagephp tophp generatephp HTMLphp for
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php HTMLphp stringphp forphp thephp givenphp page
php php php php php php*php/
php php php php publicphp functionphp htmlifyphp(Zendphp_Navigationphp_Pagephp php$pagephp)
php php php php php{
php php php php php php php php php/php/php getphp labelphp andphp titlephp forphp translating
php php php php php php php php php$labelphp php=php php$pagephp-php>getLabelphp(php)php;
php php php php php php php php php$titlephp php=php php$pagephp-php>getTitlephp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>getUseTranslatorphp(php)php php&php&php php$tphp php=php php$thisphp-php>getTranslatorphp(php)php)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$labelphp)php php&php&php php!emptyphp(php$labelphp)php)php php{
php php php php php php php php php php php php php php php php php$labelphp php=php php$tphp-php>translatephp(php$labelphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$titlephp)php php&php&php php!emptyphp(php$titlephp)php)php php{
php php php php php php php php php php php php php php php php php$titlephp php=php php$tphp-php>translatephp(php$titlephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php getphp attribsphp forphp anchorphp element
php php php php php php php php php$attribsphp php=php arrayphp(
php php php php php php php php php php php php php'idphp'php php php php php php=php>php php$pagephp-php>getIdphp(php)php,
php php php php php php php php php php php php php'titlephp'php php php=php>php php$titlephp,
php php php php php php php php php php php php php'classphp'php php php=php>php php$pagephp-php>getClassphp(php)php,
php php php php php php php php php php php php php'hrefphp'php php php php=php>php php$pagephp-php>getHrefphp(php)php,
php php php php php php php php php php php php php'targetphp'php php=php>php php$pagephp-php>getTargetphp(php)
php php php php php php php php php)php;

php php php php php php php php returnphp php'php<aphp'php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)php php.php php'php>php'
php php php php php php php php php php php php php php.php php$thisphp-php>viewphp-php>escapephp(php$labelphp)
php php php php php php php php php php php php php php.php php'<php/aphp>php'php;
php php php php php}

php php php php php/php/php Iteratorphp filterphp methodsphp:

php php php php php/php*php*
php php php php php php*php Determinesphp whetherphp aphp pagephp shouldphp bephp acceptedphp whenphp iterating
php php php php php php*
php php php php php php*php Rulesphp:
php php php php php php*php php-php Ifphp aphp pagephp isphp notphp visiblephp itphp isphp notphp acceptedphp,php unlessphp RenderInvisiblephp has
php php php php php php*php php php beenphp setphp tophp truephp.
php php php php php php*php php-php Ifphp helperphp hasphp nophp ACLphp,php pagephp isphp accepted
php php php php php php*php php-php Ifphp helperphp hasphp ACLphp,php butphp nophp rolephp,php pagephp isphp notphp accepted
php php php php php php*php php-php Ifphp helperphp hasphp ACLphp andphp rolephp:
php php php php php php*php php php-php Pagephp isphp acceptedphp ifphp itphp hasphp nophp resourcephp orphp privilege
php php php php php php*php php php-php Pagephp isphp acceptedphp ifphp ACLphp allowsphp pagephp'sphp resourcephp orphp privilege
php php php php php php*php php-php Ifphp pagephp isphp acceptedphp byphp thephp rulesphp abovephp andphp php$recursivephp isphp truephp,php thephp page
php php php php php php*php php php willphp notphp bephp acceptedphp ifphp itphp isphp thephp descendantphp ofphp aphp nonphp-acceptedphp pagephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Pagephp php$pagephp php php php php php pagephp tophp check
php php php php php php*php php@paramphp php boolphp php php php php php php php php php php php php php php php php$recursivephp php php[optionalphp]php ifphp truephp,php pagephp willphp not
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php bephp acceptedphp ifphp itphp isphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php descendantphp ofphp aphp pagephp thatphp isphp not
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php acceptedphp.php Defaultphp isphp truephp.
php php php php php php*php php@returnphp boolphp php php php php php php php php php php php php php php php php php php php php php php php php php php php whetherphp pagephp shouldphp bephp accepted
php php php php php php*php/
php php php php publicphp functionphp acceptphp(Zendphp_Navigationphp_Pagephp php$pagephp,php php$recursivephp php=php truephp)
php php php php php{
php php php php php php php php php/php/php acceptphp byphp default
php php php php php php php php php$acceptphp php=php truephp;

php php php php php php php php ifphp php(php!php$pagephp-php>isVisiblephp(falsephp)php php&php&php php!php$thisphp-php>getRenderInvisiblephp(php)php)php php{
php php php php php php php php php php php php php/php/php donphp'tphp acceptphp invisiblephp pages
php php php php php php php php php php php php php$acceptphp php=php falsephp;
php php php php php php php php php}php elseifphp php(php$thisphp-php>getUseAclphp(php)php php&php&php php!php$thisphp-php>php_acceptAclphp(php$pagephp)php)php php{
php php php php php php php php php php php php php/php/php aclphp isphp notphp amused
php php php php php php php php php php php php php$acceptphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$acceptphp php&php&php php$recursivephp)php php{
php php php php php php php php php php php php php$parentphp php=php php$pagephp-php>getParentphp(php)php;
php php php php php php php php php php php php ifphp php(php$parentphp instanceofphp Zendphp_Navigationphp_Pagephp)php php{
php php php php php php php php php php php php php php php php php$acceptphp php=php php$thisphp-php>acceptphp(php$parentphp,php truephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$acceptphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinesphp whetherphp aphp pagephp shouldphp bephp acceptedphp byphp ACLphp whenphp iterating
php php php php php php*
php php php php php php*php Rulesphp:
php php php php php php*php php-php Ifphp helperphp hasphp nophp ACLphp,php pagephp isphp accepted
php php php php php php*php php-php Ifphp pagephp hasphp aphp resourcephp orphp privilegephp definedphp,php pagephp isphp accepted
php php php php php php*php php php ifphp thephp ACLphp allowsphp accessphp tophp itphp usingphp thephp helperphp'sphp role
php php php php php php*php php-php Ifphp pagephp hasphp nophp resourcephp orphp privilegephp,php pagephp isphp accepted
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Pagephp php$pagephp php pagephp tophp check
php php php php php php*php php@returnphp boolphp php php php php php php php php php php php php php php php php php php php php php php php whetherphp pagephp isphp acceptedphp byphp ACL
php php php php php php*php/
php php php php protectedphp functionphp php_acceptAclphp(Zendphp_Navigationphp_Pagephp php$pagephp)
php php php php php{
php php php php php php php php ifphp php(php!php$aclphp php=php php$thisphp-php>getAclphp(php)php)php php{
php php php php php php php php php php php php php/php/php nophp aclphp registeredphp meansphp donphp'tphp usephp acl
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$rolephp php=php php$thisphp-php>getRolephp(php)php;
php php php php php php php php php$resourcephp php=php php$pagephp-php>getResourcephp(php)php;
php php php php php php php php php$privilegephp php=php php$pagephp-php>getPrivilegephp(php)php;

php php php php php php php php ifphp php(php$resourcephp php|php|php php$privilegephp)php php{
php php php php php php php php php php php php php/php/php determinephp usingphp helperphp rolephp andphp pagephp resourcephp/privilege
php php php php php php php php php php php php returnphp php$aclphp-php>isAllowedphp(php$rolephp,php php$resourcephp,php php$privilegephp)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php/php Utilphp methodsphp:

php php php php php/php*php*
php php php php php php*php Retrievephp whitespacephp representationphp ofphp php$indent
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$indent
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getWhitespacephp(php$indentphp)
php php php php php{
php php php php php php php php ifphp php(isphp_intphp(php$indentphp)php)php php{
php php php php php php php php php php php php php$indentphp php=php strphp_repeatphp(php'php php'php,php php$indentphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php(stringphp)php php$indentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp anphp associativephp arrayphp tophp aphp stringphp ofphp tagphp attributesphp.
php php php php php php*
php php php php php php*php Overloadsphp php{php@linkphp Zendphp_Viewphp_Helperphp_HtmlElementphp:php:php_htmlAttribsphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$attribsphp php anphp arrayphp wherephp eachphp keyphp-valuephp pairphp isphp converted
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php tophp anphp attributephp namephp andphp value
php php php php php php*php php@returnphp stringphp php php php php php php php php php anphp attributephp string
php php php php php php*php/
php php php php protectedphp functionphp php_htmlAttribsphp(php$attribsphp)
php php php php php{
php php php php php php php php php/php/php filterphp outphp nullphp valuesphp andphp emptyphp stringphp values
php php php php php php php php foreachphp php(php$attribsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp php|php|php php(isphp_stringphp(php$valuephp)php php&php&php php!strlenphp(php$valuephp)php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$attribsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:php_htmlAttribsphp(php$attribsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp anphp ID
php php php php php php*
php php php php php php*php Overridesphp php{php@linkphp Zendphp_Viewphp_Helperphp_HtmlElementphp:php:php_normalizeIdphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_normalizeIdphp(php$valuephp)
php php php php php{
php php php php php php php php php$prefixphp php=php getphp_classphp(php$thisphp)php;
php php php php php php php php php$prefixphp php=php strtolowerphp(trimphp(substrphp(php$prefixphp,php strrposphp(php$prefixphp,php php'php_php'php)php)php,php php'php_php'php)php)php;

php php php php php php php php returnphp php$prefixphp php.php php'php-php'php php.php php$valuephp;
php php php php php}

php php php php php/php/php Staticphp methodsphp:

php php php php php/php*php*
php php php php php php*php Setsphp defaultphp ACLphp tophp usephp ifphp anotherphp ACLphp isphp notphp explicitlyphp set
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp php$aclphp php php[optionalphp]php ACLphp objectphp.php Defaultphp isphp nullphp,php which
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php setsphp nophp ACLphp objectphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultAclphp(Zendphp_Aclphp php$aclphp php=php nullphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultAclphp php=php php$aclphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp defaultphp ACLphp rolephp(sphp)php tophp usephp whenphp iteratingphp pagesphp ifphp notphp explicitly
php php php php php php*php setphp laterphp withphp php{php@linkphp setRolephp(php)php}
php php php php php php*
php php php php php php*php php@paramphp php midexphp php$rolephp php php php php php php php php php php php php php php php[optionalphp]php rolephp tophp setphp.php Expectsphp nullphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php stringphp,php orphp anphp instancephp of
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp Zendphp_Aclphp_Rolephp_Interfacephp}php.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Defaultphp isphp nullphp,php whichphp setsphp nophp default
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php rolephp.
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp php php php php php php ifphp rolephp isphp invalid
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultRolephp(php$rolephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$rolephp php|php|
php php php php php php php php php php php php isphp_stringphp(php$rolephp)php php|php|
php php php php php php php php php php php php php$rolephp instanceofphp Zendphp_Aclphp_Rolephp_Interfacephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_defaultRolephp php=php php$rolephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Viewphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'php$rolephp mustphp bephp nullphp|stringphp|Zendphp_Aclphp_Rolephp_Interfacephp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}
php}
