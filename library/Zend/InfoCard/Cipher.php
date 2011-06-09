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
php php*php php@versionphp php php php php$Idphp:php Cipherphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Providesphp anphp abstractionphp forphp encryptionphp ciphersphp usedphp inphp anphp Informationphp Card
php php*php implementation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Cipher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Cipher
php{
php php php php php/php*php*
php php php php php php*php AESphp php2php5php6php Encryptionphp withphp CBC
php php php php php php*php/
php php php php constphp ENCphp_AESphp2php5php6CBCphp php php php php php php=php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#aesphp2php5php6php-cbcphp'php;

php php php php php/php*php*
php php php php php php*php AESphp php1php2php8php Encryptionphp withphp CBC
php php php php php php*php/
php php php php constphp ENCphp_AESphp1php2php8CBCphp php php php php php php=php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#aesphp1php2php8php-cbcphp'php;

php php php php php/php*php*
php php php php php php*php RSAphp Publicphp Keyphp Encryptionphp withphp OAEPphp Padding
php php php php php php*php/
php php php php constphp ENCphp_RSAphp_OAEPphp_MGFphp1Pphp php=php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#rsaphp-oaepphp-mgfphp1pphp'php;

php php php php php/php*php*
php php php php php php*php RSAphp Publicphp Keyphp Encryptionphp withphp nophp padding
php php php php php php*php/
php php php php constphp ENCphp_RSAphp php php php php php php php php php php php php=php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#rsaphp-php1php_php5php'php;

php php php php php/php*php*
php php php php php php*php Constructorphp php(disabledphp)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@codeCoverageIgnoreStart
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php}
php php php php php/php/php php@codeCoverageIgnoreEnd
php php php php php/php*php*
php php php php php php*php Returnsphp anphp instancephp ofphp aphp cipherphp objectphp supportedphp basedphp onphp thephp URIphp provided
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Cipherphp_Exception
php php php php php php*php php@paramphp stringphp php$uriphp Thephp URIphp ofphp thephp encryptionphp methodphp wantde
php php php php php php*php php@returnphp mixedphp anphp Instancephp ofphp Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Interfacephp orphp Zendphp_InfoCardphp_Cipherphp_Pkiphp_Interface
php php php php php php*php php php php php php php php php php php php php php php dependingphp onphp URI
php php php php php php*php/
php php php php staticphp publicphp functionphp getInstanceByURIphp(php$uriphp)
php php php php php{
php php php php php php php php switchphp(php$uriphp)php php{
php php php php php php php php php php php php casephp selfphp:php:ENCphp_AESphp2php5php6CBCphp:
php php php php php php php php php php php php php php php php includephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Symmetricphp/Adapterphp/Aesphp2php5php6cbcphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Adapterphp_Aesphp2php5php6cbcphp(php)php;

php php php php php php php php php php php php casephp selfphp:php:ENCphp_AESphp1php2php8CBCphp:
php php php php php php php php php php php php php php php php includephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Symmetricphp/Adapterphp/Aesphp1php2php8cbcphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Adapterphp_Aesphp1php2php8cbcphp(php)php;

php php php php php php php php php php php php casephp selfphp:php:ENCphp_RSAphp_OAEPphp_MGFphp1Pphp:
php php php php php php php php php php php php php php php php includephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Pkiphp/Adapterphp/Rsaphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Rsaphp(Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Rsaphp:php:OAEPphp_PADDINGphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ENCphp_RSAphp:
php php php php php php php php php php php php php php php php includephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Pkiphp/Adapterphp/Rsaphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Rsaphp(Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Rsaphp:php:NOphp_PADDINGphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Cipherphp_Exceptionphp(php"Unknownphp Cipherphp URIphp"php)php;
php php php php php php php php php}
php php php php php}
php}
