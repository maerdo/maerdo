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
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Paginatorphp.phpphp php2php2php8php6php5php php2php0php1php0php-php0php8php-php2php1php php1php2php:php2php8php:php0php9Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Loaderphp_PluginLoader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Json
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Paginator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Paginatorphp implementsphp Countablephp,php IteratorAggregate
php{
php php php php php/php*php*
php php php php php php*php Specifiesphp thatphp thephp factoryphp shouldphp tryphp tophp detectphp thephp properphp adapterphp typephp first
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp INTERNALphp_ADAPTERphp php=php php'Zendphp_Paginatorphp_Adapterphp_Internalphp'php;

php php php php php/php*php*
php php php php php php*php Thephp cachephp tagphp prefixphp usedphp tophp namespacephp Paginatorphp resultsphp inphp thephp cache
php php php php php php*
php php php php php php*php/
php php php php constphp CACHEphp_TAGphp_PREFIXphp php=php php'Zendphp_Paginatorphp_php'php;

php php php php php/php*php*
php php php php php php*php Adapterphp pluginphp loader
php php php php php php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp staticphp php$php_adapterLoaderphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Configurationphp file
php php php php php php*
php php php php php php*php php@varphp Zendphp_Config
php php php php php php*php/
php php php php protectedphp staticphp php$php_configphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Defaultphp scrollingphp style
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultScrollingStylephp php=php php'Slidingphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp itemphp countphp perphp page
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultItemCountPerPagephp php=php php1php0php;

php php php php php/php*php*
php php php php php php*php Defaultphp numberphp ofphp localphp pagesphp php(iphp.ephp.php,php thephp numberphp ofphp discretes
php php php php php php*php pagephp numbersphp thatphp willphp bephp displayedphp,php includingphp thephp current
php php php php php php*php pagephp numberphp)
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultPageRangephp php=php php1php0php;

php php php php php/php*php*
php php php php php php*php Scrollingphp stylephp pluginphp loader
php php php php php php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp staticphp php$php_scrollingStyleLoaderphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Cachephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cachephp_Core
php php php php php php*php/
php php php php protectedphp staticphp php$php_cachephp;

php php php php php/php*php*
php php php php php php*php Enablephp orphp disablephp thephp cachephp byphp Zendphp_Paginatorphp instance
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_cacheEnabledphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Adapter
php php php php php php*
php php php php php php*php php@varphp Zendphp_Paginatorphp_Adapterphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_adapterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp itemsphp inphp thephp currentphp page
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_currentItemCountphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Currentphp pagephp items
php php php php php php*
php php php php php php*php php@varphp Traversable
php php php php php php*php/
php php php php protectedphp php$php_currentItemsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Currentphp pagephp numberphp php(startingphp fromphp php1php)
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_currentPageNumberphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Resultphp filter
php php php php php php*
php php php php php php*php php@varphp Zendphp_Filterphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_filterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp itemsphp perphp page
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_itemCountPerPagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp pages
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_pageCountphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp localphp pagesphp php(iphp.ephp.php,php thephp numberphp ofphp discretephp pagephp numbers
php php php php php php*php thatphp willphp bephp displayedphp,php includingphp thephp currentphp pagephp numberphp)
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_pageRangephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Pages
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_pagesphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Viewphp instancephp usedphp forphp selfphp rendering
php php php php php php*
php php php php php php*php php@varphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_viewphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Addsphp anphp adapterphp prefixphp pathphp tophp thephp pluginphp loaderphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prefix
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php/
php php php php publicphp staticphp functionphp addAdapterPrefixPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php selfphp:php:getAdapterLoaderphp(php)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp anphp arrayphp ofphp adapterphp prefixphp pathsphp tophp thephp plugin
php php php php php php*php loaderphp.
php php php php php php*
php php php php php php*php php<codephp>
php php php php php php*php php$prefixPathsphp php=php arrayphp(
php php php php php php*php php php php php php'Myphp_Paginatorphp_Adapterphp'php php php php=php>php php'Myphp/Paginatorphp/Adapterphp/php'php,
php php php php php php*php php php php php php'Yourphp_Paginatorphp_Adapterphp'php php=php>php php'Yourphp/Paginatorphp/Adapterphp/php'
php php php php php php*php php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$prefixPaths
php php php php php php*php/
php php php php publicphp staticphp functionphp addAdapterPrefixPathsphp(arrayphp php$prefixPathsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$prefixPathsphp[php'prefixphp'php]php)php php&php&php issetphp(php$prefixPathsphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php selfphp:php:addAdapterPrefixPathphp(php$prefixPathsphp[php'prefixphp'php]php,php php$prefixPathsphp[php'pathphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$prefixPathsphp asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$pathphp)php php&php&php issetphp(php$pathphp[php'prefixphp'php]php)php php&php&php issetphp(php$pathphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$prefixphp php=php php$pathphp[php'prefixphp'php]php;
php php php php php php php php php php php php php php php php php php php php php$pathphp php php php=php php$pathphp[php'pathphp'php]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php selfphp:php:addAdapterPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp scrollingphp stylephp prefixphp pathphp tophp thephp pluginphp loaderphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prefix
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php/
php php php php publicphp staticphp functionphp addScrollingStylePrefixPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php selfphp:php:getScrollingStyleLoaderphp(php)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp anphp arrayphp ofphp scrollingphp stylephp prefixphp pathsphp tophp thephp plugin
php php php php php php*php loaderphp.
php php php php php php*
php php php php php php*php php<codephp>
php php php php php php*php php$prefixPathsphp php=php arrayphp(
php php php php php php*php php php php php php'Myphp_Paginatorphp_ScrollingStylephp'php php php php=php>php php'Myphp/Paginatorphp/ScrollingStylephp/php'php,
php php php php php php*php php php php php php'Yourphp_Paginatorphp_ScrollingStylephp'php php=php>php php'Yourphp/Paginatorphp/ScrollingStylephp/php'
php php php php php php*php php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$prefixPaths
php php php php php php*php/
php php php php publicphp staticphp functionphp addScrollingStylePrefixPathsphp(arrayphp php$prefixPathsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$prefixPathsphp[php'prefixphp'php]php)php php&php&php issetphp(php$prefixPathsphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php selfphp:php:addScrollingStylePrefixPathphp(php$prefixPathsphp[php'prefixphp'php]php,php php$prefixPathsphp[php'pathphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$prefixPathsphp asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$pathphp)php php&php&php issetphp(php$pathphp[php'prefixphp'php]php)php php&php&php issetphp(php$pathphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$prefixphp php=php php$pathphp[php'prefixphp'php]php;
php php php php php php php php php php php php php php php php php php php php php$pathphp php php php=php php$pathphp[php'pathphp'php]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php selfphp:php:addScrollingStylePrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Factoryphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@paramphp php stringphp php$adapter
php php php php php php*php php@paramphp php arrayphp php$prefixPaths
php php php php php php*php php@returnphp Zendphp_Paginator
php php php php php php*php/
php php php php publicphp staticphp functionphp factoryphp(php$dataphp,php php$adapterphp php=php selfphp:php:INTERNALphp_ADAPTERphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp php$prefixPathsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$dataphp instanceofphp Zendphp_Paginatorphp_AdapterAggregatephp)php php{
php php php php php php php php php php php php returnphp newphp selfphp(php$dataphp-php>getPaginatorAdapterphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$adapterphp php=php=php selfphp:php:INTERNALphp_ADAPTERphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$adapterphp php=php php'Arrayphp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$dataphp instanceofphp Zendphp_Dbphp_Tablephp_Selectphp)php php{
php php php php php php php php php php php php php php php php php php php php php$adapterphp php=php php'DbTableSelectphp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$dataphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php php php php php php php php php php$adapterphp php=php php'DbSelectphp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$dataphp instanceofphp Iteratorphp)php php{
php php php php php php php php php php php php php php php php php php php php php$adapterphp php=php php'Iteratorphp'php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_integerphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$adapterphp php=php php'Nullphp'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$typephp php=php php(isphp_objectphp(php$dataphp)php)php php?php getphp_classphp(php$dataphp)php php:php gettypephp(php$dataphp)php;

php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Paginatorphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Paginatorphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Paginatorphp_Exceptionphp(php'Nophp adapterphp forphp typephp php'php php.php php$typephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$pluginLoaderphp php=php selfphp:php:getAdapterLoaderphp(php)php;

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$prefixPathsphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$prefixPathsphp asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php php php php php php php php php$pluginLoaderphp-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$adapterClassNamephp php=php php$pluginLoaderphp-php>loadphp(php$adapterphp)php;

php php php php php php php php php php php php returnphp newphp selfphp(newphp php$adapterClassNamephp(php$dataphp)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp loaderphp.php php Ifphp itphp doesnphp'tphp existphp itphp'sphp createdphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp getAdapterLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_adapterLoaderphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_adapterLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(
php php php php php php php php php php php php php php php php arrayphp(php'Zendphp_Paginatorphp_Adapterphp'php php=php>php php'Zendphp/Paginatorphp/Adapterphp'php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_adapterLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp globalphp config
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php$config
php php php php php php*php/
php php php php publicphp staticphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_configphp php=php php$configphp;

php php php php php php php php php$adapterPathsphp php=php php$configphp-php>getphp(php'adapterpathsphp'php)php;

php php php php php php php php ifphp php(php$adapterPathsphp php!php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:addAdapterPrefixPathsphp(php$adapterPathsphp-php>adapterpathphp-php>toArrayphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$prefixPathsphp php=php php$configphp-php>getphp(php'prefixpathsphp'php)php;

php php php php php php php php ifphp php(php$prefixPathsphp php!php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:addScrollingStylePrefixPathsphp(php$prefixPathsphp-php>prefixpathphp-php>toArrayphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$scrollingStylephp php=php php$configphp-php>getphp(php'scrollingstylephp'php)php;

php php php php php php php php ifphp php(php$scrollingStylephp php!php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:setDefaultScrollingStylephp(php$scrollingStylephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp defaultphp scrollingphp stylephp.
php php php php php php*
php php php php php php*php php@returnphp php string
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultScrollingStylephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultScrollingStylephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp defaultphp itemphp countphp perphp page
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultItemCountPerPagephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultItemCountPerPagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp itemphp countphp perphp page
php php php php php php*
php php php php php php*php php@paramphp intphp php$count
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultItemCountPerPagephp(php$countphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultItemCountPerPagephp php=php php(intphp)php php$countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp defaultphp pagephp range
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultPageRangephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultPageRangephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp pagephp range
php php php php php php*
php php php php php php*php php@paramphp intphp php$count
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultPageRangephp(php$countphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultPageRangephp php=php php(intphp)php php$countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp cachephp object
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Cachephp_Corephp php$cache
php php php php php php*php/
php php php php publicphp staticphp functionphp setCachephp(Zendphp_Cachephp_Corephp php$cachephp)
php php php php php{
php php php php php php php php selfphp:php:php$php_cachephp php=php php$cachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp defaultphp scrollingphp stylephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$scrollingStyle
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultScrollingStylephp(php$scrollingStylephp php=php php'Slidingphp'php)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultScrollingStylephp php=php php$scrollingStylephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp scrollingphp stylephp loaderphp.php php Ifphp itphp doesnphp'tphp existphp itphp's
php php php php php php*php createdphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp getScrollingStyleLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_scrollingStyleLoaderphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_scrollingStyleLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(
php php php php php php php php php php php php php php php php arrayphp(php'Zendphp_Paginatorphp_ScrollingStylephp'php php=php>php php'Zendphp/Paginatorphp/ScrollingStylephp'php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_scrollingStyleLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Paginatorphp_Adapterphp_Interfacephp|Zendphp_Paginatorphp_AdapterAggregatephp php$adapter
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$adapterphp)
php php php php php{
php php php php php php php php ifphp php(php$adapterphp instanceofphp Zendphp_Paginatorphp_Adapterphp_Interfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php php php php php}php elsephp ifphp php(php$adapterphp instanceofphp Zendphp_Paginatorphp_AdapterAggregatephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp-php>getPaginatorAdapterphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Paginatorphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Paginatorphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Paginatorphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Zendphp_Paginatorphp onlyphp acceptsphp instancesphp ofphp thephp typephp php'php php.
php php php php php php php php php php php php php php php php php'Zendphp_Paginatorphp_Adapterphp_Interfacephp orphp Zendphp_Paginatorphp_AdapterAggregatephp.php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$configphp php=php selfphp:php:php$php_configphp;

php php php php php php php php ifphp php(php$configphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$setupMethodsphp php=php arrayphp(php'ItemCountPerPagephp'php,php php'PageRangephp'php)php;

php php php php php php php php php php php php foreachphp php(php$setupMethodsphp asphp php$setupMethodphp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php php$configphp-php>getphp(strtolowerphp(php$setupMethodphp)php)php;

php php php php php php php php php php php php php php php php ifphp php(php$valuephp php!php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$setupMethodphp php=php php'setphp'php php.php php$setupMethodphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$setupMethodphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializesphp thephp objectphp asphp aphp stringphp.php php Proxiesphp tophp php{php@linkphp renderphp(php)php}php.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>renderphp(php)php;
php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php triggerphp_errorphp(php$ephp-php>getMessagephp(php)php,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablesphp/Disablesphp thephp cachephp forphp thisphp instance
php php php php php php*
php php php php php php*php php@paramphp boolphp php$enable
php php php php php php*php php@returnphp Zendphp_Paginator
php php php php php php*php/
php php php php publicphp functionphp setCacheEnabledphp(php$enablephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_cacheEnabledphp php=php php(boolphp)php$enablephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp pagesphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_pageCountphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_pageCountphp php=php php$thisphp-php>php_calculatePageCountphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_pageCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp totalphp numberphp ofphp itemsphp availablephp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTotalItemCountphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>getAdapterphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp thephp pagephp itemphp cachephp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$pageNumber
php php php php php php*php php@returnphp Zendphp_Paginator
php php php php php php*php/
php php php php publicphp functionphp clearPageItemCachephp(php$pageNumberphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_cacheEnabledphp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$pageNumberphp)php php{
php php php php php php php php php php php php foreachphp php(selfphp:php:php$php_cachephp-php>getIdsMatchingTagsphp(arrayphp(php$thisphp-php>php_getCacheInternalIdphp(php)php)php)php asphp php$idphp)php php{
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php|php'php.selfphp:php:CACHEphp_TAGphp_PREFIXphp.php"php(php\dphp+php)php_php.php*php|php"php,php php$idphp,php php$pagephp)php)php php{
php php php php php php php php php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>removephp(php$thisphp-php>php_getCacheIdphp(php$pagephp[php1php]php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$cleanIdphp php=php php$thisphp-php>php_getCacheIdphp(php$pageNumberphp)php;
php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>removephp(php$cleanIdphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp absolutephp itemphp numberphp forphp thephp specifiedphp itemphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$relativeItemNumberphp Relativephp itemphp number
php php php php php php*php php@paramphp php integerphp php$pageNumberphp Pagephp number
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getAbsoluteItemNumberphp(php$relativeItemNumberphp,php php$pageNumberphp php=php nullphp)
php php php php php{
php php php php php php php php php$relativeItemNumberphp php=php php$thisphp-php>normalizeItemNumberphp(php$relativeItemNumberphp)php;

php php php php php php php php ifphp php(php$pageNumberphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$pageNumberphp php=php php$thisphp-php>getCurrentPageNumberphp(php)php;
php php php php php php php php php}

php php php php php php php php php$pageNumberphp php=php php$thisphp-php>normalizePageNumberphp(php$pageNumberphp)php;

php php php php php php php php returnphp php(php(php$pageNumberphp php-php php1php)php php*php php$thisphp-php>getItemCountPerPagephp(php)php)php php+php php$relativeItemNumberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Paginatorphp_Adapterphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp itemsphp forphp thephp currentphp pagephp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getCurrentItemCountphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_currentItemCountphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentItemCountphp php=php php$thisphp-php>getItemCountphp(php$thisphp-php>getCurrentItemsphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_currentItemCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp itemsphp forphp thephp currentphp pagephp.
php php php php php php*
php php php php php php*php php@returnphp Traversable
php php php php php php*php/
php php php php publicphp functionphp getCurrentItemsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_currentItemsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentItemsphp php=php php$thisphp-php>getItemsByPagephp(php$thisphp-php>getCurrentPageNumberphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_currentItemsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp currentphp pagephp numberphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getCurrentPageNumberphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>normalizePageNumberphp(php$thisphp-php>php_currentPageNumberphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp currentphp pagephp numberphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$pageNumberphp Pagephp number
php php php php php php*php php@returnphp Zendphp_Paginatorphp php$this
php php php php php php*php/
php php php php publicphp functionphp setCurrentPageNumberphp(php$pageNumberphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentPageNumberphp php=php php(integerphp)php php$pageNumberphp;
php php php php php php php php php$thisphp-php>php_currentItemsphp php php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_currentItemCountphp php php=php nullphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp filter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Filterphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getFilterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp filterphp chain
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Filterphp_Interfacephp php$filter
php php php php php php*php php@returnphp Zendphp_Paginator
php php php php php php*php/
php php php php publicphp functionphp setFilterphp(Zendphp_Filterphp_Interfacephp php$filterphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filterphp php=php php$filterphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp itemphp fromphp aphp pagephp.php php Thephp currentphp pagephp isphp usedphp ifphp therephp'sphp no
php php php php php php*php pagephp sepcifiedphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$itemNumberphp Itemphp numberphp php(php1php tophp itemCountPerPagephp)
php php php php php php*php php@paramphp php integerphp php$pageNumber
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getItemphp(php$itemNumberphp,php php$pageNumberphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$pageNumberphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$pageNumberphp php=php php$thisphp-php>getCurrentPageNumberphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php$pageNumberphp <php php0php)php php{
php php php php php php php php php php php php php$pageNumberphp php=php php(php$thisphp-php>countphp(php)php php+php php1php)php php+php php$pageNumberphp;
php php php php php php php php php}

php php php php php php php php php$pagephp php=php php$thisphp-php>getItemsByPagephp(php$pageNumberphp)php;
php php php php php php php php php$itemCountphp php=php php$thisphp-php>getItemCountphp(php$pagephp)php;

php php php php php php php php ifphp php(php$itemCountphp php=php=php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Paginatorphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Paginatorphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Paginatorphp_Exceptionphp(php'Pagephp php'php php.php php$pageNumberphp php.php php'php doesphp notphp existphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$itemNumberphp <php php0php)php php{
php php php php php php php php php php php php php$itemNumberphp php=php php(php$itemCountphp php+php php1php)php php+php php$itemNumberphp;
php php php php php php php php php}

php php php php php php php php php$itemNumberphp php=php php$thisphp-php>normalizeItemNumberphp(php$itemNumberphp)php;

php php php php php php php php ifphp php(php$itemNumberphp php>php php$itemCountphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Paginatorphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Paginatorphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Paginatorphp_Exceptionphp(php'Pagephp php'php php.php php$pageNumberphp php.php php'php doesphp notphp'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php containphp itemphp numberphp php'php php.php php$itemNumberphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$pagephp[php$itemNumberphp php-php php1php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp itemsphp perphp pagephp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getItemCountPerPagephp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_itemCountPerPagephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_itemCountPerPagephp php=php selfphp:php:getDefaultItemCountPerPagephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_itemCountPerPagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp numberphp ofphp itemsphp perphp pagephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$itemCountPerPage
php php php php php php*php php@returnphp Zendphp_Paginatorphp php$this
php php php php php php*php/
php php php php publicphp functionphp setItemCountPerPagephp(php$itemCountPerPagephp php=php php-php1php)
php php php php php{
php php php php php php php php php$thisphp-php>php_itemCountPerPagephp php=php php(integerphp)php php$itemCountPerPagephp;
php php php php php php php php ifphp php(php$thisphp-php>php_itemCountPerPagephp <php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_itemCountPerPagephp php=php php$thisphp-php>getTotalItemCountphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_pageCountphp php php php php php php php php=php php$thisphp-php>php_calculatePageCountphp(php)php;
php php php php php php php php php$thisphp-php>php_currentItemsphp php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_currentItemCountphp php=php nullphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp itemsphp inphp aphp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$itemsphp Items
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getItemCountphp(php$itemsphp)
php php php php php{
php php php php php php php php php$itemCountphp php=php php0php;

php php php php php php php php ifphp php(isphp_arrayphp(php$itemsphp)php php|php|php php$itemsphp instanceofphp Countablephp)php php{
php php php php php php php php php php php php php$itemCountphp php=php countphp(php$itemsphp)php;
php php php php php php php php php}php elsephp php{php php/php/php php$itemsphp isphp somethingphp likephp LimitIterator
php php php php php php php php php php php php php$itemCountphp php=php iteratorphp_countphp(php$itemsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$itemCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp itemsphp forphp aphp givenphp pagephp.
php php php php php php*
php php php php php php*php php@returnphp Traversable
php php php php php php*php/
php php php php publicphp functionphp getItemsByPagephp(php$pageNumberphp)
php php php php php{
php php php php php php php php php$pageNumberphp php=php php$thisphp-php>normalizePageNumberphp(php$pageNumberphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_cacheEnabledphp(php)php)php php{
php php php php php php php php php php php php php$dataphp php=php selfphp:php:php$php_cachephp-php>loadphp(php$thisphp-php>php_getCacheIdphp(php$pageNumberphp)php)php;
php php php php php php php php php php php php ifphp php(php$dataphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp php$dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$offsetphp php=php php(php$pageNumberphp php-php php1php)php php*php php$thisphp-php>getItemCountPerPagephp(php)php;

php php php php php php php php php$itemsphp php=php php$thisphp-php>php_adapterphp-php>getItemsphp(php$offsetphp,php php$thisphp-php>getItemCountPerPagephp(php)php)php;

php php php php php php php php php$filterphp php=php php$thisphp-php>getFilterphp(php)php;

php php php php php php php php ifphp php(php$filterphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$itemsphp php=php php$filterphp-php>filterphp(php$itemsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$itemsphp instanceofphp Traversablephp)php php{
php php php php php php php php php php php php php$itemsphp php=php newphp ArrayIteratorphp(php$itemsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_cacheEnabledphp(php)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_cachephp-php>savephp(php$itemsphp,php php$thisphp-php>php_getCacheIdphp(php$pageNumberphp)php,php arrayphp(php$thisphp-php>php_getCacheInternalIdphp(php)php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$itemsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp foreachphp-compatiblephp iteratorphp.
php php php php php php*
php php php php php php*php php@returnphp Traversable
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getCurrentItemsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp pagephp rangephp php(seephp propertyphp declarationphp abovephp)php.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getPageRangephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_pageRangephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_pageRangephp php=php selfphp:php:getDefaultPageRangephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_pageRangephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp pagephp rangephp php(seephp propertyphp declarationphp abovephp)php.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$pageRange
php php php php php php*php php@returnphp Zendphp_Paginatorphp php$this
php php php php php php*php/
php php php php publicphp functionphp setPageRangephp(php$pageRangephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pageRangephp php=php php(integerphp)php php$pageRangephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp pagephp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$scrollingStylephp Scrollingphp style
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPagesphp(php$scrollingStylephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_pagesphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_pagesphp php=php php$thisphp-php>php_createPagesphp(php$scrollingStylephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_pagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp subsetphp ofphp pagesphp withinphp aphp givenphp rangephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$lowerBoundphp Lowerphp boundphp ofphp thephp range
php php php php php php*php php@paramphp php integerphp php$upperBoundphp Upperphp boundphp ofphp thephp range
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPagesInRangephp(php$lowerBoundphp,php php$upperBoundphp)
php php php php php{
php php php php php php php php php$lowerBoundphp php=php php$thisphp-php>normalizePageNumberphp(php$lowerBoundphp)php;
php php php php php php php php php$upperBoundphp php=php php$thisphp-php>normalizePageNumberphp(php$upperBoundphp)php;

php php php php php php php php php$pagesphp php=php arrayphp(php)php;

php php php php php php php php forphp php(php$pageNumberphp php=php php$lowerBoundphp;php php$pageNumberphp <php=php php$upperBoundphp;php php$pageNumberphp+php+php)php php{
php php php php php php php php php php php php php$pagesphp[php$pageNumberphp]php php=php php$pageNumberphp;
php php php php php php php php php}

php php php php php php php php returnphp php$pagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp pagephp itemphp cachephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPageItemCachephp(php)
php php php php php{
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_cacheEnabledphp(php)php)php php{
php php php php php php php php php php php php foreachphp php(selfphp:php:php$php_cachephp-php>getIdsMatchingTagsphp(arrayphp(php$thisphp-php>php_getCacheInternalIdphp(php)php)php)php asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php|php'php.selfphp:php:CACHEphp_TAGphp_PREFIXphp.php"php(php\dphp+php)php_php.php*php|php"php,php php$idphp,php php$pagephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp[php$pagephp[php1php]php]php php=php selfphp:php:php$php_cachephp-php>loadphp(php$thisphp-php>php_getCacheIdphp(php$pagephp[php1php]php)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp viewphp instancephp.php php Ifphp nonephp registeredphp,php attemptsphp tophp pullphp f
php php php php php php*php romphp ViewRendererphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Interfacephp|null
php php php php php php*php/
php php php php publicphp functionphp getViewphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_viewphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_HelperBroker
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/HelperBrokerphp.phpphp'php;

php php php php php php php php php php php php php$viewRendererphp php=php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php;
php php php php php php php php php php php php ifphp php(php$viewRendererphp-php>viewphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$viewRendererphp-php>initViewphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_viewphp php=php php$viewRendererphp-php>viewphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_viewphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp viewphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp Zendphp_Paginator
php php php php php php*php/
php php php php publicphp functionphp setViewphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewphp php=php php$viewphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Bringsphp thephp itemphp numberphp inphp rangephp ofphp thephp pagephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$itemNumber
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp normalizeItemNumberphp(php$itemNumberphp)
php php php php php{
php php php php php php php php php$itemNumberphp php=php php(integerphp)php php$itemNumberphp;

php php php php php php php php ifphp php(php$itemNumberphp <php php1php)php php{
php php php php php php php php php php php php php$itemNumberphp php=php php1php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$itemNumberphp php>php php$thisphp-php>getItemCountPerPagephp(php)php)php php{
php php php php php php php php php php php php php$itemNumberphp php=php php$thisphp-php>getItemCountPerPagephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$itemNumberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Bringsphp thephp pagephp numberphp inphp rangephp ofphp thephp paginatorphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$pageNumber
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp normalizePageNumberphp(php$pageNumberphp)
php php php php php{
php php php php php php php php php$pageNumberphp php=php php(integerphp)php php$pageNumberphp;

php php php php php php php php ifphp php(php$pageNumberphp <php php1php)php php{
php php php php php php php php php php php php php$pageNumberphp php=php php1php;
php php php php php php php php php}

php php php php php php php php php$pageCountphp php=php php$thisphp-php>countphp(php)php;

php php php php php php php php ifphp php(php$pageCountphp php>php php0php php&php&php php$pageNumberphp php>php php$pageCountphp)php php{
php php php php php php php php php php php php php$pageNumberphp php=php php$pageCountphp;
php php php php php php php php php}

php php php php php php php php returnphp php$pageNumberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rendersphp thephp paginatorphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$viewphp)php php{
php php php php php php php php php php php php php$thisphp-php>setViewphp(php$viewphp)php;
php php php php php php php php php}

php php php php php php php php php$viewphp php=php php$thisphp-php>getViewphp(php)php;

php php php php php php php php returnphp php$viewphp-php>paginationControlphp(php$thisphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp itemsphp ofphp thephp currentphp pagephp asphp JSONphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toJsonphp(php)
php php php php php{
php php php php php php php php php$currentItemsphp php=php php$thisphp-php>getCurrentItemsphp(php)php;

php php php php php php php php ifphp php(php$currentItemsphp instanceofphp Zendphp_Dbphp_Tablephp_Rowsetphp_Abstractphp)php php{
php php php php php php php php php php php php returnphp Zendphp_Jsonphp:php:encodephp(php$currentItemsphp-php>toArrayphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp Zendphp_Jsonphp:php:encodephp(php$currentItemsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Tellsphp ifphp therephp isphp anphp activephp cachephp object
php php php php php php*php andphp ifphp thephp cachephp hasphp notphp beenphp desabled
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_cacheEnabledphp(php)
php php php php php{
php php php php php php php php returnphp php(php(selfphp:php:php$php_cachephp php!php=php=php nullphp)php php&php&php php$thisphp-php>php_cacheEnabledphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makesphp anphp Idphp forphp thephp cache
php php php php php php*php Dependsphp onphp thephp adapterphp objectphp andphp thephp pagephp number
php php php php php php*
php php php php php php*php Usedphp tophp storephp itemphp inphp cachephp fromphp thatphp Paginatorphp instance
php php php php php php*php php andphp thatphp currentphp page
php php php php php php*
php php php php php php*php php@paramphp intphp php$page
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getCacheIdphp(php$pagephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$pagephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$pagephp php=php php$thisphp-php>getCurrentPageNumberphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:CACHEphp_TAGphp_PREFIXphp php.php php$pagephp php.php php'php_php'php php.php php$thisphp-php>php_getCacheInternalIdphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp internalphp cachephp id
php php php php php php*php Dependsphp onphp thephp adapterphp andphp thephp itemphp countphp perphp page
php php php php php php*
php php php php php php*php Usedphp tophp tagphp thatphp uniquephp Paginatorphp instancephp inphp cache
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getCacheInternalIdphp(php)
php php php php php{
php php php php php php php php returnphp mdphp5php(serializephp(arrayphp(
php php php php php php php php php php php php php$thisphp-php>getAdapterphp(php)php,
php php php php php php php php php php php php php$thisphp-php>getItemCountPerPagephp(php)
php php php php php php php php php)php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatesphp thephp pagephp countphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_calculatePageCountphp(php)
php php php php php{
php php php php php php php php returnphp php(integerphp)php ceilphp(php$thisphp-php>getAdapterphp(php)php-php>countphp(php)php php/php php$thisphp-php>getItemCountPerPagephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp thephp pagephp collectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$scrollingStylephp Scrollingphp style
php php php php php php*php php@returnphp stdClass
php php php php php php*php/
php php php php protectedphp functionphp php_createPagesphp(php$scrollingStylephp php=php nullphp)
php php php php php{
php php php php php php php php php$pageCountphp php php php php php php php php php=php php$thisphp-php>countphp(php)php;
php php php php php php php php php$currentPageNumberphp php=php php$thisphp-php>getCurrentPageNumberphp(php)php;

php php php php php php php php php$pagesphp php=php newphp stdClassphp(php)php;
php php php php php php php php php$pagesphp-php>pageCountphp php php php php php php php php=php php$pageCountphp;
php php php php php php php php php$pagesphp-php>itemCountPerPagephp php=php php$thisphp-php>getItemCountPerPagephp(php)php;
php php php php php php php php php$pagesphp-php>firstphp php php php php php php php php php php php php=php php1php;
php php php php php php php php php$pagesphp-php>currentphp php php php php php php php php php php=php php$currentPageNumberphp;
php php php php php php php php php$pagesphp-php>lastphp php php php php php php php php php php php php php=php php$pageCountphp;

php php php php php php php php php/php/php Previousphp andphp next
php php php php php php php php ifphp php(php$currentPageNumberphp php-php php1php php>php php0php)php php{
php php php php php php php php php php php php php$pagesphp-php>previousphp php=php php$currentPageNumberphp php-php php1php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$currentPageNumberphp php+php php1php <php=php php$pageCountphp)php php{
php php php php php php php php php php php php php$pagesphp-php>nextphp php=php php$currentPageNumberphp php+php php1php;
php php php php php php php php php}

php php php php php php php php php/php/php Pagesphp inphp range
php php php php php php php php php$scrollingStylephp php=php php$thisphp-php>php_loadScrollingStylephp(php$scrollingStylephp)php;
php php php php php php php php php$pagesphp-php>pagesInRangephp php php php php php=php php$scrollingStylephp-php>getPagesphp(php$thisphp)php;
php php php php php php php php php$pagesphp-php>firstPageInRangephp php=php minphp(php$pagesphp-php>pagesInRangephp)php;
php php php php php php php php php$pagesphp-php>lastPageInRangephp php php=php maxphp(php$pagesphp-php>pagesInRangephp)php;

php php php php php php php php php/php/php Itemphp numbers
php php php php php php php php ifphp php(php$thisphp-php>getCurrentItemsphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$pagesphp-php>currentItemCountphp php=php php$thisphp-php>getCurrentItemCountphp(php)php;
php php php php php php php php php php php php php$pagesphp-php>itemCountPerPagephp php=php php$thisphp-php>getItemCountPerPagephp(php)php;
php php php php php php php php php php php php php$pagesphp-php>totalItemCountphp php php php=php php$thisphp-php>getTotalItemCountphp(php)php;
php php php php php php php php php php php php php$pagesphp-php>firstItemNumberphp php php=php php(php(php$currentPageNumberphp php-php php1php)php php*php php$thisphp-php>getItemCountPerPagephp(php)php)php php+php php1php;
php php php php php php php php php php php php php$pagesphp-php>lastItemNumberphp php php php=php php$pagesphp-php>firstItemNumberphp php+php php$pagesphp-php>currentItemCountphp php-php php1php;
php php php php php php php php php}

php php php php php php php php returnphp php$pagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp aphp scrollingphp stylephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$scrollingStyle
php php php php php php*php php@returnphp Zendphp_Paginatorphp_ScrollingStylephp_Interface
php php php php php php*php/
php php php php protectedphp functionphp php_loadScrollingStylephp(php$scrollingStylephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$scrollingStylephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$scrollingStylephp php=php selfphp:php:php$php_defaultScrollingStylephp;
php php php php php php php php php}

php php php php php php php php switchphp php(strtolowerphp(gettypephp(php$scrollingStylephp)php)php)php php{
php php php php php php php php php php php php casephp php'objectphp'php:
php php php php php php php php php php php php php php php php ifphp php(php!php$scrollingStylephp instanceofphp Zendphp_Paginatorphp_ScrollingStylephp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Viewphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Viewphp_Exceptionphp(php'Scrollingphp stylephp mustphp implementphp php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php'Zendphp_Paginatorphp_ScrollingStylephp_Interfacephp'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$scrollingStylephp;

php php php php php php php php php php php php casephp php'stringphp'php:
php php php php php php php php php php php php php php php php php$classNamephp php=php selfphp:php:getScrollingStyleLoaderphp(php)php-php>loadphp(php$scrollingStylephp)php;

php php php php php php php php php php php php php php php php returnphp newphp php$classNamephp(php)php;

php php php php php php php php php php php php casephp php'nullphp'php:
php php php php php php php php php php php php php php php php php/php/php Fallphp throughphp tophp defaultphp case

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Viewphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Viewphp_Exceptionphp(php'Scrollingphp stylephp mustphp bephp aphp classphp php'php php.
php php php php php php php php php php php php php php php php php php php php php'namephp orphp objectphp implementingphp Zendphp_Paginatorphp_ScrollingStylephp_Interfacephp'php)php;
php php php php php php php php php}
php php php php php}
php}
