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
php php*php php@versionphp php php php php$Idphp:php EncryptedKeyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Element
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Elementphp.phpphp'php;

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_EncryptedKey
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/EncryptedKeyphp.phpphp'php;

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/KeyInfophp/Interfacephp.phpphp'php;

php/php*php*
php php*php Anphp objectphp representingphp anphp Xmlphp EncryptedKEyphp block
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_EncryptedKey
php php php php extendsphp Zendphp_InfoCardphp_Xmlphp_Element
php php php php implementsphp Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Interface
php{
php php php php php/php*php*
php php php php php php*php Returnphp anphp instancephp ofphp thephp objectphp basedphp onphp inputphp XMLphp Data
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@paramphp stringphp php$xmlDataphp Thephp EncryptedKeyphp XMLphp Block
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_EncryptedKey
php php php php php php*php/
php php php php staticphp publicphp functionphp getInstancephp(php$xmlDataphp)
php php php php php{
php php php php php php php php ifphp(php$xmlDataphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php php{
php php php php php php php php php php php php php$strXmlDataphp php=php php$xmlDataphp-php>asXMLphp(php)php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$xmlDataphp)php)php php{
php php php php php php php php php php php php php$strXmlDataphp php=php php$xmlDataphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Invalidphp Dataphp providedphp tophp createphp instancephp"php)php;
php php php php php php php php php}

php php php php php php php php php$sxephp php=php simplexmlphp_loadphp_stringphp(php$strXmlDataphp)php;

php php php php php php php php ifphp(php$sxephp-php>getNamephp(php)php php!php=php php"EncryptedKeyphp"php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Invalidphp XMLphp Blockphp providedphp forphp EncryptedKeyphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp simplexmlphp_loadphp_stringphp(php$strXmlDataphp,php php"Zendphp_InfoCardphp_Xmlphp_EncryptedKeyphp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Encyptionphp Methodphp Algorithmphp URIphp ofphp thephp block
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@returnphp stringphp thephp Encryptionphp methodphp algorithmphp URI
php php php php php php*php/
php php php php publicphp functionphp getEncryptionMethodphp(php)
php php php php php{

php php php php php php php php php$thisphp-php>registerXPathNamespacephp(php'ephp'php,php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#php'php)php;
php php php php php php php php listphp(php$encryptionphp_methodphp)php php=php php$thisphp-php>xpathphp(php"php/php/ephp:EncryptionMethodphp"php)php;

php php php php php php php php ifphp(php!php(php$encryptionphp_methodphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp findphp thephp ephp:EncryptionMethodphp KeyInfophp encryptionphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php selfphp:php:convertToDOMphp(php$encryptionphp_methodphp)php;

php php php php php php php php ifphp(php!php$domphp-php>hasAttributephp(php'Algorithmphp'php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp determinephp thephp encryptionphp algorithmphp inphp thephp Symmetricphp encphp:EncryptionMethodphp XMLphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$domphp-php>getAttributephp(php'Algorithmphp'php)php;

php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Digestphp Methodphp Algorithmphp URIphp used
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@returnphp stringphp thephp Digestphp Methodphp Algorithmphp URI
php php php php php php*php/
php php php php publicphp functionphp getDigestMethodphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>registerXPathNamespacephp(php'ephp'php,php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#php'php)php;
php php php php php php php php listphp(php$encryptionphp_methodphp)php php=php php$thisphp-php>xpathphp(php"php/php/ephp:EncryptionMethodphp"php)php;

php php php php php php php php ifphp(php!php(php$encryptionphp_methodphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp findphp thephp ephp:EncryptionMethodphp KeyInfophp encryptionphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp(php!php(php$encryptionphp_methodphp-php>DigestMethodphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp findphp thephp DigestMethodphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php selfphp:php:convertToDOMphp(php$encryptionphp_methodphp-php>DigestMethodphp)php;

php php php php php php php php ifphp(php!php$domphp-php>hasAttributephp(php'Algorithmphp'php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp determinephp thephp digestphp algorithmphp forphp thephp symmetricphp Keyinfophp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$domphp-php>getAttributephp(php'Algorithmphp'php)php;

php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp KeyInfophp blockphp object
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_KeyInfophp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getKeyInfophp(php)
php php php php php{

php php php php php php php php ifphp(issetphp(php$thisphp-php>KeyInfophp)php)php php{
php php php php php php php php php php php php returnphp Zendphp_InfoCardphp_Xmlphp_KeyInfophp:php:getInstancephp(php$thisphp-php>KeyInfophp)php;
php php php php php php php php php}

php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp locatephp aphp KeyInfophp blockphp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp encryptedphp valuephp ofphp thephp blockphp inphp basephp6php4php format
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@returnphp stringphp Thephp Valuephp ofphp thephp CipherValuephp blockphp inphp basephp6php4php format
php php php php php php*php/
php php php php publicphp functionphp getCipherValuephp(php)
php php php php php{

php php php php php php php php php$thisphp-php>registerXPathNamespacephp(php'ephp'php,php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#php'php)php;

php php php php php php php php listphp(php$cipherdataphp)php php=php php$thisphp-php>xpathphp(php"php/php/ephp:CipherDataphp"php)php;

php php php php php php php php ifphp(php!php(php$cipherdataphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp findphp thephp ephp:CipherDataphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php php$cipherdataphp-php>registerXPathNameSpacephp(php'encphp'php,php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php0php4php/xmlencphp#php'php)php;
php php php php php php php php listphp(php$ciphervaluephp)php php=php php$cipherdataphp-php>xpathphp(php"php/php/encphp:CipherValuephp"php)php;

php php php php php php php php ifphp(php!php(php$ciphervaluephp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp fidnphp thephp encphp:CipherValuephp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php(stringphp)php$ciphervaluephp;
php php php php php}
php}
