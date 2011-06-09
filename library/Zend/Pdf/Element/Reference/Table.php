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
php php*php php@versionphp php php php php$Idphp:php Tablephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php PDFphp filephp referencephp table
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Elementphp_Referencephp_Table
php{
php php php php php/php*php*
php php php php php php*php Parentphp referencephp table
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Referencephp_Table
php php php php php php*php/
php php php php privatephp php$php_parentphp;

php php php php php/php*php*
php php php php php php*php Freephp entries
php php php php php php*php php'referencephp'php php=php>php nextphp freephp objectphp number
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_freephp;

php php php php php/php*php*
php php php php php php*php Generationphp numbersphp forphp freephp objectsphp.
php php php php php php*php Arrayphp:php objNumphp php=php>php nextGeneration
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_generationsphp;

php php php php php/php*php*
php php php php php php*php Inphp usephp entries
php php php php php php*php php'referencephp'php php=php>php offset
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_inusephp;

php php php php php/php*php*
php php php php php php*php Generationphp numbersphp forphp freephp objectsphp.
php php php php php php*php Arrayphp:php objNumphp php=php>php objGeneration
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_usedObjectsphp;



php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*php/
php php php php publicphp functionphp php php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_parentphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_freephp php php php=php arrayphp(php)php;php php php$thisphp-php>php_generationsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_inusephp php php=php arrayphp(php)php;php php php$thisphp-php>php_usedObjectsphp php=php arrayphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp referencephp tophp thephp referencephp table
php php php php php php*
php php php php php php*php php@paramphp stringphp php$ref
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@paramphp booleanphp php$inuse
php php php php php php*php/
php php php php publicphp functionphp addReferencephp(php$refphp,php php$offsetphp,php php$inusephp php=php truephp)
php php php php php{
php php php php php php php php php$refElementsphp php=php explodephp(php'php php'php,php php$refphp)php;
php php php php php php php php ifphp php(php!isphp_numericphp(php$refElementsphp[php0php]php)php php|php|php php!isphp_numericphp(php$refElementsphp[php1php]php)php php|php|php php$refElementsphp[php2php]php php!php=php php'Rphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Incorrectphp referencephp:php php'php$refphp'php"php)php;
php php php php php php php php php}
php php php php php php php php php$objNumphp php=php php(intphp)php$refElementsphp[php0php]php;
php php php php php php php php php$genNumphp php=php php(intphp)php$refElementsphp[php1php]php;

php php php php php php php php ifphp php(php$inusephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_inusephp[php$refphp]php php php php php php php php php php php=php php$offsetphp;
php php php php php php php php php php php php php$thisphp-php>php_usedObjectsphp[php$objNumphp]php php=php php$objNumphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_freephp[php$refphp]php php php php php php php php php php php php=php php$offsetphp;
php php php php php php php php php php php php php$thisphp-php>php_generationsphp[php$objNumphp]php php=php php$genNumphp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp parentphp referencephp table
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Referencephp_Tablephp php$parent
php php php php php php*php/
php php php php publicphp functionphp setParentphp(selfphp php$parentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parentphp php=php php$parentphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp objectphp offset
php php php php php php*
php php php php php php*php php@paramphp stringphp php$ref
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getOffsetphp(php$refphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_inusephp[php$refphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_inusephp[php$refphp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_freephp[php$refphp]php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_parentphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_parentphp-php>getOffsetphp(php$refphp)php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp nextphp objectphp fromphp aphp listphp ofphp freephp objectsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$ref
php php php php php php*php php@returnphp integer
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getNextFreephp(php$refphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_inusephp[php$refphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp isphp notphp freephp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_freephp[php$refphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_freephp[php$refphp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_parentphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_parentphp-php>getNextFreephp(php$refphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp notphp foundphp.php'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp nextphp generationphp numberphp forphp freephp object
php php php php php php*
php php php php php php*php php@paramphp integerphp php$objNum
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp getNewGenerationphp(php$objNumphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_usedObjectsphp[php$objNumphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp isphp notphp freephp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_generationsphp[php$objNumphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_generationsphp[php$objNumphp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_parentphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_parentphp-php>getNewGenerationphp(php$objNumphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Objectphp notphp foundphp.php'php)php;
php php php php php}
php}
