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
php php*php php@versionphp php php php php$Idphp:php ShortWordsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/TokenFilterphp.phpphp'php;


php/php*php*
php php*php Tokenphp filterphp thatphp removesphp shortphp wordsphp.php Whatphp isphp shortphp wordphp canphp bephp configuredphp withphp constructorphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Analysis
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp_ShortWordsphp extendsphp Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilter
php{
php php php php php/php*php*
php php php php php php*php Minimumphp allowedphp termphp length
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$lengthphp;

php php php php php/php*php*
php php php php php php*php Constructsphp newphp instancephp ofphp thisphp filterphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$shortphp php minimumphp allowedphp lengthphp ofphp termphp whichphp passesphp thisphp filterphp php(defaultphp php2php)
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$lengthphp php=php php2php)php php{
php php php php php php php php php$thisphp-php>lengthphp php=php php$lengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp Tokenphp orphp removephp itphp php(ifphp nullphp isphp returnedphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php$srcToken
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Analysisphp_Token
php php php php php php*php/
php php php php publicphp functionphp normalizephp(Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php$srcTokenphp)php php{
php php php php php php php php ifphp php(strlenphp(php$srcTokenphp-php>getTermTextphp(php)php)php <php php$thisphp-php>lengthphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$srcTokenphp;
php php php php php php php php php}
php php php php php}
php}

