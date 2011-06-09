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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazonphp_Sphp3
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Streamphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php.phpphp'php;

php/php*php*
php php*php Amazonphp Sphp3php PHPphp streamphp wrapper
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazonphp_Sphp3
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Sphp3php_Stream
php{
php php php php php/php*php*
php php php php php php*php php@varphp booleanphp Writephp thephp bufferphp onphp fflushphp(php)php?
php php php php php php*php/
php php php php privatephp php$php_writeBufferphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp integerphp Currentphp readphp/writephp position
php php php php php php*php/
php php php php privatephp php$php_positionphp php=php php0php;

php php php php php/php*php*
php php php php php php*php php@varphp integerphp Totalphp sizephp ofphp thephp objectphp asphp returnedphp byphp Sphp3php php(Contentphp-lengthphp)
php php php php php php*php/
php php php php privatephp php$php_objectSizephp php=php php0php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Filephp namephp tophp interactphp with
php php php php php php*php/
php php php php privatephp php$php_objectNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Currentphp readphp/writephp buffer
php php php php php php*php/
php php php php privatephp php$php_objectBufferphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Availablephp buckets
php php php php php php*php/
php php php php privatephp php$php_bucketListphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php privatephp php$php_sphp3php php=php nullphp;

php php php php php/php*php*
php php php php php php*php Retrievephp clientphp forphp thisphp streamphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php protectedphp functionphp php_getSphp3Clientphp(php$pathphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_sphp3php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$urlphp php=php explodephp(php'php:php'php,php php$pathphp)php;

php php php php php php php php php php php php ifphp php(php!php$urlphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php"Unablephp tophp parsephp URLphp php$pathphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_sphp3php php=php Zendphp_Servicephp_Amazonphp_Sphp3php:php:getWrapperClientphp(php$urlphp[php0php]php)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_sphp3php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php"Unknownphp clientphp forphp wrapperphp php{php$urlphp[php0php]php}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_sphp3php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractphp objectphp namephp fromphp URL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getNamePartphp(php$pathphp)
php php php php php{
php php php php php php php php php$urlphp php=php parsephp_urlphp(php$pathphp)php;
php php php php php php php php ifphp php(php$urlphp[php'hostphp'php]php)php php{
php php php php php php php php php php php php returnphp php!emptyphp(php$urlphp[php'pathphp'php]php)php php?php php$urlphp[php'hostphp'php]php.php$urlphp[php'pathphp'php]php php:php php$urlphp[php'hostphp'php]php;
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
php php php php php php php php php$namephp php=php php$thisphp-php>php_getNamePartphp(php$pathphp)php;
php php php php php php php php php/php/php Ifphp wephp openphp thephp filephp forphp writingphp,php justphp returnphp truephp.php Createphp thephp object
php php php php php php php php php/php/php onphp fflushphp call
php php php php php php php php ifphp php(strpbrkphp(php$modephp,php php'waxphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_objectNamephp php=php php$namephp;
php php php php php php php php php php php php php$thisphp-php>php_objectBufferphp php=php nullphp;
php php php php php php php php php php php php php$thisphp-php>php_objectSizephp php=php php0php;
php php php php php php php php php php php php php$thisphp-php>php_positionphp php=php php0php;
php php php php php php php php php php php php php$thisphp-php>php_writeBufferphp php=php truephp;
php php php php php php php php php php php php php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php php/php/php Otherwisephp,php justphp seephp ifphp thephp filephp existsphp orphp not
php php php php php php php php php php php php php$infophp php=php php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php-php>getInfophp(php$namephp)php;
php php php php php php php php php php php php ifphp php(php$infophp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_objectNamephp php=php php$namephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_objectBufferphp php=php nullphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_objectSizephp php=php php$infophp[php'sizephp'php]php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_positionphp php=php php0php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_writeBufferphp php=php falsephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp stream
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp streamphp_closephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_objectNamephp php=php nullphp;
php php php php php php php php php$thisphp-php>php_objectBufferphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_objectSizephp php=php php0php;
php php php php php php php php php$thisphp-php>php_positionphp php=php php0php;
php php php php php php php php php$thisphp-php>php_writeBufferphp php=php falsephp;
php php php php php php php php unsetphp(php$thisphp-php>php_sphp3php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp fromphp thephp stream
php php php php php php*
php php php php php php*php httpphp:php/php/bugsphp.phpphp.netphp/php2php1php6php4php1php php-php streamphp_readphp(php)php isphp alwaysphp passedphp PHPphp's
php php php php php php*php internalphp readphp bufferphp sizephp php(php8php1php9php2php)php nophp matterphp whatphp isphp passedphp asphp php$count
php php php php php php*php parameterphp tophp freadphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$count
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp streamphp_readphp(php$countphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_objectNamephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php makephp surephp thatphp countphp doesnphp'tphp exceedphp objectphp size
php php php php php php php php ifphp php(php$countphp php+php php$thisphp-php>php_positionphp php>php php$thisphp-php>php_objectSizephp)php php{
php php php php php php php php php php php php php$countphp php=php php$thisphp-php>php_objectSizephp php-php php$thisphp-php>php_positionphp;
php php php php php php php php php}

php php php php php php php php php$rangephp_startphp php=php php$thisphp-php>php_positionphp;
php php php php php php php php php$rangephp_endphp php=php php$thisphp-php>php_positionphp+php$countphp;

php php php php php php php php php/php/php Onlyphp fetchphp morephp dataphp fromphp Sphp3php ifphp wephp havenphp'tphp fetchedphp anyphp dataphp yetphp php(postionphp=php0php)
php php php php php php php php php/php/php ORphp,php thephp rangephp endphp positionphp isphp greaterphp thanphp thephp sizephp ofphp thephp currentphp object
php php php php php php php php php/php/php bufferphp ANDphp ifphp thephp rangephp endphp positionphp isphp lessphp thanphp orphp equalphp tophp thephp objectphp's
php php php php php php php php php/php/php sizephp returnedphp byphp Sphp3
php php php php php php php php ifphp php(php(php$thisphp-php>php_positionphp php=php=php php0php)php php|php|php php(php(php$rangephp_endphp php>php strlenphp(php$thisphp-php>php_objectBufferphp)php)php php&php&php php(php$rangephp_endphp <php=php php$thisphp-php>php_objectSizephp)php)php)php php{

php php php php php php php php php php php php php$headersphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'Rangephp'php php=php>php php"bytesphp=php$rangephp_startphp-php$rangephp_endphp"
php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_sphp3php-php>php_makeRequestphp(php'GETphp'php,php php$thisphp-php>php_objectNamephp,php nullphp,php php$headersphp)php;

php php php php php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php6php)php php{php php/php/php php2php0php6php Partialphp Content
php php php php php php php php php php php php php php php php php$thisphp-php>php_objectBufferphp php.php=php php$responsephp-php>getBodyphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$dataphp php=php substrphp(php$thisphp-php>php_objectBufferphp,php php$thisphp-php>php_positionphp,php php$countphp)php;
php php php php php php php php php$thisphp-php>php_positionphp php+php=php strlenphp(php$dataphp)php;
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp tophp thephp stream
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$data
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp streamphp_writephp(php$dataphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_objectNamephp)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}
php php php php php php php php php$lenphp php=php strlenphp(php$dataphp)php;
php php php php php php php php php$thisphp-php>php_objectBufferphp php.php=php php$dataphp;
php php php php php php php php php$thisphp-php>php_objectSizephp php+php=php php$lenphp;
php php php php php php php php php/php/php TODOphp:php handlephp currentphp positionphp forphp writingphp!
php php php php php php php php returnphp php$lenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Endphp ofphp thephp streamphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp streamphp_eofphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_objectNamephp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp php(php$thisphp-php>php_positionphp php>php=php php$thisphp-php>php_objectSizephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whatphp isphp thephp currentphp readphp/writephp positionphp ofphp thephp stream
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp streamphp_tellphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_positionphp;
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
php php php php php php php php ifphp php(php!php$thisphp-php>php_objectNamephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php switchphp php(php$whencephp)php php{
php php php php php php php php php php php php casephp SEEKphp_CURphp:
php php php php php php php php php php php php php php php php php/php/php Setphp positionphp tophp currentphp locationphp plusphp php$offset
php php php php php php php php php php php php php php php php php$newphp_posphp php=php php$thisphp-php>php_positionphp php+php php$offsetphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp SEEKphp_ENDphp:
php php php php php php php php php php php php php php php php php/php/php Setphp positionphp tophp endphp-ofphp-filephp plusphp php$offset
php php php php php php php php php php php php php php php php php$newphp_posphp php=php php$thisphp-php>php_objectSizephp php+php php$offsetphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp SEEKphp_SETphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php Setphp positionphp equalphp tophp php$offset
php php php php php php php php php php php php php php php php php$newphp_posphp php=php php$offsetphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php php$retphp php=php php(php$newphp_posphp php>php=php php0php php&php&php php$newphp_posphp <php=php php$thisphp-php>php_objectSizephp)php;
php php php php php php php php ifphp php(php$retphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_positionphp php=php php$newphp_posphp;
php php php php php php php php php}
php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Flushphp currentphp cachedphp streamphp dataphp tophp storage
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp streamphp_flushphp(php)
php php php php php{
php php php php php php php php php/php/php Ifphp thephp streamphp wasnphp'tphp openedphp forphp writingphp,php justphp returnphp false
php php php php php php php php ifphp php(php!php$thisphp-php>php_writeBufferphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$retphp php=php php$thisphp-php>php_sphp3php-php>putObjectphp(php$thisphp-php>php_objectNamephp,php php$thisphp-php>php_objectBufferphp)php;

php php php php php php php php php$thisphp-php>php_objectBufferphp php=php nullphp;

php php php php php php php php returnphp php$retphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp dataphp arrayphp ofphp streamphp variables
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp streamphp_statphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_objectNamephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$statphp php=php arrayphp(php)php;
php php php php php php php php php$statphp[php'devphp'php]php php=php php0php;
php php php php php php php php php$statphp[php'inophp'php]php php=php php0php;
php php php php php php php php php$statphp[php'modephp'php]php php=php php0php7php7php7php;
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

php php php php ifphp(php(php$slashphp php=php strchrphp(php$thisphp-php>php_objectNamephp,php php'php/php'php)php)php php=php=php=php falsephp php|php|php php$slashphp php=php=php strlenphp(php$thisphp-php>php_objectNamephp)php-php1php)php php{
php php php php php php php php php/php*php bucketphp php*php/
php php php php php php php php php$statphp[php'modephp'php]php php|php=php php0php4php0php0php0php0php;
php php php php php}php elsephp php{
php php php php php php php php php$statphp[php'modephp'php]php php|php=php php0php1php0php0php0php0php0php;
php php php php php}
php php php php php php php php php php php php$infophp php=php php$thisphp-php>php_sphp3php-php>getInfophp(php$thisphp-php>php_objectNamephp)php;
php php php php php php php php ifphp php(php!emptyphp(php$infophp)php)php php{
php php php php php php php php php php php php php$statphp[php'sizephp'php]php php php=php php$infophp[php'sizephp'php]php;
php php php php php php php php php php php php php$statphp[php'atimephp'php]php php=php timephp(php)php;
php php php php php php php php php php php php php$statphp[php'mtimephp'php]php php=php php$infophp[php'mtimephp'php]php;
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
php php php php php php php php returnphp php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php-php>removeObjectphp(php$thisphp-php>php_getNamePartphp(php$pathphp)php)php;
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
php php php php php php php php php/php/php TODOphp:php Renamingphp isnphp'tphp supportedphp,php alwaysphp returnphp false
php php php php php php php php returnphp falsephp;
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
php php php php php php php php returnphp php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php-php>createBucketphp(parsephp_urlphp(php$pathphp,php PHPphp_URLphp_HOSTphp)php)php;
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
php php php php php php php php returnphp php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php-php>removeBucketphp(parsephp_urlphp(php$pathphp,php PHPphp_URLphp_HOSTphp)php)php;
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

php php php php php php php php ifphp php(pregphp_matchphp(php'php@php^php(php[aphp-zphp0php-php9php+php.php]php|php-php)php+php:php/php/php$php@php'php,php php$pathphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_bucketListphp php=php php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php-php>getBucketsphp(php)php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php php$hostphp php=php parsephp_urlphp(php$pathphp,php PHPphp_URLphp_HOSTphp)php;
php php php php php php php php php php php php php$thisphp-php>php_bucketListphp php=php php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php-php>getObjectsByBucketphp(php$hostphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php(php$thisphp-php>php_bucketListphp php!php=php=php falsephp)php;
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
php php php php php php php php php$statphp[php'modephp'php]php php=php php0php7php7php7php;
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

php php php php php$namephp php=php php$thisphp-php>php_getNamePartphp(php$pathphp)php;
php php php php ifphp(php(php$slashphp php=php strchrphp(php$namephp,php php'php/php'php)php)php php=php=php=php falsephp php|php|php php$slashphp php=php=php strlenphp(php$namephp)php-php1php)php php{
php php php php php php php php php/php*php bucketphp php*php/
php php php php php php php php php$statphp[php'modephp'php]php php|php=php php0php4php0php0php0php0php;
php php php php php}php elsephp php{
php php php php php php php php php$statphp[php'modephp'php]php php|php=php php0php1php0php0php0php0php0php;
php php php php php}
php php php php php php php php php php php php$infophp php=php php$thisphp-php>php_getSphp3Clientphp(php$pathphp)php-php>getInfophp(php$namephp)php;

php php php php php php php php ifphp php(php!emptyphp(php$infophp)php)php php{
php php php php php php php php php php php php php$statphp[php'sizephp'php]php php php=php php$infophp[php'sizephp'php]php;
php php php php php php php php php php php php php$statphp[php'atimephp'php]php php=php timephp(php)php;
php php php php php php php php php php php php php$statphp[php'mtimephp'php]php php=php php$infophp[php'mtimephp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$statphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp nextphp filenamephp inphp thephp directory
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp dirphp_readdirphp(php)
php php php php php{
php php php php php php php php php$objectphp php=php currentphp(php$thisphp-php>php_bucketListphp)php;
php php php php php php php php ifphp php(php$objectphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php nextphp(php$thisphp-php>php_bucketListphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$objectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp thephp directoryphp pointer
php php php php php php*
php php php php php php*php php@returnphp booleanphp True
php php php php php php*php/
php php php php publicphp functionphp dirphp_rewinddirphp(php)
php php php php php{
php php php php php php php php resetphp(php$thisphp-php>php_bucketListphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp aphp directory
php php php php php php*
php php php php php php*php php@returnphp booleanphp True
php php php php php php*php/
php php php php publicphp functionphp dirphp_closedirphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_bucketListphp php=php arrayphp(php)php;
php php php php php php php php returnphp truephp;
php php php php php}
php}
