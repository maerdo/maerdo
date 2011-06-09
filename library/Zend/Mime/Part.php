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
php php*php php@packagephp php php php Zendphp_Mime
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Partphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Mime
php php*php/
requirephp_oncephp php'Zendphp/Mimephp.phpphp'php;

php/php*php*
php php*php Classphp representingphp aphp MIMEphp partphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mime
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mimephp_Partphp php{

php php php php publicphp php$typephp php=php Zendphp_Mimephp:php:TYPEphp_OCTETSTREAMphp;
php php php php publicphp php$encodingphp php=php Zendphp_Mimephp:php:ENCODINGphp_php8BITphp;
php php php php publicphp php$idphp;
php php php php publicphp php$dispositionphp;
php php php php publicphp php$filenamephp;
php php php php publicphp php$descriptionphp;
php php php php publicphp php$charsetphp;
php php php php publicphp php$boundaryphp;
php php php php publicphp php$locationphp;
php php php php publicphp php$languagephp;
php php php php protectedphp php$php_contentphp;
php php php php protectedphp php$php_isStreamphp php=php falsephp;


php php php php php/php*php*
php php php php php php*php createphp aphp newphp Mimephp Partphp.
php php php php php php*php Thephp php(unencodedphp)php contentphp ofphp thephp Partphp asphp passed
php php php php php php*php asphp aphp stringphp orphp stream
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$contentphp php Stringphp orphp Streamphp containingphp thephp content
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$contentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_contentphp php=php php$contentphp;
php php php php php php php php ifphp php(isphp_resourcephp(php$contentphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_isStreamphp php=php truephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@todophp settersphp/getters
php php php php php php*php php@todophp errorphp checkingphp forphp settingphp php$type
php php php php php php*php php@todophp errorphp checkingphp forphp settingphp php$encoding
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php checkphp ifphp thisphp partphp canphp bephp readphp asphp aphp streamphp.
php php php php php php*php ifphp truephp,php getEncodedStreamphp canphp bephp calledphp,php otherwise
php php php php php php*php onlyphp getContentphp canphp bephp usedphp tophp fetchphp thephp encoded
php php php php php php*php contentphp ofphp thephp part
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isStreamphp(php)
php php php php php{
php php php php php php returnphp php$thisphp-php>php_isStreamphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php ifphp thisphp wasphp createdphp withphp aphp streamphp,php returnphp aphp filteredphp streamphp for
php php php php php php*php readingphp thephp contentphp.php veryphp usefulphp forphp largephp filephp attachmentsphp.
php php php php php php*
php php php php php php*php php@returnphp stream
php php php php php php*php php@throwsphp Zendphp_Mimephp_Exceptionphp ifphp notphp aphp streamphp orphp unablephp tophp appendphp filter
php php php php php php*php/
php php php php publicphp functionphp getEncodedStreamphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_isStreamphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mimephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mimephp_Exceptionphp(php'Attemptphp tophp getphp aphp streamphp fromphp aphp stringphp partphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/streamphp_filterphp_removephp(php)php;php php/php/php php?php?php?php isphp thatphp rightphp?
php php php php php php php php switchphp php(php$thisphp-php>encodingphp)php php{
php php php php php php php php php php php php casephp Zendphp_Mimephp:php:ENCODINGphp_QUOTEDPRINTABLEphp:
php php php php php php php php php php php php php php php php php$filterphp php=php streamphp_filterphp_appendphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_contentphp,
php php php php php php php php php php php php php php php php php php php php php'convertphp.quotedphp-printablephp-encodephp'php,
php php php php php php php php php php php php php php php php php php php php STREAMphp_FILTERphp_READphp,
php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'linephp-lengthphp'php php php php php php php=php>php php7php6php,
php php php php php php php php php php php php php php php php php php php php php php php php php'linephp-breakphp-charsphp'php php=php>php Zendphp_Mimephp:php:LINEEND
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php ifphp php(php!isphp_resourcephp(php$filterphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mimephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mimephp_Exceptionphp(php'Failedphp tophp appendphp quotedphp-printablephp filterphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Mimephp:php:ENCODINGphp_BASEphp6php4php:
php php php php php php php php php php php php php php php php php$filterphp php=php streamphp_filterphp_appendphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_contentphp,
php php php php php php php php php php php php php php php php php php php php php'convertphp.basephp6php4php-encodephp'php,
php php php php php php php php php php php php php php php php php php php php STREAMphp_FILTERphp_READphp,
php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'linephp-lengthphp'php php php php php php php=php>php php7php6php,
php php php php php php php php php php php php php php php php php php php php php php php php php'linephp-breakphp-charsphp'php php=php>php Zendphp_Mimephp:php:LINEEND
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php ifphp php(php!isphp_resourcephp(php$filterphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mimephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mimephp_Exceptionphp(php'Failedphp tophp appendphp basephp6php4php filterphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_contentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Contentphp ofphp thephp currentphp Mimephp Partphp inphp thephp givenphp encodingphp.
php php php php php php*
php php php php php php*php php@returnphp String
php php php php php php*php/
php php php php publicphp functionphp getContentphp(php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_isStreamphp)php php{
php php php php php php php php php php php php returnphp streamphp_getphp_contentsphp(php$thisphp-php>getEncodedStreamphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp Zendphp_Mimephp:php:encodephp(php$thisphp-php>php_contentphp,php php$thisphp-php>encodingphp,php php$EOLphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp andphp returnphp thephp arrayphp ofphp headersphp forphp thisphp MIMEphp part
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeadersArrayphp(php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php php$headersphp php=php arrayphp(php)php;

php php php php php php php php php$contentTypephp php=php php$thisphp-php>typephp;
php php php php php php php php ifphp php(php$thisphp-php>charsetphp)php php{
php php php php php php php php php php php php php$contentTypephp php.php=php php'php;php charsetphp=php'php php.php php$thisphp-php>charsetphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>boundaryphp)php php{
php php php php php php php php php php php php php$contentTypephp php.php=php php'php;php'php php.php php$EOL
php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php boundaryphp=php\php"php"php php.php php$thisphp-php>boundaryphp php.php php'php"php'php;
php php php php php php php php php}

php php php php php php php php php$headersphp[php]php php=php arrayphp(php'Contentphp-Typephp'php,php php$contentTypephp)php;

php php php php php php php php ifphp php(php$thisphp-php>encodingphp)php php{
php php php php php php php php php php php php php$headersphp[php]php php=php arrayphp(php'Contentphp-Transferphp-Encodingphp'php,php php$thisphp-php>encodingphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>idphp)php php{
php php php php php php php php php php php php php$headersphp[php]php php php=php arrayphp(php'Contentphp-IDphp'php,php php'<php'php php.php php$thisphp-php>idphp php.php php'php>php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>dispositionphp)php php{
php php php php php php php php php php php php php$dispositionphp php=php php$thisphp-php>dispositionphp;
php php php php php php php php php php php php ifphp php(php$thisphp-php>filenamephp)php php{
php php php php php php php php php php php php php php php php php$dispositionphp php.php=php php'php;php filenamephp=php"php'php php.php php$thisphp-php>filenamephp php.php php'php"php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$headersphp[php]php php=php arrayphp(php'Contentphp-Dispositionphp'php,php php$dispositionphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>descriptionphp)php php{
php php php php php php php php php php php php php$headersphp[php]php php=php arrayphp(php'Contentphp-Descriptionphp'php,php php$thisphp-php>descriptionphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>locationphp)php php{
php php php php php php php php php php php php php$headersphp[php]php php=php arrayphp(php'Contentphp-Locationphp'php,php php$thisphp-php>locationphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>languagephp)php{
php php php php php php php php php php php php php$headersphp[php]php php=php arrayphp(php'Contentphp-Languagephp'php,php php$thisphp-php>languagephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp headersphp forphp thisphp partphp asphp aphp string
php php php php php php*
php php php php php php*php php@returnphp String
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php php$resphp php=php php'php'php;
php php php php php php php php foreachphp php(php$thisphp-php>getHeadersArrayphp(php$EOLphp)php asphp php$headerphp)php php{
php php php php php php php php php php php php php$resphp php.php=php php$headerphp[php0php]php php.php php'php:php php'php php.php php$headerphp[php1php]php php.php php$EOLphp;
php php php php php php php php php}

php php php php php php php php returnphp php$resphp;
php php php php php}
php}
