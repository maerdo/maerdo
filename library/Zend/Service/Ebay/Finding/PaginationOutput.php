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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php PaginationOutputphp.phpphp php2php2php7php9php1php php2php0php1php0php-php0php8php-php0php4php php1php6php:php1php1php:php4php7Zphp renanbrphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Findingphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@usesphp php php php php php php Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php php*php/
classphp Zendphp_Servicephp_Ebayphp_Findingphp_PaginationOutputphp extendsphp Zendphp_Servicephp_Ebayphp_Findingphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Thephp maximumphp numberphp ofphp itemsphp thatphp canphp bephp returnedphp inphp thephp responsephp.
php php php php php php*
php php php php php php*php Thisphp numberphp isphp alwaysphp equalphp tophp thephp valuephp inputphp for
php php php php php php*php paginationInputphp.entriesPerPagephp.php Thephp endphp ofphp thephp resultphp setphp hasphp been
php php php php php php*php reachedphp ifphp thephp numberphp specifiedphp forphp entriesPerPagephp isphp greaterphp thanphp the
php php php php php php*php numberphp ofphp itemsphp foundphp onphp thephp specifiedphp pageNumberphp.php Inphp thisphp casephp,php there
php php php php php php*php willphp bephp fewerphp itemsphp returnedphp thanphp thephp numberphp specifiedphp inphp entriesPerPagephp.
php php php php php php*php Thisphp canphp bephp determinedphp byphp comparingphp thephp entriesPerPagephp valuephp withphp the
php php php php php php*php valuephp returnedphp inphp thephp countphp attributephp forphp thephp searchResultphp fieldphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$entriesPerPagephp;

php php php php php/php*php*
php php php php php php*php Thephp subsetphp ofphp itemphp dataphp returnedphp inphp thephp currentphp responsephp.
php php php php php php*
php php php php php php*php Searchphp resultsphp arephp dividedphp intophp setsphp,php orphp php"pagesphp,php"php ofphp itemphp dataphp.php The
php php php php php php*php numberphp ofphp pagesphp isphp equalphp tophp thephp totalphp numberphp ofphp itemsphp matchingphp thephp search
php php php php php php*php criteriaphp dividedphp byphp thephp valuephp specifiedphp forphp entriesPerPagephp inphp the
php php php php php php*php requestphp.php Thephp responsephp forphp aphp requestphp containsphp onephp php"pagephp"php ofphp itemphp dataphp.
php php php php php php*
php php php php php php*php Thisphp returnedphp valuephp indicatesphp thephp pagephp numberphp ofphp itemphp dataphp returnedphp php(a
php php php php php php*php subsetphp ofphp thephp completephp resultphp setphp)php.php Ifphp thisphp fieldphp containsphp php1php,php the
php php php php php php*php responsephp containsphp thephp firstphp pagephp ofphp itemphp dataphp php(thephp defaultphp)php.php Ifphp thephp value
php php php php php php*php returnedphp inphp totalEntriesphp isphp lessphp thanphp thephp valuephp forphp entriesPerPagephp,
php php php php php php*php pageNumberphp returnsphp php1php andphp thephp responsephp containsphp thephp entirephp resultphp setphp.
php php php php php php*
php php php php php php*php Thephp valuephp ofphp pageNumberphp isphp normallyphp equalphp tophp thephp valuephp inputphp for
php php php php php php*php paginationInputphp.pageNumberphp.php Howeverphp,php ifphp thephp numberphp inputphp forphp pageNumber
php php php php php php*php isphp greaterphp thanphp thephp totalphp possiblephp pagesphp ofphp outputphp,php eBayphp returnsphp thephp last
php php php php php php*php pagephp ofphp itemphp dataphp inphp thephp resultphp setphp,php andphp thephp valuephp forphp pageNumberphp isphp set
php php php php php php*php tophp thephp respectivephp php(lastphp)php pagephp numberphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$pageNumberphp;

php php php php php/php*php*
php php php php php php*php Thephp totalphp numberphp ofphp itemsphp foundphp thatphp matchphp thephp searchphp criteriaphp inphp your
php php php php php php*php requestphp.
php php php php php php*
php php php php php php*php Dependingphp onphp thephp inputphp valuephp forphp entriesPerPagephp,php thephp responsephp might
php php php php php php*php includephp onlyphp aphp portionphp php(aphp pagephp)php ofphp thephp entirephp resultphp setphp.php Aphp valuephp ofphp php"php0php"
php php php php php php*php isphp returnedphp ifphp eBayphp doesphp notphp findphp anyphp itemsphp thatphp matchphp thephp search
php php php php php php*php criteriaphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$totalEntriesphp;

php php php php php/php*php*
php php php php php php*php Thephp totalphp numberphp ofphp pagesphp ofphp dataphp thatphp couldphp bephp returnedphp byphp repeated
php php php php php php*php searchphp requestsphp.
php php php php php php*
php php php php php php*php Notephp thatphp ifphp youphp modifyphp thephp valuephp ofphp inputPaginationphp.entriesPerPagephp inphp a
php php php php php php*php requestphp,php thephp valuephp outputphp forphp totalPagesphp willphp changephp.php Aphp valuephp ofphp php"php0php"php is
php php php php php php*php returnedphp ifphp eBayphp doesphp notphp findphp anyphp itemsphp thatphp matchphp thephp searchphp criteriaphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$totalPagesphp;

php php php php php/php*php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_initphp(php)php;
php php php php php php php php php$nsphp php=php Zendphp_Servicephp_Ebayphp_Findingphp:php:XMLNSphp_FINDINGphp;

php php php php php php php php php$thisphp-php>entriesPerPagephp php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:entriesPerPagephp[php1php]php"php,php php'integerphp'php)php;
php php php php php php php php php$thisphp-php>pageNumberphp php php php php php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:pageNumberphp[php1php]php"php,php php'integerphp'php)php;
php php php php php php php php php$thisphp-php>totalEntriesphp php php php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:totalEntriesphp[php1php]php"php,php php'integerphp'php)php;
php php php php php php php php php$thisphp-php>totalPagesphp php php php php php=php php$thisphp-php>php_queryphp(php"php.php/php/php$nsphp:totalPagesphp[php1php]php"php,php php'integerphp'php)php;
php php php php php}
php}
