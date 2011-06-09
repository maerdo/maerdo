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
php php*php php@versionphp php php php php$Idphp:php Utfphp8Numphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp_Commonphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp/Commonphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Analysis
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp_Commonphp_Utfphp8Numphp extendsphp Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp_Common
php{
php php php php php/php*php*
php php php php php php*php Currentphp charphp positionphp inphp anphp UTFphp-php8php stream
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_positionphp;

php php php php php/php*php*
php php php php php php*php Currentphp binaryphp positionphp inphp anphp UTFphp-php8php stream
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_bytePositionphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php ifphp php(php@pregphp_matchphp(php'php/php\pLphp/uphp'php,php php'aphp'php)php php!php=php php1php)php php{
php php php php php php php php php php php php php/php/php PCREphp unicodephp supportphp isphp turnedphp off
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Utfphp8Numphp analyzerphp needsphp PCREphp unicodephp supportphp tophp bephp enabledphp.php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp tokenphp stream
php php php php php php*php/
php php php php publicphp functionphp resetphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_positionphp php php php php php=php php0php;
php php php php php php php php php$thisphp-php>php_bytePositionphp php=php php0php;

php php php php php php php php php/php/php convertphp inputphp intophp UTFphp-php8
php php php php php php php php ifphp php(strcasecmpphp(php$thisphp-php>php_encodingphp,php php'utfphp8php'php php)php php!php=php php0php php php&php&
php php php php php php php php php php php php strcasecmpphp(php$thisphp-php>php_encodingphp,php php'utfphp-php8php'php)php php!php=php php0php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_inputphp php=php iconvphp(php$thisphp-php>php_encodingphp,php php'UTFphp-php8php'php,php php$thisphp-php>php_inputphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_encodingphp php=php php'UTFphp-php8php'php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Tokenizationphp streamphp API
php php php php php php*php Getphp nextphp token
php php php php php php*php Returnsphp nullphp atphp thephp endphp ofphp stream
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp|null
php php php php php php*php/
php php php php publicphp functionphp nextTokenphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_inputphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php dophp php{
php php php php php php php php php php php php ifphp php(php!php pregphp_matchphp(php'php/php[php\pphp{Lphp}php\pphp{Nphp}php]php+php/uphp'php,php php$thisphp-php>php_inputphp,php php$matchphp,php PREGphp_OFFSETphp_CAPTUREphp,php php$thisphp-php>php_bytePositionphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Itphp coversphp bothphp casesphp aphp)php therephp arephp nophp matchesphp php(pregphp_matchphp(php.php.php.php)php php=php=php=php php0php)
php php php php php php php php php php php php php php php php php/php/php bphp)php errorphp occuredphp php(pregphp_matchphp(php.php.php.php)php php=php=php=php FALSEphp)
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php matchedphp string
php php php php php php php php php php php php php$matchedWordphp php=php php$matchphp[php0php]php[php0php]php;

php php php php php php php php php php php php php/php/php binaryphp positionphp ofphp thephp matchedphp wordphp inphp thephp inputphp stream
php php php php php php php php php php php php php$binStartPosphp php=php php$matchphp[php0php]php[php1php]php;

php php php php php php php php php php php php php/php/php characterphp positionphp ofphp thephp matchedphp wordphp inphp thephp inputphp stream
php php php php php php php php php php php php php$startPosphp php=php php$thisphp-php>php_positionphp php+
php php php php php php php php php php php php php php php php php php php php php php php php iconvphp_strlenphp(substrphp(php$thisphp-php>php_inputphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_bytePositionphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$binStartPosphp php-php php$thisphp-php>php_bytePositionphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php/php/php characterphp postionphp ofphp thephp endphp ofphp matchedphp wordphp inphp thephp inputphp stream
php php php php php php php php php php php php php$endPosphp php=php php$startPosphp php+php iconvphp_strlenphp(php$matchedWordphp,php php'UTFphp-php8php'php)php;

php php php php php php php php php php php php php$thisphp-php>php_bytePositionphp php=php php$binStartPosphp php+php strlenphp(php$matchedWordphp)php;
php php php php php php php php php php php php php$thisphp-php>php_positionphp php php php php php=php php$endPosphp;

php php php php php php php php php php php php php$tokenphp php=php php$thisphp-php>normalizephp(newphp Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp(php$matchedWordphp,php php$startPosphp,php php$endPosphp)php)php;
php php php php php php php php php}php whilephp php(php$tokenphp php=php=php=php nullphp)php;php php/php/php tryphp againphp ifphp tokenphp isphp skipped

php php php php php php php php returnphp php$tokenphp;
php php php php php}
php}

