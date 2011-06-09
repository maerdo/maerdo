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
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@subpackagephp Rsa
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Rsaphp.phpphp php2php3php4php3php9php php2php0php1php0php-php1php1php-php2php3php php2php1php:php1php0php:php1php4Zphp alexanderphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Rsaphp_Keyphp_Private
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Rsaphp/Keyphp/Privatephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Rsaphp_Keyphp_Public
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Rsaphp/Keyphp/Publicphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cryptphp_Rsa
php{

php php php php constphp BINARYphp php=php php'binaryphp'php;
php php php php constphp BASEphp6php4php php=php php'basephp6php4php'php;

php php php php protectedphp php$php_privateKeyphp;

php php php php protectedphp php$php_publicKeyphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_pemStringphp;

php php php php protectedphp php$php_pemPathphp;

php php php php protectedphp php$php_certificateStringphp;

php php php php protectedphp php$php_certificatePathphp;

php php php php protectedphp php$php_hashAlgorithmphp;

php php php php protectedphp php$php_passPhrasephp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@throwsphp Zendphp_Cryptphp_Rsaphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'opensslphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Rsaphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Rsaphp_Exceptionphp(php'Zendphp_Cryptphp_Rsaphp requiresphp opensslphp extentionphp tophp bephp loadedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp php_hashAlgorithmphp propertyphp whenphp wephp arephp surephp,php thatphp opensslphp extensionphp isphp loaded
php php php php php php php php php/php/php andphp OPENSSLphp_ALGOphp_SHAphp1php constantphp isphp available
php php php php php php php php php$thisphp-php>php_hashAlgorithmphp php=php OPENSSLphp_ALGOphp_SHAphp1php;

php php php php php php php php ifphp php(issetphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'passPhrasephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_passPhrasephp php=php php$optionsphp[php'passPhrasephp'php]php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionphp=php>php$valuephp)php php{
php php php php php php php php php php php php switchphp php(php$optionphp)php php{
php php php php php php php php php php php php php php php php casephp php'pemStringphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setPemStringphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'pemPathphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setPemPathphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'certificateStringphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setCertificateStringphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'certificatePathphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setCertificatePathphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'hashAlgorithmphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setHashAlgorithmphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp getPrivateKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_privateKeyphp;
php php php php php}

php php php php publicphp functionphp getPublicKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_publicKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp Zendphp_Cryptphp_Rsaphp_Keyphp_Privatephp php$privateKey
php php php php php php*php php@paramphp stringphp php$format
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp signphp(php$dataphp,php Zendphp_Cryptphp_Rsaphp_Keyphp_Privatephp php$privateKeyphp php=php nullphp,php php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php php$signaturephp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$privateKeyphp)php)php php{
php php php php php php php php php php php php php$opensslKeyResourcephp php=php php$privateKeyphp-php>getOpensslKeyResourcephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$opensslKeyResourcephp php=php php$thisphp-php>php_privateKeyphp-php>getOpensslKeyResourcephp(php)php;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php opensslphp_signphp(
php php php php php php php php php php php php php$dataphp,php php$signaturephp,
php php php php php php php php php php php php php$opensslKeyResourcephp,
php php php php php php php php php php php php php$thisphp-php>getHashAlgorithmphp(php)
php php php php php php php php php)php;
php php php php php php php php ifphp php(php$formatphp php=php=php selfphp:php:BASEphp6php4php)php php{
php php php php php php php php php php php php returnphp basephp6php4php_encodephp(php$signaturephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$signaturephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp stringphp php$signature
php php php php php php*php php@paramphp stringphp php$format
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp verifySignaturephp(php$dataphp,php php$signaturephp,php php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$formatphp php=php=php selfphp:php:BASEphp6php4php)php php{
php php php php php php php php php php php php php$signaturephp php=php basephp6php4php_decodephp(php$signaturephp)php;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php opensslphp_verifyphp(php$dataphp,php php$signaturephp,
php php php php php php php php php php php php php$thisphp-php>getPublicKeyphp(php)php-php>getOpensslKeyResourcephp(php)php,
php php php php php php php php php php php php php$thisphp-php>getHashAlgorithmphp(php)php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp Zendphp_Cryptphp_Rsaphp_Keyphp php$key
php php php php php php*php php@paramphp stringphp php$format
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp encryptphp(php$dataphp,php Zendphp_Cryptphp_Rsaphp_Keyphp php$keyphp,php php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php php$encryptedphp php=php php'php'php;
php php php php php php php php php$functionphp php=php php'opensslphp_publicphp_encryptphp'php;
php php php php php php php php ifphp php(php$keyphp instanceofphp Zendphp_Cryptphp_Rsaphp_Keyphp_Privatephp)php php{
php php php php php php php php php php php php php$functionphp php=php php'opensslphp_privatephp_encryptphp'php;
php php php php php php php php php}
php php php php php php php php php$functionphp(php$dataphp,php php$encryptedphp,php php$keyphp-php>getOpensslKeyResourcephp(php)php)php;
php php php php php php php php ifphp php(php$formatphp php=php=php selfphp:php:BASEphp6php4php)php php{
php php php php php php php php php php php php returnphp basephp6php4php_encodephp(php$encryptedphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$encryptedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$data
php php php php php php*php php@paramphp Zendphp_Cryptphp_Rsaphp_Keyphp php$key
php php php php php php*php php@paramphp stringphp php$format
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp decryptphp(php$dataphp,php Zendphp_Cryptphp_Rsaphp_Keyphp php$keyphp,php php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php php$decryptedphp php=php php'php'php;
php php php php php php php php ifphp php(php$formatphp php=php=php selfphp:php:BASEphp6php4php)php php{
php php php php php php php php php php php php php$dataphp php=php basephp6php4php_decodephp(php$dataphp)php;
php php php php php php php php php}
php php php php php php php php php$functionphp php=php php'opensslphp_privatephp_decryptphp'php;
php php php php php php php php ifphp php(php$keyphp instanceofphp Zendphp_Cryptphp_Rsaphp_Keyphp_Publicphp)php php{
php php php php php php php php php php php php php$functionphp php=php php'opensslphp_publicphp_decryptphp'php;
php php php php php php php php php}
php php php php php php php php php$functionphp(php$dataphp,php php$decryptedphp,php php$keyphp-php>getOpensslKeyResourcephp(php)php)php;
php php php php php php php php returnphp php$decryptedphp;
php php php php php}

php php php php publicphp functionphp generateKeysphp(arrayphp php$configargsphp php=php nullphp)
php php php php php{
php php php php php php php php php$configphp php=php nullphp;
php php php php php php php php php$passPhrasephp php=php nullphp;
php php php php php php php php ifphp php(php$configargsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$configargsphp[php'passPhrasephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$passPhrasephp php=php php$configargsphp[php'passPhrasephp'php]php;
php php php php php php php php php php php php php php php php unsetphp(php$configargsphp[php'passPhrasephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$configphp php=php php$thisphp-php>php_parseConfigArgsphp(php$configargsphp)php;
php php php php php php php php php}
php php php php php php php php php$privateKeyphp php=php nullphp;
php php php php php php php php php$publicKeyphp php=php nullphp;
php php php php php php php php php$resourcephp php=php opensslphp_pkeyphp_newphp(php$configphp)php;
php php php php php php php php php/php/php abovephp failsphp onphp PHPphp php5php.php3
php php php php php php php php opensslphp_pkeyphp_exportphp(php$resourcephp,php php$privatephp,php php$passPhrasephp)php;
php php php php php php php php php$privateKeyphp php=php newphp Zendphp_Cryptphp_Rsaphp_Keyphp_Privatephp(php$privatephp,php php$passPhrasephp)php;
php php php php php php php php php$detailsphp php=php opensslphp_pkeyphp_getphp_detailsphp(php$resourcephp)php;
php php php php php php php php php$publicKeyphp php=php newphp Zendphp_Cryptphp_Rsaphp_Keyphp_Publicphp(php$detailsphp[php'keyphp'php]php)php;
php php php php php php php php php$returnphp php=php newphp ArrayObjectphp(arrayphp(
php php php php php php php php php php php php'privateKeyphp'php=php>php$privateKeyphp,
php php php php php php php php php php php php'publicKeyphp'php=php>php$publicKey
php php php php php php php php php)php,php ArrayObjectphp:php:ARRAYphp_ASphp_PROPSphp)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php publicphp functionphp setPemStringphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pemStringphp php=php php$valuephp;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_privateKeyphp php=php newphp Zendphp_Cryptphp_Rsaphp_Keyphp_Privatephp(php$thisphp-php>php_pemStringphp,php php$thisphp-php>php_passPhrasephp)php;
php php php php php php php php php php php php php$thisphp-php>php_publicKeyphp php=php php$thisphp-php>php_privateKeyphp-php>getPublicKeyphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Cryptphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_privateKeyphp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_publicKeyphp php=php newphp Zendphp_Cryptphp_Rsaphp_Keyphp_Publicphp(php$thisphp-php>php_pemStringphp)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp setPemPathphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pemPathphp php=php php$valuephp;
php php php php php php php php php$thisphp-php>setPemStringphp(filephp_getphp_contentsphp(php$thisphp-php>php_pemPathphp)php)php;
php php php php php}

php php php php publicphp functionphp setCertificateStringphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_certificateStringphp php=php php$valuephp;
php php php php php php php php php$thisphp-php>php_publicKeyphp php=php newphp Zendphp_Cryptphp_Rsaphp_Keyphp_Publicphp(php$thisphp-php>php_certificateStringphp,php php$thisphp-php>php_passPhrasephp)php;
php php php php php}

php php php php publicphp functionphp setCertificatePathphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_certificatePathphp php=php php$valuephp;
php php php php php php php php php$thisphp-php>setCertificateStringphp(filephp_getphp_contentsphp(php$thisphp-php>php_certificatePathphp)php)php;
php php php php php}

php php php php publicphp functionphp setHashAlgorithmphp(php$namephp)
php php php php php{
php php php php php php php php switchphp php(strtolowerphp(php$namephp)php)php php{
php php php php php php php php php php php php casephp php'mdphp2php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_hashAlgorithmphp php=php OPENSSLphp_ALGOphp_MDphp2php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'mdphp4php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_hashAlgorithmphp php=php OPENSSLphp_ALGOphp_MDphp4php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'mdphp5php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_hashAlgorithmphp php=php OPENSSLphp_ALGOphp_MDphp5php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'shaphp1php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_hashAlgorithmphp php=php OPENSSLphp_ALGOphp_SHAphp1php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'dssphp1php'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_hashAlgorithmphp php=php OPENSSLphp_ALGOphp_DSSphp1php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPemStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pemStringphp;
php php php php php}

php php php php publicphp functionphp getPemPathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pemPathphp;
php php php php php}

php php php php publicphp functionphp getCertificateStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_certificateStringphp;
php php php php php}

php php php php publicphp functionphp getCertificatePathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_certificatePathphp;
php php php php php}

php php php php publicphp functionphp getHashAlgorithmphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_hashAlgorithmphp;
php php php php php}

php php php php protectedphp functionphp php_parseConfigArgsphp(arrayphp php$configphp php=php nullphp)
php php php php php{
php php php php php php php php php$configsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(issetphp(php$configphp[php'privateKeyBitsphp'php]php)php)php php{
php php php php php php php php php php php php php$configsphp[php'privatephp_keyphp_bitsphp'php]php php=php php$configphp[php'privateKeyBitsphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$configsphp)php)php php{
php php php php php php php php php php php php returnphp php$configsphp;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php}
