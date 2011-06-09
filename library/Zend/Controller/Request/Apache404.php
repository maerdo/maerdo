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
php php*php php@versionphp php php php php$Idphp:php Apachephp4php0php4php.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Controllerphp_Requestphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Httpphp.phpphp'php;

php/php*php*php Zendphp_Uriphp php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php Zendphp_Controllerphp_Requestphp_Apachephp4php0php4
php php*
php php*php HTTPphp requestphp objectphp forphp usephp withphp Zendphp_Controllerphp familyphp.php Extendsphp basicphp HTTP
php php*php requestphp objectphp tophp allowphp forphp twophp edgephp casesphp whenphp usingphp Apachephp:
php php*php php-php Usingphp Apachephp'sphp php4php0php4php handlerphp insteadphp ofphp modphp_rewritephp tophp directphp requests
php php*php php-php Usingphp thephp PTphp flagphp inphp rewritephp rules
php php*
php php*php Inphp eachphp casephp,php thephp URLphp tophp checkphp againstphp isphp foundphp inphp REDIRECTphp_URLphp,php not
php php*php REQUESTphp_URIphp.
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Requestphp_Http
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Request
php php*php/
classphp Zendphp_Controllerphp_Requestphp_Apachephp4php0php4php extendsphp Zendphp_Controllerphp_Requestphp_Http
php{
php php php php publicphp functionphp setRequestUriphp(php$requestUriphp php=php nullphp)
php php php php php{
php php php php php php php php php$parseUriGetVarsphp php=php falsephp;
php php php php php php php php ifphp php(php$requestUriphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php)php)php php{php php/php/php checkphp thisphp firstphp sophp IISphp willphp catch
php php php php php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php;
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'REDIRECTphp_URLphp'php]php)php)php php{php php php/php/php Checkphp ifphp usingphp modphp_rewrite
php php php php php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'REDIRECTphp_URLphp'php]php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'REDIRECTphp_QUERYSTRINGphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$parseUriGetVarsphp php=php php$php_SERVERphp[php'REDIRECTphp_QUERYSTRINGphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'REQUESTphp_URIphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'REQUESTphp_URIphp'php]php;
php php php php php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php)php)php php{php php/php/php IISphp php5php.php0php,php PHPphp asphp CGI
php php php php php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$requestUriphp php.php=php php'php?php'php php.php php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php!isphp_stringphp(php$requestUriphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php(php$posphp php=php strposphp(php$requestUriphp,php php'php?php'php)php)php)php php{
php php php php php php php php php php php php php php php php php$parseUriGetVarsphp php=php substrphp(php$requestUriphp,php php$posphp php+php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$parseUriGetVarsphp)php php{
php php php php php php php php php php php php php/php/php Setphp GETphp itemsphp,php ifphp available
php php php php php php php php php php php php parsephp_strphp(php$parseUriGetVarsphp,php php$php_GETphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_requestUriphp php=php php$requestUriphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
