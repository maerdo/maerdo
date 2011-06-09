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
php php*php php@versionphp php php php php$Idphp:php UpdateInfoContainerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Containerphp whichphp collectsphp updatedphp objectphp infophp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_UpdateInfoContainer
php{
php php php php php/php*php*
php php php php php php*php Objectphp number
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_objNumphp;

php php php php php/php*php*
php php php php php php*php Generationphp number
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_genNumphp;


php php php php php/php*php*
php php php php php php*php Flagphp,php whichphp signalsphp,php thatphp objectphp isphp free
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_isFreephp;

php php php php php/php*php*
php php php php php php*php Stringphp representationphp ofphp thephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Memoryphp_Containerphp|null
php php php php php php*php/
php php php php privatephp php$php_dumpphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp integerphp php$objCount
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$objNumphp,php php$genNumphp,php php$isFreephp,php php$dumpphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_objNumphp php=php php$objNumphp;
php php php php php php php php php$thisphp-php>php_genNumphp php=php php$genNumphp;
php php php php php php php php php$thisphp-php>php_isFreephp php=php php$isFreephp;

php php php php php php php php ifphp php(php$dumpphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(strlenphp(php$dumpphp)php php>php php1php0php2php4php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp.phpphp'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_dumpphp php=php Zendphp_Pdfphp:php:getMemoryManagerphp(php)php-php>createphp(php$dumpphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dumpphp php=php php$dumpphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp objectphp number
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getObjNumphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objNumphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp generationphp number
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getGenNumphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_genNumphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp,php thatphp objectphp isphp free
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isFreephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isFreephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp stringphp representationphp ofphp thephp object
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getObjectDumpphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_dumpphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$thisphp-php>php_dumpphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dumpphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_dumpphp-php>getRefphp(php)php;
php php php php php}
php}

