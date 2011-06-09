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
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php TermStreamsPriorityQueuephp.phpphp php2php2php9php8php7php php2php0php1php0php-php0php9php-php2php1php php1php0php:php3php9php:php5php3Zphp alexanderphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_TermsStreamphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/TermsStreamphp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_TermStreamsPriorityQueuephp implementsphp Zendphp_Searchphp_Lucenephp_Indexphp_TermsStreamphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Arrayphp ofphp termphp streamsphp php(Zendphp_Searchphp_Lucenephp_Indexphp_TermsStreamphp_Interfacephp objectsphp)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_termStreamsphp;

php php php php php/php*php*
php php php php php php*php Termsphp streamphp queue
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_TermsPriorityQueue
php php php php php php*php/
php php php php protectedphp php$php_termsStreamQueuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Lastphp Termphp inphp aphp termsphp stream
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php protectedphp php$php_lastTermphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$termStreamsphp php arrayphp ofphp termphp streamsphp php(Zendphp_Searchphp_Lucenephp_Indexphp_TermsStreamphp_Interfacephp objectsphp)
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$termStreamsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_termStreamsphp php=php php$termStreamsphp;

php php php php php php php php php$thisphp-php>resetTermsStreamphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp termsphp streamphp.
php php php php php php*php/
php php php php publicphp functionphp resetTermsStreamphp(php)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_TermsPriorityQueuephp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/TermsPriorityQueuephp.phpphp'php;

php php php php php php php php php$thisphp-php>php_termsStreamQueuephp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermsPriorityQueuephp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_termStreamsphp asphp php$termStreamphp)php php{
php php php php php php php php php php php php php$termStreamphp-php>resetTermsStreamphp(php)php;

php php php php php php php php php php php php php/php/php Skipphp php"emptyphp"php containers
php php php php php php php php php php php php ifphp php(php$termStreamphp-php>currentTermphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_termsStreamQueuephp-php>putphp(php$termStreamphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>nextTermphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Skipphp termsphp streamphp upphp tophp thephp specifiedphp termphp preffixphp.
php php php php php php*
php php php php php php*php Prefixphp containsphp fullyphp specifiedphp fieldphp infophp andphp portionphp ofphp searchedphp term
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$prefix
php php php php php php*php/
php php php php publicphp functionphp skipTophp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$prefixphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_termsStreamQueuephp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_TermsPriorityQueuephp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_termStreamsphp asphp php$termStreamphp)php php{
php php php php php php php php php php php php php$termStreamphp-php>skipTophp(php$prefixphp)php;

php php php php php php php php php php php php ifphp php(php$termStreamphp-php>currentTermphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_termsStreamQueuephp-php>putphp(php$termStreamphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>nextTermphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scansphp termphp streamsphp andphp returnsphp nextphp term
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp|null
php php php php php php*php/
php php php php publicphp functionphp nextTermphp(php)
php php php php php{
php php php php php php php php whilephp php(php(php$termStreamphp php=php php$thisphp-php>php_termsStreamQueuephp-php>popphp(php)php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_termsStreamQueuephp-php>topphp(php)php php=php=php=php nullphp php|php|
php php php php php php php php php php php php php php php php php$thisphp-php>php_termsStreamQueuephp-php>topphp(php)php-php>currentTermphp(php)php-php>keyphp(php)php php!php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$termStreamphp-php>currentTermphp(php)php-php>keyphp(php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Wephp gotphp newphp term
php php php php php php php php php php php php php php php php php$thisphp-php>php_lastTermphp php=php php$termStreamphp-php>currentTermphp(php)php;

php php php php php php php php php php php php php php php php ifphp php(php$termStreamphp-php>nextTermphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Putphp segmentphp backphp intophp thephp priorityphp queue
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_termsStreamQueuephp-php>putphp(php$termStreamphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_lastTermphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$termStreamphp-php>nextTermphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php/php/php Putphp segmentphp backphp intophp thephp priorityphp queue
php php php php php php php php php php php php php php php php php$thisphp-php>php_termsStreamQueuephp-php>putphp(php$termStreamphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Endphp ofphp stream
php php php php php php php php php$thisphp-php>php_lastTermphp php=php nullphp;

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp termphp inphp currentphp position
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp|null
php php php php php php*php/
php php php php publicphp functionphp currentTermphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lastTermphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp termsphp stream
php php php php php php*
php php php php php php*php Shouldphp bephp usedphp forphp resourcesphp cleanphp upphp ifphp streamphp isphp notphp readphp upphp tophp thephp end
php php php php php php*php/
php php php php publicphp functionphp closeTermsStreamphp(php)
php php php php php{
php php php php php php php php whilephp php(php(php$termStreamphp php=php php$thisphp-php>php_termsStreamQueuephp-php>popphp(php)php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$termStreamphp-php>closeTermsStreamphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_termsStreamQueuephp php=php nullphp;
php php php php php php php php php$thisphp-php>php_lastTermphp php php php php php php php php php=php nullphp;
php php php php php}
php}
