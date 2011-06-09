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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php PaginationControlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_PaginationControl
php{
php php php php php/php*php*
php php php php php php*php Viewphp instance
php php php php php php*
php php php php php php*php php@varphp Zendphp_Viewphp_Instance
php php php php php php*php/
php php php php publicphp php$viewphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Defaultphp viewphp partial
php php php php php php*
php php php php php php*php php@varphp stringphp|array
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultViewPartialphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Setsphp thephp viewphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$viewphp Viewphp instance
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_PaginationControl
php php php php php php*php/
php php php php publicphp functionphp setViewphp(Zendphp_Viewphp_Interfacephp php$viewphp)
php php php php php{
php php php php php php php php php$thisphp-php>viewphp php=php php$viewphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp defaultphp viewphp partialphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$partialphp Viewphp partial
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultViewPartialphp(php$partialphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultViewPartialphp php=php php$partialphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp defaultphp viewphp partial
php php php php php php*
php php php php php php*php php@returnphp stringphp|array
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultViewPartialphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultViewPartialphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp thephp providedphp pagesphp.php php Thisphp checksphp ifphp php$viewphp-php>paginatorphp isphp setphp andphp,
php php php php php php*php ifphp sophp,php usesphp thatphp.php php Alsophp,php ifphp nophp scrollingphp stylephp orphp partialphp arephp specifiedphp,
php php php php php php*php thephp defaultsphp willphp bephp usedphp php(ifphp setphp)php.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Paginatorphp php(Optionalphp)php php$paginator
php php php php php php*php php@paramphp php stringphp php$scrollingStylephp php(Optionalphp)php Scrollingphp style
php php php php php php*php php@paramphp php stringphp php$partialphp php(Optionalphp)php Viewphp partial
php php php php php php*php php@paramphp php arrayphp|stringphp php$paramsphp php(Optionalphp)php paramsphp tophp passphp tophp thephp partial
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp paginationControlphp(Zendphp_Paginatorphp php$paginatorphp php=php nullphp,php php$scrollingStylephp php=php nullphp,php php$partialphp php=php nullphp,php php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$paginatorphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>viewphp-php>paginatorphp)php andphp php$thisphp-php>viewphp-php>paginatorphp php!php=php=php nullphp andphp php$thisphp-php>viewphp-php>paginatorphp instanceofphp Zendphp_Paginatorphp)php php{
php php php php php php php php php php php php php php php php php$paginatorphp php=php php$thisphp-php>viewphp-php>paginatorphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Viewphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Nophp paginatorphp instancephp providedphp orphp incorrectphp typephp'php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$partialphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(selfphp:php:php$php_defaultViewPartialphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Viewphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Nophp viewphp partialphp providedphp andphp nophp defaultphp setphp'php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$partialphp php=php selfphp:php:php$php_defaultViewPartialphp;
php php php php php php php php php}

php php php php php php php php php$pagesphp php=php getphp_objectphp_varsphp(php$paginatorphp-php>getPagesphp(php$scrollingStylephp)php)php;

php php php php php php php php ifphp php(php$paramsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$pagesphp php=php arrayphp_mergephp(php$pagesphp,php php(arrayphp)php php$paramsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$partialphp)php)php php{
php php php php php php php php php php php php ifphp php(countphp(php$partialphp)php php!php=php php2php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Viewphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Aphp viewphp partialphp suppliedphp asphp anphp arrayphp mustphp containphp twophp valuesphp:php thephp filenamephp andphp itsphp modulephp'php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$partialphp[php1php]php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>viewphp-php>partialphp(php$partialphp[php0php]php,php php$partialphp[php1php]php,php php$pagesphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$partialphp php=php php$partialphp[php0php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>viewphp-php>partialphp(php$partialphp,php php$pagesphp)php;
php php php php php}
php}
