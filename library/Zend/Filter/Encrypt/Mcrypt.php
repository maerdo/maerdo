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
php php*php php@versionphp php php php php$Idphp:php Mcryptphp.phpphp php2php1php2php1php2php php2php0php1php0php-php0php2php-php2php7php php1php7php:php3php3php:php2php7Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Encryptphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Encryptphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Encryptionphp adapterphp forphp mcrypt
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Encryptphp_Mcryptphp implementsphp Zendphp_Filterphp_Encryptphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Definitionsphp forphp encryption
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'keyphp'php php=php>php encryptionphp keyphp string
php php php php php php*php php php php php php'algorithmphp'php php=php>php algorithmphp tophp use
php php php php php php*php php php php php php'algorithmphp_directoryphp'php php=php>php directoryphp wherephp tophp findphp thephp algorithm
php php php php php php*php php php php php php'modephp'php php=php>php encryptionphp modephp tophp use
php php php php php php*php php php php php php'modedirectoryphp'php php=php>php directoryphp wherephp tophp findphp thephp mode
php php php php php php*php php)
php php php php php php*php/
php php php php protectedphp php$php_encryptionphp php=php arrayphp(
php php php php php php php php php'keyphp'php php php php php php php php php php php php php php php php php php=php>php php'ZendFrameworkphp'php,
php php php php php php php php php'algorithmphp'php php php php php php php php php php php php=php>php php'blowfishphp'php,
php php php php php php php php php'algorithmphp_directoryphp'php php=php>php php'php'php,
php php php php php php php php php'modephp'php php php php php php php php php php php php php php php php php=php>php php'cbcphp'php,
php php php php php php php php php'modephp_directoryphp'php php php php php php php=php>php php'php'php,
php php php php php php php php php'vectorphp'php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'saltphp'php php php php php php php php php php php php php php php php php=php>php false
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp compression
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_compressionphp;

php php php php protectedphp staticphp php$php_srandCalledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp|Zendphp_Configphp php$optionsphp Cryptionphp Options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'mcryptphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thisphp filterphp needsphp thephp mcryptphp extensionphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'keyphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Invalidphp optionsphp argumentphp providedphp tophp filterphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'compressionphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCompressionphp(php$optionsphp[php'compressionphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'compressphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setEncryptionphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp encryptionphp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getEncryptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encryptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp newphp encryptionphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$optionsphp Encryptionphp options
php php php php php php*php php@returnphp Zendphp_Filterphp_Filephp_Encryption
php php php php php php*php/
php php php php publicphp functionphp setEncryptionphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'keyphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Invalidphp optionsphp argumentphp providedphp tophp filterphp'php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php php$optionsphp php+php php$thisphp-php>getEncryptionphp(php)php;
php php php php php php php php php$algorithmsphp php=php mcryptphp_listphp_algorithmsphp(php$optionsphp[php'algorithmphp_directoryphp'php]php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$optionsphp[php'algorithmphp'php]php,php php$algorithmsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Thephp algorithmphp php'php{php$optionsphp[php'algorithmphp'php]php}php'php isphp notphp supportedphp"php)php;
php php php php php php php php php}

php php php php php php php php php$modesphp php=php mcryptphp_listphp_modesphp(php$optionsphp[php'modephp_directoryphp'php]php)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$optionsphp[php'modephp'php]php,php php$modesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Thephp modephp php'php{php$optionsphp[php'modephp'php]php}php'php isphp notphp supportedphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!mcryptphp_modulephp_selfphp_testphp(php$optionsphp[php'algorithmphp'php]php,php php$optionsphp[php'algorithmphp_directoryphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thephp givenphp algorithmphp canphp notphp bephp usedphp duephp anphp internalphp mcryptphp problemphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'vectorphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'vectorphp'php]php php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_encryptionphp php=php php$optionsphp;
php php php php php php php php php$thisphp-php>setVectorphp(php$optionsphp[php'vectorphp'php]php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp vector
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getVectorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encryptionphp[php'vectorphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp initializationphp vector
php php php php php php*
php php php php php php*php php@paramphp stringphp php$vectorphp php(Optionalphp)php Vectorphp tophp set
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Mcrypt
php php php php php php*php/
php php php php publicphp functionphp setVectorphp(php$vectorphp php=php nullphp)
php php php php php{
php php php php php php php php php$cipherphp php=php php$thisphp-php>php_openCipherphp(php)php;
php php php php php php php php php$sizephp php php php=php mcryptphp_encphp_getphp_ivphp_sizephp(php$cipherphp)php;
php php php php php php php php ifphp php(emptyphp(php$vectorphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_srandphp(php)php;
php php php php php php php php php php php php ifphp php(strtoupperphp(substrphp(PHPphp_OSphp,php php0php,php php3php)php)php php=php=php=php php'WINphp'php php&php&php versionphp_comparephp(PHPphp_VERSIONphp,php php'php5php.php3php.php0php'php,php php'<php'php)php)php php{
php php php php php php php php php php php php php php php php php$methodphp php=php MCRYPTphp_RANDphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(filephp_existsphp(php'php/devphp/urandomphp'php)php php|php|php php(strtoupperphp(substrphp(PHPphp_OSphp,php php0php,php php3php)php)php php=php=php=php php'WINphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$methodphp php=php MCRYPTphp_DEVphp_URANDOMphp;
php php php php php php php php php php php php php php php php php}php elseifphp php(filephp_existsphp(php'php/devphp/randomphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$methodphp php=php MCRYPTphp_DEVphp_RANDOMphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$methodphp php=php MCRYPTphp_RANDphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$vectorphp php=php mcryptphp_createphp_ivphp(php$sizephp,php php$methodphp)php;
php php php php php php php php php}php elsephp ifphp php(strlenphp(php$vectorphp)php php!php=php php$sizephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thephp givenphp vectorphp hasphp aphp wrongphp sizephp forphp thephp setphp algorithmphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_encryptionphp[php'vectorphp'php]php php=php php$vectorphp;
php php php php php php php php php$thisphp-php>php_closeCipherphp(php$cipherphp)php;

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
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Mcrypt
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
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Encryptsphp php$valuephp withphp thephp definedphp settings
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp contentphp tophp encrypt
php php php php php php*php php@returnphp stringphp Thephp encryptedphp content
php php php php php php*php/
php php php php publicphp functionphp encryptphp(php$valuephp)
php php php php php{
php php php php php php php php php/php/php compressphp priorphp tophp encryption
php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_compressionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Compressphp.phpphp'php;
php php php php php php php php php php php php php$compressphp php=php newphp Zendphp_Filterphp_Compressphp(php$thisphp-php>php_compressionphp)php;
php php php php php php php php php php php php php$valuephp php php php php=php php$compressphp-php>filterphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$cipherphp php php=php php$thisphp-php>php_openCipherphp(php)php;
php php php php php php php php php$thisphp-php>php_initCipherphp(php$cipherphp)php;
php php php php php php php php php$encryptedphp php=php mcryptphp_genericphp(php$cipherphp,php php$valuephp)php;
php php php php php php php php mcryptphp_genericphp_deinitphp(php$cipherphp)php;
php php php php php php php php php$thisphp-php>php_closeCipherphp(php$cipherphp)php;

php php php php php php php php returnphp php$encryptedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Decryptsphp php$valuephp withphp thephp definedphp settings
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Contentphp tophp decrypt
php php php php php php*php php@returnphp stringphp Thephp decryptedphp content
php php php php php php*php/
php php php php publicphp functionphp decryptphp(php$valuephp)
php php php php php{
php php php php php php php php php$cipherphp php=php php$thisphp-php>php_openCipherphp(php)php;
php php php php php php php php php$thisphp-php>php_initCipherphp(php$cipherphp)php;
php php php php php php php php php$decryptedphp php=php mdecryptphp_genericphp(php$cipherphp,php php$valuephp)php;
php php php php php php php php mcryptphp_genericphp_deinitphp(php$cipherphp)php;
php php php php php php php php php$thisphp-php>php_closeCipherphp(php$cipherphp)php;

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
php php php php php php php php returnphp php'Mcryptphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Openphp aphp cipher
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exceptionphp Whenphp thephp cipherphp canphp notphp bephp opened
php php php php php php*php php@returnphp resourcephp Returnsphp thephp openedphp cipher
php php php php php php*php/
php php php php protectedphp functionphp php_openCipherphp(php)
php php php php php{
php php php php php php php php php$cipherphp php=php mcryptphp_modulephp_openphp(
php php php php php php php php php php php php php$thisphp-php>php_encryptionphp[php'algorithmphp'php]php,
php php php php php php php php php php php php php$thisphp-php>php_encryptionphp[php'algorithmphp_directoryphp'php]php,
php php php php php php php php php php php php php$thisphp-php>php_encryptionphp[php'modephp'php]php,
php php php php php php php php php php php php php$thisphp-php>php_encryptionphp[php'modephp_directoryphp'php]php)php;

php php php php php php php php ifphp php(php$cipherphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Mcryptphp canphp notphp bephp openedphp withphp yourphp settingsphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$cipherphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp aphp cipher
php php php php php php*
php php php php php php*php php@paramphp php resourcephp php$cipherphp Cipherphp tophp close
php php php php php php*php php@returnphp Zendphp_Filterphp_Encryptphp_Mcrypt
php php php php php php*php/
php php php php protectedphp functionphp php_closeCipherphp(php$cipherphp)
php php php php php{
php php php php php php php php mcryptphp_modulephp_closephp(php$cipherphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initialisesphp thephp cipherphp withphp thephp setphp key
php php php php php php*
php php php php php php*php php@paramphp php resourcephp php$cipher
php php php php php php*php php@throws
php php php php php php*php php@returnphp resource
php php php php php php*php/
php php php php protectedphp functionphp php_initCipherphp(php$cipherphp)
php php php php php{
php php php php php php php php php$keyphp php=php php$thisphp-php>php_encryptionphp[php'keyphp'php]php;

php php php php php php php php php$keysizesphp php=php mcryptphp_encphp_getphp_supportedphp_keyphp_sizesphp(php$cipherphp)php;
php php php php php php php php ifphp php(emptyphp(php$keysizesphp)php php|php|php php(php$thisphp-php>php_encryptionphp[php'saltphp'php]php php=php=php truephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_srandphp(php)php;
php php php php php php php php php php php php php$keysizephp php=php mcryptphp_encphp_getphp_keyphp_sizephp(php$cipherphp)php;
php php php php php php php php php php php php php$keyphp php php php php php=php substrphp(mdphp5php(php$keyphp)php,php php0php,php php$keysizephp)php;
php php php php php php php php php}php elsephp ifphp php(php!inphp_arrayphp(strlenphp(php$keyphp)php,php php$keysizesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Thephp givenphp keyphp hasphp aphp wrongphp sizephp forphp thephp setphp algorithmphp'php)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php mcryptphp_genericphp_initphp(php$cipherphp,php php$keyphp,php php$thisphp-php>php_encryptionphp[php'vectorphp'php]php)php;
php php php php php php php php ifphp php(php$resultphp <php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Mcryptphp couldphp notphp bephp initializephp withphp thephp givenphp settingphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_srandphp(php)php interception
php php php php php php*
php php php php php php*php php@seephp ZFphp-php8php7php4php2
php php php php php php*php/
php php php php protectedphp functionphp php_srandphp(php)
php php php php php{
php php php php php php php php ifphp php(versionphp_comparephp(PHPphp_VERSIONphp,php php'php5php.php3php.php0php'php,php php'php>php=php'php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!selfphp:php:php$php_srandCalledphp)php php{
php php php php php php php php php php php php srandphp(php(doublephp)php microtimephp(php)php php*php php1php0php0php0php0php0php0php)php;
php php php php php php php php php php php php selfphp:php:php$php_srandCalledphp php=php truephp;
php php php php php php php php php}
php php php php php}
php}
