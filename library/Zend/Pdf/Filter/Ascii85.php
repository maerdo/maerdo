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
php php*php php@versionphp php php php php$Idphp:php Asciiphp8php5php.phpphp php2php2php6php5php3php php2php0php1php0php-php0php7php-php2php2php php1php8php:php4php1php:php3php9Zphp mabephp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Filterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php ASCIIphp8php5php streamphp filter
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Filterphp_Asciiphp8php5php implementsphp Zendphp_Pdfphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Encodephp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp encodephp(php$dataphp,php php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php php$outputphp php=php php'php'php;
php php php php php php php php php$dataLengthphp php=php strlenphp(php$dataphp)php;

php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$dataLengthphp;php php$iphp php+php=php php4php)php php{
php php php php php php php php php php php php php/php/convertphp thephp php4php charactersphp intophp aphp php3php2php-bitphp number
php php php php php php php php php php php php php$chunkphp php=php substrphp(php$dataphp,php php$iphp,php php4php)php;

php php php php php php php php php php php php ifphp php(strlenphp(php$chunkphp)php <php php4php)php php{
php php php php php php php php php php php php php php php php php/php/partialphp chunk
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$bphp php=php unpackphp(php"Nphp"php,php php$chunkphp)php;
php php php php php php php php php php php php php$bphp php=php php$bphp[php1php]php;

php php php php php php php php php php php php php/php/specialphp charphp forphp allphp php4php bytesphp php=php php0
php php php php php php php php php php php php ifphp php(php$bphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$outputphp php.php=php php'zphp'php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/encodephp intophp php5php bytes
php php php php php php php php php php php php forphp php(php$jphp php=php php4php;php php$jphp php>php=php php0php;php php$jphp-php-php)php php{
php php php php php php php php php php php php php php php php php$foophp php=php php(intphp)php php(php(php$bphp php/php powphp(php8php5php,php$jphp)php)php php+php php3php3php)php;
php php php php php php php php php php php php php php php php php$bphp php%php=php powphp(php8php5php,php$jphp)php;
php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$foophp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/encodephp partialphp chunk
php php php php php php php php ifphp php(php$iphp <php php$dataLengthphp)php php{
php php php php php php php php php php php php php$nphp php=php php$dataLengthphp php-php php$iphp;
php php php php php php php php php php php php php$chunkphp php=php substrphp(php$dataphp,php php-php$nphp)php;

php php php php php php php php php php php php php/php/php0php padphp thephp rest
php php php php php php php php php php php php forphp php(php$jphp php=php php$nphp;php$jphp <php php4php;php$jphp+php+php)php php{
php php php php php php php php php php php php php php php php php$chunkphp php.php=php php"php\php0php"php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$bphp php=php unpackphp(php"Nphp"php,php php$chunkphp)php;
php php php php php php php php php php php php php$bphp php=php php$bphp[php1php]php;

php php php php php php php php php php php php php/php/encodephp justphp php$nphp php+php php1
php php php php php php php php php php php php forphp php(php$jphp php=php php4php;php php$jphp php>php=php php(php4php php-php php$nphp)php;php php$jphp-php-php)php php{
php php php php php php php php php php php php php php php php php$foophp php=php php(intphp)php php(php(php$bphp php/php powphp(php8php5php,php$jphp)php)php php+php php3php3php)php;
php php php php php php php php php php php php php php php php php$bphp php%php=php powphp(php8php5php,php$jphp)php;
php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$foophp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/EOD
php php php php php php php php php$outputphp php.php=php php'php~php>php'php;

php php php php php php php php php/php/makephp surephp linesphp arephp split
php php php php php php php php php$outputphp php=php chunkphp_splitphp(php$outputphp,php php7php6php,php php"php\nphp"php)php;

php php php php php php php php php/php/getphp ridphp ofphp newphp linephp atphp thephp end
php php php php php php php php php$outputphp php=php substrphp(php$outputphp,php php0php,php php-php1php)php;
php php php php php php php php returnphp php$outputphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodephp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp decodephp(php$dataphp,php php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php php$outputphp php=php php'php'php;

php php php php php php php php php/php/getphp ridphp ofphp thephp whitespaces
php php php php php php php php php$whiteSpacephp php=php arrayphp(php"php\xphp0php0php"php,php php"php\xphp0php9php"php,php php"php\xphp0Aphp"php,php php"php\xphp0Cphp"php,php php"php\xphp0Dphp"php,php php"php\xphp2php0php"php)php;
php php php php php php php php php$dataphp php=php strphp_replacephp(php$whiteSpacephp,php php'php'php,php php$dataphp)php;

php php php php php php php php ifphp php(substrphp(php$dataphp,php php-php2php)php php!php=php php'php~php>php'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Invalidphp EOFphp markerphp'php)php;
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php substrphp(php$dataphp,php php0php,php php(strlenphp(php$dataphp)php php-php php2php)php)php;
php php php php php php php php php$dataLengthphp php=php strlenphp(php$dataphp)php;

php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$dataLengthphp;php php$iphp php+php=php php5php)php php{
php php php php php php php php php php php php php$bphp php=php php0php;

php php php php php php php php php php php php ifphp php(substrphp(php$dataphp,php php$iphp,php php1php)php php=php=php php"zphp"php)php php{
php php php php php php php php php php php php php php php php php$iphp php-php=php php4php;
php php php php php php php php php php php php php php php php php$outputphp php.php=php packphp(php"Nphp"php,php php0php)php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$cphp php=php substrphp(php$dataphp,php php$iphp,php php5php)php;

php php php php php php php php php php php php ifphp(strlenphp(php$cphp)php <php php5php)php php{
php php php php php php php php php php php php php php php php php/php/partialphp chunk
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$cphp php=php unpackphp(php'Cphp5php'php,php php$cphp)php;
php php php php php php php php php php php php php$valuephp php=php php0php;

php php php php php php php php php php php php forphp php(php$jphp php=php php1php;php php$jphp <php=php php5php;php php$jphp+php+php)php php{
php php php php php php php php php php php php php php php php php$valuephp php+php=php php(php(php$cphp[php$jphp]php php-php php3php3php)php php*php powphp(php8php5php,php php(php5php php-php php$jphp)php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$outputphp php.php=php packphp(php"Nphp"php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php/php/decodephp partial
php php php php php php php php ifphp php(php$iphp <php php$dataLengthphp)php php{
php php php php php php php php php php php php php$valuephp php=php php0php;
php php php php php php php php php php php php php$chunkphp php=php substrphp(php$dataphp,php php$iphp)php;
php php php php php php php php php php php php php$partialLengthphp php=php strlenphp(php$chunkphp)php;

php php php php php php php php php php php php php/php/padphp thephp restphp ofphp thephp chunkphp withphp uphp's
php php php php php php php php php php php php php/php/untilphp thephp lenghtphp ofphp thephp chunkphp isphp php5
php php php php php php php php php php php php forphp php(php$jphp php=php php0php;php php$jphp <php php(php5php php-php php$partialLengthphp)php;php php$jphp+php+php)php php{
php php php php php php php php php php php php php php php php php$chunkphp php.php=php php'uphp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$cphp php=php unpackphp(php'Cphp5php'php,php php$chunkphp)php;

php php php php php php php php php php php php forphp php(php$jphp php=php php1php;php php$jphp <php=php php5php;php php$jphp+php+php)php php{
php php php php php php php php php php php php php php php php php$valuephp php+php=php php(php(php$cphp[php$jphp]php php-php php3php3php)php php*php powphp(php8php5php,php php(php5php php-php php$jphp)php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$foophp php=php packphp(php"Nphp"php,php php$valuephp)php;
php php php php php php php php php php php php php$outputphp php.php=php substrphp(php$foophp,php php0php,php php(php$partialLengthphp php-php php1php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$outputphp;
php php php php php}
php}
