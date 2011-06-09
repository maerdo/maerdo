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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Defaultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Highlighterphp/Interfacephp.phpphp'php;
php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Defaultphp implementsphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Listphp ofphp colorsphp forphp textphp highlighting
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_highlightColorsphp php=php arrayphp(php'php#php6php6ffffphp'php,php php'php#ffphp6php6ffphp'php,php php'php#ffffphp6php6php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php#ffphp8php8php8php8php'php,php php'php#php8php8ffphp8php8php'php,php php'php#php8php8php8php8ffphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php#php8php8ddddphp'php,php php'php#ddphp8php8ddphp'php,php php'php#ddddphp8php8php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php#aaddffphp'php,php php'php#aaffddphp'php,php php'php#ddaaffphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php#ddffaaphp'php,php php'php#ffaaddphp'php,php php'php#ffddaaphp'php)php;

php php php php php/php*php*
php php php php php php*php Indexphp ofphp currentphp colorphp forphp highlighting
php php php php php php*
php php php php php php*php Indexphp isphp increasedphp atphp eachphp highlightphp(php)php callphp,php sophp termsphp matchingphp differentphp queriesphp arephp highlightedphp usingphp differentphp colorsphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_currentColorIndexphp php=php php0php;

php php php php php/php*php*
php php php php php php*php HTMLphp documentphp forphp highlighting
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Documentphp_Html
php php php php php php*php/
php php php php protectedphp php$php_docphp;

php php php php php/php*php*
php php php php php php*php Setphp documentphp forphp highlightingphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp php$document
php php php php php php*php/
php php php php publicphp functionphp setDocumentphp(Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp php$documentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_docphp php=php php$documentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp forphp highlightingphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp php$document
php php php php php php*php/
php php php php publicphp functionphp getDocumentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_docphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Highlightphp specifiedphp words
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$wordsphp php Wordsphp tophp highlightphp.php Theyphp couldphp bephp organizedphp usingphp thephp arrayphp orphp stringphp.
php php php php php php*php/
php php php php publicphp functionphp highlightphp(php$wordsphp)
php php php php php{
php php php php php php php php php$colorphp php=php php$thisphp-php>php_highlightColorsphp[php$thisphp-php>php_currentColorIndexphp]php;
php php php php php php php php php$thisphp-php>php_currentColorIndexphp php=php php(php$thisphp-php>php_currentColorIndexphp php+php php1php)php php%php countphp(php$thisphp-php>php_highlightColorsphp)php;

php php php php php php php php php$thisphp-php>php_docphp-php>highlightphp(php$wordsphp,php php$colorphp)php;
php php php php php}

php}
