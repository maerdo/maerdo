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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Navigation
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Containerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php Zendphp_Navigationphp_Container
php php*
php php*php Containerphp classphp forphp Zendphp_Navigationphp_Pagephp classesphp.
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Navigation
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Navigationphp_Containerphp implementsphp RecursiveIteratorphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php Containsphp subphp pages
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_pagesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp indexphp thatphp containsphp thephp orderphp inphp whichphp tophp iteratephp pages
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_indexphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp indexphp isphp dirtyphp andphp needsphp tophp bephp rephp-arranged
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_dirtyIndexphp php=php falsephp;

php php php php php/php/php Internalphp methodsphp:

php php php php php/php*php*
php php php php php php*php Sortsphp thephp pagephp indexphp accordingphp tophp pagephp order
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_sortphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_dirtyIndexphp)php php{
php php php php php php php php php php php php php$newIndexphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$indexphp php=php php0php;

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_pagesphp asphp php$hashphp php=php>php php$pagephp)php php{
php php php php php php php php php php php php php php php php php$orderphp php=php php$pagephp-php>getOrderphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$orderphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$newIndexphp[php$hashphp]php php=php php$indexphp;
php php php php php php php php php php php php php php php php php php php php php$indexphp+php+php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$newIndexphp[php$hashphp]php php=php php$orderphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php asortphp(php$newIndexphp)php;
php php php php php php php php php php php php php$thisphp-php>php_indexphp php=php php$newIndexphp;
php php php php php php php php php php php php php$thisphp-php>php_dirtyIndexphp php=php falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php/php Publicphp methodsphp:

php php php php php/php*php*
php php php php php php*php Notifiesphp containerphp thatphp thephp orderphp ofphp pagesphp arephp updated
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp notifyOrderUpdatedphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dirtyIndexphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp pagephp tophp thephp container
php php php php php php*
php php php php php php*php Thisphp methodphp willphp injectphp thephp containerphp asphp thephp givenphp pagephp'sphp parentphp by
php php php php php php*php callingphp php{php@linkphp Zendphp_Navigationphp_Pagephp:php:setParentphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Pagephp|arrayphp|Zendphp_Configphp php$pagephp php pagephp tophp add
php php php php php php*php php@returnphp Zendphp_Navigationphp_Containerphp php php php php php php php php php php php php php php php php php php php php fluentphp interfacephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnsphp self
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php php php php php php php php php php php php php php php php php php php php ifphp pagephp isphp invalid
php php php php php php*php/
php php php php publicphp functionphp addPagephp(php$pagephp)
php php php php php{
php php php php php php php php ifphp php(php$pagephp php=php=php=php php$thisphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Aphp pagephp cannotphp havephp itselfphp asphp aphp parentphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$pagephp)php php|php|php php$pagephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Pagephp.phpphp'php;
php php php php php php php php php php php php php$pagephp php=php Zendphp_Navigationphp_Pagephp:php:factoryphp(php$pagephp)php;
php php php php php php php php php}php elseifphp php(php!php$pagephp instanceofphp Zendphp_Navigationphp_Pagephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Invalidphp argumentphp:php php$pagephp mustphp bephp anphp instancephp ofphp php'php php.
php php php php php php php php php php php php php php php php php php php php php'Zendphp_Navigationphp_Pagephp orphp Zendphp_Configphp,php orphp anphp arrayphp'php)php;
php php php php php php php php php}

php php php php php php php php php$hashphp php=php php$pagephp-php>hashCodephp(php)php;

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$hashphp,php php$thisphp-php>php_indexphp)php)php php{
php php php php php php php php php php php php php/php/php pagephp isphp alreadyphp inphp container
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php/php/php addsphp pagephp tophp containerphp andphp setsphp dirtyphp flag
php php php php php php php php php$thisphp-php>php_pagesphp[php$hashphp]php php=php php$pagephp;
php php php php php php php php php$thisphp-php>php_indexphp[php$hashphp]php php=php php$pagephp-php>getOrderphp(php)php;
php php php php php php php php php$thisphp-php>php_dirtyIndexphp php=php truephp;

php php php php php php php php php/php/php injectphp selfphp asphp pagephp parent
php php php php php php php php php$pagephp-php>setParentphp(php$thisphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp severalphp pagesphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$pagesphp php php pagesphp tophp add
php php php php php php*php php@returnphp Zendphp_Navigationphp_Containerphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp php$pagesphp isphp notphp arrayphp orphp Zendphp_Config
php php php php php php*php/
php php php php publicphp functionphp addPagesphp(php$pagesphp)
php php php php php{
php php php php php php php php ifphp php(php$pagesphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$pagesphp php=php php$pagesphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$pagesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Invalidphp argumentphp:php php$pagesphp mustphp bephp anphp arrayphp orphp anphp php'php php.
php php php php php php php php php php php php php php php php php php php php php'instancephp ofphp Zendphp_Configphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$pagesphp asphp php$pagephp)php php{
php php php php php php php php php php php php php$thisphp-php>addPagephp(php$pagephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp pagesphp thisphp containerphp shouldphp havephp,php removingphp existingphp pages
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$pagesphp php php php php php php php php php php php php php php pagesphp tophp set
php php php php php php*php php@returnphp Zendphp_Navigationphp_Containerphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setPagesphp(arrayphp php$pagesphp)
php php php php php{
php php php php php php php php php$thisphp-php>removePagesphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addPagesphp(php$pagesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp pagesphp inphp thephp container
php php php php php php*
php php php php php php*php php@returnphp arrayphp php arrayphp ofphp Zendphp_Navigationphp_Pagephp instances
php php php php php php*php/
php php php php publicphp functionphp getPagesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp thephp givenphp pagephp fromphp thephp container
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Pagephp|intphp php$pagephp php pagephp tophp removephp,php eitherphp aphp page
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php instancephp orphp aphp specificphp pagephp order
php php php php php php*php php@returnphp boolphp php php php php php php php php php php php php php php php php php php php php php php php php php php php whetherphp thephp removalphp was
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php successful
php php php php php php*php/
php php php php publicphp functionphp removePagephp(php$pagephp)
php php php php php{
php php php php php php php php ifphp php(php$pagephp instanceofphp Zendphp_Navigationphp_Pagephp)php php{
php php php php php php php php php php php php php$hashphp php=php php$pagephp-php>hashCodephp(php)php;
php php php php php php php php php}php elseifphp php(isphp_intphp(php$pagephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_sortphp(php)php;
php php php php php php php php php php php php ifphp php(php!php$hashphp php=php arrayphp_searchphp(php$pagephp,php php$thisphp-php>php_indexphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_pagesphp[php$hashphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_pagesphp[php$hashphp]php)php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_indexphp[php$hashphp]php)php;
php php php php php php php php php php php php php$thisphp-php>php_dirtyIndexphp php=php truephp;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp allphp pagesphp inphp container
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Navigationphp_Containerphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp removePagesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_pagesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_indexphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp containerphp hasphp thephp givenphp page
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Navigationphp_Pagephp php$pagephp php php php php php php pagephp tophp lookphp for
php php php php php php*php php@paramphp php boolphp php php php php php php php php php php php php php php php php php$recursivephp php php[optionalphp]php whetherphp tophp search
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php recursivelyphp.php Defaultphp isphp falsephp.
php php php php php php*php php@returnphp boolphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php whetherphp pagephp isphp inphp container
php php php php php php*php/
php php php php publicphp functionphp hasPagephp(Zendphp_Navigationphp_Pagephp php$pagephp,php php$recursivephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$pagephp-php>hashCodephp(php)php,php php$thisphp-php>php_indexphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elseifphp php(php$recursivephp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_pagesphp asphp php$childPagephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$childPagephp-php>hasPagephp(php$pagephp,php truephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp containerphp containsphp anyphp pages
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp containerphp hasphp anyphp pages
php php php php php php*php/
php php php php publicphp functionphp hasPagesphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_indexphp)php php>php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp childphp pagephp matchingphp php$propertyphp php=php=php php$valuephp,php orphp nullphp ifphp notphp found
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$propertyphp php php php php php php php php php php namephp ofphp propertyphp tophp matchphp against
php php php php php php*php php@paramphp php mixedphp php php$valuephp php php php php php php php php php php php php php valuephp tophp matchphp propertyphp against
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp|nullphp php matchingphp pagephp orphp null
php php php php php php*php/
php php php php publicphp functionphp findOneByphp(php$propertyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$iteratorphp php=php newphp RecursiveIteratorIteratorphp(php$thisphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;

php php php php php php php php foreachphp php(php$iteratorphp asphp php$pagephp)php php{
php php php php php php php php php php php php ifphp php(php$pagephp-php>getphp(php$propertyphp)php php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php returnphp php$pagephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp childphp pagesphp matchingphp php$propertyphp php=php=php php$valuephp,php orphp anphp emptyphp array
php php php php php php*php ifphp nophp pagesphp arephp found
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$propertyphp php namephp ofphp propertyphp tophp matchphp against
php php php php php php*php php@paramphp php mixedphp php php$valuephp php php php php valuephp tophp matchphp propertyphp against
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php php php arrayphp containingphp onlyphp Zendphp_Navigationphp_Page
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php instances
php php php php php php*php/
php php php php publicphp functionphp findAllByphp(php$propertyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$foundphp php=php arrayphp(php)php;

php php php php php php php php php$iteratorphp php=php newphp RecursiveIteratorIteratorphp(php$thisphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;

php php php php php php php php foreachphp php(php$iteratorphp asphp php$pagephp)php php{
php php php php php php php php php php php php ifphp php(php$pagephp-php>getphp(php$propertyphp)php php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$foundphp[php]php php=php php$pagephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$foundphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp pagephp(sphp)php matchingphp php$propertyphp php=php=php php$value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$propertyphp php namephp ofphp propertyphp tophp matchphp against
php php php php php php*php php@paramphp php mixedphp php php$valuephp php php php php valuephp tophp matchphp propertyphp against
php php php php php php*php php@paramphp php boolphp php php php$allphp php php php php php php php[optionalphp]php whetherphp anphp arrayphp ofphp allphp matching
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php pagesphp shouldphp bephp returnedphp,php orphp onlyphp thephp firstphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php Ifphp truephp,php anphp arrayphp willphp bephp returnedphp,php evenphp ifphp not
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php matchingphp pagesphp arephp foundphp.php Ifphp falsephp,php nullphp will
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php bephp returnedphp ifphp nophp matchingphp pagephp isphp foundphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php Defaultphp isphp falsephp.
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp|nullphp php matchingphp pagephp orphp null
php php php php php php*php/
php php php php publicphp functionphp findByphp(php$propertyphp,php php$valuephp,php php$allphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$allphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>findAllByphp(php$propertyphp,php php$valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>findOneByphp(php$propertyphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp overloadphp:php Proxyphp callsphp tophp finderphp methods
php php php php php php*
php php php php php php*php Examplesphp ofphp finderphp callsphp:
php php php php php php*php php<codephp>
php php php php php php*php php/php/php METHODphp php php php php php php php php php php php php php php php php php php php php/php/php SAMEphp AS
php php php php php php*php php$navphp-php>findByLabelphp(php'foophp'php)php;php php php php php/php/php php$navphp-php>findOneByphp(php'labelphp'php,php php'foophp'php)php;
php php php php php php*php php$navphp-php>findOneByLabelphp(php'foophp'php)php;php php/php/php php$navphp-php>findOneByphp(php'labelphp'php,php php'foophp'php)php;
php php php php php php*php php$navphp-php>findAllByClassphp(php'foophp'php)php;php php/php/php php$navphp-php>findAllByphp(php'classphp'php,php php'foophp'php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodphp php php php php php php php php php php php php methodphp name
php php php php php php*php php@paramphp php arrayphp php php$argumentsphp php php php php php php php php php methodphp arguments
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp methodphp doesphp notphp exist
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argumentsphp)
php php php php php{
php php php php php php php php ifphp php(php@pregphp_matchphp(php'php/php(findphp(php?php:Onephp|Allphp)php?Byphp)php(php.php+php)php/php'php,php php$methodphp,php php$matchphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php{php$matchphp[php1php]php}php(php$matchphp[php2php]php,php php$argumentsphp[php0php]php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php'Badphp methodphp callphp:php Unknownphp methodphp php%sphp:php:php%sphp'php,
php php php php php php php php php php php php php php php php getphp_classphp(php$thisphp)php,
php php php php php php php php php php php php php php php php php$methodphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp representationphp ofphp allphp pagesphp inphp container
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php$pagesphp php=php arrayphp(php)php;

php php php php php php php php php$thisphp-php>php_dirtyIndexphp php=php truephp;
php php php php php php php php php$thisphp-php>php_sortphp(php)php;
php php php php php php php php php$indexesphp php=php arrayphp_keysphp(php$thisphp-php>php_indexphp)php;
php php php php php php php php foreachphp php(php$indexesphp asphp php$hashphp)php php{
php php php php php php php php php php php php php$pagesphp[php]php php=php php$thisphp-php>php_pagesphp[php$hashphp]php-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$pagesphp;
php php php php php}

php php php php php/php/php RecursiveIteratorphp interfacephp:

php php php php php/php*php*
php php php php php php*php Returnsphp currentphp page
php php php php php php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp php php php php php php currentphp pagephp orphp null
php php php php php php*php php@throwsphp Zendphp_Navigationphp_Exceptionphp php ifphp thephp indexphp isphp invalid
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sortphp(php)php;
php php php php php php php php currentphp(php$thisphp-php>php_indexphp)php;
php php php php php php php php php$hashphp php=php keyphp(php$thisphp-php>php_indexphp)php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_pagesphp[php$hashphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_pagesphp[php$hashphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Navigationphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Navigationphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Corruptionphp detectedphp inphp containerphp;php php'php php.
php php php php php php php php php php php php php php php php php php php php php'invalidphp keyphp foundphp inphp internalphp iteratorphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp hashphp codephp ofphp currentphp page
php php php php php php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp php hashphp codephp ofphp currentphp page
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sortphp(php)php;
php php php php php php php php returnphp keyphp(php$thisphp-php>php_indexphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movesphp indexphp pointerphp tophp nextphp pagephp inphp thephp container
php php php php php php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sortphp(php)php;
php php php php php php php php nextphp(php$thisphp-php>php_indexphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp indexphp pointerphp tophp firstphp pagephp inphp thephp container
php php php php php php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sortphp(php)php;
php php php php php php php php resetphp(php$thisphp-php>php_indexphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp containerphp indexphp isphp valid
php php php php php php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sortphp(php)php;
php php php php php php php php returnphp currentphp(php$thisphp-php>php_indexphp)php php!php=php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp tophp hasPagesphp(php)
php php php php php php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp containerphp hasphp anyphp pages
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>hasPagesphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp childphp containerphp.
php php php php php php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Navigationphp_Pagephp|null
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php php$hashphp php=php keyphp(php$thisphp-php>php_indexphp)php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_pagesphp[php$hashphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_pagesphp[php$hashphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php/php Countablephp interfacephp:

php php php php php/php*php*
php php php php php php*php Returnsphp numberphp ofphp pagesphp inphp container
php php php php php php*
php php php php php php*php Implementsphp Countablephp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp intphp php numberphp ofphp pagesphp inphp thephp container
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_indexphp)php;
php php php php php}
php}
