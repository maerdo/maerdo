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
php php*php php@versionphp php php php php$Idphp:php Decodephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Mime
php php*php/
requirephp_oncephp php'Zendphp/Mimephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mime
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mimephp_Decode
php{
php php php php php/php*php*
php php php php php php*php Explodephp MIMEphp multipartphp stringphp intophp seperatephp parts
php php php php php php*
php php php php php php*php Partsphp consistphp ofphp thephp headerphp andphp thephp bodyphp ofphp eachphp MIMEphp partphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$bodyphp php php php php rawphp bodyphp ofphp message
php php php php php php*php php@paramphp php stringphp php$boundaryphp boundaryphp asphp foundphp inphp contentphp-type
php php php php php php*php php@returnphp arrayphp partsphp withphp contentphp ofphp eachphp partphp,php emptyphp ifphp nophp partsphp found
php php php php php php*php php@throwsphp Zendphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp splitMimephp(php$bodyphp,php php$boundaryphp)
php php php php php{
php php php php php php php php php/php/php TODOphp:php wephp'rephp ignoringphp php\rphp forphp nowphp php-php isphp thisphp functionphp fastphp enoughphp andphp isphp itphp safephp tophp asumephp noonephp needsphp php\rphp?
php php php php php php php php php$bodyphp php=php strphp_replacephp(php"php\rphp"php,php php'php'php,php php$bodyphp)php;

php php php php php php php php php$startphp php=php php0php;
php php php php php php php php php$resphp php=php arrayphp(php)php;
php php php php php php php php php/php/php findphp everyphp mimephp partphp limiterphp andphp cutphp outphp the
php php php php php php php php php/php/php stringphp beforephp itphp.
php php php php php php php php php/php/php thephp partphp beforephp thephp firstphp boundaryphp stringphp isphp discardedphp:
php php php php php php php php php$pphp php=php strposphp(php$bodyphp,php php'php-php-php'php php.php php$boundaryphp php.php php"php\nphp"php,php php$startphp)php;
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
php php php php php php*php decodesphp aphp mimephp encodedphp Stringphp andphp returnsphp a
php php php php php php*php structphp ofphp partsphp withphp headerphp andphp body
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$messagephp php rawphp messagephp content
php php php php php php*php php@paramphp php stringphp php$boundaryphp boundaryphp asphp foundphp inphp contentphp-type
php php php php php php*php php@paramphp php stringphp php$EOLphp EOLphp stringphp;php defaultsphp tophp php{php@linkphp Zendphp_Mimephp:php:LINEENDphp}
php php php php php php*php php@returnphp arrayphp|nullphp partsphp asphp arrayphp(php'headerphp'php php=php>php arrayphp(namephp php=php>php valuephp)php,php php'bodyphp'php php=php>php contentphp)php,php nullphp ifphp nophp partsphp found
php php php php php php*php php@throwsphp Zendphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp splitMessageStructphp(php$messagephp,php php$boundaryphp,php php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php php$partsphp php=php selfphp:php:splitMimephp(php$messagephp,php php$boundaryphp)php;
php php php php php php php php ifphp php(countphp(php$partsphp)php <php=php php0php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$partsphp asphp php$partphp)php php{
php php php php php php php php php php php php selfphp:php:splitMessagephp(php$partphp,php php$headersphp,php php$bodyphp,php php$EOLphp)php;
php php php php php php php php php php php php php$resultphp[php]php php=php arrayphp(php'headerphp'php php=php>php php$headersphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'bodyphp'php php php php=php>php php$bodyphp php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php splitphp aphp messagephp inphp headerphp andphp bodyphp partphp,php ifphp nophp headerphp orphp an
php php php php php php*php invalidphp headerphp isphp foundphp php$headersphp isphp empty
php php php php php php*
php php php php php php*php Thephp charsetphp ofphp thephp returnedphp headersphp dependphp onphp yourphp iconvphp settingsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$messagephp rawphp messagephp withphp headerphp andphp optionalphp content
php php php php php php*php php@paramphp php arrayphp php php$headersphp outputphp paramphp,php arrayphp withphp headersphp asphp arrayphp(namephp php=php>php valuephp)
php php php php php php*php php@paramphp php stringphp php$bodyphp php php php outputphp paramphp,php contentphp ofphp message
php php php php php php*php php@paramphp php stringphp php$EOLphp EOLphp stringphp;php defaultsphp tophp php{php@linkphp Zendphp_Mimephp:php:LINEENDphp}
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp splitMessagephp(php$messagephp,php php&php$headersphp,php php&php$bodyphp,php php$EOLphp php=php Zendphp_Mimephp:php:LINEENDphp)
php php php php php{
php php php php php php php php php/php/php checkphp forphp validphp headerphp atphp firstphp line
php php php php php php php php php$firstlinephp php=php strtokphp(php$messagephp,php php"php\nphp"php)php;
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php%php^php[php^php\sphp]php+php[php^php:php]php*php:php%php'php,php php$firstlinephp)php)php php{
php php php php php php php php php php php php php$headersphp php=php arrayphp(php)php;
php php php php php php php php php php php php php/php/php TODOphp:php wephp'rephp ignoringphp php\rphp forphp nowphp php-php isphp thisphp functionphp fastphp enoughphp andphp isphp itphp safephp tophp asumephp noonephp needsphp php\rphp?
php php php php php php php php php php php php php$bodyphp php=php strphp_replacephp(arrayphp(php"php\rphp"php,php php"php\nphp"php)php,php arrayphp(php'php'php,php php$EOLphp)php,php php$messagephp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php findphp anphp emptyphp linephp betweenphp headersphp andphp body
php php php php php php php php php/php/php defaultphp isphp setphp newphp line
php php php php php php php php ifphp php(strposphp(php$messagephp,php php$EOLphp php.php php$EOLphp)php)php php{
php php php php php php php php php php php php listphp(php$headersphp,php php$bodyphp)php php=php explodephp(php$EOLphp php.php php$EOLphp,php php$messagephp,php php2php)php;
php php php php php php php php php/php/php nextphp isphp thephp standardphp newphp line
php php php php php php php php php}php elsephp ifphp php(php$EOLphp php!php=php php"php\rphp\nphp"php php&php&php strposphp(php$messagephp,php php"php\rphp\nphp\rphp\nphp"php)php)php php{
php php php php php php php php php php php php listphp(php$headersphp,php php$bodyphp)php php=php explodephp(php"php\rphp\nphp\rphp\nphp"php,php php$messagephp,php php2php)php;
php php php php php php php php php/php/php nextphp isphp thephp otherphp php"standardphp"php newphp line
php php php php php php php php php}php elsephp ifphp php(php$EOLphp php!php=php php"php\nphp"php php&php&php strposphp(php$messagephp,php php"php\nphp\nphp"php)php)php php{
php php php php php php php php php php php php listphp(php$headersphp,php php$bodyphp)php php=php explodephp(php"php\nphp\nphp"php,php php$messagephp,php php2php)php;
php php php php php php php php php/php/php atphp lastphp resortphp findphp anythingphp thatphp looksphp likephp aphp newphp line
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php@listphp(php$headersphp,php php$bodyphp)php php=php php@pregphp_splitphp(php"php%php(php[php\rphp\nphp]php+php)php\php\php1php%Uphp"php,php php$messagephp,php php2php)php;
php php php php php php php php php}

php php php php php php php php php$headersphp php=php iconvphp_mimephp_decodephp_headersphp(php$headersphp,php ICONVphp_MIMEphp_DECODEphp_CONTINUEphp_ONphp_ERRORphp)php;

php php php php php php php php ifphp php(php$headersphp php=php=php=php falsephp php)php php{
php php php php php php php php php php php php php/php/php anphp errorphp occursphp duringphp thephp decoding
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php normalizephp headerphp names
php php php php php php php php foreachphp php(php$headersphp asphp php$namephp php=php>php php$headerphp)php php{
php php php php php php php php php php php php php$lowerphp php=php strtolowerphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(php$lowerphp php=php=php php$namephp)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$headersphp[php$namephp]php)php;
php php php php php php php php php php php php ifphp php(php!issetphp(php$headersphp[php$lowerphp]php)php)php php{
php php php php php php php php php php php php php php php php php$headersphp[php$lowerphp]php php=php php$headerphp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$headersphp[php$lowerphp]php)php)php php{
php php php php php php php php php php php php php php php php php$headersphp[php$lowerphp]php[php]php php=php php$headerphp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$headersphp[php$lowerphp]php php=php arrayphp(php$headersphp[php$lowerphp]php,php php$headerphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php splitphp aphp contentphp typephp inphp itsphp differentphp parts
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp php php php php php php contentphp-type
php php php php php php*php php@paramphp php stringphp php$wantedPartphp thephp wantedphp partphp,php elsephp anphp arrayphp withphp allphp partsphp isphp returned
php php php php php php*php php@returnphp stringphp|arrayphp wantedphp partphp orphp allphp partsphp asphp arrayphp(php'typephp'php php=php>php contentphp-typephp,php partnamephp php=php>php valuephp)
php php php php php php*php/
php php php php publicphp staticphp functionphp splitContentTypephp(php$typephp,php php$wantedPartphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp selfphp:php:splitHeaderFieldphp(php$typephp,php php$wantedPartphp,php php'typephp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php splitphp aphp headerphp fieldphp likephp contentphp typephp inphp itsphp differentphp parts
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp php php php php php php headerphp field
php php php php php php*php php@paramphp php stringphp php$wantedPartphp thephp wantedphp partphp,php elsephp anphp arrayphp withphp allphp partsphp isphp returned
php php php php php php*php php@paramphp php stringphp php$firstNamephp php keyphp namephp forphp thephp firstphp part
php php php php php php*php php@returnphp stringphp|arrayphp wantedphp partphp orphp allphp partsphp asphp arrayphp(php$firstNamephp php=php>php firstPartphp,php partnamephp php=php>php valuephp)
php php php php php php*php php@throwsphp Zendphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp splitHeaderFieldphp(php$fieldphp,php php$wantedPartphp php=php nullphp,php php$firstNamephp php=php php0php)
php php php php php{
php php php php php php php php php$wantedPartphp php=php strtolowerphp(php$wantedPartphp)php;
php php php php php php php php php$firstNamephp php=php strtolowerphp(php$firstNamephp)php;

php php php php php php php php php/php/php specialphp casephp php-php aphp bitphp optimized
php php php php php php php php ifphp php(php$firstNamephp php=php=php=php php$wantedPartphp)php php{
php php php php php php php php php php php php php$fieldphp php=php strtokphp(php$fieldphp,php php'php;php'php)php;
php php php php php php php php php php php php returnphp php$fieldphp[php0php]php php=php=php php'php"php'php php?php substrphp(php$fieldphp,php php1php,php php-php1php)php php:php php$fieldphp;
php php php php php php php php php}

php php php php php php php php php$fieldphp php=php php$firstNamephp php.php php'php=php'php php.php php$fieldphp;
php php php php php php php php ifphp php(php!pregphp_matchphp_allphp(php'php%php(php[php^php=php\sphp]php+php)php\sphp*php=php\sphp*php(php"php[php^php"php]php+php"php|php[php^php;php]php+php)php(php;php\sphp*php|php$php)php%php'php,php php$fieldphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php'notphp aphp validphp headerphp fieldphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$wantedPartphp)php php{
php php php php php php php php php php php php foreachphp php(php$matchesphp[php1php]php asphp php$keyphp php=php>php php$namephp)php php{
php php php php php php php php php php php php php php php php ifphp php(strcasecmpphp(php$namephp,php php$wantedPartphp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$matchesphp[php2php]php[php$keyphp]php[php0php]php php!php=php php'php"php'php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$matchesphp[php2php]php[php$keyphp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp substrphp(php$matchesphp[php2php]php[php$keyphp]php,php php1php,php php-php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$splitphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$matchesphp[php1php]php asphp php$keyphp php=php>php php$namephp)php php{
php php php php php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(php$matchesphp[php2php]php[php$keyphp]php[php0php]php php=php=php php'php"php'php)php php{
php php php php php php php php php php php php php php php php php$splitphp[php$namephp]php php=php substrphp(php$matchesphp[php2php]php[php$keyphp]php,php php1php,php php-php1php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$splitphp[php$namephp]php php=php php$matchesphp[php2php]php[php$keyphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$splitphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php decodephp aphp quotedphp printablephp encodedphp string
php php php php php php*
php php php php php php*php Thephp charsetphp ofphp thephp returnedphp stringphp dependsphp onphp yourphp iconvphp settingsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp encodedphp string
php php php php php php*php php@returnphp stringphp decodedphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp decodeQuotedPrintablephp(php$stringphp)
php php php php php{
php php php php php php php php returnphp iconvphp_mimephp_decodephp(php$stringphp,php ICONVphp_MIMEphp_DECODEphp_CONTINUEphp_ONphp_ERRORphp)php;
php php php php php}
php}
