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
php php*php php@versionphp php php php php$Idphp:php Proxyphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Uriphp_Http
php php*php/
requirephp_oncephp php'Zendphp/Uriphp/Httpphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Clientphp_Adapterphp_Socket
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Socketphp.phpphp'php;

php/php*php*
php php*php HTTPphp Proxyphp-supportingphp Zendphp_Httpphp_Clientphp adapterphp classphp,php basedphp onphp thephp default
php php*php socketphp basedphp adapterphp.
php php*
php php*php Shouldphp bephp usedphp ifphp proxyphp HTTPphp accessphp isphp requiredphp.php Ifphp nophp proxyphp isphp setphp,php will
php php*php fallphp backphp tophp Zendphp_Httpphp_Clientphp_Adapterphp_Socketphp behaviorphp.php Justphp likephp the
php php*php defaultphp Socketphp adapterphp,php thisphp adapterphp doesphp notphp requirephp anyphp specialphp extensions
php php*php installedphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Clientphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_Clientphp_Adapterphp_Proxyphp extendsphp Zendphp_Httpphp_Clientphp_Adapterphp_Socket
php{
php php php php php/php*php*
php php php php php php*php Parametersphp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$configphp php=php arrayphp(
php php php php php php php php php'ssltransportphp'php php php=php>php php'sslphp'php,
php php php php php php php php php'sslcertphp'php php php php php php php php=php>php nullphp,
php php php php php php php php php'sslpassphrasephp'php php=php>php nullphp,
php php php php php php php php php'sslusecontextphp'php php=php>php falsephp,
php php php php php php php php php'proxyphp_hostphp'php php php php php=php>php php'php'php,
php php php php php php php php php'proxyphp_portphp'php php php php php=php>php php8php0php8php0php,
php php php php php php php php php'proxyphp_userphp'php php php php php=php>php php'php'php,
php php php php php php php php php'proxyphp_passphp'php php php php php=php>php php'php'php,
php php php php php php php php php'proxyphp_authphp'php php php php php=php>php Zendphp_Httpphp_Clientphp:php:AUTHphp_BASICphp,
php php php php php php php php php'persistentphp'php php php php php=php>php false
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp HTTPSphp CONNECTphp wasphp alreadyphp negotiatedphp withphp thephp proxyphp orphp not
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$negotiatedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Connectphp tophp thephp remotephp server
php php php php php php*
php php php php php php*php Willphp tryphp tophp connectphp tophp thephp proxyphp serverphp.php Ifphp nophp proxyphp wasphp setphp,php will
php php php php php php*php fallphp backphp tophp thephp targetphp serverphp php(behavephp likephp regularphp Socketphp adapterphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$host
php php php php php php*php php@paramphp intphp php php php php php$port
php php php php php php*php php@paramphp booleanphp php$secure
php php php php php php*php/
php php php php publicphp functionphp connectphp(php$hostphp,php php$portphp php=php php8php0php,php php$securephp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Ifphp nophp proxyphp isphp setphp,php fallphp backphp tophp Socketphp adapter
php php php php php php php php ifphp php(php!php php$thisphp-php>configphp[php'proxyphp_hostphp'php]php)php php{
php php php php php php php php php php php php returnphp parentphp:php:connectphp(php$hostphp,php php$portphp,php php$securephp)php;
php php php php php php php php php}

php php php php php php php php php/php*php Urlphp mightphp requirephp streamphp contextphp evenphp ifphp proxyphp connectionphp doesnphp'tphp php*php/
php php php php php php php php ifphp php(php$securephp)php php{
php php php php php php php php php php php php php$thisphp-php>configphp[php'sslusecontextphp'php]php php=php truephp;
php php php php php php php php php}

php php php php php php php php php/php/php Connectphp php(aphp nonphp-securephp connectionphp)php tophp thephp proxyphp server
php php php php php php php php returnphp parentphp:php:connectphp(
php php php php php php php php php php php php php$thisphp-php>configphp[php'proxyphp_hostphp'php]php,
php php php php php php php php php php php php php$thisphp-php>configphp[php'proxyphp_portphp'php]php,
php php php php php php php php php php php php false
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp requestphp tophp thephp proxyphp server
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
php php php php php php php php php/php/php Ifphp nophp proxyphp isphp setphp,php fallphp backphp tophp defaultphp Socketphp adapter
php php php php php php php php ifphp php(php!php php$thisphp-php>configphp[php'proxyphp_hostphp'php]php)php returnphp parentphp:php:writephp(php$methodphp,php php$uriphp,php php$httpphp_verphp,php php$headersphp,php php$bodyphp)php;

php php php php php php php php php/php/php Makephp surephp wephp'rephp properlyphp connected
php php php php php php php php ifphp php(php!php php$thisphp-php>socketphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Tryingphp tophp writephp butphp wephp arephp notphp connectedphp"php)php;
php php php php php php php php php}

php php php php php php php php php$hostphp php=php php$thisphp-php>configphp[php'proxyphp_hostphp'php]php;
php php php php php php php php php$portphp php=php php$thisphp-php>configphp[php'proxyphp_portphp'php]php;

php php php php php php php php ifphp php(php$thisphp-php>connectedphp_tophp[php0php]php php!php=php php"tcpphp:php/php/php$hostphp"php php|php|php php$thisphp-php>connectedphp_tophp[php1php]php php!php=php php$portphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Tryingphp tophp writephp butphp wephp arephp connectedphp tophp thephp wrongphp proxyphp serverphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Addphp Proxyphp-Authorizationphp header
php php php php php php php php ifphp php(php$thisphp-php>configphp[php'proxyphp_userphp'php]php php&php&php php!php issetphp(php$headersphp[php'proxyphp-authorizationphp'php]php)php)php php{
php php php php php php php php php php php php php$headersphp[php'proxyphp-authorizationphp'php]php php=php Zendphp_Httpphp_Clientphp:php:encodeAuthHeaderphp(
php php php php php php php php php php php php php php php php php$thisphp-php>configphp[php'proxyphp_userphp'php]php,php php$thisphp-php>configphp[php'proxyphp_passphp'php]php,php php$thisphp-php>configphp[php'proxyphp_authphp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp wephp arephp proxyingphp HTTPSphp,php preformphp CONNECTphp handshakephp withphp thephp proxy
php php php php php php php php ifphp php(php$uriphp-php>getSchemephp(php)php php=php=php php'httpsphp'php php&php&php php(php!php php$thisphp-php>negotiatedphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>connectHandshakephp(php$uriphp-php>getHostphp(php)php,php php$uriphp-php>getPortphp(php)php,php php$httpphp_verphp,php php$headersphp)php;
php php php php php php php php php php php php php$thisphp-php>negotiatedphp php=php truephp;
php php php php php php php php php}

php php php php php php php php php/php/php Savephp requestphp methodphp forphp later
php php php php php php php php php$thisphp-php>methodphp php=php php$methodphp;

php php php php php php php php php/php/php Buildphp requestphp headers
php php php php php php php php ifphp php(php$thisphp-php>negotiatedphp)php php{
php php php php php php php php php php php php php$pathphp php=php php$uriphp-php>getPathphp(php)php;
php php php php php php php php php php php php ifphp php(php$uriphp-php>getQueryphp(php)php)php php{
php php php php php php php php php php php php php php php php php$pathphp php.php=php php'php?php'php php.php php$uriphp-php>getQueryphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$requestphp php=php php"php$methodphp php$pathphp HTTPphp/php$httpphp_verphp\rphp\nphp"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$requestphp php=php php"php$methodphp php$uriphp HTTPphp/php$httpphp_verphp\rphp\nphp"php;
php php php php php php php php php}

php php php php php php php php php/php/php Addphp allphp headersphp tophp thephp requestphp string
php php php php php php php php foreachphp php(php$headersphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$kphp)php)php php$vphp php=php php"php$kphp:php php$vphp"php;
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
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Errorphp writingphp requestphp tophp proxyphp serverphp"php)php;
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
php php php php php php*php Preformphp handshakingphp withphp HTTPSphp proxyphp usingphp CONNECTphp method
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$host
php php php php php php*php php@paramphp integerphp php$port
php php php php php php*php php@paramphp stringphp php php$httpphp_ver
php php php php php php*php php@paramphp arrayphp php php php$headers
php php php php php php*php/
php php php php protectedphp functionphp connectHandshakephp(php$hostphp,php php$portphp php=php php4php4php3php,php php$httpphp_verphp php=php php'php1php.php1php'php,php arrayphp php&php$headersphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$requestphp php=php php"CONNECTphp php$hostphp:php$portphp HTTPphp/php$httpphp_verphp\rphp\nphp"php php.
php php php php php php php php php php php php php php php php php php php php"Hostphp:php php"php php.php php$thisphp-php>configphp[php'proxyphp_hostphp'php]php php.php php"php\rphp\nphp"php;

php php php php php php php php php/php/php Addphp thephp userphp-agentphp header
php php php php php php php php ifphp php(issetphp(php$thisphp-php>configphp[php'useragentphp'php]php)php)php php{
php php php php php php php php php php php php php$requestphp php.php=php php"Userphp-agentphp:php php"php php.php php$thisphp-php>configphp[php'useragentphp'php]php php.php php"php\rphp\nphp"php;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp thephp proxyphp-authorizationphp headerphp isphp setphp,php sendphp itphp tophp proxyphp butphp remove
php php php php php php php php php/php/php itphp fromphp headersphp sentphp tophp targetphp host
php php php php php php php php ifphp php(issetphp(php$headersphp[php'proxyphp-authorizationphp'php]php)php)php php{
php php php php php php php php php php php php php$requestphp php.php=php php"Proxyphp-authorizationphp:php php"php php.php php$headersphp[php'proxyphp-authorizationphp'php]php php.php php"php\rphp\nphp"php;
php php php php php php php php php php php php unsetphp(php$headersphp[php'proxyphp-authorizationphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$requestphp php.php=php php"php\rphp\nphp"php;

php php php php php php php php php/php/php Sendphp thephp request
php php php php php php php php ifphp php(php!php php@fwritephp(php$thisphp-php>socketphp,php php$requestphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Errorphp writingphp requestphp tophp proxyphp serverphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Readphp responsephp headersphp only
php php php php php php php php php$responsephp php=php php'php'php;
php php php php php php php php php$gotStatusphp php=php falsephp;
php php php php php php php php whilephp php(php$linephp php=php php@fgetsphp(php$thisphp-php>socketphp)php)php php{
php php php php php php php php php php php php php$gotStatusphp php=php php$gotStatusphp php|php|php php(strposphp(php$linephp,php php'HTTPphp'php)php php!php=php=php falsephp)php;
php php php php php php php php php php php php ifphp php(php$gotStatusphp)php php{
php php php php php php php php php php php php php php php php php$responsephp php.php=php php$linephp;
php php php php php php php php php php php php php php php php ifphp php(php!chopphp(php$linephp)php)php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp thatphp thephp responsephp fromphp thephp proxyphp isphp php2php0php0
php php php php php php php php ifphp php(Zendphp_Httpphp_Responsephp:php:extractCodephp(php$responsephp)php php!php=php php2php0php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Unablephp tophp connectphp tophp HTTPSphp proxyphp.php Serverphp responsephp:php php"php php.php php$responsephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp allphp isphp goodphp,php switchphp socketphp tophp securephp modephp.php Wephp havephp tophp fallphp back
php php php php php php php php php/php/php throughphp thephp differentphp modes
php php php php php php php php php$modesphp php=php arrayphp(
php php php php php php php php php php php php STREAMphp_CRYPTOphp_METHODphp_TLSphp_CLIENTphp,
php php php php php php php php php php php php STREAMphp_CRYPTOphp_METHODphp_SSLvphp3php_CLIENTphp,
php php php php php php php php php php php php STREAMphp_CRYPTOphp_METHODphp_SSLvphp2php3php_CLIENTphp,
php php php php php php php php php php php php STREAMphp_CRYPTOphp_METHODphp_SSLvphp2php_CLIENT
php php php php php php php php php)php;

php php php php php php php php php$successphp php=php falsephp;
php php php php php php php php foreachphp(php$modesphp asphp php$modephp)php php{
php php php php php php php php php php php php php$successphp php=php streamphp_socketphp_enablephp_cryptophp(php$thisphp-php>socketphp,php truephp,php php$modephp)php;
php php php php php php php php php php php php ifphp php(php$successphp)php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php php$successphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php"Unablephp tophp connectphp tophp"php php.
php php php php php php php php php php php php php php php php php php php php php"php HTTPSphp serverphp throughphp proxyphp:php couldphp notphp negotiatephp securephp connectionphp.php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp connectionphp tophp thephp server
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php parentphp:php:closephp(php)php;
php php php php php php php php php$thisphp-php>negotiatedphp php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destructorphp:php makephp surephp thephp socketphp isphp disconnected
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>socketphp)php php$thisphp-php>closephp(php)php;
php php php php php}
php}
