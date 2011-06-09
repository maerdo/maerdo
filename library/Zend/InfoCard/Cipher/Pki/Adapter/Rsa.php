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
php php*php php@versionphp php php php php$Idphp:php Rsaphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Pkiphp/Adapterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_InfoCardphp_Cipherphp_Pkiphp_Rsaphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Pkiphp/Rsaphp/Interfacephp.phpphp'php;

php/php*php*
php php*php RSAphp Publicphp Keyphp Encryptionphp Cipherphp Objectphp forphp thephp InfoCardphp componentphp.php Reliesphp onphp OpenSSL
php php*php tophp implementphp thephp RSAphp algorithm
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Cipher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Rsa
php php php php extendsphp Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Abstract
php php php php implementsphp Zendphp_InfoCardphp_Cipherphp_Pkiphp_Rsaphp_Interface
php{

php php php php php/php*php*
php php php php php php*php Objectphp Constructor
php php php php php php*
php php php php php php*php php@paramphp integerphp php$paddingphp Thephp typephp ofphp Paddingphp tophp use
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$paddingphp php=php Zendphp_InfoCardphp_Cipherphp_Pkiphp_Adapterphp_Abstractphp:php:NOphp_PADDINGphp)
php php php php php{
php php php php php php php php php/php/php Canphp'tphp testphp thisphp.php.
php php php php php php php php php/php/php php@codeCoverageIgnoreStart
php php php php php php php php ifphp(php!extensionphp_loadedphp(php'opensslphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Cipherphp_Exceptionphp(php"Usephp ofphp thisphp PKIphp RSAphp Adapterphp requiresphp thephp opensslphp extensionphp loadedphp"php)php;
php php php php php php php php php}
php php php php php php php php php/php/php php@codeCoverageIgnoreEnd

php php php php php php php php php$thisphp-php>setPaddingphp(php$paddingphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decryptsphp RSAphp encryptedphp dataphp usingphp thephp givenphp privatephp key
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Cipherphp_Exception
php php php php php php*php php@paramphp stringphp php$encryptedDataphp Thephp encryptedphp dataphp inphp binaryphp format
php php php php php php*php php@paramphp stringphp php$privateKeyphp Thephp privatephp keyphp inphp binaryphp format
php php php php php php*php php@paramphp stringphp php$passwordphp Thephp privatephp keyphp passphrase
php php php php php php*php php@paramphp integerphp php$paddingphp Thephp paddingphp tophp usephp duringphp decryptionphp php(ofphp notphp providedphp objectphp valuephp willphp bephp usedphp)
php php php php php php*php php@returnphp stringphp Thephp decryptedphp data
php php php php php php*php/
php php php php publicphp functionphp decryptphp(php$encryptedDataphp,php php$privateKeyphp,php php$passwordphp php=php nullphp,php php$paddingphp php=php nullphp)
php php php php php{
php php php php php php php php php$privatephp_keyphp php=php opensslphp_pkeyphp_getphp_privatephp(arrayphp(php$privateKeyphp,php php$passwordphp)php)php;

php php php php php php php php ifphp(php!php$privatephp_keyphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Cipherphp_Exceptionphp(php"Failedphp tophp loadphp privatephp keyphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp(php$paddingphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setPaddingphp(php$paddingphp)php;
php php php php php php php php php php php php php}php catchphp(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php opensslphp_freephp_keyphp(php$privatephp_keyphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php switchphp(php$thisphp-php>getPaddingphp(php)php)php php{
php php php php php php php php php php php php casephp selfphp:php:NOphp_PADDINGphp:
php php php php php php php php php php php php php php php php php$opensslphp_paddingphp php=php OPENSSLphp_NOphp_PADDINGphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:OAEPphp_PADDINGphp:
php php php php php php php php php php php php php php php php php$opensslphp_paddingphp php=php OPENSSLphp_PKCSphp1php_OAEPphp_PADDINGphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php opensslphp_privatephp_decryptphp(php$encryptedDataphp,php php$decryptedDataphp,php php$privatephp_keyphp,php php$opensslphp_paddingphp)php;

php php php php php php php php opensslphp_freephp_keyphp(php$privatephp_keyphp)php;

php php php php php php php php ifphp(php!php$resultphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Cipherphp_Exceptionphp(php"Unablephp tophp Decryptphp Valuephp usingphp providedphp privatephp keyphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp(php$thisphp-php>getPaddingphp(php)php php=php=php selfphp:php:NOphp_PADDINGphp)php php{
php php php php php php php php php php php php php$decryptedDataphp php=php substrphp(php$decryptedDataphp,php php2php)php;
php php php php php php php php php php php php php$startphp php=php strposphp(php$decryptedDataphp,php php0php)php php+php php1php;
php php php php php php php php php php php php php$decryptedDataphp php=php substrphp(php$decryptedDataphp,php php$startphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$decryptedDataphp;
php php php php php}
php}
