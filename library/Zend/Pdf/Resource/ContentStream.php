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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Imagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Objectphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Resourcephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp.phpphp'php;


php/php*php*
php php*php Contentphp streamphp php(drawingphp instructionsphp containerphp)
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_ContentStreamphp extendsphp Zendphp_Pdfphp_Resource
php{
php php php php php/php*php*
php php php php php php*php Bufferedphp content
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_bufferedContentphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Objectphp_Streamphp|stringphp php$contentStreamObject
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$contentStreamObjectphp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php$contentStreamObjectphp php!php=php=php nullphp php&php&
php php php php php php php php php php php php php!php$contentStreamObjectphp instanceofphp Zendphp_Pdfphp_Elementphp_Objectphp_Streamphp php&php&
php php php php php php php php php php php php php!isphp_stringphp(php$contentStreamObjectphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Contentphp streamphp parameterphp mustphp bephp aphp stringphp orphp streamphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$contentStreamObjectphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendsphp instructionsphp tophp thephp endphp ofphp thephp contentphp stream
php php php php php php*
php php php php php php*php php@paramphp stringphp php$instructions
php php php php php php*php php@returnphp Zendphp_Pdfphp_Resourcephp_ContentStream
php php php php php php*php/
php php php php publicphp functionphp addInstructionsphp(php$instructionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bufferedContentphp php.php=php php$instructionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp streamphp content
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getInstructionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>flushphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_resourcephp-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp streamphp contentphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Resourcephp_ContentStream
php php php php php php*php/
php php php php publicphp functionphp clearphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_resourcephp-php>valuephp php=php php'php'php;
php php php php php php php php php$thisphp-php>php_bufferedContentphp php=php php'php'php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Flushphp bufferedphp content
php php php php php php*php/
php php php php publicphp functionphp flushphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_resourcephp-php>valuephp php.php=php php$thisphp-php>php_bufferedContentphp;
php php php php php php php php php$thisphp-php>php_bufferedContentphp php=php php'php'php;

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
