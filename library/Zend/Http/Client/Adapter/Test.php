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
php php*php php@versionphp php php php php$Idphp:php Testphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Uriphp_Http
php php*php/
requirephp_oncephp php'Zendphp/Uriphp/Httpphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Response
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Responsephp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Httpphp_Clientphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Aphp testingphp-purposesphp adapterphp.
php php*
php php*php Shouldphp bephp usedphp tophp testphp allphp componentsphp thatphp relyphp onphp Zendphp_Httpphp_Clientphp,
php php*php withoutphp actuallyphp performingphp anphp HTTPphp requestphp.php Youphp shouldphp instantiatephp this
php php*php objectphp manuallyphp,php andphp thenphp setphp itphp asphp thephp clientphp'sphp adapterphp.php Thenphp,php youphp can
php php*php setphp thephp expectedphp responsephp usingphp thephp setResponsephp(php)php methodphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Clientphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_Clientphp_Adapterphp_Testphp implementsphp Zendphp_Httpphp_Clientphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Parametersphp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$configphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Bufferphp ofphp responsesphp tophp bephp returnedphp byphp thephp readphp(php)php methodphp.php php Canphp be
php php php php php php*php setphp usingphp setResponsephp(php)php andphp addResponsephp(php)php.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$responsesphp php=php arrayphp(php"HTTPphp/php1php.php1php php4php0php0php Badphp Requestphp\rphp\nphp\rphp\nphp"php)php;

php php php php php/php*php*
php php php php php php*php Currentphp positionphp inphp thephp responsephp buffer
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$responseIndexphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Wetherphp orphp notphp thephp nextphp requestphp willphp failphp withphp anphp exception
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_nextRequestWillFailphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Adapterphp constructorphp,php currentlyphp emptyphp.php Configphp isphp setphp usingphp setConfigphp(php)
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp nextRequestWillFailphp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Httpphp_Clientphp_Adapterphp_Test
php php php php php php*php/
php php php php publicphp functionphp setNextRequestWillFailphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_nextRequestWillFailphp php=php php(boolphp)php php$flagphp;

php php php php php php php php returnphp php$thisphp;
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
php php php php php php*php Connectphp tophp thephp remotephp server
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$host
php php php php php php*php php@paramphp intphp php php php php php$port
php php php php php php*php php@paramphp booleanphp php$secure
php php php php php php*php php@paramphp intphp php php php php php$timeout
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Adapterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp connectphp(php$hostphp,php php$portphp php=php php8php0php,php php$securephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_nextRequestWillFailphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_nextRequestWillFailphp php=php falsephp;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(php'Requestphp failedphp'php)php;
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
php php php php php php php php php$hostphp php=php php$uriphp-php>getHostphp(php)php;
php php php php php php php php php php php php php$hostphp php=php php(strtolowerphp(php$uriphp-php>getSchemephp(php)php)php php=php=php php'httpsphp'php php?php php'sslvphp2php:php/php/php'php php.php php$hostphp php:php php$hostphp)php;

php php php php php php php php php/php/php Buildphp requestphp headers
php php php php php php php php php$pathphp php=php php$uriphp-php>getPathphp(php)php;
php php php php php php php php ifphp php(php$uriphp-php>getQueryphp(php)php)php php$pathphp php.php=php php'php?php'php php.php php$uriphp-php>getQueryphp(php)php;
php php php php php php php php php$requestphp php=php php"php{php$methodphp}php php{php$pathphp}php HTTPphp/php{php$httpphp_verphp}php\rphp\nphp"php;
php php php php php php php php foreachphp php(php$headersphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$kphp)php)php php$vphp php=php ucfirstphp(php$kphp)php php.php php"php:php php$vphp"php;
php php php php php php php php php php php php php$requestphp php.php=php php"php$vphp\rphp\nphp"php;
php php php php php php php php php}

php php php php php php php php php/php/php Addphp thephp requestphp body
php php php php php php php php php$requestphp php.php=php php"php\rphp\nphp"php php.php php$bodyphp;

php php php php php php php php php/php/php Dophp nothingphp php-php justphp returnphp thephp requestphp asphp string

php php php php php php php php returnphp php$requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp responsephp setphp inphp php$thisphp-php>setResponsephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>responseIndexphp php>php=php countphp(php$thisphp-php>responsesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>responseIndexphp php=php php0php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>responsesphp[php$thisphp-php>responseIndexphp+php+php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp thephp connectionphp php(dummyphp)
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp HTTPphp responsephp(sphp)php tophp bephp returnedphp byphp thisphp adapter
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Responsephp|arrayphp|stringphp php$response
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(php$responsephp)
php php php php php{
php php php php php php php php ifphp php(php$responsephp instanceofphp Zendphp_Httpphp_Responsephp)php php{
php php php php php php php php php php php php php$responsephp php=php php$responsephp-php>asStringphp(php"php\rphp\nphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>responsesphp php=php php(arrayphp)php$responsephp;
php php php php php php php php php$thisphp-php>responseIndexphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anotherphp responsephp tophp thephp responsephp bufferphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp Zendphp_Httpphp_Responsephp|php$response
php php php php php php*php/
php php php php publicphp functionphp addResponsephp(php$responsephp)
php php php php php{
php php php php php php php php php ifphp php(php$responsephp instanceofphp Zendphp_Httpphp_Responsephp)php php{
php php php php php php php php php php php php php$responsephp php=php php$responsephp-php>asStringphp(php"php\rphp\nphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>responsesphp[php]php php=php php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp positionphp ofphp thephp responsephp bufferphp.php php Selectsphp which
php php php php php php*php responsephp willphp bephp returnedphp onphp thephp nextphp callphp tophp readphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$index
php php php php php php*php/
php php php php publicphp functionphp setResponseIndexphp(php$indexphp)
php php php php php{
php php php php php php php php ifphp php(php$indexphp <php php0php php|php|php php$indexphp php>php=php countphp(php$thisphp-php>responsesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Adapterphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Indexphp outphp ofphp rangephp ofphp responsephp bufferphp sizephp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>responseIndexphp php=php php$indexphp;
php php php php php}
php}
