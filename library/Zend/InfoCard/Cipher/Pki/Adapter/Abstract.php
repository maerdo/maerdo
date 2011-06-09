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
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Cipher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Cipherphp_Pkiphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Pkiphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Anphp abstractphp classphp forphp publicphp-keyphp ciphers
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Cipher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Abstractphp implementsphp Zendphp_InfoCardphp_Cipherphp_Pkiphp_Interface
php{
php php php php php/php*php*
php php php php php php*php OAEPphp Paddingphp publicphp keyphp encryption
php php php php php php*php/
php php php php constphp OAEPphp_PADDINGphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Nophp paddingphp publicphp keyphp encryption
php php php php php php*php/
php php php php constphp NOphp_PADDINGphp php=php php2php;

php php php php php/php*php*
php php php php php php*php Thephp typephp ofphp paddingphp tophp use
php php php php php php*
php php php php php php*php php@varphp integerphp onephp ofphp thephp paddingphp constantsphp inphp thisphp class
php php php php php php*php/
php php php php protectedphp php$php_paddingphp;

php php php php php/php*php*
php php php php php php*php Setphp thephp paddingphp ofphp thephp publicphp keyphp encryption
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Cipherphp_Exception
php php php php php php*php php@paramphp integerphp php$paddingphp Onephp ofphp thephp constnatsphp inphp thisphp class
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Pkiphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setPaddingphp(php$paddingphp)
php php php php php{
php php php php php php php php switchphp(php$paddingphp)php php{
php php php php php php php php php php php php casephp selfphp:php:OAEPphp_PADDINGphp:
php php php php php php php php php php php php casephp selfphp:php:NOphp_PADDINGphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_paddingphp php=php php$paddingphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Cipherphp_Exceptionphp(php"Invalidphp Paddingphp Typephp Providedphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrunsphp thephp publicphp-keyphp paddingphp used
php php php php php php*
php php php php php php*php php@returnphp integerphp Onephp ofphp thephp paddingphp constantsphp inphp thisphp class
php php php php php php*php/
php php php php publicphp functionphp getPaddingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paddingphp;
php php php php php}
php}
