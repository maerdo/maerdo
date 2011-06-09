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
php php*php php@versionphp php php php php$Idphp:php Opensslphp.phpphp php2php1php2php1php2php php2php0php1php0php-php0php2php-php2php7php php1php7php:php3php3php:php2php7Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Encryptphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Encryptphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Encryptionphp adapterphp forphp openssl
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Encryptphp_Opensslphp implementsphp Zendphp_Filterphp_Encryptphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Definitionsphp forphp encryption
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'publicphp'php php php php=php>php publicphp keys
php php php php php php*php php php php php php'privatephp'php php php=php>php privatephp keys
php php php php php php*php php php php php php'envelopephp'php php=php>php resultingphp envelopephp keys
php php php php php php*php php)
php php php php php php*php/
php php php php protectedphp php$php_keysphp php=php arrayphp(
php php php php php php php php php'publicphp'php php php php=php>php arrayphp(php)php,
php php php php php php php php php'privatephp'php php php=php>php arrayphp(php)php,
php php php php php php php php php'envelopephp'php php=php>php arrayphp(php)
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp passphrase
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_passphrasephp;

php php php php php/php*php*
php php php php php php*php Internalphp compression
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_compressionphp;

php php php php php/php*php*
php php php php php php*php Internalphp createphp package
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_packagephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*php Availablephp options
php php php php php php*php php php php'publicphp'php php php php php php php=php>php publicphp key
php php php php php php*php php php php'privatephp'php php php php php php=php>php privatephp key
php php php php php php*php php php php'envelopephp'php php php php php=php>php envelopephp key
php php php php php php*php php php php'passphrasephp'php php php=php>php passphrase
php php php php php php*php php php php'compressionphp'php php=php>php compressphp valuephp withphp thisphp compressionphp adapter
php php php php php php*php php php php'packagephp'php php php php php php=php>php packphp envelopephp keysphp intophp encryptedphp stringphp,php simplifiesphp decryption
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$optionsphp Optionsphp forphp thisphp adapter
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'opensslphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp filterphp needsphp thephp opensslphp extensionphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'publicphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'passphrasephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setPassphrasephp(php$optionsphp[php'passphrasephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'passphrasephp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'compressionphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCompressionphp(php$optionsphp[php'compressionphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'compressphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'packagephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setPackagephp(php$optionsphp[php'packagephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'packagephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setKeysphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp encryptionphp keys
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$keysphp Keyphp withphp typephp association
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Openssl
php php php php php php*php/
php php php php protectedphp functionphp php_setKeysphp(php$keysphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$keysphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Invalidphp optionsphp argumentphp providedphp tophp filterphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$keysphp asphp php$typephp php=php>php php$keyphp)php php{
php php php php php php php php php php php php ifphp php(isphp_filephp(php$keyphp)php andphp isphp_readablephp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php$filephp php=php fopenphp(php$keyphp,php php'rphp'php)php;
php php php php php php php php php php php php php php php php php$certphp php=php freadphp(php$filephp,php php8php1php9php2php)php;
php php php php php php php php php php php php php php php php fclosephp(php$filephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$certphp php=php php$keyphp;
php php php php php php php php php php php php php php php php php$keyphp php php=php countphp(php$thisphp-php>php_keysphp[php$typephp]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php casephp php'publicphp'php:
php php php php php php php php php php php php php php php php php php php php php$testphp php=php opensslphp_pkeyphp_getphp_publicphp(php$certphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$testphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Publicphp keyphp php'php{php$certphp}php'php notphp validphp"php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php opensslphp_freephp_keyphp(php$testphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_keysphp[php'publicphp'php]php[php$keyphp]php php=php php$certphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'privatephp'php:
php php php php php php php php php php php php php php php php php php php php php$testphp php=php opensslphp_pkeyphp_getphp_privatephp(php$certphp,php php$thisphp-php>php_passphrasephp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$testphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Privatephp keyphp php'php{php$certphp}php'php notphp validphp"php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php opensslphp_freephp_keyphp(php$testphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_keysphp[php'privatephp'php]php[php$keyphp]php php=php php$certphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'envelopephp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_keysphp[php'envelopephp'php]php[php$keyphp]php php=php php$certphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp publicphp keys
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPublicKeyphp(php)
php php php php php{
php php php php php php php php php$keyphp php=php php$thisphp-php>php_keysphp[php'publicphp'php]php;
php php php php php php php php returnphp php$keyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp publicphp keys
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$keyphp Publicphp keys
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Openssl
php php php php php php*php/
php php php php publicphp functionphp setPublicKeyphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$keyphp)php)php php{
php php php php php php php php php php php php foreachphp(php$keyphp asphp php$typephp php=php>php php$optionphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$typephp php!php=php=php php'publicphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp[php'publicphp'php]php php=php php$optionphp;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$keyphp[php$typephp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$keyphp php=php arrayphp(php'publicphp'php php=php>php php$keyphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_setKeysphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp privatephp keys
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPrivateKeyphp(php)
php php php php php{
php php php php php php php php php$keyphp php=php php$thisphp-php>php_keysphp[php'privatephp'php]php;
php php php php php php php php returnphp php$keyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp privatephp keys
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$keyphp Privatephp key
php php php php php php*php php@paramphp php stringphp php$passphrase
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Openssl
php php php php php php*php/
php php php php publicphp functionphp setPrivateKeyphp(php$keyphp,php php$passphrasephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$keyphp)php)php php{
php php php php php php php php php php php php foreachphp(php$keyphp asphp php$typephp php=php>php php$optionphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$typephp php!php=php=php php'privatephp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp[php'privatephp'php]php php=php php$optionphp;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$keyphp[php$typephp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$keyphp php=php arrayphp(php'privatephp'php php=php>php php$keyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$passphrasephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setPassphrasephp(php$passphrasephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_setKeysphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp envelopephp keys
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getEnvelopeKeyphp(php)
php php php php php{
php php php php php php php php php$keyphp php=php php$thisphp-php>php_keysphp[php'envelopephp'php]php;
php php php php php php php php returnphp php$keyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp envelopephp keys
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$optionsphp Envelopephp keys
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Openssl
php php php php php php*php/
php php php php publicphp functionphp setEnvelopeKeyphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$keyphp)php)php php{
php php php php php php php php php php php php foreachphp(php$keyphp asphp php$typephp php=php>php php$optionphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$typephp php!php=php=php php'envelopephp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$keyphp[php'envelopephp'php]php php=php php$optionphp;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$keyphp[php$typephp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$keyphp php=php arrayphp(php'envelopephp'php php=php>php php$keyphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_setKeysphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp passphrase
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPassphrasephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_passphrasephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp passphrase
php php php php php php*
php php php php php php*php php@paramphp stringphp php$passphrase
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Openssl
php php php php php php*php/
php php php php publicphp functionphp setPassphrasephp(php$passphrasephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_passphrasephp php=php php$passphrasephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp compression
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getCompressionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_compressionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp internalphp compressionphp forphp valuesphp tophp encrypt
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$compression
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Openssl
php php php php php php*php/
php php php php publicphp functionphp setCompressionphp(php$compressionphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$thisphp-php>php_compressionphp)php)php php{
php php php php php php php php php php php php php$compressionphp php=php arrayphp(php'adapterphp'php php=php>php php$compressionphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_compressionphp php=php php$compressionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp headerphp shouldphp bephp packaged
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getPackagephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_packagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp ifphp thephp envelopephp keysphp shouldphp bephp includedphp inphp thephp encryptedphp value
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$package
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Openssl
php php php php php php*php/
php php php php publicphp functionphp setPackagephp(php$packagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_packagephp php=php php(booleanphp)php php$packagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encryptsphp php$valuephp withphp thephp definedphp settings
php php php php php php*php Notephp thatphp youphp alsophp needphp thephp php"encryptedphp"php keysphp tophp bephp ablephp tophp decrypt
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Contentphp tophp encrypt
php php php php php php*php php@returnphp stringphp Thephp encryptedphp content
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp encryptphp(php$valuephp)
php php php php php{
php php php php php php php php php$encryptedphp php php php php php=php arrayphp(php)php;
php php php php php php php php php$encryptedkeysphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_keysphp[php'publicphp'php]php)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Opensslphp canphp notphp encryptphp withoutphp publicphp keysphp'php)php;
php php php php php php php php php}

php php php php php php php php php$keysphp php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$fingerprintsphp php=php arrayphp(php)php;
php php php php php php php php php$countphp php php php php php php php php=php php-php1php;
php php php php php php php php foreachphp(php$thisphp-php>php_keysphp[php'publicphp'php]php asphp php$keyphp php=php>php php$certphp)php php{
php php php php php php php php php php php php php$keysphp[php$keyphp]php php=php opensslphp_pkeyphp_getphp_publicphp(php$certphp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_packagephp)php php{
php php php php php php php php php php php php php php php php php$detailsphp php=php opensslphp_pkeyphp_getphp_detailsphp(php$keysphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php ifphp php(php$detailsphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$detailsphp php=php arrayphp(php'keyphp'php php=php>php php'ZendFrameworkphp'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php+php+php$countphp;
php php php php php php php php php php php php php php php php php$fingerprintsphp[php$countphp]php php=php mdphp5php(php$detailsphp[php'keyphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php compressphp priorphp tophp encryption
php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_compressionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Compressphp.phpphp'php;
php php php php php php php php php php php php php$compressphp php=php newphp Zendphp_Filterphp_Compressphp(php$thisphp-php>php_compressionphp)php;
php php php php php php php php php php php php php$valuephp php php php php=php php$compressphp-php>filterphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$cryptphp php php=php opensslphp_sealphp(php$valuephp,php php$encryptedphp,php php$encryptedkeysphp,php php$keysphp)php;
php php php php php php php php foreachphp php(php$keysphp asphp php$keyphp)php php{
php php php php php php php php php php php php opensslphp_freephp_keyphp(php$keyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$cryptphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Opensslphp wasphp notphp ablephp tophp encryptphp yourphp contentphp withphp thephp givenphp optionsphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_keysphp[php'envelopephp'php]php php=php php$encryptedkeysphp;

php php php php php php php php php/php/php Packphp dataphp andphp envelopephp keysphp intophp singlephp string
php php php php php php php php ifphp php(php$thisphp-php>php_packagephp)php php{
php php php php php php php php php php php php php$headerphp php=php packphp(php'nphp'php,php countphp(php$thisphp-php>php_keysphp[php'envelopephp'php]php)php)php;
php php php php php php php php php php php php foreachphp(php$thisphp-php>php_keysphp[php'envelopephp'php]php asphp php$keyphp php=php>php php$envKeyphp)php php{
php php php php php php php php php php php php php php php php php$headerphp php.php=php packphp(php'Hphp3php2nphp'php,php php$fingerprintsphp[php$keyphp]php,php strlenphp(php$envKeyphp)php)php php.php php$envKeyphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$encryptedphp php=php php$headerphp php.php php$encryptedphp;
php php php php php php php php php}

php php php php php php php php returnphp php$encryptedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Decryptsphp php$valuephp withphp thephp definedphp settings
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Contentphp tophp decrypt
php php php php php php*php php@returnphp stringphp Thephp decryptedphp content
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp decryptphp(php$valuephp)
php php php php php{
php php php php php php php php php$decryptedphp php=php php"php"php;
php php php php php php php php php$envelopephp php php=php currentphp(php$thisphp-php>getEnvelopeKeyphp(php)php)php;

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_keysphp[php'privatephp'php]php)php php!php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Pleasephp givephp aphp privatephp keyphp forphp decryptionphp withphp Opensslphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_packagephp php&php&php emptyphp(php$envelopephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Pleasephp givephp aphp envelopephp keyphp forphp decryptionphp withphp Opensslphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp(php$thisphp-php>php_keysphp[php'privatephp'php]php asphp php$keyphp php=php>php php$certphp)php php{
php php php php php php php php php php php php php$keysphp php=php opensslphp_pkeyphp_getphp_privatephp(php$certphp,php php$thisphp-php>getPassphrasephp(php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_packagephp)php php{
php php php php php php php php php php php php php$detailsphp php=php opensslphp_pkeyphp_getphp_detailsphp(php$keysphp)php;
php php php php php php php php php php php php ifphp php(php$detailsphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$fingerprintphp php=php mdphp5php(php$detailsphp[php'keyphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$fingerprintphp php=php mdphp5php(php"ZendFrameworkphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$countphp php=php unpackphp(php'ncountphp'php,php php$valuephp)php;
php php php php php php php php php php php php php$countphp php=php php$countphp[php'countphp'php]php;
php php php php php php php php php php php php php$lengthphp php php=php php2php;
php php php php php php php php php php php php forphp(php$iphp php=php php$countphp;php php$iphp php>php php0php;php php-php-php$iphp)php php{
php php php php php php php php php php php php php php php php php$headerphp php=php unpackphp(php'Hphp3php2printphp/nsizephp'php,php substrphp(php$valuephp,php php$lengthphp,php php1php8php)php)php;
php php php php php php php php php php php php php php php php php$lengthphp php php+php=php php1php8php;
php php php php php php php php php php php php php php php php ifphp php(php$headerphp[php'printphp'php]php php=php=php php$fingerprintphp)php php{
php php php php php php php php php php php php php php php php php php php php php$envelopephp php=php substrphp(php$valuephp,php php$lengthphp,php php$headerphp[php'sizephp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$lengthphp php+php=php php$headerphp[php'sizephp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php remainderphp ofphp stringphp isphp thephp valuephp tophp decrypt
php php php php php php php php php php php php php$valuephp php=php substrphp(php$valuephp,php php$lengthphp)php;
php php php php php php php php php}

php php php php php php php php php$cryptphp php php=php opensslphp_openphp(php$valuephp,php php$decryptedphp,php php$envelopephp,php php$keysphp)php;
php php php php php php php php opensslphp_freephp_keyphp(php$keysphp)php;

php php php php php php php php ifphp php(php$cryptphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Opensslphp wasphp notphp ablephp tophp decryptphp youphp contentphp withphp thephp givenphp optionsphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php decompressphp afterphp decryption
php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_compressionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Decompressphp.phpphp'php;
php php php php php php php php php php php php php$decompressphp php=php newphp Zendphp_Filterphp_Decompressphp(php$thisphp-php>php_compressionphp)php;
php php php php php php php php php php php php php$decryptedphp php php=php php$decompressphp-php>filterphp(php$decryptedphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$decryptedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php'Opensslphp'php;
php php php php php}
php}
