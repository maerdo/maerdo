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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ServerProxyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Thephp namespacephp decoratorphp enablesphp objectphp chainingphp tophp permit
php php*php callingphp XMLphp-RPCphp namespacedphp functionsphp likephp php"foophp.barphp.bazphp(php)php"
php php*php asphp php"php$remotephp-php>foophp-php>barphp-php>bazphp(php)php"php.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Clientphp_ServerProxy
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_XmlRpcphp_Client
php php php php php php*php/
php php php php privatephp php$php_clientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_namespacephp php=php php'php'php;


php php php php php/php*php*
php php php php php php*php php@varphp arrayphp ofphp Zendphp_XmlRpcphp_Clientphp_ServerProxy
php php php php php php*php/
php php php php privatephp php$php_cachephp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php php php php php php php php php php php php php$namespace
php php php php php php*php php@paramphp Zendphp_XmlRpcphp_Clientphp php$client
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$clientphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_namespacephp php=php php$namespacephp;
php php php php php php php php php$thisphp-php>php_clientphp php php php php=php php$clientphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp thephp nextphp successivephp namespace
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Clientphp_ServerProxy
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namespacephp)
php php php php php{
php php php php php php php php php$namespacephp php=php ltrimphp(php"php$thisphp-php>php_namespacephp.php$namespacephp"php,php php'php.php'php)php;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_cachephp[php$namespacephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_cachephp[php$namespacephp]php php=php newphp php$thisphp(php$thisphp-php>php_clientphp,php php$namespacephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_cachephp[php$namespacephp]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Callphp aphp methodphp inphp thisphp namespacephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodN
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php php$methodphp php=php ltrimphp(php"php$thisphp-php>php_namespacephp.php$methodphp"php,php php'php.php'php)php;
php php php php php php php php returnphp php$thisphp-php>php_clientphp-php>callphp(php$methodphp,php php$argsphp)php;
php php php php php}
php}
