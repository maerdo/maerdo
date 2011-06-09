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
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzurephp_Storage
php php*php php@subpackagephp Blob
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/todophp php php php php namephp_todo
php php*php php@versionphp php php php php$Idphp:php Streamphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blob
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp/Blobphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Exceptionphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzurephp_Storage
php php*php php@subpackagephp Blob
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blobphp_Stream
php{
php php php php php/php*php*
php php php php php php*php Currentphp filephp name
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_fileNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Temporaryphp filephp name
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_temporaryFileNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Temporaryphp filephp handle
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php privatephp php$php_temporaryFileHandlephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Blobphp storagephp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blob
php php php php php php*php/
php php php php privatephp php$php_storageClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Writephp modephp?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_writeModephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp blobs
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_blobsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Retrievephp storagephp clientphp forphp thisphp streamphp type
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blob
php php php php php php*php/
php php php php protectedphp functionphp php_getStorageClientphp(php$pathphp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_storageClientphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$urlphp php=php explodephp(php'php:php'php,php php$pathphp)php;
php php php php php php php php php php php php ifphp php(php!php$urlphp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Couldphp notphp parsephp pathphp php"php'php php.php php$pathphp php.php php'php"php.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_storageClientphp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp_Blobphp:php:getWrapperClientphp(php$urlphp[php0php]php)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_storageClientphp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Nophp storagephp clientphp registeredphp forphp streamphp typephp php"php'php php.php php$urlphp[php0php]php php.php php'php:php/php/php"php.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_storageClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractphp containerphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getContainerNamephp(php$pathphp)
php php php php php{
php php php php php php php php php$urlphp php=php parsephp_urlphp(php$pathphp)php;
php php php php php php php php ifphp php(php$urlphp[php'hostphp'php]php)php php{
php php php php php php php php php php php php returnphp php$urlphp[php'hostphp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractphp filephp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getFileNamephp(php$pathphp)
php php php php php{
php php php php php php php php php$urlphp php=php parsephp_urlphp(php$pathphp)php;
php php php php php php php php ifphp php(php$urlphp[php'hostphp'php]php)php php{
php php php php php php php php php php php php php$fileNamephp php=php issetphp(php$urlphp[php'pathphp'php]php)php php?php php$urlphp[php'pathphp'php]php php:php php$urlphp[php'hostphp'php]php;
php php php php php php php php php php php php ifphp php(strposphp(php$fileNamephp,php php'php/php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$fileNamephp php=php substrphp(php$fileNamephp,php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$fileNamephp;
php php php php php php php php php}

php php php php php php php php returnphp php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Openphp thephp stream
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$path
php php php php php php*php php@paramphp php stringphp php php$mode
php php php php php php*php php@paramphp php integerphp php$options
php php php php php php*php php@paramphp php stringphp php php$openedphp_path
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp streamphp_openphp(php$pathphp,php php$modephp,php php$optionsphp,php php$openedphp_pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fileNamephp php=php php$pathphp;
php php php php php php php php php$thisphp-php>php_temporaryFileNamephp php=php tempnamphp(sysphp_getphp_tempphp_dirphp(php)php,php php'azurephp'php)php;

php php php php php php php php php/php/php Checkphp thephp filephp canphp bephp opened
php php php php php php php php php$fhphp php=php php@fopenphp(php$thisphp-php>php_temporaryFileNamephp,php php$modephp)php;
php php php php php php php php ifphp php(php$fhphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php fclosephp(php$fhphp)php;

php php php php php php php php php/php/php Writephp modephp?
php php php php php php php php ifphp php(strpbrkphp(php$modephp,php php'waxphp+php'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_writeModephp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_writeModephp php=php falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp readphp/appendphp,php fetchphp thephp file
php php php php php php php php ifphp php(php!php$thisphp-php>php_writeModephp php|php|php strpbrkphp(php$modephp,php php'raphp+php'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$thisphp-php>php_fileNamephp)php-php>getBlobphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$thisphp-php>php_fileNamephp)php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$thisphp-php>php_fileNamephp)php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_temporaryFileName
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Openphp temporaryphp filephp handle
php php php php php php php php php$thisphp-php>php_temporaryFileHandlephp php=php fopenphp(php$thisphp-php>php_temporaryFileNamephp,php php$modephp)php;

php php php php php php php php php/php/php Okphp!
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp stream
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp streamphp_closephp(php)
php php php php php{
php php php php php php php php php@fclosephp(php$thisphp-php>php_temporaryFileHandlephp)php;

php php php php php php php php php/php/php Uploadphp thephp filephp?
php php php php php php php php ifphp php(php$thisphp-php>php_writeModephp)php php{
php php php php php php php php php php php php php/php/php Makephp surephp thephp containerphp exists
php php php php php php php php php php php php php$containerExistsphp php=php php$thisphp-php>php_getStorageClientphp(php$thisphp-php>php_fileNamephp)php-php>containerExistsphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$thisphp-php>php_fileNamephp)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php ifphp php(php!php$containerExistsphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$thisphp-php>php_fileNamephp)php-php>createContainerphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$thisphp-php>php_fileNamephp)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Uploadphp thephp file
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$thisphp-php>php_fileNamephp)php-php>putBlobphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$thisphp-php>php_fileNamephp)php,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$thisphp-php>php_fileNamephp)php,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_temporaryFileName
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$exphp)php php{
php php php php php php php php php php php php php php php php php@unlinkphp(php$thisphp-php>php_temporaryFileNamephp)php;
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_storageClientphp)php;

php php php php php php php php php php php php php php php php throwphp php$exphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php@unlinkphp(php$thisphp-php>php_temporaryFileNamephp)php;
php php php php php php php php unsetphp(php$thisphp-php>php_storageClientphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp fromphp thephp stream
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$count
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp streamphp_readphp(php$countphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_temporaryFileHandlephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp freadphp(php$thisphp-php>php_temporaryFileHandlephp,php php$countphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp tophp thephp stream
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$data
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp streamphp_writephp(php$dataphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_temporaryFileHandlephp)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}

php php php php php php php php php$lenphp php=php strlenphp(php$dataphp)php;
php php php php php php php php fwritephp(php$thisphp-php>php_temporaryFileHandlephp,php php$dataphp,php php$lenphp)php;
php php php php php php php php returnphp php$lenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Endphp ofphp thephp streamphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp streamphp_eofphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_temporaryFileHandlephp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp feofphp(php$thisphp-php>php_temporaryFileHandlephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whatphp isphp thephp currentphp readphp/writephp positionphp ofphp thephp streamphp?
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp streamphp_tellphp(php)
php php php php php{
php php php php php php php php returnphp ftellphp(php$thisphp-php>php_temporaryFileHandlephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatephp thephp readphp/writephp positionphp ofphp thephp stream
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$offset
php php php php php php*php php@paramphp php integerphp php$whence
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp streamphp_seekphp(php$offsetphp,php php$whencephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_temporaryFileHandlephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php(fseekphp(php$thisphp-php>php_temporaryFileHandlephp,php php$offsetphp,php php$whencephp)php php=php=php=php php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Flushphp currentphp cachedphp streamphp dataphp tophp storage
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp streamphp_flushphp(php)
php php php php php{
php php php php php php php php php$resultphp php=php fflushphp(php$thisphp-php>php_temporaryFileHandlephp)php;

php php php php php php php php php php/php/php Uploadphp thephp filephp?
php php php php php php php php ifphp php(php$thisphp-php>php_writeModephp)php php{
php php php php php php php php php php php php php/php/php Makephp surephp thephp containerphp exists
php php php php php php php php php php php php php$containerExistsphp php=php php$thisphp-php>php_getStorageClientphp(php$thisphp-php>php_fileNamephp)php-php>containerExistsphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$thisphp-php>php_fileNamephp)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php ifphp php(php!php$containerExistsphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$thisphp-php>php_fileNamephp)php-php>createContainerphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$thisphp-php>php_fileNamephp)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Uploadphp thephp file
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$thisphp-php>php_fileNamephp)php-php>putBlobphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$thisphp-php>php_fileNamephp)php,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$thisphp-php>php_fileNamephp)php,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_temporaryFileName
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$exphp)php php{
php php php php php php php php php php php php php php php php php@unlinkphp(php$thisphp-php>php_temporaryFileNamephp)php;
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_storageClientphp)php;

php php php php php php php php php php php php php php php php throwphp php$exphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp dataphp arrayphp ofphp streamphp variables
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp streamphp_statphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_temporaryFileHandlephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$statphp php=php arrayphp(php)php;
php php php php php php php php php$statphp[php'devphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'inophp'php]php php=php php0php;
php php php php php php php php php$statphp[php'modephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'nlinkphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'uidphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'gidphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'rdevphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'sizephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'atimephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'mtimephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'ctimephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'blksizephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'blocksphp'php]php php=php php0php;

php php php php php php php php php$infophp php=php nullphp;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$infophp php=php php$thisphp-php>php_getStorageClientphp(php$thisphp-php>php_fileNamephp)php-php>getBlobInstancephp(
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$thisphp-php>php_fileNamephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$thisphp-php>php_fileNamephp)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$exphp)php php{
php php php php php php php php php php php php php/php/php Unexistingphp filephp.php.php.
php php php php php php php php php}
php php php php php php php php ifphp php(php$infophp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$statphp[php'sizephp'php]php php php=php php$infophp-php>Sizephp;
php php php php php php php php php php php php php$statphp[php'atimephp'php]php php=php timephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$statphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp deletephp thephp item
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp unlinkphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$pathphp)php-php>deleteBlobphp(
php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$pathphp)php,
php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$pathphp)
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp renamephp thephp item
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$pathphp_from
php php php php php php*php php@paramphp php stringphp php php$pathphp_to
php php php php php php*php php@returnphp booleanphp False
php php php php php php*php/
php php php php publicphp functionphp renamephp(php$pathphp_fromphp,php php$pathphp_tophp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_getContainerNamephp(php$pathphp_fromphp)php php!php=php php$thisphp-php>php_getContainerNamephp(php$pathphp_tophp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Containerphp namephp canphp notphp bephp changedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_getFileNamephp(php$pathphp_fromphp)php php=php=php php$thisphp-php>php_getContainerNamephp(php$pathphp_tophp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$pathphp_fromphp)php-php>copyBlobphp(
php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$pathphp_fromphp)php,
php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$pathphp_fromphp)php,
php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$pathphp_tophp)php,
php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$pathphp_tophp)
php php php php php php php php php)php;
php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$pathphp_fromphp)php-php>deleteBlobphp(
php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$pathphp_fromphp)php,
php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$pathphp_fromphp)
php php php php php php php php php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp arrayphp ofphp URLphp variables
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php integerphp php$flags
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp urlphp_statphp(php$pathphp,php php$flagsphp)
php php php php php{
php php php php php php php php php$statphp php=php arrayphp(php)php;
php php php php php php php php php$statphp[php'devphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'inophp'php]php php=php php0php;
php php php php php php php php php$statphp[php'modephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'nlinkphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'uidphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'gidphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'rdevphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'sizephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'atimephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'mtimephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'ctimephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'blksizephp'php]php php=php php0php;
php php php php php php php php php$statphp[php'blocksphp'php]php php=php php0php;

php php php php php php php php php$infophp php=php nullphp;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$infophp php=php php$thisphp-php>php_getStorageClientphp(php$pathphp)php-php>getBlobInstancephp(
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$pathphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getFileNamephp(php$pathphp)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$exphp)php php{
php php php php php php php php php php php php php/php/php Unexistingphp filephp.php.php.
php php php php php php php php php}
php php php php php php php php ifphp php(php$infophp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$statphp[php'sizephp'php]php php php=php php$infophp-php>Sizephp;
php php php php php php php php php php php php php$statphp[php'atimephp'php]php php=php timephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$statphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp directory
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$path
php php php php php php*php php@paramphp php integerphp php$mode
php php php php php php*php php@paramphp php integerphp php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp mkdirphp(php$pathphp,php php$modephp,php php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_getContainerNamephp(php$pathphp)php php=php=php php$thisphp-php>php_getFileNamephp(php$pathphp)php)php php{
php php php php php php php php php php php php php/php/php Createphp container
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$pathphp)php-php>createContainerphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$pathphp)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$exphp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'mkdirphp(php)php withphp multiplephp levelsphp isphp notphp supportedphp onphp Windowsphp Azurephp Blobphp Storagephp.php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp directory
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$path
php php php php php php*php php@paramphp php integerphp php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp rmdirphp(php$pathphp,php php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_getContainerNamephp(php$pathphp)php php=php=php php$thisphp-php>php_getFileNamephp(php$pathphp)php)php php{
php php php php php php php php php php php php php/php/php Deletephp container
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_getStorageClientphp(php$pathphp)php-php>deleteContainerphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$pathphp)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Servicephp_WindowsAzurephp_Exceptionphp php$exphp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'rmdirphp(php)php withphp multiplephp levelsphp isphp notphp supportedphp onphp Windowsphp Azurephp Blobphp Storagephp.php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp openphp aphp directory
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php integerphp php$options
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp dirphp_opendirphp(php$pathphp,php php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_blobsphp php=php php$thisphp-php>php_getStorageClientphp(php$pathphp)php-php>listBlobsphp(
php php php php php php php php php php php php php$thisphp-php>php_getContainerNamephp(php$pathphp)
php php php php php php php php php)php;
php php php php php php php php returnphp isphp_arrayphp(php$thisphp-php>php_blobsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp nextphp filenamephp inphp thephp directory
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp dirphp_readdirphp(php)
php php php php php{
php php php php php php php php php$objectphp php=php currentphp(php$thisphp-php>php_blobsphp)php;
php php php php php php php php ifphp php(php$objectphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php nextphp(php$thisphp-php>php_blobsphp)php;
php php php php php php php php php php php php returnphp php$objectphp-php>Namephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp thephp directoryphp pointer
php php php php php php*
php php php php php php*php php@returnphp booleanphp True
php php php php php php*php/
php php php php publicphp functionphp dirphp_rewinddirphp(php)
php php php php php{
php php php php php php php php resetphp(php$thisphp-php>php_blobsphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp aphp directory
php php php php php php*
php php php php php php*php php@returnphp booleanphp True
php php php php php php*php/
php php php php publicphp functionphp dirphp_closedirphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_blobsphp php=php nullphp;
php php php php php php php php returnphp truephp;
php php php php php}
php}
