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
php php*php php@versionphp php php php php$Idphp:php Menuphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstract
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Navigationphp/HelperAbstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp renderingphp menusphp fromphp navigationphp containers
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Navigationphp_Menu
php php php php extendsphp Zendphp_Viewphp_Helperphp_Navigationphp_HelperAbstract
php{
php php php php php/php*php*
php php php php php php*php CSSphp classphp tophp usephp forphp thephp ulphp element
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_ulClassphp php=php php'navigationphp'php;

php php php php php/php*php*
php php php php php php*php Whetherphp onlyphp activephp branchphp shouldphp bephp rendered
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_onlyActiveBranchphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp parentsphp shouldphp bephp renderedphp whenphp onlyphp renderingphp activephp branch
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_renderParentsphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Partialphp viewphp scriptphp tophp usephp forphp renderingphp menu
php php php php php php*
php php php php php php*php php@varphp stringphp|array
php php php php php php*php/
php php php php protectedphp php$php_partialphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Viewphp helperphp entryphp pointphp:
php php php php php php*php Retrievesphp helperphp andphp optionallyphp setsphp containerphp tophp operatephp on
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php[optionalphp]php containerphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php operatephp on
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_Menuphp php php php php php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp menuphp(Zendphp_Navigationphp_Containerphp php$containerphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$containerphp)php php{
php php php php php php php php php php php php php$thisphp-php>setContainerphp(php$containerphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php/php Accessorsphp:

php php php php php/php*php*
php php php php php php*php Setsphp CSSphp classphp tophp usephp forphp thephp firstphp php'ulphp'php elementphp whenphp rendering
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$ulClassphp php php php php php php php php php php php php php php php php php php CSSphp classphp tophp set
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_Menuphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setUlClassphp(php$ulClassphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$ulClassphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_ulClassphp php=php php$ulClassphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp CSSphp classphp tophp usephp forphp thephp firstphp php'ulphp'php elementphp whenphp rendering
php php php php php php*
php php php php php php*php php@returnphp stringphp php CSSphp class
php php php php php php*php/
php php php php publicphp functionphp getUlClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_ulClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp flagphp indicatingphp whetherphp onlyphp activephp branchphp shouldphp bephp rendered
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flagphp php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php renderphp onlyphp active
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php branchphp.php Defaultphp isphp truephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_Menuphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setOnlyActiveBranchphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_onlyActiveBranchphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp flagphp indicatingphp whetherphp onlyphp activephp branchphp shouldphp bephp rendered
php php php php php php*
php php php php php php*php Byphp defaultphp,php thisphp valuephp isphp falsephp,php meaningphp thephp entirephp menuphp willphp be
php php php php php php*php bephp renderedphp.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp onlyphp activephp branchphp shouldphp bephp rendered
php php php php php php*php/
php php php php publicphp functionphp getOnlyActiveBranchphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_onlyActiveBranchphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablesphp/disablesphp renderingphp ofphp parentsphp whenphp onlyphp renderingphp activephp branch
php php php php php php*
php php php php php php*php Seephp php{php@linkphp setOnlyActiveBranchphp(php)php}php forphp morephp informationphp.
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flagphp php php php php php php php php php php php php php php php php php php php php php php php php[optionalphp]php renderphp parentsphp when
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderingphp activephp branchphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Defaultphp isphp truephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_Menuphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setRenderParentsphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_renderParentsphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp flagphp indicatingphp whetherphp parentsphp shouldphp bephp renderedphp whenphp rendering
php php php php php php*php onlyphp thephp activephp branch
php php php php php php*
php php php php php php*php Byphp defaultphp,php thisphp valuephp isphp truephp.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp parentsphp shouldphp bephp rendered
php php php php php php*php/
php php php php publicphp functionphp getRenderParentsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_renderParentsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp whichphp partialphp viewphp scriptphp tophp usephp forphp renderingphp menu
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$partialphp php php php php php php php php php php php php partialphp viewphp scriptphp orphp nullphp.php If
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php anphp arrayphp isphp givenphp,php itphp is
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php expectedphp tophp containphp twophp valuesphp;
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp partialphp viewphp scriptphp tophp usephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php andphp thephp modulephp wherephp thephp script
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php canphp bephp foundphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Navigationphp_Menuphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setPartialphp(php$partialphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$partialphp php|php|php isphp_stringphp(php$partialphp)php php|php|php isphp_arrayphp(php$partialphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_partialphp php=php php$partialphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp partialphp viewphp scriptphp tophp usephp forphp renderingphp menu
php php php php php php*
php php php php php php*php php@returnphp stringphp|arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getPartialphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_partialphp;
php php php php php}

php php php php php/php/php Publicphp methodsphp:

php php php php php/php*php*
php php php php php php*php Returnsphp anphp HTMLphp stringphp containingphp anphp php'aphp'php elementphp forphp thephp givenphp pagephp if
php php php php php php*php thephp pagephp'sphp hrefphp isphp notphp emptyphp,php andphp aphp php'spanphp'php elementphp ifphp itphp isphp empty
php php php php php php*
php php php php php php*php Overridesphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Abstractphp:php:htmlifyphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Pagephp php$pagephp php pagephp tophp generatephp HTMLphp for
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php HTMLphp stringphp forphp thephp givenphp page
php php php php php php*php/
php php php php publicphp functionphp htmlifyphp(Zendphp_Navigationphp_Pagephp php$pagephp)
php php php php php{
php php php php php php php php php/php/php getphp labelphp andphp titlephp forphp translating
php php php php php php php php php$labelphp php=php php$pagephp-php>getLabelphp(php)php;
php php php php php php php php php$titlephp php=php php$pagephp-php>getTitlephp(php)php;

php php php php php php php php php/php/php translatephp labelphp andphp titlephp?
php php php php php php php php ifphp php(php$thisphp-php>getUseTranslatorphp(php)php php&php&php php$tphp php=php php$thisphp-php>getTranslatorphp(php)php)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$labelphp)php php&php&php php!emptyphp(php$labelphp)php)php php{
php php php php php php php php php php php php php php php php php$labelphp php=php php$tphp-php>translatephp(php$labelphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$titlephp)php php&php&php php!emptyphp(php$titlephp)php)php php{
php php php php php php php php php php php php php php php php php$titlephp php=php php$tphp-php>translatephp(php$titlephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php getphp attribsphp forphp element
php php php php php php php php php$attribsphp php=php arrayphp(
php php php php php php php php php php php php php'idphp'php php php php php php=php>php php$pagephp-php>getIdphp(php)php,
php php php php php php php php php php php php php'titlephp'php php php=php>php php$titlephp,
php php php php php php php php php php php php php'classphp'php php php=php>php php$pagephp-php>getClassphp(php)
php php php php php php php php php)php;

php php php php php php php php php/php/php doesphp pagephp havephp aphp hrefphp?
php php php php php php php php ifphp php(php$hrefphp php=php php$pagephp-php>getHrefphp(php)php)php php{
php php php php php php php php php php php php php$elementphp php=php php'aphp'php;
php php php php php php php php php php php php php$attribsphp[php'hrefphp'php]php php=php php$hrefphp;
php php php php php php php php php php php php php$attribsphp[php'targetphp'php]php php=php php$pagephp-php>getTargetphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$elementphp php=php php'spanphp'php;
php php php php php php php php php}

php php php php php php php php returnphp php'<php'php php.php php$elementphp php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)php php.php php'php>php'
php php php php php php php php php php php php php php.php php$thisphp-php>viewphp-php>escapephp(php$labelphp)
php php php php php php php php php php php php php php.php php'<php/php'php php.php php$elementphp php.php php'php>php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizesphp givenphp renderphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php php[optionalphp]php optionsphp tophp normalize
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php normalizedphp options
php php php php php php*php/
php php php php protectedphp functionphp php_normalizeOptionsphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'indentphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'indentphp'php]php php=php php$thisphp-php>php_getWhitespacephp(php$optionsphp[php'indentphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$optionsphp[php'indentphp'php]php php=php php$thisphp-php>getIndentphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'ulClassphp'php]php)php php&php&php php$optionsphp[php'ulClassphp'php]php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$optionsphp[php'ulClassphp'php]php php=php php(stringphp)php php$optionsphp[php'ulClassphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$optionsphp[php'ulClassphp'php]php php=php php$thisphp-php>getUlClassphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'minDepthphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$optionsphp[php'minDepthphp'php]php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'minDepthphp'php]php php=php php(intphp)php php$optionsphp[php'minDepthphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$optionsphp[php'minDepthphp'php]php php=php php$thisphp-php>getMinDepthphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$optionsphp[php'minDepthphp'php]php <php php0php php|php|php php$optionsphp[php'minDepthphp'php]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$optionsphp[php'minDepthphp'php]php php=php php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'maxDepthphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$optionsphp[php'maxDepthphp'php]php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'maxDepthphp'php]php php=php php(intphp)php php$optionsphp[php'maxDepthphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$optionsphp[php'maxDepthphp'php]php php=php php$thisphp-php>getMaxDepthphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'onlyActiveBranchphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'onlyActiveBranchphp'php]php php=php php$thisphp-php>getOnlyActiveBranchphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'renderParentsphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'renderParentsphp'php]php php=php php$thisphp-php>getRenderParentsphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$optionsphp;
php php php php php}

php php php php php/php/php Renderphp methodsphp:

php php php php php/php*php*
php php php php php php*php Rendersphp thephp deepestphp activephp menuphp withinphp php[php$minDepthphp,php php$maxDethphp]php,php php(called
php php php php php php*php fromphp php{php@linkphp renderMenuphp(php)php}php)
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php containerphp tophp render
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php php$activephp php php php php activephp pagephp andphp depth
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$ulClassphp php php php CSSphp classphp forphp firstphp UL
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$indentphp php php php php initialphp indentation
php php php php php php*php php@paramphp php intphp|nullphp php php php php php php php php php php php php php php php php php php$minDepthphp php php minimumphp depth
php php php php php php*php php@paramphp php intphp|nullphp php php php php php php php php php php php php php php php php php php$maxDepthphp php php maximumphp depth
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderedphp menu
php php php php php php*php/
php php php php protectedphp functionphp php_renderDeepestMenuphp(Zendphp_Navigationphp_Containerphp php$containerphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$ulClassphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$indentphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$minDepthphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$maxDepthphp)
php php php php php{
php php php php php php php php ifphp php(php!php$activephp php=php php$thisphp-php>findActivephp(php$containerphp,php php$minDepthphp php-php php1php,php php$maxDepthphp)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php/php/php specialphp casephp ifphp activephp pagephp isphp onephp belowphp minDepth
php php php php php php php php ifphp php(php$activephp[php'depthphp'php]php <php php$minDepthphp)php php{
php php php php php php php php php php php php ifphp php(php!php$activephp[php'pagephp'php]php-php>hasPagesphp(php)php)php php{
php php php php php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!php$activephp[php'pagephp'php]php-php>hasPagesphp(php)php)php php{
php php php php php php php php php php php php php/php/php foundphp pagesphp hasphp nophp childrenphp;php renderphp siblings
php php php php php php php php php php php php php$activephp[php'pagephp'php]php php=php php$activephp[php'pagephp'php]php-php>getParentphp(php)php;
php php php php php php php php php}php elsephp ifphp php(isphp_intphp(php$maxDepthphp)php php&php&php php$activephp[php'depthphp'php]php php+php1php php>php php$maxDepthphp)php php{
php php php php php php php php php php php php php/php/php childrenphp arephp belowphp maxphp depthphp;php renderphp siblings
php php php php php php php php php php php php php$activephp[php'pagephp'php]php php=php php$activephp[php'pagephp'php]php-php>getParentphp(php)php;
php php php php php php php php php}

php php php php php php php php php$ulClassphp php=php php$ulClassphp php?php php'php classphp=php"php'php php.php php$ulClassphp php.php php'php"php'php php:php php'php'php;
php php php php php php php php php$htmlphp php=php php$indentphp php.php php'php<ulphp'php php.php php$ulClassphp php.php php'php>php'php php.php selfphp:php:EOLphp;

php php php php php php php php foreachphp php(php$activephp[php'pagephp'php]php asphp php$subPagephp)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>acceptphp(php$subPagephp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$liClassphp php=php php$subPagephp-php>isActivephp(truephp)php php?php php'php classphp=php"activephp"php'php php:php php'php'php;
php php php php php php php php php php php php php$htmlphp php.php=php php$indentphp php.php php'php php php php php<liphp'php php.php php$liClassphp php.php php'php>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php$htmlphp php.php=php php$indentphp php.php php'php php php php php php php php php'php php.php php$thisphp-php>htmlifyphp(php$subPagephp)php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php$htmlphp php.php=php php$indentphp php.php php'php php php php <php/liphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php}

php php php php php php php php php$htmlphp php.php=php php$indentphp php.php php'<php/ulphp>php'php;

php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rendersphp aphp normalphp menuphp php(calledphp fromphp php{php@linkphp renderMenuphp(php)php}php)
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php containerphp tophp render
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$ulClassphp php php php php CSSphp classphp forphp firstphp UL
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$indentphp php php php php php initialphp indentation
php php php php php php*php php@paramphp php intphp|nullphp php php php php php php php php php php php php php php php php php php$minDepthphp php php php minimumphp depth
php php php php php php*php php@paramphp php intphp|nullphp php php php php php php php php php php php php php php php php php php$maxDepthphp php php php maximumphp depth
php php php php php php*php php@paramphp php boolphp php php php php php php php php php php php php php php php php php php php php php php$onlyActivephp php renderphp onlyphp activephp branchphp?
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_renderMenuphp(Zendphp_Navigationphp_Containerphp php$containerphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$ulClassphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$indentphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$minDepthphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$maxDepthphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$onlyActivephp)
php php php php php{
php php php php php php php php php$htmlphp php=php php'php'php;

php php php php php php php php php/php/php findphp deepestphp active
php php php php php php php php ifphp php(php$foundphp php=php php$thisphp-php>findActivephp(php$containerphp,php php$minDepthphp,php php$maxDepthphp)php)php php{
php php php php php php php php php php php php php$foundPagephp php=php php$foundphp[php'pagephp'php]php;
php php php php php php php php php php php php php$foundDepthphp php=php php$foundphp[php'depthphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$foundPagephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php/php/php createphp iterator
php php php php php php php php php$iteratorphp php=php newphp RecursiveIteratorIteratorphp(php$containerphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;
php php php php php php php php ifphp php(isphp_intphp(php$maxDepthphp)php)php php{
php php php php php php php php php php php php php$iteratorphp-php>setMaxDepthphp(php$maxDepthphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php iteratephp container
php php php php php php php php php$prevDepthphp php=php php-php1php;
php php php php php php php php foreachphp php(php$iteratorphp asphp php$pagephp)php php{
php php php php php php php php php php php php php$depthphp php=php php$iteratorphp-php>getDepthphp(php)php;
php php php php php php php php php php php php php$isActivephp php=php php$pagephp-php>isActivephp(truephp)php;
php php php php php php php php php php php php ifphp php(php$depthphp <php php$minDepthphp php|php|php php!php$thisphp-php>acceptphp(php$pagephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php pagephp isphp belowphp minDepthphp orphp notphp acceptedphp byphp aclphp/visibilty
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$onlyActivephp php&php&php php!php$isActivephp)php php{
php php php php php php php php php php php php php php php php php/php/php pagephp isphp notphp activephp itselfphp,php butphp mightphp bephp inphp thephp activephp branch
php php php php php php php php php php php php php php php php php$acceptphp php=php falsephp;
php php php php php php php php php php php php php php php php ifphp php(php$foundPagephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$foundPagephp-php>hasPagephp(php$pagephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php acceptphp ifphp pagephp isphp aphp directphp childphp ofphp thephp activephp page
php php php php php php php php php php php php php php php php php php php php php php php php php$acceptphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$foundPagephp-php>getParentphp(php)php-php>hasPagephp(php$pagephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php pagephp isphp aphp siblingphp ofphp thephp activephp pagephp.php.php.
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$foundPagephp-php>hasPagesphp(php)php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp_intphp(php$maxDepthphp)php php&php&php php$foundDepthphp php+php php1php php>php php$maxDepthphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php acceptphp ifphp activephp pagephp hasphp nophp childrenphp,php orphp the
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php childrenphp arephp toophp deepphp tophp bephp rendered
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$acceptphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!php$acceptphp)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php makephp surephp indentationphp isphp correct
php php php php php php php php php php php php php$depthphp php-php=php php$minDepthphp;
php php php php php php php php php php php php php$myIndentphp php=php php$indentphp php.php strphp_repeatphp(php'php php php php php php php php php'php,php php$depthphp)php;

php php php php php php php php php php php php ifphp php(php$depthphp php>php php$prevDepthphp)php php{
php php php php php php php php php php php php php php php php php/php/php startphp newphp ulphp tag
php php php php php php php php php php php php php php php php ifphp php(php$ulClassphp php&php&php php$depthphp php=php=php php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$ulClassphp php=php php'php classphp=php"php'php php.php php$ulClassphp php.php php'php"php'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$ulClassphp php=php php'php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$htmlphp php.php=php php$myIndentphp php.php php'php<ulphp'php php.php php$ulClassphp php.php php'php>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$prevDepthphp php>php php$depthphp)php php{
php php php php php php php php php php php php php php php php php/php/php closephp liphp/ulphp tagsphp untilphp wephp'rephp atphp currentphp depth
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php$prevDepthphp;php php$iphp php>php php$depthphp;php php$iphp-php-php)php php{
php php php php php php php php php php php php php php php php php php php php php$indphp php=php php$indentphp php.php strphp_repeatphp(php'php php php php php php php php php'php,php php$iphp)php;
php php php php php php php php php php php php php php php php php php php php php$htmlphp php.php=php php$indphp php.php php'php php php php <php/liphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php php php php php php php php php$htmlphp php.php=php php$indphp php.php php'<php/ulphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php closephp previousphp liphp tag
php php php php php php php php php php php php php php php php php$htmlphp php.php=php php$myIndentphp php.php php'php php php php <php/liphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php closephp previousphp liphp tag
php php php php php php php php php php php php php php php php php$htmlphp php.php=php php$myIndentphp php.php php'php php php php <php/liphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php renderphp liphp tagphp andphp page
php php php php php php php php php php php php php$liClassphp php=php php$isActivephp php?php php'php classphp=php"activephp"php'php php:php php'php'php;
php php php php php php php php php php php php php$htmlphp php.php=php php$myIndentphp php.php php'php php php php php<liphp'php php.php php$liClassphp php.php php'php>php'php php.php selfphp:php:EOL
php php php php php php php php php php php php php php php php php php php php.php php$myIndentphp php.php php'php php php php php php php php php'php php.php php$thisphp-php>htmlifyphp(php$pagephp)php php.php selfphp:php:EOLphp;

php php php php php php php php php php php php php/php/php storephp asphp previousphp depthphp forphp nextphp iteration
php php php php php php php php php php php php php$prevDepthphp php=php php$depthphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$htmlphp)php php{
php php php php php php php php php php php php php/php/php donephp iteratingphp containerphp;php closephp openphp ulphp/liphp tags
php php php php php php php php php php php php forphp php(php$iphp php=php php$prevDepthphp+php1php;php php$iphp php>php php0php;php php$iphp-php-php)php php{
php php php php php php php php php php php php php php php php php$myIndentphp php=php php$indentphp php.php strphp_repeatphp(php'php php php php php php php php php'php,php php$iphp-php1php)php;
php php php php php php php php php php php php php php php php php$htmlphp php.php=php php$myIndentphp php.php php'php php php php <php/liphp>php'php php.php selfphp:php:EOL
php php php php php php php php php php php php php php php php php php php php php php php php.php php$myIndentphp php.php php'<php/ulphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$htmlphp php=php rtrimphp(php$htmlphp,php selfphp:php:EOLphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rendersphp helper
php php php php php php*
php php php php php php*php Rendersphp aphp HTMLphp php'ulphp'php forphp thephp givenphp php$containerphp.php Ifphp php$containerphp isphp notphp givenphp,
php php php php php php*php thephp containerphp registeredphp inphp thephp helperphp willphp bephp usedphp.
php php php php php php*
php php php php php php*php Availablephp php$optionsphp:
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php[optionalphp]php containerphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php createphp menuphp fromphp.php Default
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp tophp usephp thephp container
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php retrievedphp from
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp getContainerphp(php)php}php.
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php php$optionsphp php php php php[optionalphp]php optionsphp for
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php controllingphp rendering
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderedphp menu
php php php php php php*php/
php php php php publicphp functionphp renderMenuphp(Zendphp_Navigationphp_Containerphp php$containerphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$containerphp)php php{
php php php php php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_normalizeOptionsphp(php$optionsphp)php;

php php php php php php php php ifphp php(php$optionsphp[php'onlyActiveBranchphp'php]php php&php&php php!php$optionsphp[php'renderParentsphp'php]php)php php{
php php php php php php php php php php php php php$htmlphp php=php php$thisphp-php>php_renderDeepestMenuphp(php$containerphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'ulClassphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'indentphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'minDepthphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'maxDepthphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$htmlphp php=php php$thisphp-php>php_renderMenuphp(php$containerphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'ulClassphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'indentphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'minDepthphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'maxDepthphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'onlyActiveBranchphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rendersphp thephp innerphp-mostphp subphp menuphp forphp thephp activephp pagephp inphp thephp php$container
php php php php php php*
php php php php php php*php Thisphp isphp aphp conveniencephp methodphp whichphp isphp equivalentphp tophp thephp followingphp callphp:
php php php php php php*php php<codephp>
php php php php php php*php renderMenuphp(php$containerphp,php arrayphp(
php php php php php php*php php php php php php'indentphp'php php php php php php php php php php php php=php>php php$indentphp,
php php php php php php*php php php php php php'ulClassphp'php php php php php php php php php php php=php>php php$ulClassphp,
php php php php php php*php php php php php php'minDepthphp'php php php php php php php php php php=php>php nullphp,
php php php php php php*php php php php php php'maxDepthphp'php php php php php php php php php php=php>php nullphp,
php php php php php php*php php php php php php'onlyActiveBranchphp'php php=php>php truephp,
php php php php php php*php php php php php php'renderParentsphp'php php php php php=php>php false
php php php php php php*php php)php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php[optionalphp]php containerphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderphp.php Defaultphp isphp tophp render
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp containerphp registeredphp in
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp helperphp.
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$ulClassphp php php php php[optionalphp]php CSSphp classphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php usephp forphp ULphp elementphp.php Default
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp tophp usephp thephp valuephp from
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp getUlClassphp(php)php}php.
php php php php php php*php php@paramphp php stringphp|intphp php php php php php php php php php php php php php php php php$indentphp php php php php php[optionalphp]php indentationphp as
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php aphp stringphp orphp numberphp of
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php spacesphp.php Defaultphp isphp tophp use
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp valuephp retrievedphp from
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php@linkphp getIndentphp(php)php}php.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderedphp content
php php php php php php*php/
php php php php publicphp functionphp renderSubMenuphp(Zendphp_Navigationphp_Containerphp php$containerphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$ulClassphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$indentphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>renderMenuphp(php$containerphp,php arrayphp(
php php php php php php php php php php php php php'indentphp'php php php php php php php php php php php php=php>php php$indentphp,
php php php php php php php php php php php php php'ulClassphp'php php php php php php php php php php php=php>php php$ulClassphp,
php php php php php php php php php php php php php'minDepthphp'php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'maxDepthphp'php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'onlyActiveBranchphp'php php=php>php truephp,
php php php php php php php php php php php php php'renderParentsphp'php php php php php=php>php false
php php php php php php php php php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rendersphp thephp givenphp php$containerphp byphp invokingphp thephp partialphp viewphp helper
php php php php php php*
php php php php php php*php Thephp containerphp willphp simplyphp bephp passedphp onphp asphp aphp modelphp tophp thephp viewphp script
php php php php php php*php asphp-isphp,php andphp willphp bephp availablephp inphp thephp partialphp scriptphp asphp php'containerphp'php,php ephp.gphp.
php php php php php php*php php<codephp>echophp php'Numberphp ofphp pagesphp:php php'php,php countphp(php$thisphp-php>containerphp)php;<php/codephp>php.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php[optionalphp]php containerphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php passphp tophp viewphp scriptphp.php Default
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp tophp usephp thephp container
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php registeredphp inphp thephp helperphp.
php php php php php php*php php@paramphp php stringphp|arrayphp php php php php php php php php php php php php php$partialphp php php php php php[optionalphp]php partialphp view
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php scriptphp tophp usephp.php Defaultphp isphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php usephp thephp partialphp registered
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php inphp thephp helperphp.php Ifphp anphp array
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp givenphp,php itphp isphp expectedphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php containphp twophp valuesphp;php the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php partialphp viewphp scriptphp tophp usephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php andphp thephp modulephp wherephp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php scriptphp canphp bephp foundphp.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php helperphp output
php php php php php php*php/
php php php php publicphp functionphp renderPartialphp(Zendphp_Navigationphp_Containerphp php$containerphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partialphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$containerphp)php php{
php php php php php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$partialphp)php php{
php php php php php php php php php php php php php$partialphp php=php php$thisphp-php>getPartialphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$partialphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Unablephp tophp renderphp menuphp:php Nophp partialphp viewphp scriptphp providedphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$modelphp php=php arrayphp(
php php php php php php php php php php php php php'containerphp'php php=php>php php$container
php php php php php php php php php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$partialphp)php)php php{
php php php php php php php php php php php php ifphp php(countphp(php$partialphp)php php!php=php php2php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Unablephp tophp renderphp menuphp:php Aphp viewphp partialphp suppliedphp asphp php'
php php php php php php php php php php php php php php php php php php php php php.php php php'anphp arrayphp mustphp containphp twophp valuesphp:php partialphp viewphp php'
php php php php php php php php php php php php php php php php php php php php php.php php php'scriptphp andphp modulephp wherephp scriptphp canphp bephp foundphp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$thisphp-php>viewphp-php>partialphp(php$partialphp[php0php]php,php php$partialphp[php1php]php,php php$modelphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>viewphp-php>partialphp(php$partialphp,php nullphp,php php$modelphp)php;
php php php php php}

php php php php php/php/php Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:

php php php php php/php*php*
php php php php php php*php Rendersphp menu
php php php php php php*
php php php php php php*php Implementsphp php{php@linkphp Zendphp_Viewphp_Helperphp_Navigationphp_Helperphp:php:renderphp(php)php}php.
php php php php php php*
php php php php php php*php Ifphp aphp partialphp viewphp isphp registeredphp inphp thephp helperphp,php thephp menuphp willphp bephp rendered
php php php php php php*php usingphp thephp givenphp partialphp scriptphp.php Ifphp nophp partialphp isphp registeredphp,php thephp menu
php php php php php php*php willphp bephp renderedphp asphp anphp php'ulphp'php elementphp byphp thephp helperphp'sphp internalphp methodphp.
php php php php php php*
php php php php php php*php php@seephp renderPartialphp(php)
php php php php php php*php php@seephp renderMenuphp(php)
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Containerphp php$containerphp php php[optionalphp]php containerphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderphp.php Defaultphp isphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php renderphp thephp container
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php registeredphp inphp thephp helperphp.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php helperphp output
php php php php php php*php/
php php php php publicphp functionphp renderphp(Zendphp_Navigationphp_Containerphp php$containerphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$partialphp php=php php$thisphp-php>getPartialphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>renderPartialphp(php$containerphp,php php$partialphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>renderMenuphp(php$containerphp)php;
php php php php php php php php php}
php php php php php}
php}
