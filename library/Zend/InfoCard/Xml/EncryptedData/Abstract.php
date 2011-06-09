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
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Element
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Elementphp.phpphp'php;

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_KeyInfo
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/KeyInfophp.phpphp'php;

php/php*php*
php php*php Anphp abstractphp classphp representingphp aphp genericphp EncryptedDataphp XMLphp blockphp.php Thisphp classphp isphp extended
php php*php intophp aphp specificphp typephp ofphp EncryptedDataphp XMLphp blockphp php(iphp.ephp.php XmlEncphp)php asphp necessary
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_InfoCardphp_Xmlphp_EncryptedDataphp_Abstractphp extendsphp Zendphp_InfoCardphp_Xmlphp_Element
php{

php php php php php/php*php*
php php php php php php*php Returnsphp thephp KeyInfophp Block
php php php php php php*
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getKeyInfophp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_InfoCardphp_Xmlphp_KeyInfophp:php:getInstancephp(php$thisphp-php>KeyInfophp[php0php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp Encryptionphp methodphp usedphp tophp encryptphp thephp assertionphp document
php php php php php php*php php(thephp symmetricphp cipherphp)
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@returnphp stringphp Thephp URIphp ofphp thephp Symmetricphp Encryptionphp Methodphp used
php php php php php php*php/
php php php php publicphp functionphp getEncryptionMethodphp(php)
php php php php php{

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp Thisphp isphp prettyphp hackyphp unlessphp wephp canphp alwaysphp bephp confidentphp thatphp thephp first
php php php php php php php php php php*php EncryptionMethodphp blockphp isphp thephp correctphp onephp php(thephp AESphp orphp compariablephp symetricphp algorithmphp)php.php.
php php php php php php php php php php*php thephp secondphp isphp thephp PKphp methodphp ifphp providedphp.
php php php php php php php php php php*php/
php php php php php php php php listphp(php$encryptionphp_methodphp)php php=php php$thisphp-php>xpathphp(php"php/php/encphp:EncryptionMethodphp"php)php;

php php php php php php php php ifphp(php!php(php$encryptionphp_methodphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp findphp thephp encphp:EncryptionMethodphp symmetricphp encryptionphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php selfphp:php:convertToDOMphp(php$encryptionphp_methodphp)php;

php php php php php php php php ifphp(php!php$domphp-php>hasAttributephp(php'Algorithmphp'php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp determinephp thephp encryptionphp algorithmphp inphp thephp Symmetricphp encphp:EncryptionMethodphp XMLphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$domphp-php>getAttributephp(php'Algorithmphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp valuephp ofphp thephp encryptedphp block
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp valuephp ofphp thephp encryptedphp CipherValuephp block
php php php php php php*php/
php php php php abstractphp functionphp getCipherValuephp(php)php;
php}
