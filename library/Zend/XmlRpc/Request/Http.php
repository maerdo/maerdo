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
php php*php/

php/php*php*
php php*php Zendphp_XmlRpcphp_Request
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Requestphp.phpphp'php;

php/php*php*
php php*php XmlRpcphp Requestphp objectphp php-php-php Requestphp viaphp HTTP
php php*
php php*php Extendsphp php{php@linkphp Zendphp_XmlRpcphp_Requestphp}php tophp acceptphp aphp requestphp viaphp HTTPphp.php Requestphp is
php php*php builtphp atphp constructionphp timephp usingphp aphp rawphp POSTphp;php ifphp nophp dataphp isphp availablephp,php the
php php*php requestphp isphp declaredphp aphp faultphp.
php php*
php php*php php@categoryphp Zend
php php*php php@packagephp php Zendphp_XmlRpc
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php$Idphp:php Httpphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_XmlRpcphp_Requestphp_Httpphp extendsphp Zendphp_XmlRpcphp_Request
php{
php php php php php/php*php*
php php php php php php*php Arrayphp ofphp headers
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headersphp;

php php php php php/php*php*
php php php php php php*php Rawphp XMLphp asphp receivedphp viaphp request
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_xmlphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Attemptsphp tophp readphp fromphp phpphp:php/php/inputphp tophp getphp rawphp POSTphp requestphp;php ifphp anphp error
php php php php php php*php occursphp inphp doingphp sophp,php orphp ifphp thephp XMLphp isphp invalidphp,php thephp requestphp isphp declaredphp a
php php php php php php*php faultphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$xmlphp php=php php@filephp_getphp_contentsphp(php'phpphp:php/php/inputphp'php)php;
php php php php php php php php ifphp php(php!php$xmlphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Faultphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php3php0php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_xmlphp php=php php$xmlphp;

php php php php php php php php php$thisphp-php>loadXmlphp(php$xmlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp rawphp XMLphp request
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRawRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_xmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp headers
php php php php php php*
php php php php php php*php Getsphp allphp headersphp asphp keyphp php=php>php valuephp pairsphp andphp returnsphp themphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_headersphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_headersphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$php_SERVERphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php'HTTPphp_php'php php=php=php substrphp(php$keyphp,php php0php,php php5php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$headerphp php=php strphp_replacephp(php'php php'php,php php'php-php'php,php ucwordsphp(strtolowerphp(strphp_replacephp(php'php_php'php,php php'php php'php,php substrphp(php$keyphp,php php5php)php)php)php)php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_headersphp[php$headerphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp fullphp HTTPphp requestphp,php includingphp headersphp andphp XML
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFullRequestphp(php)
php php php php php{
php php php php php php php php php$requestphp php=php php'php'php;
php php php php php php php php foreachphp php(php$thisphp-php>getHeadersphp(php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$requestphp php.php=php php$keyphp php.php php'php:php php'php php.php php$valuephp php.php php"php\nphp"php;
php php php php php php php php php}

php php php php php php php php php$requestphp php.php=php php$thisphp-php>php_xmlphp;

php php php php php php php php returnphp php$requestphp;
php php php php php}
php}
