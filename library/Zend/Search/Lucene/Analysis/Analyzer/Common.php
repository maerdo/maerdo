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
php php*php php@subpackagephp Analysis
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Commonphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Definephp constantphp usedphp tophp providephp correctphp filephp processingphp orderphp php php php php*php/
php/php*php*php php@todophp Sectionphp shouldphp bephp removedphp withphp ZFphp php2php.php0php releasephp asphp obsoletephp php php*php/
definephp(php'ZENDphp_SEARCHphp_LUCENEphp_COMMONphp_ANALYZERphp_PROCESSEDphp'php,php truephp)php;


php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Tokenphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/TokenFilterphp.phpphp'php;


php/php*php*
php php*php Commonphp implementationphp ofphp thephp Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp interfacephp.
php php*php Therephp arephp severalphp standardphp standardphp subclassesphp providedphp byphp Zendphp_Searchphp_Lucenephp/Analysis
php php*php subpackagephp:php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp_Commonphp_Textphp,php ZSearchHTMLAnalyzerphp,php ZSearchXMLAnalyzerphp.
php php*
php php*php php@todophp ZSearchHTMLAnalyzerphp andphp ZSearchXMLAnalyzerphp implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Analysis
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp_Commonphp extendsphp Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzer
php{
php php php php php/php*php*
php php php php php php*php Thephp setphp ofphp Tokenphp filtersphp appliedphp tophp thephp Tokenphp streamphp.
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp objectsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_filtersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Addphp Tokenphp filterphp tophp thephp Analyzer
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp php$filter
php php php php php php*php/
php php php php publicphp functionphp addFilterphp(Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp php$filterphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filtersphp[php]php php=php php$filterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Applyphp filtersphp tophp thephp tokenphp.php Canphp returnphp nullphp whenphp thephp tokenphp wasphp removedphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php$token
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Analysisphp_Token
php php php php php php*php/
php php php php publicphp functionphp normalizephp(Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php$tokenphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_filtersphp asphp php$filterphp)php php{
php php php php php php php php php php php php php$tokenphp php=php php$filterphp-php>normalizephp(php$tokenphp)php;

php php php php php php php php php php php php php/php/php resultingphp tokenphp canphp bephp nullphp ifphp thephp filterphp removesphp it
php php php php php php php php php php php php ifphp php(php$tokenphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$tokenphp;
php php php php php}
php}

