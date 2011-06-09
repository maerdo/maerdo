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
php php*php php@versionphp php php php php$Idphp:php Messagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Zendphp_Mime
php php*php/
requirephp_oncephp php'Zendphp/Mimephp.phpphp'php;

php/php*php*
php php*php Zendphp_Mimephp_Part
php php*php/
requirephp_oncephp php'Zendphp/Mimephp/Partphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mime
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mimephp_Message
php{

php php php php protectedphp php$php_partsphp php=php arrayphp(php)php;
php php php php protectedphp php$php_mimephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp listphp ofphp allphp Zendphp_Mimephp_Partsphp inphp thephp message
php php php php php php*
php php php php php php*php php@returnphp arrayphp ofphp Zendphp_Mimephp_Part
php php php php php php*php/
php php php php publicphp functionphp getPartsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_partsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp givenphp arrayphp ofphp Zendphp_Mimephp_Partsphp asphp thephp arrayphp forphp thephp message
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$parts
php php php php php php*php/
php php php php publicphp functionphp setPartsphp(php$partsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_partsphp php=php php$partsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp aphp newphp Zendphp_Mimephp_Partphp tophp thephp currentphp message
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Mimephp_Partphp php$part
php php php php php php*php/
php php php php publicphp functionphp addPartphp(Zendphp_Mimephp_Partphp php$partphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp checkphp forphp duplicatephp objectphp handle
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_partsphp[php]php php=php php$partphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp messagephp needsphp tophp bephp sentphp asphp multipart
php php php php php php*php MIMEphp messagephp orphp ifphp itphp hasphp onlyphp onephp partphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isMultiPartphp(php)
php php php php php{
php php php php php php php php returnphp php(countphp(php$thisphp-php>php_partsphp)php php>php php1php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Zendphp_Mimephp objectphp forphp thephp message
php php php php php php*
php php php php php php*php Thisphp canphp bephp usedphp tophp setphp thephp boundaryphp specificallyphp orphp tophp usephp aphp subclassphp of
php php php php php php*php Zendphp_Mimephp forphp generatingphp thephp boundaryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Mimephp php$mime
php php php php php php*php/
php php php php publicphp functionphp setMimephp(Zendphp_Mimephp php$mimephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_mimephp php=php php$mimephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Zendphp_Mimephp objectphp inphp usephp byphp thephp message
php php php php php php*
php php php php php php*php Ifphp thephp objectphp wasphp notphp presentphp,php itphp isphp createdphp andphp returnedphp.php Canphp bephp usedphp to
php php php php php php*php determinephp thephp boundaryphp usedphp inphp thisphp messagephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mime
php php php php php php*php/
php php php php publicphp functionphp getMimephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_mimephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_mimephp php=php newphp Zendphp_Mimephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_mimephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp MIMEphp-compliantphp messagephp fromphp thephp currentphp configuration
php php php php php php*
php php php php php php*php Thisphp canphp bephp aphp multipartphp messagephp ifphp morephp thanphp onephp MIMEphp partphp wasphp addedphp.php If
php php php php php php*php onlyphp onephp partphp isphp presentphp,php thephp contentphp ofphp thisphp partphp isphp returnedphp.php Ifphp no
php php php php php php*php partphp hadphp beenphp addedphp,php anphp emptyphp stringphp isphp returnedphp.
php php php php php php*
php php php php php php*php Partsphp arephp seperatedphp byphp thephp mimephp boundaryphp asphp definedphp inphp Zendphp_Mimephp.php If
php php php php php php*php php{php@linkphp setMimephp(php)php}php hasphp beenphp calledphp beforephp thisphp methodphp,php thephp Zendphp_Mime
php php php php php php*php objectphp setphp byphp thisphp callphp willphp bephp usedphp.php Otherwisephp,php aphp newphp Zendphp_Mimephp object
php php php php php php*php isphp generatedphp andphp usedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$EOLphp EOLphp stringphp;php defaultsphp tophp php{php@linkphp Zendphp_Mimephp:php:LINEENDphp}
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generateMessagephp(php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php ifphp php(php!php php$thisphp-php>isMultiPartphp(php)php)php php{
php php php php php php php php php php php php php$bodyphp php=php arrayphp_shiftphp(php$thisphp-php>php_partsphp)php;
php php php php php php php php php php php php php$bodyphp php=php php$bodyphp-php>getContentphp(php$EOLphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$mimephp php=php php$thisphp-php>getMimephp(php)php;

php php php php php php php php php php php php php$boundaryLinephp php=php php$mimephp-php>boundaryLinephp(php$EOLphp)php;
php php php php php php php php php php php php php$bodyphp php=php php'Thisphp isphp aphp messagephp inphp Mimephp Formatphp.php php Ifphp youphp seephp thisphp,php php'
php php php php php php php php php php php php php php php php php php php.php php"yourphp mailphp readerphp doesphp notphp supportphp thisphp formatphp.php"php php.php php$EOLphp;

php php php php php php php php php php php php foreachphp php(arrayphp_keysphp(php$thisphp-php>php_partsphp)php asphp php$pphp)php php{
php php php php php php php php php php php php php php php php php$bodyphp php.php=php php$boundaryLine
php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>getPartHeadersphp(php$pphp,php php$EOLphp)
php php php php php php php php php php php php php php php php php php php php php php php php.php php$EOL
php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>getPartContentphp(php$pphp,php php$EOLphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$bodyphp php.php=php php$mimephp-php>mimeEndphp(php$EOLphp)php;
php php php php php php php php php}

php php php php php php php php returnphp trimphp(php$bodyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp headersphp ofphp aphp givenphp partphp asphp anphp array
php php php php php php*
php php php php php php*php php@paramphp intphp php$partnum
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPartHeadersArrayphp(php$partnumphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_partsphp[php$partnumphp]php-php>getHeadersArrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp headersphp ofphp aphp givenphp partphp asphp aphp string
php php php php php php*
php php php php php php*php php@paramphp intphp php$partnum
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPartHeadersphp(php$partnumphp,php php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_partsphp[php$partnumphp]php-php>getHeadersphp(php$EOLphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp php(encodedphp)php contentphp ofphp aphp givenphp partphp asphp aphp string
php php php php php php*
php php php php php php*php php@paramphp intphp php$partnum
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPartContentphp(php$partnumphp,php php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_partsphp[php$partnumphp]php-php>getContentphp(php$EOLphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Explodephp MIMEphp multipartphp stringphp intophp seperatephp parts
php php php php php php*
php php php php php php*php Partsphp consistphp ofphp thephp headerphp andphp thephp bodyphp ofphp eachphp MIMEphp partphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$body
php php php php php php*php php@paramphp stringphp php$boundary
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_disassembleMimephp(php$bodyphp,php php$boundaryphp)
php php php php php{
php php php php php php php php php$startphp php=php php0php;
php php php php php php php php php$resphp php=php arrayphp(php)php;
php php php php php php php php php/php/php findphp everyphp mimephp partphp limiterphp andphp cutphp outphp the
php php php php php php php php php/php/php stringphp beforephp itphp.
php php php php php php php php php/php/php thephp partphp beforephp thephp firstphp boundaryphp stringphp isphp discardedphp:
php php php php php php php php php$pphp php=php strposphp(php$bodyphp,php php'php-php-php'php.php$boundaryphp.php"php\nphp"php,php php$startphp)php;
php php php php php php php php ifphp php(php$pphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php/php nophp partsphp foundphp!
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php positionphp afterphp firstphp boundaryphp line
php php php php php php php php php$startphp php=php php$pphp php+php php3php php+php strlenphp(php$boundaryphp)php;

php php php php php php php php whilephp php(php(php$pphp php=php strposphp(php$bodyphp,php php'php-php-php'php php.php php$boundaryphp php.php php"php\nphp"php,php php$startphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$resphp[php]php php=php substrphp(php$bodyphp,php php$startphp,php php$pphp-php$startphp)php;
php php php php php php php php php php php php php$startphp php=php php$pphp php+php php3php php+php strlenphp(php$boundaryphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php nophp morephp partsphp,php findphp endphp boundary
php php php php php php php php php$pphp php=php strposphp(php$bodyphp,php php'php-php-php'php php.php php$boundaryphp php.php php'php-php-php'php,php php$startphp)php;
php php php php php php php php ifphp php(php$pphp=php=php=falsephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php'Notphp aphp validphp Mimephp Messagephp:php Endphp Missingphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php thephp remainingphp partphp alsophp needsphp tophp bephp parsedphp:
php php php php php php php php php$resphp[php]php php=php substrphp(php$bodyphp,php php$startphp,php php$pphp-php$startphp)php;
php php php php php php php php returnphp php$resphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodesphp aphp MIMEphp encodedphp stringphp andphp returnsphp aphp Zendphp_Mimephp_Messagephp objectphp with
php php php php php php*php allphp thephp MIMEphp partsphp setphp accordingphp tophp thephp givenphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$message
php php php php php php*php php@paramphp stringphp php$boundary
php php php php php php*php php@paramphp stringphp php$EOLphp EOLphp stringphp;php defaultsphp tophp php{php@linkphp Zendphp_Mimephp:php:LINEENDphp}
php php php php php php*php php@returnphp Zendphp_Mimephp_Message
php php php php php php*php/
php php php php publicphp staticphp functionphp createFromMessagephp(php$messagephp,php php$boundaryphp,php php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Mimephp/Decodephp.phpphp'php;
php php php php php php php php php$partsphp php=php Zendphp_Mimephp_Decodephp:php:splitMessageStructphp(php$messagephp,php php$boundaryphp,php php$EOLphp)php;

php php php php php php php php php$resphp php=php newphp selfphp(php)php;
php php php php php php php php foreachphp php(php$partsphp asphp php$partphp)php php{
php php php php php php php php php php php php php/php/php nowphp wephp buildphp aphp newphp MimePartphp forphp thephp currentphp Messagephp Partphp:
php php php php php php php php php php php php php$newPartphp php=php newphp Zendphp_Mimephp_Partphp(php$partphp[php'bodyphp'php]php)php;
php php php php php php php php php php php php foreachphp php(php$partphp[php'headerphp'php]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@todophp checkphp forphp charactersetphp andphp filename
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php switchphp(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php casephp php'contentphp-typephp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$newPartphp-php>typephp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'contentphp-transferphp-encodingphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$newPartphp-php>encodingphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'contentphp-idphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$newPartphp-php>idphp php=php trimphp(php$valuephp,php'<php>php'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'contentphp-dispositionphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$newPartphp-php>dispositionphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'contentphp-descriptionphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$newPartphp-php>descriptionphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'contentphp-locationphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$newPartphp-php>locationphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'contentphp-languagephp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$newPartphp-php>languagephp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php'Unknownphp headerphp ignoredphp forphp MimePartphp:php'php php.php php$keyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resphp-php>addPartphp(php$newPartphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resphp;
php php php php php}
php}
