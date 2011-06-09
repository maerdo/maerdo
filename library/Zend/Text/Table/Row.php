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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Textphp_Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Rowphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Rowphp classphp forphp Zendphp_Textphp_Table
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Textphp_Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Textphp_Tablephp_Row
php{
php php php php php/php*php*
php php php php php php*php Listphp ofphp allphp columns
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_columnsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Temporaryphp storedphp columnphp widths
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_columnWidthsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp columnphp andphp appendphp itphp tophp thephp row
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@returnphp Zendphp_Textphp_Tablephp_Row
php php php php php php*php/
php php php php publicphp functionphp createColumnphp(php$contentphp,php arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$alignphp php php php php=php nullphp;
php php php php php php php php php$colSpanphp php php=php nullphp;
php php php php php php php php php$encodingphp php=php nullphp;

php php php php php php php php ifphp php(php$optionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php extractphp(php$optionsphp,php EXTRphp_IFphp_EXISTSphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Columnphp.phpphp'php;

php php php php php php php php php$columnphp php=php newphp Zendphp_Textphp_Tablephp_Columnphp(php$contentphp,php php$alignphp,php php$colSpanphp,php php$encodingphp)php;

php php php php php php php php php$thisphp-php>appendColumnphp(php$columnphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp aphp columnphp tophp thephp row
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Textphp_Tablephp_Columnphp php$columnphp Thephp columnphp tophp appendphp tophp thephp row
php php php php php php*php php@returnphp Zendphp_Textphp_Tablephp_Row
php php php php php php*php/
php php php php publicphp functionphp appendColumnphp(Zendphp_Textphp_Tablephp_Columnphp php$columnphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_columnsphp[php]php php=php php$columnphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp columnphp byphp itphp'sphp index
php php php php php php*
php php php php php php*php Returnsphp nullphp,php whenphp thephp indexphp isphp outphp ofphp range
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$index
php php php php php php*php php@returnphp Zendphp_Textphp_Tablephp_Columnphp|null
php php php php php php*php/
php php php php publicphp functionphp getColumnphp(php$indexphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_columnsphp[php$indexphp]php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_columnsphp[php$indexphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp columnsphp ofphp thephp row
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getColumnsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_columnsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp widthsphp ofphp allphp columnsphp,php whichphp werephp renderedphp last
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Textphp_Tablephp_Exceptionphp Whenphp nophp columnsphp werephp renderedphp yet
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getColumnWidthsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_columnWidthsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Textphp_Tablephp_Exceptionphp(php'Nophp columnsphp werephp renderedphp yetphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_columnWidthsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp thephp row
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$columnWidthsphp Widthphp ofphp allphp columns
php php php php php php*php php@paramphp php Zendphp_Textphp_Tablephp_Decoratorphp_Interfacephp php$decoratorphp php php php Decoratorphp forphp thephp rowphp borders
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$paddingphp php php php php php Paddingphp forphp thephp columns
php php php php php php*php php@throwsphp Zendphp_Textphp_Tablephp_Exceptionphp Whenphp therephp arephp toophp manyphp columns
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(arrayphp php$columnWidthsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Textphp_Tablephp_Decoratorphp_Interfacephp php$decoratorphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$paddingphp php=php php0php)
php php php php php{
php php php php php php php php php/php/php Preparephp anphp arrayphp tophp storephp allphp columnphp widths
php php php php php php php php php$thisphp-php>php_columnWidthsphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Ifphp therephp isphp nophp singlephp columnphp,php createphp aphp columnphp whichphp spansphp overphp the
php php php php php php php php php/php/php entirephp row
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_columnsphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Columnphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>appendColumnphp(newphp Zendphp_Textphp_Tablephp_Columnphp(nullphp,php nullphp,php countphp(php$columnWidthsphp)php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Firstphp wephp havephp tophp renderphp allphp columnsphp,php tophp getphp thephp maximumphp height
php php php php php php php php php$renderedColumnsphp php=php arrayphp(php)php;
php php php php php php php php php$maxHeightphp php php php php php php php=php php0php;
php php php php php php php php php$colNumphp php php php php php php php php php php=php php0php;
php php php php php php php php foreachphp php(php$thisphp-php>php_columnsphp asphp php$columnphp)php php{
php php php php php php php php php php php php php/php/php Getphp thephp colspanphp ofphp thephp column
php php php php php php php php php php php php php$colSpanphp php=php php$columnphp-php>getColSpanphp(php)php;

php php php php php php php php php php php php php/php/php Verifyphp ifphp therephp arephp enoughphp columnphp widthsphp defined
php php php php php php php php php php php php ifphp php(php(php$colNumphp php+php php$colSpanphp)php php>php countphp(php$columnWidthsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Textphp_Tablephp_Exceptionphp(php'Toophp manyphp columnsphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Calculatephp thephp columnphp width
php php php php php php php php php php php php php$columnWidthphp php=php php(php$colSpanphp php-php php1php php+php arrayphp_sumphp(arrayphp_slicephp(php$columnWidthsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$colNumphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$colSpanphp)php)php)php;

php php php php php php php php php php php php php/php/php Renderphp thephp columnphp andphp splitphp itphp'sphp linesphp intophp anphp array
php php php php php php php php php php php php php$resultphp php=php explodephp(php"php\nphp"php,php php$columnphp-php>renderphp(php$columnWidthphp,php php$paddingphp)php)php;

php php php php php php php php php php php php php/php/php Storephp thephp widthphp ofphp thephp renderedphp column
php php php php php php php php php php php php php$thisphp-php>php_columnWidthsphp[php]php php=php php$columnWidthphp;

php php php php php php php php php php php php php/php/php Storephp thephp renderedphp columnphp andphp calculatephp thephp newphp maxphp height
php php php php php php php php php php php php php$renderedColumnsphp[php]php php=php php$resultphp;
php php php php php php php php php php php php php$maxHeightphp php php php php php php php php php=php maxphp(php$maxHeightphp,php countphp(php$resultphp)php)php;

php php php php php php php php php php php php php/php/php Setphp upphp thephp internalphp columnphp number
php php php php php php php php php php php php php$colNumphp php+php=php php$colSpanphp;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp thephp rowphp doesntphp containphp enoughphp columnsphp tophp fillphp thephp entirephp rowphp,php fill
php php php php php php php php php/php/php itphp withphp anphp emptyphp column
php php php php php php php php ifphp php(php$colNumphp <php countphp(php$columnWidthsphp)php)php php{
php php php php php php php php php php php php php$remainingWidthphp php=php php(countphp(php$columnWidthsphp)php php-php php$colNumphp php-php php1php)php php+
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp_sumphp(arrayphp_slicephp(php$columnWidthsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$colNumphp)php)php;
php php php php php php php php php php php php php$renderedColumnsphp[php]php php=php arrayphp(strphp_repeatphp(php'php php'php,php php$remainingWidthphp)php)php;

php php php php php php php php php php php php php$thisphp-php>php_columnWidthsphp[php]php php=php php$remainingWidthphp;
php php php php php php php php php}

php php php php php php php php php/php/php Addphp eachphp singlephp columnphp linephp tophp thephp result
php php php php php php php php php$resultphp php=php php'php'php;
php php php php php php php php forphp php(php$linephp php=php php0php;php php$linephp <php php$maxHeightphp;php php$linephp+php+php)php php{
php php php php php php php php php php php php php$resultphp php.php=php php$decoratorphp-php>getVerticalphp(php)php;

php php php php php php php php php php php php foreachphp php(php$renderedColumnsphp asphp php$renderedColumnphp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$renderedColumnphp[php$linephp]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php php$renderedColumnphp[php$linephp]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php.php=php strphp_repeatphp(php'php php'php,php strlenphp(php$renderedColumnphp[php0php]php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$resultphp php.php=php php$decoratorphp-php>getVerticalphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resultphp php.php=php php"php\nphp"php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}
php}
