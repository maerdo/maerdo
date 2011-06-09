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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp SimpleDb
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php Thephp Customphp Exceptionphp classphp thatphp allowsphp youphp tophp havephp accessphp tophp thephp AWSphp Errorphp Codephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp SimpleDb
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Page
php{
php php php php php/php*php*php php@varphp stringphp Pagephp dataphp php*php/
php php php php protectedphp php$php_dataphp;

php php php php php/php*php*php php@varphp stringphp|nullphp Tokenphp identifyingphp pagephp php*php/
php php php php protectedphp php$php_tokenphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$data
php php php php php php*php php@paramphp php stringphp|nullphp php$token
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$dataphp,php php$tokenphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php php=php php$dataphp;
php php php php php php php php php$thisphp-php>php_tokenphp php=php php$tokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp pagephp data
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDataphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp token
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getTokenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp whetherphp thisphp isphp thephp lastphp pagephp ofphp data
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp isLastphp(php)
php php php php php{
php php php php php php php php returnphp php(nullphp php=php=php=php php$thisphp-php>php_tokenphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php"Pagephp withphp tokenphp:php php"php php.php php$thisphp-php>php_token
php php php php php php php php php php php php php php.php php"php\nphp andphp dataphp:php php"php php.php php$thisphp-php>php_dataphp;
php php php php php}
php}
