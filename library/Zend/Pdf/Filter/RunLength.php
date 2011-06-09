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
php php*php php@versionphp php php php php$Idphp:php RunLengthphp.phpphp php2php0php7php8php5php php2php0php1php0php-php0php1php-php3php1php php0php9php:php4php3php:php0php3Zphp mikaelkaelphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Filterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php RunLengthphp streamphp filter
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Filterphp_RunLengthphp implementsphp Zendphp_Pdfphp_Filterphp_Interface
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

php php php php php php php php php$chainStartOffsetphp php=php php0php;
php php php php php php php php php$offsetphp php=php php0php;

php php php php php php php php whilephp php(php$offsetphp <php strlenphp(php$dataphp)php)php php{
php php php php php php php php php php php php php/php/php Dophp notphp encodephp php2php charphp chainsphp sincephp theyphp producephp php2php charphp runphp sequencephp,
php php php php php php php php php php php php php/php/php butphp itphp takesphp morephp timephp tophp decodephp suchphp outputphp php(becausephp ofphp processingphp additionalphp runphp)
php php php php php php php php php php php php ifphp php(php(php$repeatedCharChainLengthphp php=php strspnphp(php$dataphp,php php$dataphp[php$offsetphp]php,php php$offsetphp php+php php1php,php php1php2php7php)php php+php php1php)php php php>php php php2php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$chainStartOffsetphp php!php=php php$offsetphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Dropphp downphp previousephp php(nonphp-repeatablephp charsphp)php run
php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$offsetphp php-php php$chainStartOffsetphp php-php php1php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php substrphp(php$dataphp,php php$chainStartOffsetphp,php php$offsetphp php-php php$chainStartOffsetphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$outputphp php.php=php chrphp(php2php5php7php php-php php$repeatedCharChainLengthphp)php php.php php$dataphp[php$offsetphp]php;

php php php php php php php php php php php php php php php php php$offsetphp php+php=php php$repeatedCharChainLengthphp;
php php php php php php php php php php php php php php php php php$chainStartOffsetphp php=php php$offsetphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$offsetphp+php+php;

php php php php php php php php php php php php php php php php ifphp php(php$offsetphp php-php php$chainStartOffsetphp php=php=php php1php2php8php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Maximumphp runphp lengthphp isphp reached
php php php php php php php php php php php php php php php php php php php php php/php/php Dropphp downphp nonphp-repeatablephp charsphp run
php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php php"php\xphp7Fphp"php php.php substrphp(php$dataphp,php php$chainStartOffsetphp,php php1php2php8php)php;

php php php php php php php php php php php php php php php php php php php php php$chainStartOffsetphp php=php php$offsetphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$chainStartOffsetphp php!php=php php$offsetphp)php php{
php php php php php php php php php php php php php/php/php Dropphp downphp nonphp-repeatablephp charsphp run
php php php php php php php php php php php php php$outputphp php.php=php chrphp(php$offsetphp php-php php$chainStartOffsetphp php-php php1php)php php.php substrphp(php$dataphp,php php$chainStartOffsetphp,php php$offsetphp php-php php$chainStartOffsetphp)php;
php php php php php php php php php}

php php php php php php php php php$outputphp php.php=php php"php\xphp8php0php"php;

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
php php php php php php php php php$dataLengthphp php=php strlenphp(php$dataphp)php;
php php php php php php php php php$outputphp php=php php'php'php;
php php php php php php php php php$offsetphp php=php php0php;

php php php php php php php php whilephp(php$offsetphp <php php$dataLengthphp)php php{
php php php php php php php php php php php php php$lengthphp php=php ordphp(php$dataphp[php$offsetphp]php)php;

php php php php php php php php php php php php php$offsetphp+php+php;

php php php php php php php php php php php php ifphp php(php$lengthphp php=php=php php1php2php8php)php php{
php php php php php php php php php php php php php php php php php/php/php EODphp byte
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$lengthphp <php php1php2php8php)php php{
php php php php php php php php php php php php php php php php php$lengthphp+php+php;

php php php php php php php php php php php php php php php php php$outputphp php.php=php substrphp(php$dataphp,php php$offsetphp,php php$lengthphp)php;

php php php php php php php php php php php php php php php php php$offsetphp php+php=php php$lengthphp;
php php php php php php php php php php php php php}php elsephp ifphp php(php$lengthphp php>php php1php2php8php)php php{
php php php php php php php php php php php php php php php php php$outputphp php.php=php strphp_repeatphp(php$dataphp[php$offsetphp]php,php php2php5php7php php-php php$lengthphp)php;

php php php php php php php php php php php php php php php php php$offsetphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$outputphp;
php php php php php}
php}

