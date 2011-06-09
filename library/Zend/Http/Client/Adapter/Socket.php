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
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Clientphp_Adapter
php php*php php@versionphp php php php php$Idphp:php Socketphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Uriphp_Http
php php*php/
requirephp_oncephp php'Zendphp/Uriphp/Httpphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Clientphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Interfacephp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Clientphp_Adapterphp_Stream
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Streamphp.phpphp'php;

php/php*php*
php php*php Aphp socketsphp basedphp php(streamphp_socketphp_clientphp)php adapterphp classphp forphp Zendphp_Httpphp_Clientphp.php Canphp bephp used
php php*php onphp almostphp everyphp PHPphp environmentphp,php andphp doesphp notphp requirephp anyphp specialphp extensionsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Clientphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_Clientphp_Adapterphp_Socketphp implementsphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp,php Zendphp_Httpphp_Clientphp_Adapterphp_Stream
php{
php php php php php/php*php*
php php php php php php*php Thephp socketphp forphp serverphp connection
php php php php php php*
php php php php php php*php php@varphp resourcephp|null
php php php php php php*php/
php php php php protectedphp php$socketphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Whatphp hostphp/portphp arephp wephp connectedphp tophp?
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$connectedphp_tophp php=php arrayphp(nullphp,php nullphp)php;

php php php php php/php*php*
php php php php php php*php Streamphp forphp storingphp output
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$outphp_streamphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Parametersphp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$configphp php=php arrayphp(
php php php php php php php php php'persistentphp'php php php php php=php>php falsephp,
php php php php php php php php php'ssltransportphp'php php php=php>php php'sslphp'php,
php php php php php php php php php'sslcertphp'php php php php php php php php=php>php nullphp,
php php php php php php php php php'sslpassphrasephp'php php=php>php nullphp,
php php php php php php php php php'sslusecontextphp'php php=php>php false
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Requestphp methodphp php-php willphp bephp setphp byphp writephp(php)php andphp mightphp bephp usedphp byphp readphp(php)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$methodphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Streamphp context
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_contextphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Adapterphp constructorphp,php currentlyphp emptyphp.php Configphp isphp setphp usingphp setConfigphp(php)
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp configurationphp arrayphp forphp thephp adapter
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php|php arrayphp php$config
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;

php php php php php php php php php}php elseifphp php(php!php isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Arrayphp orphp Zendphp_Configphp objectphp expectedphp,php gotphp php'php php.php gettypephp(php$configphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$configphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php$thisphp-php>configphp[strtolowerphp(php$kphp)php]php php=php php$vphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php php*php Retrievephp thephp arrayphp ofphp allphp configurationphp options
php php php php php php php*
php php php php php php php*php php@returnphp array
php php php php php php php*php/
php php php php php publicphp functionphp getConfigphp(php)
php php php php php php{
php php php php php php php php php returnphp php$thisphp-php>configphp;
php php php php php php}

php php php php php php/php*php*
php php php php php php*php Setphp thephp streamphp contextphp forphp thephp TCPphp connectionphp tophp thephp server
php php php php php php*
php php php php php php*php Canphp acceptphp eitherphp aphp prephp-existingphp streamphp contextphp resourcephp,php orphp anphp array
php php php php php php*php ofphp streamphp optionsphp,php similarphp tophp thephp optionsphp arrayphp passedphp tophp the
php php php php php php*php streamphp_contextphp_createphp(php)php PHPphp functionphp.php Inphp suchphp casephp aphp newphp streamphp context
php php php php php php*php willphp bephp createdphp usingphp thephp passedphp optionsphp.
php php php php php php*
php php php php php php*php php@sincephp php Zendphp Frameworkphp php1php.php9
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$contextphp Streamphp contextphp orphp arrayphp ofphp contextphp options
php php php php php php*php php@returnphp Zendphp_Httpphp_Clientphp_Adapterphp_Socket
php php php php php php*php/
php php php php publicphp functionphp setStreamContextphp(php$contextphp)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$contextphp)php php&php&php getphp_resourcephp_typephp(php$contextphp)php php=php=php php'streamphp-contextphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_contextphp php=php php$contextphp;

php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$contextphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_contextphp php=php streamphp_contextphp_createphp(php$contextphp)php;

php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Invalidphp parameter
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Expectingphp eitherphp aphp streamphp contextphp resourcephp orphp arrayphp,php gotphp php"php php.php gettypephp(php$contextphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp streamphp contextphp forphp thephp TCPphp connectionphp tophp thephp serverphp.
php php php php php php*
php php php php php php*php Ifphp nophp streamphp contextphp isphp setphp,php willphp createphp aphp defaultphp onephp.
php php php php php php*
php php php php php php*php php@returnphp resource
php php php php php php*php/
php php php php publicphp functionphp getStreamContextphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php php$thisphp-php>php_contextphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_contextphp php=php streamphp_contextphp_createphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_contextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Connectphp tophp thephp remotephp server
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$host
php php php php php php*php php@paramphp intphp php php php php php$port
php php php php php php*php php@paramphp booleanphp php$secure
php php php php php php*php/
php php php php publicphp functionphp connectphp(php$hostphp,php php$portphp php=php php8php0php,php php$securephp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Ifphp thephp URIphp shouldphp bephp accessedphp viaphp SSLphp,php prependphp thephp Hostnamephp withphp sslphp:php/php/
php php php php php php php php php$hostphp php=php php(php$securephp php?php php$thisphp-php>configphp[php'ssltransportphp'php]php php:php php'tcpphp'php)php php.php php'php:php/php/php'php php.php php$hostphp;

php php php php php php php php php/php/php Ifphp wephp arephp connectedphp tophp thephp wrongphp hostphp,php disconnectphp first
php php php php php php php php ifphp php(php(php$thisphp-php>connectedphp_tophp[php0php]php php!php=php php$hostphp php|php|php php$thisphp-php>connectedphp_tophp[php1php]php php!php=php php$portphp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>socketphp)php)php php$thisphp-php>closephp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Nowphp,php ifphp wephp arephp notphp connectedphp,php connect
php php php php php php php php ifphp php(php!php isphp_resourcephp(php$thisphp-php>socketphp)php php|php|php php!php php$thisphp-php>configphp[php'keepalivephp'php]php)php php{
php php php php php php php php php php php php php$contextphp php=php php$thisphp-php>getStreamContextphp(php)php;
php php php php php php php php php php php php ifphp php(php$securephp php|php|php php$thisphp-php>configphp[php'sslusecontextphp'php]php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>configphp[php'sslcertphp'php]php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php streamphp_contextphp_setphp_optionphp(php$contextphp,php php'sslphp'php,php php'localphp_certphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>configphp[php'sslcertphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Unablephp tophp setphp sslcertphp optionphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>configphp[php'sslpassphrasephp'php]php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php streamphp_contextphp_setphp_optionphp(php$contextphp,php php'sslphp'php,php php'passphrasephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>configphp[php'sslpassphrasephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Unablephp tophp setphp sslpassphrasephp optionphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$flagsphp php=php STREAMphp_CLIENTphp_CONNECTphp;
php php php php php php php php php php php php ifphp php(php$thisphp-php>configphp[php'persistentphp'php]php)php php$flagsphp php|php=php STREAMphp_CLIENTphp_PERSISTENTphp;

php php php php php php php php php php php php php$thisphp-php>socketphp php=php php@streamphp_socketphp_clientphp(php$hostphp php.php php'php:php'php php.php php$portphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$errnophp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$errstrphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(intphp)php php$thisphp-php>configphp[php'timeoutphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$flagsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$contextphp)php;

php php php php php php php php php php php php ifphp php(php!php php$thisphp-php>socketphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Unablephp tophp Connectphp tophp php'php php.php php$hostphp php.php php'php:php'php php.php php$portphp php.php php'php.php Errorphp php#php'php php.php php$errnophp php.php php'php:php php'php php.php php$errstrphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Setphp thephp streamphp timeout
php php php php php php php php php php php php ifphp php(php!php streamphp_setphp_timeoutphp(php$thisphp-php>socketphp,php php(intphp)php php$thisphp-php>configphp[php'timeoutphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Unablephp tophp setphp thephp connectionphp timeoutphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Updatephp connectedphp_to
php php php php php php php php php php php php php$thisphp-php>connectedphp_tophp php=php arrayphp(php$hostphp,php php$portphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp requestphp tophp thephp remotephp server
php php php php php php*
php php php php php php*php php@paramphp stringphp php php php php php php php php$method
php php php php php php*php php@paramphp Zendphp_Uriphp_Httpphp php$uri
php php php php php php*php php@paramphp stringphp php php php php php php php php$httpphp_ver
php php php php php php*php php@paramphp arrayphp php php php php php php php php php$headers
php php php php php php*php php@paramphp stringphp php php php php php php php php$body
php php php php php php*php php@returnphp stringphp Requestphp asphp string
php php php php php php*php/
php php php php publicphp functionphp writephp(php$methodphp,php php$uriphp,php php$httpphp_verphp php=php php'php1php.php1php'php,php php$headersphp php=php arrayphp(php)php,php php$bodyphp php=php php'php'php)
php php php php php{
php php php php php php php php php/php/php Makephp surephp wephp'rephp properlyphp connected
php php php php php php php php ifphp php(php!php php$thisphp-php>socketphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Tryingphp tophp writephp butphp wephp arephp notphp connectedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$hostphp php=php php$uriphp-php>getHostphp(php)php;
php php php php php php php php php$hostphp php=php php(strtolowerphp(php$uriphp-php>getSchemephp(php)php)php php=php=php php'httpsphp'php php?php php$thisphp-php>configphp[php'ssltransportphp'php]php php:php php'tcpphp'php)php php.php php'php:php/php/php'php php.php php$hostphp;
php php php php php php php php ifphp php(php$thisphp-php>connectedphp_tophp[php0php]php php!php=php php$hostphp php|php|php php$thisphp-php>connectedphp_tophp[php1php]php php!php=php php$uriphp-php>getPortphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Tryingphp tophp writephp butphp wephp arephp connectedphp tophp thephp wrongphp hostphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Savephp requestphp methodphp forphp later
php php php php php php php php php$thisphp-php>methodphp php=php php$methodphp;

php php php php php php php php php/php/php Buildphp requestphp headers
php php php php php php php php php$pathphp php=php php$uriphp-php>getPathphp(php)php;
php php php php php php php php ifphp php(php$uriphp-php>getQueryphp(php)php)php php$pathphp php.php=php php'php?php'php php.php php$uriphp-php>getQueryphp(php)php;
php php php php php php php php php$requestphp php=php php"php{php$methodphp}php php{php$pathphp}php HTTPphp/php{php$httpphp_verphp}php\rphp\nphp"php;
php php php php php php php php foreachphp php(php$headersphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$kphp)php)php php$vphp php=php ucfirstphp(php$kphp)php php.php php"php:php php$vphp"php;
php php php php php php php php php php php php php$requestphp php.php=php php"php$vphp\rphp\nphp"php;
php php php php php php php php php}

php php php php php php php php ifphp(isphp_resourcephp(php$bodyphp)php)php php{
php php php php php php php php php php php php php$requestphp php.php=php php"php\rphp\nphp"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Addphp thephp requestphp body
php php php php php php php php php php php php php$requestphp php.php=php php"php\rphp\nphp"php php.php php$bodyphp;
php php php php php php php php php}

php php php php php php php php php/php/php Sendphp thephp request
php php php php php php php php ifphp php(php!php php@fwritephp(php$thisphp-php>socketphp,php php$requestphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Errorphp writingphp requestphp tophp serverphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp(isphp_resourcephp(php$bodyphp)php)php php{
php php php php php php php php php php php php ifphp(streamphp_copyphp_tophp_streamphp(php$bodyphp,php php$thisphp-php>socketphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Errorphp writingphp requestphp tophp serverphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp responsephp fromphp server
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readphp(php)
php php php php php{
php php php php php php php php php/php/php Firstphp,php readphp headersphp only
php php php php php php php php php$responsephp php=php php'php'php;
php php php php php php php php php$gotStatusphp php=php falsephp;
php php php php php php php php php$streamphp php=php php!emptyphp(php$thisphp-php>configphp[php'streamphp'php]php)php;

php php php php php php php php whilephp php(php(php$linephp php=php php@fgetsphp(php$thisphp-php>socketphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$gotStatusphp php=php php$gotStatusphp php|php|php php(strposphp(php$linephp,php php'HTTPphp'php)php php!php=php=php falsephp)php;
php php php php php php php php php php php php ifphp php(php$gotStatusphp)php php{
php php php php php php php php php php php php php php php php php$responsephp php.php=php php$linephp;
php php php php php php php php php php php php php php php php ifphp php(rtrimphp(php$linephp)php php=php=php=php php'php'php)php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;

php php php php php php php php php$statusCodephp php=php Zendphp_Httpphp_Responsephp:php:extractCodephp(php$responsephp)php;

php php php php php php php php php/php/php Handlephp php1php0php0php andphp php1php0php1php responsesphp internallyphp byphp restartingphp thephp readphp again
php php php php php php php php ifphp php(php$statusCodephp php=php=php php1php0php0php php|php|php php$statusCodephp php=php=php php1php0php1php)php returnphp php$thisphp-php>readphp(php)php;

php php php php php php php php php/php/php Checkphp headersphp tophp seephp whatphp kindphp ofphp connectionphp php/php transferphp encodingphp wephp have
php php php php php php php php php$headersphp php=php Zendphp_Httpphp_Responsephp:php:extractHeadersphp(php$responsephp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Responsesphp tophp HEADphp requestsphp andphp php2php0php4php orphp php3php0php4php responsesphp arephp notphp expected
php php php php php php php php php php*php tophp havephp aphp bodyphp php-php stopphp readingphp here
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$statusCodephp php=php=php php3php0php4php php|php|php php$statusCodephp php=php=php php2php0php4php php|php|
php php php php php php php php php php php php php$thisphp-php>methodphp php=php=php Zendphp_Httpphp_Clientphp:php:HEADphp)php php{

php php php php php php php php php php php php php/php/php Closephp thephp connectionphp ifphp requestedphp tophp dophp sophp byphp thephp server
php php php php php php php php php php php php ifphp php(issetphp(php$headersphp[php'connectionphp'php]php)php php&php&php php$headersphp[php'connectionphp'php]php php=php=php php'closephp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$responsephp;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp wephp gotphp aphp php'transferphp-encodingphp:php chunkedphp'php header
php php php php php php php php ifphp php(issetphp(php$headersphp[php'transferphp-encodingphp'php]php)php)php php{

php php php php php php php php php php php php ifphp php(strtolowerphp(php$headersphp[php'transferphp-encodingphp'php]php)php php=php=php php'chunkedphp'php)php php{

php php php php php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php php php php php$linephp php php=php php@fgetsphp(php$thisphp-php>socketphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;

php php php php php php php php php php php php php php php php php php php php php$chunkphp php=php php$linephp;

php php php php php php php php php php php php php php php php php php php php php/php/php Figurephp outphp thephp nextphp chunkphp size
php php php php php php php php php php php php php php php php php php php php php$chunksizephp php=php trimphp(php$linephp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php ctypephp_xdigitphp(php$chunksizephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Invalidphp chunkphp sizephp php"php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$chunksizephp php.php php'php"php unablephp tophp readphp chunkedphp bodyphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php Convertphp thephp hexadecimalphp valuephp tophp plainphp integer
php php php php php php php php php php php php php php php php php php php php php$chunksizephp php=php hexdecphp(php$chunksizephp)php;

php php php php php php php php php php php php php php php php php php php php php/php/php Readphp nextphp chunk
php php php php php php php php php php php php php php php php php php php php php$readphp_tophp php=php ftellphp(php$thisphp-php>socketphp)php php+php php$chunksizephp;

php php php php php php php php php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$currentphp_posphp php=php ftellphp(php$thisphp-php>socketphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$currentphp_posphp php>php=php php$readphp_tophp)php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php$thisphp-php>outphp_streamphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp(streamphp_copyphp_tophp_streamphp(php$thisphp-php>socketphp,php php$thisphp-php>outphp_streamphp,php php$readphp_tophp php-php php$currentphp_posphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$linephp php=php php@freadphp(php$thisphp-php>socketphp,php php$readphp_tophp php-php php$currentphp_posphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$linephp php=php=php=php falsephp php|php|php strlenphp(php$linephp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$chunkphp php.php=php php$linephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php whilephp php(php!php feofphp(php$thisphp-php>socketphp)php)php;

php php php php php php php php php php php php php php php php php php php php php$chunkphp php.php=php php@fgetsphp(php$thisphp-php>socketphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;

php php php php php php php php php php php php php php php php php php php php ifphp(php!php$thisphp-php>outphp_streamphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp php.php=php php$chunkphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php whilephp php(php$chunksizephp php>php php0php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Cannotphp handlephp php"php'php php.
php php php php php php php php php php php php php php php php php php php php php$headersphp[php'transferphp-encodingphp'php]php php.php php'php"php transferphp encodingphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Wephp automaticallyphp decodephp chunkedphp-messagesphp whenphp writingphp tophp aphp stream
php php php php php php php php php php php php php/php/php thisphp meansphp wephp havephp tophp disallowphp thephp Zendphp_Httpphp_Responsephp tophp dophp itphp again
php php php php php php php php php php php php ifphp php(php$thisphp-php>outphp_streamphp)php php{
php php php php php php php php php php php php php php php php php$responsephp php=php strphp_ireplacephp(php"Transferphp-Encodingphp:php chunkedphp\rphp\nphp"php,php php'php'php,php php$responsephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php/php/php Elsephp,php ifphp wephp gotphp thephp contentphp-lengthphp headerphp,php readphp thisphp numberphp ofphp bytes
php php php php php php php php php}php elseifphp php(issetphp(php$headersphp[php'contentphp-lengthphp'php]php)php)php php{

php php php php php php php php php php php php php/php/php Ifphp wephp gotphp morephp thanphp onephp Contentphp-Lengthphp headerphp php(seephp ZFphp-php9php4php0php4php)php use
php php php php php php php php php php php php php/php/php thephp lastphp valuephp sent
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$headersphp[php'contentphp-lengthphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$contentLengthphp php=php php$headersphp[php'contentphp-lengthphp'php]php[countphp(php$headersphp[php'contentphp-lengthphp'php]php)php php-php php1php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$contentLengthphp php=php php$headersphp[php'contentphp-lengthphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$currentphp_posphp php=php ftellphp(php$thisphp-php>socketphp)php;
php php php php php php php php php php php php php$chunkphp php=php php'php'php;

php php php php php php php php php php php php forphp php(php$readphp_tophp php=php php$currentphp_posphp php+php php$contentLengthphp;
php php php php php php php php php php php php php php php php php php$readphp_tophp php>php php$currentphp_posphp;
php php php php php php php php php php php php php php php php php php$currentphp_posphp php=php ftellphp(php$thisphp-php>socketphp)php)php php{

php php php php php php php php php php php php php php php php php ifphp(php$thisphp-php>outphp_streamphp)php php{
php php php php php php php php php php php php php php php php php php php php php ifphp(php@streamphp_copyphp_tophp_streamphp(php$thisphp-php>socketphp,php php$thisphp-php>outphp_streamphp,php php$readphp_tophp php-php php$currentphp_posphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$chunkphp php=php php@freadphp(php$thisphp-php>socketphp,php php$readphp_tophp php-php php$currentphp_posphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$chunkphp php=php=php=php falsephp php|php|php strlenphp(php$chunkphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$responsephp php.php=php php$chunkphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Breakphp ifphp thephp connectionphp endedphp prematurely
php php php php php php php php php php php php php php php php ifphp php(feofphp(php$thisphp-php>socketphp)php)php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php/php/php Fallbackphp:php justphp readphp thephp responsephp untilphp EOF
php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php ifphp(php$thisphp-php>outphp_streamphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp(php@streamphp_copyphp_tophp_streamphp(php$thisphp-php>socketphp,php php$thisphp-php>outphp_streamphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$buffphp php=php php@freadphp(php$thisphp-php>socketphp,php php8php1php9php2php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$buffphp php=php=php=php falsephp php|php|php strlenphp(php$buffphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_checkSocketReadTimeoutphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp php.php=php php$buffphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}php whilephp php(feofphp(php$thisphp-php>socketphp)php php=php=php=php falsephp)php;

php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Closephp thephp connectionphp ifphp requestedphp tophp dophp sophp byphp thephp server
php php php php php php php php ifphp php(issetphp(php$headersphp[php'connectionphp'php]php)php php&php&php php$headersphp[php'connectionphp'php]php php=php=php php'closephp'php)php php{
php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp connectionphp tophp thephp server
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php ifphp php(isphp_resourcephp(php$thisphp-php>socketphp)php)php php@fclosephp(php$thisphp-php>socketphp)php;
php php php php php php php php php$thisphp-php>socketphp php=php nullphp;
php php php php php php php php php$thisphp-php>connectedphp_tophp php=php arrayphp(nullphp,php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp socketphp hasphp timedphp outphp php-php ifphp sophp closephp connectionphp andphp throw
php php php php php php*php anphp exception
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp withphp READphp_TIMEOUTphp code
php php php php php php*php/
php php php php protectedphp functionphp php_checkSocketReadTimeoutphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>socketphp)php php{
php php php php php php php php php php php php php$infophp php=php streamphp_getphp_metaphp_dataphp(php$thisphp-php>socketphp)php;
php php php php php php php php php php php php php$timedoutphp php=php php$infophp[php'timedphp_outphp'php]php;
php php php php php php php php php php php php ifphp php(php$timedoutphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php"Readphp timedphp outphp afterphp php{php$thisphp-php>configphp[php'timeoutphp'php]php}php secondsphp"php,
php php php php php php php php php php php php php php php php php php php php Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp:php:READphp_TIMEOUT
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp outputphp streamphp forphp thephp response
php php php php php php*
php php php php php php*php php@paramphp resourcephp php$stream
php php php php php php*php php@returnphp Zendphp_Httpphp_Clientphp_Adapterphp_Socket
php php php php php php*php/
php php php php publicphp functionphp setOutputStreamphp(php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>outphp_streamphp php=php php$streamphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destructorphp:php makephp surephp thephp socketphp isphp disconnected
php php php php php php*
php php php php php php*php Ifphp wephp arephp inphp persistentphp TCPphp modephp,php willphp notphp closephp thephp connection
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php php$thisphp-php>configphp[php'persistentphp'php]php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>socketphp)php php$thisphp-php>closephp(php)php;
php php php php php php php php php}
php php php php php}
php}
