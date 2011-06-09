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
php php*php php@packagephp php php php Zendphp_Session
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HttpUserAgentphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@sincephp php php php php php Previewphp Releasephp php0php.php2
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Sessionphp_Validatorphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp/Validatorphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Sessionphp_Validatorphp_HttpUserAgent
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Session
php php*php php@subpackagephp Validator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Sessionphp_Validatorphp_HttpUserAgentphp extendsphp Zendphp_Sessionphp_Validatorphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php Setupphp(php)php php-php thisphp methodphp willphp getphp thephp currentphp userphp agentphp andphp storephp itphp inphp thephp session
php php php php php php*php asphp php'validphp dataphp'
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setupphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>setValidDataphp(php php(issetphp(php$php_SERVERphp[php'HTTPphp_USERphp_AGENTphp'php]php)
php php php php php php php php php php php php php?php php$php_SERVERphp[php'HTTPphp_USERphp_AGENTphp'php]php php:php nullphp)php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp(php)php php-php thisphp methodphp willphp determinephp ifphp thephp currentphp userphp agentphp matchesphp the
php php php php php php*php userphp agentphp wephp storedphp whenphp wephp initializedphp thisphp variablephp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp validatephp(php)
php php php php php{
php php php php php php php php php$currentBrowserphp php=php php(issetphp(php$php_SERVERphp[php'HTTPphp_USERphp_AGENTphp'php]php)
php php php php php php php php php php php php php?php php$php_SERVERphp[php'HTTPphp_USERphp_AGENTphp'php]php php:php nullphp)php;

php php php php php php php php returnphp php$currentBrowserphp php=php=php=php php$thisphp-php>getValidDataphp(php)php;
php php php php php}

php}
