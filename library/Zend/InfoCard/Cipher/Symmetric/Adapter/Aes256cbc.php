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
php php*php php@versionphp php php php php$Idphp:php Aesphp2php5php6cbcphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Adapterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Symmetricphp/Adapterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Aesphp2php5php6cbcphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Symmetricphp/Aesphp2php5php6cbcphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Implementsphp AESphp2php5php6php withphp CBCphp encryptionphp implementedphp usingphp thephp mCryptphp extension
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Cipher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Adapterphp_Aesphp2php5php6cbc
php php php php extendsphp Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Adapterphp_Abstract
php php php php implementsphp Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Aesphp2php5php6cbcphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Thephp MCRYPTphp Cipherphp constantphp forphp thisphp encryption
php php php php php php*php/
php php php php constphp MCRYPTphp_CIPHERphp php=php MCRYPTphp_RIJNDAELphp_php1php2php8php;

php php php php php/php*php*
php php php php php php*php Thephp MCRYPTphp Modephp constantphp forphp thisphp encryption
php php php php php php*php/
php php php php constphp MCRYPTphp_MODEphp php php php=php MCRYPTphp_MODEphp_CBCphp;

php php php php php/php*php*
php php php php php php*php Thephp defaultphp lengthphp ofphp thephp IVphp tophp use
php php php php php php*php/
php php php php constphp IVphp_LENGTHphp php php php php php=php php1php6php;

php php php php php/php*php*
php php php php php php*php Thephp objectphp constructor
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Cipherphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php/php/php Canphp'tphp testphp forphp this
php php php php php php php php php/php/php php@codeCoverageIgnoreStart
php php php php php php php php ifphp(php!extensionphp_loadedphp(php'mcryptphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Cipherphp_Exceptionphp(php"Usephp ofphp thephp AESphp2php5php6CBCphp Cipherphp requiresphp thephp mcryptphp extensionphp"php)php;
php php php php php php php php php}
php php php php php php php php php/php/php php@codeCoveregIgnoreEnd
php php php php php}

php php php php php/php*php*
php php php php php php*php Decryptsphp dataphp usingphp thephp AESphp Algorithmphp usingphp thephp mCryptphp extension
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Cipherphp_Exception
php php php php php php*php php@paramphp stringphp php$encryptedDataphp Thephp encryptedphp dataphp inphp binaryphp format
php php php php php php*php php@paramphp stringphp php$decryptionKeyphp Thephp decryptionphp key
php php php php php php*php php@paramphp integerphp php$ivphp_lengthphp Thephp IVphp lengthphp tophp use
php php php php php php*php php@returnphp stringphp thephp decryptedphp dataphp withphp anyphp terminatingphp nullsphp removed
php php php php php php*php/
php php php php publicphp functionphp decryptphp(php$encryptedDataphp,php php$decryptionKeyphp,php php$ivphp_lengthphp php=php nullphp)
php php php php php{

php php php php php php php php php$ivphp_lengthphp php=php php(php$ivphp_lengthphp php=php=php=php nullphp)php php?php selfphp:php:IVphp_LENGTHphp php:php php$ivphp_lengthphp;

php php php php php php php php php$mcryptphp_ivphp php=php nullphp;

php php php php php php php php ifphp(php$ivphp_lengthphp php>php php0php)php php{
php php php php php php php php php php php php php php$mcryptphp_ivphp php=php substrphp(php$encryptedDataphp,php php0php,php php$ivphp_lengthphp)php;
php php php php php php php php php php php php php$encryptedDataphp php=php substrphp(php$encryptedDataphp,php php$ivphp_lengthphp)php;
php php php php php php php php php}

php php php php php php php php php$decryptedphp php=php mcryptphp_decryptphp(selfphp:php:MCRYPTphp_CIPHERphp,php php$decryptionKeyphp,php php$encryptedDataphp,php selfphp:php:MCRYPTphp_MODEphp,php php$mcryptphp_ivphp)php;

php php php php php php php php ifphp(php!php$decryptedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Cipherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Cipherphp_Exceptionphp(php"Failedphp tophp decryptphp dataphp usingphp AESphp2php5php6CBCphp Algorithmphp"php)php;
php php php php php php php php php}

php php php php php php php php php$decryptedLengthphp php=php strlenphp(php$decryptedphp)php;
php php php php php php php php php$paddingLengthphp php=php substrphp(php$decryptedphp,php php$decryptedLengthphp php-php1php,php php1php)php;
php php php php php php php php php$decryptedphp php=php substrphp(php$decryptedphp,php php0php,php php$decryptedLengthphp php-php ordphp(php$paddingLengthphp)php)php;

php php php php php php php php returnphp rtrimphp(php$decryptedphp,php php"php\php0php"php)php;
php php php php php}
php}
