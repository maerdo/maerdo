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
php php*php php@versionphp php php php$Idphp:php Columnphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Textphp_Table
php php*php/
requirephp_oncephp php'Zendphp/Textphp/Tablephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Textphp_MultiByte
php php*php/
requirephp_oncephp php'Zendphp/Textphp/MultiBytephp.phpphp'php;

php/php*php*
php php*php Columnphp classphp forphp Zendphp_Textphp_Tablephp_Row
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Textphp_Table
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Textphp_Tablephp_Column
php{
php php php php php/php*php*
php php php php php php*php Alignsphp forphp columns
php php php php php php*php/
php php php php constphp ALIGNphp_LEFTphp php php php=php php'leftphp'php;
php php php php constphp ALIGNphp_CENTERphp php=php php'centerphp'php;
php php php php constphp ALIGNphp_RIGHTphp php php=php php'rightphp'php;

php php php php php/php*php*
php php php php php php*php Contentphp ofphp thephp column
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contentphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Alignphp ofphp thephp column
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_alignphp php=php selfphp:php:ALIGNphp_LEFTphp;

php php php php php/php*php*
php php php php php php*php Colspanphp ofphp thephp column
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_colSpanphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Allowedphp alignphp parameters
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_allowedAlignsphp php=php arrayphp(selfphp:php:ALIGNphp_LEFTphp,php selfphp:php:ALIGNphp_CENTERphp,php selfphp:php:ALIGNphp_RIGHTphp)php;

php php php php php/php*php*
php php php php php php*php Createphp aphp columnphp forphp aphp Zendphp_Textphp_Tablephp_Rowphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$contentphp php Thephp contentphp ofphp thephp column
php php php php php php*php php@paramphp stringphp php php$alignphp php php php Thephp alignphp ofphp thephp content
php php php php php php*php php@paramphp integerphp php$colSpanphp php Thephp colspanphp ofphp thephp column
php php php php php php*php php@paramphp stringphp php php$charsetphp php Thephp encodingphp ofphp thephp content
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$contentphp php=php nullphp,php php$alignphp php=php nullphp,php php$colSpanphp php=php nullphp,php php$charsetphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$contentphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setContentphp(php$contentphp,php php$charsetphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$alignphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setAlignphp(php$alignphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$colSpanphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setColSpanphp(php$colSpanphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp contentphp.
php php php php php php*
php php php php php php*php Ifphp php$charsetphp isphp notphp definedphp,php itphp isphp assumedphp thatphp php$contentphp isphp encodedphp in
php php php php php php*php thephp charsetphp definedphp viaphp Zendphp_Textphp_Tablephp:php:setInputCharsetphp(php)php php(defaults
php php php php php php*php tophp utfphp-php8php)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$contentphp php Contentphp ofphp thephp column
php php php php php php*php php@paramphp php stringphp php$charsetphp php Thephp charsetphp ofphp thephp content
php php php php php php*php php@throwsphp Zendphp_Textphp_Tablephp_Exceptionphp Whenphp php$contentphp isphp notphp aphp string
php php php php php php*php php@returnphp Zendphp_Textphp_Tablephp_Column
php php php php php php*php/
php php php php publicphp functionphp setContentphp(php$contentphp,php php$charsetphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$contentphp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Textphp_Tablephp_Exceptionphp(php'php$contentphp mustphp bephp aphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$charsetphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$inputCharsetphp php=php Zendphp_Textphp_Tablephp:php:getInputCharsetphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$inputCharsetphp php=php strtolowerphp(php$charsetphp)php;
php php php php php php php php php}

php php php php php php php php php$outputCharsetphp php=php Zendphp_Textphp_Tablephp:php:getOutputCharsetphp(php)php;

php php php php php php php php ifphp php(php$inputCharsetphp php!php=php=php php$outputCharsetphp)php php{
php php php php php php php php php php php php ifphp php(PHPphp_OSphp php!php=php=php php'AIXphp'php)php php{
php php php php php php php php php php php php php php php php php/php/php AIXphp doesphp notphp understandphp thesephp characterphp sets
php php php php php php php php php php php php php php php php php$contentphp php=php iconvphp(php$inputCharsetphp,php php$outputCharsetphp,php php$contentphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contentphp php=php php$contentphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp align
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$alignphp Alignphp ofphp thephp column
php php php php php php*php php@throwsphp Zendphp_Textphp_Tablephp_Exceptionphp Whenphp suppliedphp alignphp isphp invalid
php php php php php php*php php@returnphp Zendphp_Textphp_Tablephp_Column
php php php php php php*php/
php php php php publicphp functionphp setAlignphp(php$alignphp)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(php$alignphp,php php$thisphp-php>php_allowedAlignsphp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Textphp_Tablephp_Exceptionphp(php'Invalidphp alignphp suppliedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_alignphp php=php php$alignphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp colspan
php php php php php php*
php php php php php php*php php@paramphp php intphp php$colSpan
php php php php php php*php php@throwsphp Zendphp_Textphp_Tablephp_Exceptionphp Whenphp php$colSpanphp isphp smallerphp thanphp php1
php php php php php php*php php@returnphp Zendphp_Textphp_Tablephp_Column
php php php php php php*php/
php php php php publicphp functionphp setColSpanphp(php$colSpanphp)
php php php php php{
php php php php php php php php ifphp php(isphp_intphp(php$colSpanphp)php php=php=php=php falsephp orphp php$colSpanphp <php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Textphp_Tablephp_Exceptionphp(php'php$colSpanphp mustphp bephp anphp integerphp andphp greaterphp thanphp php0php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_colSpanphp php=php php$colSpanphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp colspan
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getColSpanphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_colSpanphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp thephp columnphp widthphp thephp givenphp columnphp width
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$columnWidthphp Thephp widthphp ofphp thephp column
php php php php php php*php php@paramphp php integerphp php$paddingphp php php php php Thephp paddingphp forphp thephp column
php php php php php php*php php@throwsphp Zendphp_Textphp_Tablephp_Exceptionphp Whenphp php$columnWidthphp isphp lowerphp thanphp php1
php php php php php php*php php@throwsphp Zendphp_Textphp_Tablephp_Exceptionphp Whenphp paddingphp isphp greaterphp thanphp columnWidth
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$columnWidthphp,php php$paddingphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(isphp_intphp(php$columnWidthphp)php php=php=php=php falsephp orphp php$columnWidthphp <php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Textphp_Tablephp_Exceptionphp(php'php$columnWidthphp mustphp bephp anphp integerphp andphp greaterphp thanphp php0php'php)php;
php php php php php php php php php}

php php php php php php php php php$columnWidthphp php-php=php php(php$paddingphp php*php php2php)php;

php php php php php php php php ifphp php(php$columnWidthphp <php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Textphp/Tablephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Textphp_Tablephp_Exceptionphp(php'Paddingphp php(php'php php.php php$paddingphp php.php php'php)php isphp greaterphp thanphp columnphp widthphp'php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$thisphp-php>php_alignphp)php php{
php php php php php php php php php php php php casephp selfphp:php:ALIGNphp_LEFTphp:
php php php php php php php php php php php php php php php php php$padModephp php=php STRphp_PADphp_RIGHTphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ALIGNphp_CENTERphp:
php php php php php php php php php php php php php php php php php$padModephp php=php STRphp_PADphp_BOTHphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ALIGNphp_RIGHTphp:
php php php php php php php php php php php php php php php php php$padModephp php=php STRphp_PADphp_LEFTphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php Thisphp canphp neverphp happenphp,php butphp thephp CSphp tellsphp Iphp havephp tophp havephp itphp php.php.php.
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$outputCharsetphp php=php Zendphp_Textphp_Tablephp:php:getOutputCharsetphp(php)php;
php php php php php php php php php$linesphp php php php php php php php php php=php explodephp(php"php\nphp"php,php Zendphp_Textphp_MultiBytephp:php:wordWrapphp(php$thisphp-php>php_contentphp,php php$columnWidthphp,php php"php\nphp"php,php truephp,php php$outputCharsetphp)php)php;
php php php php php php php php php$paddedLinesphp php php php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$linesphp ASphp php$linephp)php php{
php php php php php php php php php php php php php$paddedLinesphp[php]php php=php strphp_repeatphp(php'php php'php,php php$paddingphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php Zendphp_Textphp_MultiBytephp:php:strPadphp(php$linephp,php php$columnWidthphp,php php'php php'php,php php$padModephp,php php$outputCharsetphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php strphp_repeatphp(php'php php'php,php php$paddingphp)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php implodephp(php"php\nphp"php,php php$paddedLinesphp)php;

php php php php php php php php returnphp php$resultphp;
php php php php php}
php}
