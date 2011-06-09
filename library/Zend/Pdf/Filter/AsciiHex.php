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
php php*php php@versionphp php php php php$Idphp:php AsciiHexphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Filterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php AsciiHexphp streamphp filter
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Filterphp_AsciiHexphp implementsphp Zendphp_Pdfphp_Filterphp_Interface
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
php php php php php php php php returnphp binphp2hexphp(php$dataphp)php php.php php'php>php'php;
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
php php php php php php php php php$outputphp php php=php php'php'php;
php php php php php php php php php$oddCodephp php=php truephp;
php php php php php php php php php$commentModephp php=php falsephp;

php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php strlenphp(php$dataphp)php php php&php&php php php$dataphp[php$countphp]php php!php=php php'php>php'php;php php$countphp+php+php)php php{
php php php php php php php php php php php php php$charCodephp php=php ordphp(php$dataphp[php$countphp]php)php;

php php php php php php php php php php php php ifphp php(php$commentModephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$charCodephp php=php=php php0xphp0Aphp php php|php|php php$charCodephp php=php=php php0xphp0Dphp php)php php{
php php php php php php php php php php php php php php php php php php php php php$commentModephp php=php falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(php$charCodephp)php php{
php php php php php php php php php php php php php php php php php/php/Skipphp whitephp space
php php php php php php php php php php php php php php php php casephp php0xphp0php0php:php php/php/php nullphp character
php php php php php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php0xphp0php9php:php php/php/php Tab
php php php php php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php0xphp0Aphp:php php/php/php Linephp feed
php php php php php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php0xphp0Cphp:php php/php/php Formphp Feed
php php php php php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php0xphp0Dphp:php php/php/php Carriagephp return
php php php php php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp nextphp case
php php php php php php php php php php php php php php php php casephp php0xphp2php0php:php php/php/php Space
php php php php php php php php php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php0xphp2php5php:php php/php/php php'php%php'
php php php php php php php php php php php php php php php php php php php php php/php/php Switchphp tophp commentphp mode
php php php php php php php php php php php php php php php php php php php php php$commentModephp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$charCodephp php>php=php php0xphp3php0php php/php*php'php0php'php*php/php php&php&php php$charCodephp <php=php php0xphp3php9php php/php*php'php9php'php*php/php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$codephp php=php php$charCodephp php-php php0xphp3php0php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$charCodephp php>php=php php0xphp4php1php php/php*php'Aphp'php*php/php php&php&php php$charCodephp <php=php php0xphp4php6php php/php*php'Fphp'php*php/php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$codephp php=php php$charCodephp php-php php0xphp3php7php/php*php0xphp4php1php php-php php0xphp0Aphp*php/php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$charCodephp php>php=php php0xphp6php1php php/php*php'aphp'php*php/php php&php&php php$charCodephp <php=php php0xphp6php6php php/php*php'fphp'php*php/php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$codephp php=php php$charCodephp php-php php0xphp5php7php/php*php0xphp6php1php php-php php0xphp0Aphp*php/php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Wrongphp characterphp inphp aphp encodedphp streamphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$oddCodephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Oddphp passphp.php Storephp hexphp digitphp forphp nextphp pass
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Scopephp ofphp php$hexCodeHighphp variablephp isphp wholephp function
php php php php php php php php php php php php php php php php php php php php php php php php php$hexCodeHighphp php=php php$codephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Evenphp passphp.
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Addphp decodedphp characterphp tophp thephp output
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php php(php$hexCodeHighphp isphp storedphp inphp previousphp passphp)
php php php php php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$hexCodeHighphp*php1php6php php+php php$codephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$oddCodephp php=php php!php$oddCodephp;

php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php Checkphp thatphp streamphp isphp terminatedphp byphp Endphp Ofphp Dataphp markerphp php*php/
php php php php php php php php ifphp php(php$dataphp[php$countphp]php php!php=php php'php>php'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Wrongphp encodedphp streamphp Endphp Ofphp Dataphp markerphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php Lastphp php'php0php'php characterphp isphp omittedphp php*php/
php php php php php php php php ifphp php(php!php$oddCodephp)php php{
php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$hexCodeHighphp*php1php6php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$outputphp;
php php php php php}
php}
