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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Decryptphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Decrypt
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Decryptphp.phpphp'php;

php/php*php*
php php*php Decryptsphp aphp givenphp filephp andphp storesphp thephp decryptedphp filephp content
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Filephp_Decryptphp extendsphp Zendphp_Filterphp_Decrypt
php{
php php php php php/php*php*
php php php php php php*php Newphp filenamephp tophp set
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filenamephp;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp newphp filenamephp wherephp thephp contentphp willphp bephp stored
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFilenamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filenamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp newphp filenamephp wherephp thephp contentphp willphp bephp stored
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filenamephp php(Optionalphp)php Newphp filenamephp tophp set
php php php php php php*php php@returnphp Zendphp_Filterphp_Filephp_Encryt
php php php php php php*php/
php php php php publicphp functionphp setFilenamephp(php$filenamephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filenamephp php=php php$filenamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Decryptsphp thephp filephp php$valuephp withphp thephp definedphp settings
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Fullphp pathphp ofphp filephp tophp change
php php php php php php*php php@returnphp stringphp Thephp filenamephp whichphp hasphp beenphp setphp,php orphp falsephp whenphp therephp werephp errors
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!filephp_existsphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Filephp php'php$valuephp'php notphp foundphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_filenamephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_filenamephp php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(filephp_existsphp(php$thisphp-php>php_filenamephp)php andphp php!isphp_writablephp(php$thisphp-php>php_filenamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Filephp php'php{php$thisphp-php>php_filenamephp}php'php isphp notphp writablephp"php)php;
php php php php php php php php php}

php php php php php php php php php$contentphp php=php filephp_getphp_contentsphp(php$valuephp)php;
php php php php php php php php ifphp php(php!php$contentphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Problemphp whilephp readingphp filephp php'php$valuephp'php"php)php;
php php php php php php php php php}

php php php php php php php php php$decryptedphp php=php parentphp:php:filterphp(php$contentphp)php;
php php php php php php php php php$resultphp php php php php=php filephp_putphp_contentsphp(php$thisphp-php>php_filenamephp,php php$decryptedphp)php;

php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Problemphp whilephp writingphp filephp php'php{php$thisphp-php>php_filenamephp}php'php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_filenamephp;
php php php php php}
php}
