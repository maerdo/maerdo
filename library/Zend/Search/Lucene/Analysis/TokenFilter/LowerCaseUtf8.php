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
php php*php php@versionphp php php php php$Idphp:php LowerCaseUtfphp8php.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/TokenFilterphp.phpphp'php;


php/php*php*
php php*php Lowerphp casephp Tokenphp filterphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Analysis
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp_LowerCaseUtfphp8php extendsphp Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilter
php{
php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php ifphp php(php!functionphp_existsphp(php'mbphp_strtolowerphp'php)php)php php{
php php php php php php php php php php php php php/php/php mbstringphp extensionphp isphp disabled
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Utfphp8php compatiblephp lowerphp casephp filterphp needsphp mbstringphp extensionphp tophp bephp enabledphp.php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp Tokenphp orphp removephp itphp php(ifphp nullphp isphp returnedphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php$srcToken
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Analysisphp_Token
php php php php php php*php/
php php php php publicphp functionphp normalizephp(Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php$srcTokenphp)
php php php php php{
php php php php php php php php php$newTokenphp php=php newphp Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php mbphp_strtolowerphp(php$srcTokenphp-php>getTermTextphp(php)php,php php'UTFphp-php8php'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$srcTokenphp-php>getStartOffsetphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$srcTokenphp-php>getEndOffsetphp(php)php)php;

php php php php php php php php php$newTokenphp-php>setPositionIncrementphp(php$srcTokenphp-php>getPositionIncrementphp(php)php)php;

php php php php php php php php returnphp php$newTokenphp;
php php php php php}
php}

