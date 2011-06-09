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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Nirvanix
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Imfsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Nirvanixphp_Namespacephp_Base
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Nirvanixphp/Namespacephp/Basephp.phpphp'php;

php/php*php*
php php*php Namespacephp proxyphp withphp additionalphp conveniencephp methodsphp forphp thephp IMFSphp namespacephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Nirvanix
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Nirvanixphp_Namespacephp_Imfsphp extendsphp Zendphp_Servicephp_Nirvanixphp_Namespacephp_Base
php{
php php php php php/php*php*
php php php php php php*php Conveniencephp functionphp tophp getphp thephp contentsphp ofphp aphp filephp on
php php php php php php*php thephp Nirvanixphp IMFSphp.php php Analogphp tophp PHPphp'sphp filephp_getphp_contentsphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$filePathphp php php php Remotephp pathphp andphp filename
php php php php php php*php php@paramphp php integerphp php$expirationphp php Numberphp ofphp secondsphp thatphp Nirvanix
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php makephp thephp filephp availablephp forphp downloadphp.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php Contentsphp ofphp file
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php$filePathphp,php php$expirationphp php=php php3php6php0php0php)
php php php php php{
php php php php php php php php php/php/php getphp urlphp tophp downloadphp thephp file
php php php php php php php php php$paramsphp php=php arrayphp(php'filePathphp'php php php php=php>php php$filePathphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'expirationphp'php php=php>php php$expirationphp)php;
php php php php php php php php php$respphp php=php php$thisphp-php>getOptimalUrlsphp(php$paramsphp)php;
php php php php php php php php php$urlphp php=php php(stringphp)php$respphp-php>Downloadphp-php>DownloadURLphp;

php php php php php php php php php/php/php downloadphp thephp file
php php php php php php php php php$thisphp-php>php_httpClientphp-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_httpClientphp-php>setUriphp(php$urlphp)php;
php php php php php php php php php$respphp php=php php$thisphp-php>php_httpClientphp-php>requestphp(Zendphp_Httpphp_Clientphp:php:GETphp)php;

php php php php php php php php returnphp php$respphp-php>getBodyphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Conveniencephp functionphp tophp putphp thephp contentsphp ofphp aphp stringphp into
php php php php php php*php thephp Nirvanixphp IMFSphp.php php Analogphp tophp PHPphp'sphp filephp_putphp_contentsphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$filePathphp php php php Remotephp pathphp andphp filename
php php php php php php*php php@paramphp php integerphp php$dataphp php php php php php php php Dataphp tophp storephp inphp thephp file
php php php php php php*php php@paramphp php stringphp php php$mimeTypephp php php php Mimephp typephp ofphp data
php php php php php php*php php@returnphp Zendphp_Servicephp_Nirvanixphp_Response
php php php php php php*php/
php php php php publicphp functionphp putContentsphp(php$filePathphp,php php$dataphp,php php$mimeTypephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php getphp storagephp nodephp forphp upload
php php php php php php php php php$paramsphp php=php arrayphp(php'sizeBytesphp'php php=php>php strlenphp(php$dataphp)php)php;
php php php php php php php php php$respphp php=php php$thisphp-php>getStorageNodephp(php$paramsphp)php;
php php php php php php php php php$hostphp php php php php php php php php=php php(stringphp)php$respphp-php>GetStorageNodephp-php>UploadHostphp;
php php php php php php php php php$uploadTokenphp php=php php(stringphp)php$respphp-php>GetStorageNodephp-php>UploadTokenphp;

php php php php php php php php php/php/php httpphp uploadphp dataphp intophp remotephp file
php php php php php php php php php$thisphp-php>php_httpClientphp-php>resetParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_httpClientphp-php>setUriphp(php"httpphp:php/php/php{php$hostphp}php/Uploadphp.ashxphp"php)php;
php php php php php php php php php$thisphp-php>php_httpClientphp-php>setParameterPostphp(php'uploadTokenphp'php,php php$uploadTokenphp)php;
php php php php php php php php php$thisphp-php>php_httpClientphp-php>setParameterPostphp(php'destFolderPathphp'php,php strphp_replacephp(php'php\php\php'php,php php'php/php'php,dirnamephp(php$filePathphp)php)php)php;
php php php php php php php php php$thisphp-php>php_httpClientphp-php>setFileUploadphp(basenamephp(php$filePathphp)php,php php'uploadFilephp'php,php php$dataphp,php php$mimeTypephp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_httpClientphp-php>requestphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;

php php php php php php php php returnphp newphp Zendphp_Servicephp_Nirvanixphp_Responsephp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Conveniencephp functionphp tophp removephp aphp filephp fromphp thephp Nirvanixphp IMFSphp.
php php php php php php*php Analogphp tophp PHPphp'sphp unlinkphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$filePathphp php Removephp pathphp andphp filename
php php php php php php*php php@returnphp Zendphp_Servicephp_Nirvanixphp_Response
php php php php php php*php/
php php php php publicphp functionphp unlinkphp(php$filePathphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php'filePathphp'php php=php>php php$filePathphp)php;
php php php php php php php php returnphp php$thisphp-php>deleteFilesphp(php$paramsphp)php;
php php php php php}

php}
