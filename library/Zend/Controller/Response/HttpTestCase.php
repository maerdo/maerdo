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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HttpTestCasephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Responsephp_Http
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Httpphp.phpphp'php;

php/php*php*
php php*php Zendphp_Controllerphp_Responsephp_HttpTestCase
php php*
php php*php php@usesphp Zendphp_Controllerphp_Responsephp_Http
php php*php php@packagephp Zendphp_Controller
php php*php php@subpackagephp Response
php php*php/
classphp Zendphp_Controllerphp_Responsephp_HttpTestCasephp extendsphp Zendphp_Controllerphp_Responsephp_Http
php{
php php php php php/php*php*
php php php php php php*php php"sendphp"php headersphp byphp returningphp arrayphp ofphp allphp headersphp thatphp wouldphp bephp sent
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp sendHeadersphp(php)
php php php php php{
php php php php php php php php php$headersphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_headersRawphp asphp php$headerphp)php php{
php php php php php php php php php php php php php$headersphp[php]php php=php php$headerphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_headersphp asphp php$headerphp)php php{
php php php php php php php php php php php php php$namephp php=php php$headerphp[php'namephp'php]php;
php php php php php php php php php php php php php$keyphp php php=php strtolowerphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$headersphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$headerphp[php'replacephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$headersphp[php$keyphp]php php=php php$headerphp[php'namephp'php]php php.php php'php:php php'php php.php php$headerphp[php'valuephp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$headersphp[php$keyphp]php php=php php$headerphp[php'namephp'php]php php.php php'php:php php'php php.php php$headerphp[php'valuephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Canphp wephp sendphp headersphp?
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$throw
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp canSendHeadersphp(php$throwphp php=php falsephp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp concatenatedphp bodyphp segments
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp outputBodyphp(php)
php php php php php{
php php php php php php php php php$fullContentphp php=php php'php'php;
php php php php php php php php foreachphp php(php$thisphp-php>php_bodyphp asphp php$contentphp)php php{
php php php php php php php php php php php php php$fullContentphp php.php=php php$contentphp;
php php php php php php php php php}
php php php php php php php php returnphp php$fullContentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp bodyphp andphp/orphp bodyphp segments
php php php php php php*
php php php php php php*php php@paramphp php boolphp|stringphp php$spec
php php php php php php*php php@returnphp stringphp|arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getBodyphp(php$specphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(falsephp php=php=php=php php$specphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>outputBodyphp(php)php;
php php php php php php php php php}php elseifphp php(truephp php=php=php=php php$specphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_bodyphp;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$specphp)php php&php&php issetphp(php$thisphp-php>php_bodyphp[php$specphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_bodyphp[php$specphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php"sendphp"php Response
php php php php php php*
php php php php php php*php Concatsphp allphp responsephp headersphp,php andphp thenphp finalphp bodyphp php(separatedphp byphp two
php php php php php php*php newlinesphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp sendResponsephp(php)
php php php php php{
php php php php php php php php php$headersphp php=php php$thisphp-php>sendHeadersphp(php)php;
php php php php php php php php php$contentphp php=php implodephp(php"php\nphp"php,php php$headersphp)php php.php php"php\nphp\nphp"php;

php php php php php php php php ifphp php(php$thisphp-php>isExceptionphp(php)php php&php&php php$thisphp-php>renderExceptionsphp(php)php)php php{
php php php php php php php php php php php php php$exceptionsphp php=php php'php'php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>getExceptionphp(php)php asphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$exceptionsphp php.php=php php$ephp-php>php_php_toStringphp(php)php php.php php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$contentphp php.php=php php$exceptionsphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>outputBodyphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$contentphp;
php php php php php}
php}
