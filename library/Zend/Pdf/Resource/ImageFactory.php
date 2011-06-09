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
php php*php php@versionphp php php php php$Idphp:php ImageFactoryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Zendphp_Pdfphp_ImageFactory
php php*
php php*php Helpsphp managephp thephp diversephp setphp ofphp supportedphp imagephp filephp typesphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@todophp php php php php php php Usephp Zendphp_Mimephp notphp filephp extensionphp forphp typephp determinationphp.
php php*php/
classphp Zendphp_Pdfphp_Resourcephp_ImageFactory
php{
php php php php publicphp staticphp functionphp factoryphp(php$filenamephp)php php{
php php php php php php php php ifphp(php!isphp_filephp(php$filenamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Cannotphp createphp imagephp resourcephp.php Filephp notphp foundphp.php"php)php;
php php php php php php php php php}
php php php php php php php php php$extensionphp php=php pathinfophp(php$filenamephp,php PATHINFOphp_EXTENSIONphp)php;
php php php php php php php php php/php*
php php php php php php php php php php*php Therephp arephp plansphp tophp usephp Zendphp_Mimephp andphp notphp filephp extensionphp.php Inphp thephp meanphp timephp,php ifphp youphp needphp to
php php php php php php php php php php*php usephp anphp alternatephp filephp extensionphp justphp spinphp upphp thephp rightphp processorphp directlyphp.
php php php php php php php php php php*php/
php php php php php php php php switchphp php(strtolowerphp(php$extensionphp)php)php php{
php php php php php php php php php php php php casephp php'tifphp'php:
php php php php php php php php php php php php php php php php php/php/Fallphp throughphp tophp nextphp casephp;
php php php php php php php php php php php php casephp php'tiffphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Imagephp/Tiffphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Resourcephp_Imagephp_Tiffphp(php$filenamephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'pngphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Imagephp/Pngphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Resourcephp_Imagephp_Pngphp(php$filenamephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'jpgphp'php:
php php php php php php php php php php php php php php php php php/php/Fallphp throughphp tophp nextphp casephp;
php php php php php php php php php php php php casephp php'jpephp'php:
php php php php php php php php php php php php php php php php php/php/Fallphp throughphp tophp nextphp casephp;
php php php php php php php php php php php php casephp php'jpegphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Resourcephp/Imagephp/Jpegphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Resourcephp_Imagephp_Jpegphp(php$filenamephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Cannotphp createphp imagephp resourcephp.php Filephp extensionphp notphp knownphp orphp unsupportedphp typephp.php"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}
php}

