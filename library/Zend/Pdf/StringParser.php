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
php php*php php@versionphp php php php php$Idphp:php StringParserphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp/Binaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Booleanphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Nullphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Numericphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Objectphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Objectphp/Streamphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Referencephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;


php/php*php*
php php*php PDFphp stringphp parser
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_StringParser
php{
php php php php php/php*php*
php php php php php php*php Sourcephp PDF
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$dataphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Currentphp positionphp inphp aphp data
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$offsetphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Currentphp referencephp context
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Referencephp_Context
php php php php php php*php/
php php php php privatephp php$php_contextphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp elementsphp ofphp thephp currentlyphp parsedphp objectphp/trailer
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_elementsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php PDFphp objectsphp factoryphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_ElementFactoryphp_Interface
php php php php php php*php/
php php php php privatephp php$php_objFactoryphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Cleanphp upphp resourcesphp.
php php php php php php*
php php php php php php*php Clearphp currentphp statephp tophp removephp cyclicphp objectphp references
php php php php php php*php/
php php php php publicphp functionphp cleanUpphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_elementsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_objFactoryphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Characterphp withphp codephp php$chCodephp isphp whitephp space
php php php php php php*
php php php php php php*php php@paramphp integerphp php$chCode
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp isWhiteSpacephp(php$chCodephp)
php php php php php{
php php php php php php php php ifphp php(php$chCodephp php=php=php php0xphp0php0php php|php|php php/php/php nullphp character
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp0php9php php|php|php php/php/php Tab
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp0Aphp php|php|php php/php/php Linephp feed
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp0Cphp php|php|php php/php/php Formphp Feed
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp0Dphp php|php|php php/php/php Carriagephp return
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp2php0php php php php php/php/php Space
php php php php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Characterphp withphp codephp php$chCodephp isphp aphp delimiterphp character
php php php php php php*
php php php php php php*php php@paramphp integerphp php$chCode
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp isDelimiterphp(php$chCodephp php)
php php php php php{
php php php php php php php php ifphp php(php$chCodephp php=php=php php0xphp2php8php php|php|php php/php/php php'php(php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp2php9php php|php|php php/php/php php'php)php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp3Cphp php|php|php php/php/php php'<php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp3Ephp php|php|php php/php/php php'php>php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp5Bphp php|php|php php/php/php php'php[php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp5Dphp php|php|php php/php/php php'php]php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp7Bphp php|php|php php/php/php php'php{php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp7Dphp php|php|php php/php/php php'php}php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp2Fphp php|php|php php/php/php php'php/php'
php php php php php php php php php php php php php$chCodephp php=php=php php0xphp2php5php php php php php/php/php php'php%php'
php php php php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Skipphp whitephp space
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$skipComment
php php php php php php*php/
php php php php publicphp functionphp skipWhiteSpacephp(php$skipCommentphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$skipCommentphp)php php{
php php php php php php php php php php php php whilephp php(truephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php strspnphp(php$thisphp-php>dataphp,php php"php\xphp0php0php\tphp\nphp\fphp\rphp php"php,php php$thisphp-php>offsetphp)php;

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>offsetphp <php strlenphp(php$thisphp-php>dataphp)php php php&php&php php php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php php=php=php php'php%php'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Skipphp comment
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php strcspnphp(php$thisphp-php>dataphp,php php"php\rphp\nphp"php,php php$thisphp-php>offsetphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Nonphp whitephp spacephp characterphp notphp equalphp tophp php'php%php'php isphp found
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php strspnphp(php$thisphp-php>dataphp,php php"php\xphp0php0php\tphp\nphp\fphp\rphp php"php,php php$thisphp-php>offsetphp)php;
php php php php php php php php php}

php/php/php php php php php php php php php/php*php*php Originalphp php(nonphp-optimizedphp)php implementationphp.php php*php/
php/php/
php/php/php php php php php php php php whilephp php(php$thisphp-php>offsetphp <php strlenphp(php$thisphp-php>dataphp)php)php php{
php/php/php php php php php php php php php php php php ifphp php(strposphp(php"php\xphp0php0php\tphp\nphp\fphp\rphp php"php,php php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php)php php!php=php=php falsephp)php php{
php/php/php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp+php+php;
php/php/php php php php php php php php php php php php php}php elsephp ifphp php(ordphp(php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php)php php=php=php php0xphp2php5php php&php&php php$skipCommentphp)php php{php php/php/php php'php%php'
php/php/php php php php php php php php php php php php php php php php php$thisphp-php>skipCommentphp(php)php;
php/php/php php php php php php php php php php php php php}php elsephp php{
php/php/php php php php php php php php php php php php php php php php returnphp;
php/php/php php php php php php php php php php php php php}
php/php/php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Skipphp comment
php php php php php php*php/
php php php php publicphp functionphp skipCommentphp(php)
php php php php php{
php php php php php php php php whilephp php(php$thisphp-php>offsetphp <php strlenphp(php$thisphp-php>dataphp)php)
php php php php php php php php php{
php php php php php php php php php php php php ifphp php(ordphp(php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php)php php!php=php php0xphp0Aphp php|php|php php/php/php Linephp feed
php php php php php php php php php php php php php php php php ordphp(php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php)php php!php=php php0xphp0dphp php php php php/php/php Carriagephp return
php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp+php+php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp commentphp line
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readCommentphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>skipWhiteSpacephp(falsephp)php;

php php php php php php php php php/php*php*php Checkphp ifphp itphp'sphp aphp commentphp linephp php*php/
php php php php php php php php ifphp php(php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php php!php=php php'php%php'php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php forphp php(php$startphp php=php php$thisphp-php>offsetphp;
php php php php php php php php php php php php php php$thisphp-php>offsetphp <php strlenphp(php$thisphp-php>dataphp)php;
php php php php php php php php php php php php php php$thisphp-php>offsetphp+php+php)php php{
php php php php php php php php php php php php ifphp php(ordphp(php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php)php php=php=php php0xphp0Aphp php|php|php php/php/php Linephp feed
php php php php php php php php php php php php php php php php ordphp(php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php)php php=php=php php0xphp0dphp php php php php/php/php Carriagephp return
php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp substrphp(php$thisphp-php>dataphp,php php$startphp,php php$thisphp-php>offsetphp-php$startphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp nextphp lexemephp fromphp aphp pdfphp stream
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readLexemephp(php)
php php php php php{
php php php php php php php php php/php/php php$thisphp-php>skipWhiteSpacephp(php)php;
php php php php php php php php whilephp php(truephp)php php{
php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php strspnphp(php$thisphp-php>dataphp,php php"php\xphp0php0php\tphp\nphp\fphp\rphp php"php,php php$thisphp-php>offsetphp)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>offsetphp <php strlenphp(php$thisphp-php>dataphp)php php php&php&php php php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php php=php=php php'php%php'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php strcspnphp(php$thisphp-php>dataphp,php php"php\rphp\nphp"php,php php$thisphp-php>offsetphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>offsetphp php>php=php strlenphp(php$thisphp-php>dataphp)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php php/php*php selfphp:php:isDelimiterphp(php ordphp(php$thisphp-php>dataphp[php$startphp]php)php php)php php*php/
php php php php php php php php php php php php php strposphp(php'php(php)<php>php[php]php{php}php/php%php'php,php php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php)php php!php=php=php falsephp php)php php{

php php php php php php php php php php php php switchphp php(substrphp(php$thisphp-php>dataphp,php php$thisphp-php>offsetphp,php php2php)php)php php{
php php php php php php php php php php php php php php php php casephp php'<php<php'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php php2php;
php php php php php php php php php php php php php php php php php php php php returnphp php'<php<php'php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'php>php>php'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php php2php;
php php php php php php php php php php php php php php php php php php php php returnphp php'php>php>php'php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>dataphp[php$thisphp-php>offsetphp+php+php]php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$startphp php=php php$thisphp-php>offsetphp;
php php php php php php php php php php php php php$comparephp php=php php'php'php;
php php php php php php php php php php php php ifphp(php versionphp_comparephp(php phpversionphp(php)php,php php'php5php.php2php.php5php'php php)php php>php=php php0php)php php{
php php php php php php php php php php php php php php php php php$comparephp php=php php"php(php)<php>php[php]php{php}php/php%php\xphp0php0php\tphp\nphp\fphp\rphp php"php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$comparephp php=php php"php(php)<php>php[php]php{php}php/php%php\xphp0php0php\tphp\nphp\rphp php"php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php strcspnphp(php$thisphp-php>dataphp,php php$comparephp,php php$thisphp-php>offsetphp)php;

php php php php php php php php php php php php returnphp substrphp(php$thisphp-php>dataphp,php php$startphp,php php$thisphp-php>offsetphp php-php php$startphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp elementalphp objectphp fromphp aphp PDFphp stream
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Element
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readElementphp(php$nextLexemephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$nextLexemephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$nextLexemephp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Notephp:php readElementphp(php)php methodphp isphp aphp publicphp methodphp andphp couldphp bephp invokedphp fromphp otherphp classesphp.
php php php php php php php php php php*php Ifphp readElementphp(php)php isphp usedphp notphp byphp Zendphp_Pdfphp_StringParserphp:php:getObjectphp(php)php methodphp,php thenphp wephp shouldphp notphp care
php php php php php php php php php php*php aboutphp php_elementsphp memberphp managementphp.
php php php php php php php php php php*php/
php php php php php php php php switchphp php(php$nextLexemephp)php php{
php php php php php php php php php php php php casephp php'php(php'php:
php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php php$thisphp-php>php_readStringphp(php)php)php;

php php php php php php php php php php php php casephp php'<php'php:
php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php php$thisphp-php>php_readBinaryStringphp(php)php)php;

php php php php php php php php php php php php casephp php'php/php'php:
php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp_Namephp:php:unescapephp(php php$thisphp-php>readLexemephp(php)php php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php php php php casephp php'php[php'php:
php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php php$thisphp-php>php_readArrayphp(php)php)php;

php php php php php php php php php php php php casephp php'<php<php'php:
php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php php$thisphp-php>php_readDictionaryphp(php)php)php;

php php php php php php php php php php php php casephp php'php)php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php casephp php'php>php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php casephp php'php]php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php casephp php'php>php>php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php casephp php'php{php'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php casephp php'php}php'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp)php)php;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php ifphp php(strcasecmpphp(php$nextLexemephp,php php'truephp'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Booleanphp(truephp)php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strcasecmpphp(php$nextLexemephp,php php'falsephp'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Booleanphp(falsephp)php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(strcasecmpphp(php$nextLexemephp,php php'nullphp'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php newphp Zendphp_Pdfphp_Elementphp_Nullphp(php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$refphp php=php php$thisphp-php>php_readReferencephp(php$nextLexemephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$refphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php php$refphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php(php$thisphp-php>php_elementsphp[php]php php=php php$thisphp-php>php_readNumericphp(php$nextLexemephp)php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp stringphp PDFphp object
php php php php php php*php Alsophp readsphp trailingphp php'php)php'php fromphp aphp pdfphp stream
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_String
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_readStringphp(php)
php php php php php{
php php php php php php php php php$startphp php=php php$thisphp-php>offsetphp;
php php php php php php php php php$openedBracketsphp php=php php1php;

php php php php php php php php php$thisphp-php>offsetphp php+php=php strcspnphp(php$thisphp-php>dataphp,php php'php(php)php\php\php'php,php php$thisphp-php>offsetphp)php;

php php php php php php php php whilephp php(php$thisphp-php>offsetphp <php strlenphp(php$thisphp-php>dataphp)php)php php{
php php php php php php php php php php php php switchphp php(ordphp(php php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php php)php)php php{
php php php php php php php php php php php php php php php php casephp php0xphp2php8php:php php/php/php php'php(php'php php-php openedphp bracketphp inphp thephp stringphp,php needsphp balancedphp pairphp.
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp+php+php;
php php php php php php php php php php php php php php php php php php php php php$openedBracketsphp+php+php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php0xphp2php9php:php php/php/php php'php)php'php php-php pairphp tophp thephp openedphp bracket
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp+php+php;
php php php php php php php php php php php php php php php php php php php php php$openedBracketsphp-php-php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php0xphp5Cphp:php php/php/php php'php\php\php'php php-php escapephp sequencephp,php skipphp nextphp charphp fromphp aphp check
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php php2php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$openedBracketsphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php breakphp;php php/php/php endphp ofphp string
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php strcspnphp(php$thisphp-php>dataphp,php php'php(php)php\php\php'php,php php$thisphp-php>offsetphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$openedBracketsphp php!php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Unexpectedphp endphp ofphp filephp whilephp stringphp readingphp.php Offsetphp php-php php0xphp%Xphp.php php\php'php)php\php'php expectedphp.php'php,php php$startphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Stringphp(Zendphp_Pdfphp_Elementphp_Stringphp:php:unescapephp(php substrphp(php$thisphp-php>dataphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$startphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp php-php php$startphp php-php php1php)php php)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp binaryphp stringphp PDFphp object
php php php php php php*php Alsophp readsphp trailingphp php'php>php'php fromphp aphp pdfphp stream
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Stringphp_Binary
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_readBinaryStringphp(php)
php php php php php{
php php php php php php php php php$startphp php=php php$thisphp-php>offsetphp;

php php php php php php php php php$thisphp-php>offsetphp php+php=php strspnphp(php$thisphp-php>dataphp,php php"php\xphp0php0php\tphp\nphp\fphp\rphp php0php1php2php3php4php5php6php7php8php9abcdefABCDEFphp"php,php php$thisphp-php>offsetphp)php;

php php php php php php php php ifphp php(php$thisphp-php>offsetphp php>php=php strlenphp(php$thisphp-php>dataphp)php php-php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Unexpectedphp endphp ofphp filephp whilephp readingphp binaryphp stringphp.php Offsetphp php-php php0xphp%Xphp.php php\php'php>php\php'php expectedphp.php'php,php php$startphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>dataphp[php$thisphp-php>offsetphp+php+php]php php!php=php php'php>php'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Unexpectedphp characterphp whilephp binaryphp stringphp readingphp.php Offsetphp php-php php0xphp%Xphp.php'php,php php$thisphp-php>offsetphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Stringphp_Binaryphp(
php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp_Stringphp_Binaryphp:php:unescapephp(php substrphp(php$thisphp-php>dataphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$startphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>offsetphp php-php php$startphp php-php php1php)php php)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp arrayphp PDFphp object
php php php php php php*php Alsophp readsphp trailingphp php'php]php'php fromphp aphp pdfphp stream
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Array
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_readArrayphp(php)
php php php php php{
php php php php php php php php php$elementsphp php=php arrayphp(php)php;

php php php php php php php php whilephp php(php strlenphp(php$nextLexemephp php=php php$thisphp-php>readLexemephp(php)php)php php!php=php php0php php)php php{
php php php php php php php php php php php php ifphp php(php$nextLexemephp php!php=php php'php]php'php)php php{
php php php php php php php php php php php php php php php php php$elementsphp[php]php php=php php$thisphp-php>readElementphp(php$nextLexemephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php$elementsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Unexpectedphp endphp ofphp filephp whilephp arrayphp readingphp.php Offsetphp php-php php0xphp%Xphp.php php\php'php]php\php'php expectedphp.php'php,php php$thisphp-php>offsetphp)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp dictionaryphp PDFphp object
php php php php php php*php Alsophp readsphp trailingphp php'php>php>php'php fromphp aphp pdfphp stream
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Dictionary
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_readDictionaryphp(php)
php php php php php{
php php php php php php php php php$dictionaryphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;

php php php php php php php php whilephp php(php strlenphp(php$nextLexemephp php=php php$thisphp-php>readLexemephp(php)php)php php!php=php php0php php)php php{
php php php php php php php php php php php php ifphp php(php$nextLexemephp php!php=php php'php>php>php'php)php php{
php php php php php php php php php php php php php php php php php$nameStartphp php=php php$thisphp-php>offsetphp php-php strlenphp(php$nextLexemephp)php;

php php php php php php php php php php php php php php php php php$namephp php php=php php$thisphp-php>readElementphp(php$nextLexemephp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>readElementphp(php)php;

php php php php php php php php php php php php php php php php ifphp php(php!php$namephp instanceofphp Zendphp_Pdfphp_Elementphp_Namephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Namephp objectphp expectedphp whilephp dictionaryphp readingphp.php Offsetphp php-php php0xphp%Xphp.php'php,php php$nameStartphp)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$dictionaryphp-php>addphp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$dictionaryphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Unexpectedphp endphp ofphp filephp whilephp dictionaryphp readingphp.php Offsetphp php-php php0xphp%Xphp.php php\php'php>php>php\php'php expectedphp.php'php,php php$thisphp-php>offsetphp)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp referencephp PDFphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$nextLexeme
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Reference
php php php php php php*php/
php php php php privatephp functionphp php_readReferencephp(php$nextLexemephp php=php nullphp)
php php php php php{
php php php php php php php php php$startphp php=php php$thisphp-php>offsetphp;

php php php php php php php php ifphp php(php$nextLexemephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$objNumphp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$objNumphp php=php php$nextLexemephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!ctypephp_digitphp(php$objNumphp)php)php php{php php/php/php itphp'sphp notphp aphp reference
php php php php php php php php php php php php php$thisphp-php>offsetphp php=php php$startphp;
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$genNumphp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php!ctypephp_digitphp(php$genNumphp)php)php php{php php/php/php itphp'sphp notphp aphp reference
php php php php php php php php php php php php php$thisphp-php>offsetphp php=php php$startphp;
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$rMarkphp php php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php$rMarkphp php!php=php php'Rphp'php)php php{php php/php/php itphp'sphp notphp aphp reference
php php php php php php php php php php php php php$thisphp-php>offsetphp php=php php$startphp;
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$refphp php=php newphp Zendphp_Pdfphp_Elementphp_Referencephp(php(intphp)php$objNumphp,php php(intphp)php$genNumphp,php php$thisphp-php>php_contextphp,php php$thisphp-php>php_objFactoryphp-php>resolvephp(php)php)php;

php php php php php php php php returnphp php$refphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp numericphp PDFphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$nextLexeme
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Numeric
php php php php php php*php/
php php php php privatephp functionphp php_readNumericphp(php$nextLexemephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$nextLexemephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$nextLexemephp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Numericphp(php$nextLexemephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Readphp inderectphp objectphp fromphp aphp PDFphp stream
php php php php php php*
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp php$context
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Object
php php php php php php*php/
php php php php publicphp functionphp getObjectphp(php$offsetphp,php Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp php$contextphp)
php php php php php{
php php php php php php php php ifphp php(php$offsetphp php=php=php=php nullphp php)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Elementphp_Nullphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Savephp currentphp offsetphp tophp makephp getObjectphp(php)php reentrant
php php php php php php php php php$offsetSavephp php=php php$thisphp-php>offsetphp;

php php php php php php php php php$thisphp-php>offsetphp php php php php=php php$offsetphp;
php php php php php php php php php$thisphp-php>php_contextphp php php=php php$contextphp;
php php php php php php php php php$thisphp-php>php_elementsphp php=php arrayphp(php)php;

php php php php php php php php php$objNumphp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php!ctypephp_digitphp(php$objNumphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Objectphp numberphp expectedphp.php'php,php php$thisphp-php>offsetphp php-php strlenphp(php$objNumphp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$genNumphp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php!ctypephp_digitphp(php$genNumphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Objectphp generationphp numberphp expectedphp.php'php,php php$thisphp-php>offsetphp php-php strlenphp(php$genNumphp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$objKeywordphp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php$objKeywordphp php!php=php php'objphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php php\php'objphp\php'php keywordphp expectedphp.php'php,php php$thisphp-php>offsetphp php-php strlenphp(php$objKeywordphp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$objValuephp php=php php$thisphp-php>readElementphp(php)php;

php php php php php php php php php$nextLexemephp php=php php$thisphp-php>readLexemephp(php)php;

php php php php php php php php ifphp(php php$nextLexemephp php=php=php php'endobjphp'php php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Objectphp isphp notphp generatedphp byphp factoryphp php(thusphp itphp'sphp notphp markedphp asphp modifiedphp objectphp)php.
php php php php php php php php php php php php php php*php Butphp factoryphp isphp assignedphp tophp thephp obectphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$objphp php=php newphp Zendphp_Pdfphp_Elementphp_Objectphp(php$objValuephp,php php(intphp)php$objNumphp,php php(intphp)php$genNumphp,php php$thisphp-php>php_objFactoryphp-php>resolvephp(php)php)php;

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_elementsphp asphp php$elementphp)php php{
php php php php php php php php php php php php php php php php php$elementphp-php>setParentObjectphp(php$objphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Restorephp offsetphp value
php php php php php php php php php php php php php$thisphp-php>offsetphp php=php php$offsetSavephp;

php php php php php php php php php php php php returnphp php$objphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Itphp'sphp aphp streamphp object
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$nextLexemephp php!php=php php'streamphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php php\php'endobjphp\php'php orphp php\php'streamphp\php'php keywordsphp expectedphp.php'php,php php$thisphp-php>offsetphp php-php strlenphp(php$nextLexemephp)php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$objValuephp instanceofphp Zendphp_Pdfphp_Elementphp_Dictionaryphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php Streamphp extentphp mustphp bephp precededphp byphp streamphp dictionaryphp.php'php,php php$thisphp-php>offsetphp php-php strlenphp(php$nextLexemephp)php)php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Referencesphp arephp automaticallyphp dereferencedphp atphp thisphp momentphp.
php php php php php php php php php php*php/
php php php php php php php php php$streamLengthphp php=php php$objValuephp-php>Lengthphp-php>valuephp;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php'streamphp'php keywordphp mustphp bephp followedphp byphp eitherphp crphp-lfphp sequencephp orphp lfphp characterphp onlyphp.
php php php php php php php php php php*php Thisphp restrictionphp givesphp thephp possibilityphp tophp recognizephp allphp casesphp exactly
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php php=php=php php"php\rphp"php php&php&
php php php php php php php php php php php php php$thisphp-php>dataphp[php$thisphp-php>offsetphp php+php php1php]php php=php=php php"php\nphp"php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>offsetphp php+php=php php2php;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>dataphp[php$thisphp-php>offsetphp]php php=php=php php"php\nphp"php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>offsetphp+php+php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php php\php'streamphp\php'php mustphp bephp followedphp byphp eitherphp crphp-lfphp sequencephp orphp lfphp characterphp onlyphp.php'php,php php$thisphp-php>offsetphp php-php strlenphp(php$nextLexemephp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$dataOffsetphp php=php php$thisphp-php>offsetphp;

php php php php php php php php php$thisphp-php>offsetphp php+php=php php$streamLengthphp;

php php php php php php php php php$nextLexemephp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php$nextLexemephp php!php=php php'endstreamphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php php\php'endstreamphp\php'php keywordphp expectedphp.php'php,php php$thisphp-php>offsetphp php-php strlenphp(php$nextLexemephp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$nextLexemephp php=php php$thisphp-php>readLexemephp(php)php;
php php php php php php php php ifphp php(php$nextLexemephp php!php=php php'endobjphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(sprintfphp(php'PDFphp filephp syntaxphp errorphp.php Offsetphp php-php php0xphp%Xphp.php php\php'endobjphp\php'php keywordphp expectedphp.php'php,php php$thisphp-php>offsetphp php-php strlenphp(php$nextLexemephp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$objphp php=php newphp Zendphp_Pdfphp_Elementphp_Objectphp_Streamphp(substrphp(php$thisphp-php>dataphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataOffsetphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$streamLengthphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(intphp)php$objNumphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(intphp)php$genNumphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_objFactoryphp-php>resolvephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$objValuephp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_elementsphp asphp php$elementphp)php php{
php php php php php php php php php php php php php$elementphp-php>setParentObjectphp(php$objphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Restorephp offsetphp value
php php php php php php php php php$thisphp-php>offsetphp php=php php$offsetSavephp;

php php php php php php php php returnphp php$objphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp lengthphp ofphp sourcephp string
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getLengthphp(php)
php php php php php{
php php php php php php php php returnphp strlenphp(php$thisphp-php>dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp sourcephp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>dataphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Parsephp integerphp valuephp fromphp aphp binaryphp stream
php php php php php php*
php php php php php php*php php@paramphp stringphp php$stream
php php php php php php*php php@paramphp integerphp php$offset
php php php php php php*php php@paramphp integerphp php$size
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp staticphp functionphp parseIntFromStreamphp(php$streamphp,php php$offsetphp,php php$sizephp)
php php php php php{
php php php php php php php php php$valuephp php=php php0php;
php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$sizephp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php$valuephp php*php=php php2php5php6php;
php php php php php php php php php php php php php$valuephp php+php=php ordphp(php$streamphp[php$offsetphp php+php php$countphp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}



php php php php php/php*php*
php php php php php php*php Setphp currentphp context
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp php$context
php php php php php php*php/
php php php php publicphp functionphp setContextphp(Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextphp php=php php$contextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php Notephp:php PHPphp duplicatesphp stringphp,php whichphp isphp sentphp byphp valuephp,php onlyphp ofphp itphp'sphp updatedphp.
php php php php php php*php Thusphp wephp donphp'tphp needphp tophp carephp aboutphp overhead
php php php php php php*
php php php php php php*php php@paramphp stringphp php$pdfString
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factory
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$sourcephp,php Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factoryphp)
php php php php php{
php php php php php php php php php$thisphp-php>dataphp php php php php php php php php php=php php$sourcephp;
php php php php php php php php php$thisphp-php>php_objFactoryphp php php=php php$factoryphp;
php php php php php}
php}
