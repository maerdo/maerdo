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
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Cryptphp.phpphp php2php3php0php8php9php php2php0php1php0php-php1php0php-php1php2php php1php7php:php0php5php:php3php1Zphp padraicphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Crypt
php{

php php php php constphp TYPEphp_OPENSSLphp php=php php'opensslphp'php;
php php php php constphp TYPEphp_HASHphp php=php php'hashphp'php;
php php php php constphp TYPEphp_MHASHphp php=php php'mhashphp'php;

php php php php protectedphp staticphp php$php_typephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_supportedAlgosOpensslphp php=php arrayphp(
php php php php php php php php php'mdphp2php'php,
php php php php php php php php php'mdphp4php'php,
php php php php php php php php php'mdcphp2php'php,
php php php php php php php php php'rmdphp1php6php0php'php,
php php php php php php php php php'shaphp'php,
php php php php php php php php php'shaphp1php'php,
php php php php php php php php php'shaphp2php2php4php'php,
php php php php php php php php php'shaphp2php5php6php'php,
php php php php php php php php php'shaphp3php8php4php'php,
php php php php php php php php php'shaphp5php1php2php'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_supportedAlgosMhashphp php=php arrayphp(
php php php php php php php php php'adlerphp3php2php'php,
php php php php php php php php php'crcphp3php2php'php,
php php php php php php php php php'crcphp3php2bphp'php,
php php php php php php php php php'gostphp'php,
php php php php php php php php php'havalphp1php2php8php'php,
php php php php php php php php php'havalphp1php6php0php'php,
php php php php php php php php php'havalphp1php9php2php'php,
php php php php php php php php php'havalphp2php5php6php'php,
php php php php php php php php php'mdphp4php'php,
php php php php php php php php php'mdphp5php'php,
php php php php php php php php php'ripemdphp1php6php0php'php,
php php php php php php php php php'shaphp1php'php,
php php php php php php php php php'shaphp2php5php6php'php,
php php php php php php php php php'tigerphp'php,
php php php php php php php php php'tigerphp1php2php8php'php,
php php php php php php php php php'tigerphp1php6php0php'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$algorithm
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp boolphp php$binaryOutput
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp staticphp functionphp hashphp(php$algorithmphp,php php$dataphp,php php$binaryOutputphp php=php falsephp)
php php php php php{
php php php php php php php php php$algorithmphp php=php strtolowerphp(php$algorithmphp)php;
php php php php php php php php ifphp php(functionphp_existsphp(php$algorithmphp)php)php php{
php php php php php php php php php php php php returnphp php$algorithmphp(php$dataphp,php php$binaryOutputphp)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:php_detectHashSupportphp(php$algorithmphp)php;
php php php php php php php php php$supportedMethodphp php=php php'php_digestphp'php php.php ucfirstphp(selfphp:php:php$php_typephp)php;
php php php php php php php php php$resultphp php=php selfphp:php:php$supportedMethodphp(php$algorithmphp,php php$dataphp,php php$binaryOutputphp)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$algorithm
php php php php php php*php php@throwsphp Zendphp_Cryptphp_Exception
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_detectHashSupportphp(php$algorithmphp)
php php php php php{
php php php php php php php php ifphp php(functionphp_existsphp(php'hashphp'php)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_typephp php=php selfphp:php:TYPEphp_HASHphp;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$algorithmphp,php hashphp_algosphp(php)php)php)php php{
php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(functionphp_existsphp(php'mhashphp'php)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_typephp php=php selfphp:php:TYPEphp_MHASHphp;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$algorithmphp,php selfphp:php:php$php_supportedAlgosMhashphp)php)php php{
php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(functionphp_existsphp(php'opensslphp_digestphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php$algorithmphp php=php=php php'ripemdphp1php6php0php'php)php php{
php php php php php php php php php php php php php php php php php$algorithmphp php=php php'rmdphp1php6php0php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php selfphp:php:php$php_typephp php=php selfphp:php:TYPEphp_OPENSSLphp;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$algorithmphp,php selfphp:php:php$php_supportedAlgosOpensslphp)php)php php{
php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Cryptphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cryptphp_Exceptionphp(php'php\php'php'php php.php php$algorithmphp php.php php'php\php'php isphp notphp supportedphp byphp anyphp availablephp extensionphp orphp nativephp functionphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$algorithm
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp boolphp php$binaryOutput
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_digestHashphp(php$algorithmphp,php php$dataphp,php php$binaryOutputphp)
php php php php php{
php php php php php php php php returnphp hashphp(php$algorithmphp,php php$dataphp,php php$binaryOutputphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$algorithm
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp boolphp php$binaryOutput
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_digestMhashphp(php$algorithmphp,php php$dataphp,php php$binaryOutputphp)
php php php php php{
php php php php php php php php php$constantphp php=php constantphp(php'MHASHphp_php'php php.php strtoupperphp(php$algorithmphp)php)php;
php php php php php php php php php$binaryphp php=php mhashphp(php$constantphp,php php$dataphp)php;
php php php php php php php php ifphp php(php$binaryOutputphp)php php{
php php php php php php php php php php php php returnphp php$binaryphp;
php php php php php php php php php}
php php php php php php php php returnphp binphp2hexphp(php$binaryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$algorithm
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp boolphp php$binaryOutput
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_digestOpensslphp(php$algorithmphp,php php$dataphp,php php$binaryOutputphp)
php php php php php{
php php php php php php php php ifphp php(php$algorithmphp php=php=php php'ripemdphp1php6php0php'php)php php{
php php php php php php php php php php php php php$algorithmphp php=php php'rmdphp1php6php0php'php;
php php php php php php php php php}
php php php php php php php php returnphp opensslphp_digestphp(php$dataphp,php php$algorithmphp,php php$binaryOutputphp)php;
php php php php php}

php}
