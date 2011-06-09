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
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@subpackagephp Rendererphp_Html
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Imgphp.phpphp php2php0php6php6php3php php2php0php1php0php-php0php1php-php2php6php php1php8php:php4php5php:php1php8Zphp kokxphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Markupphp_Rendererphp_Html
php php*php/
requirephp_oncephp php'Zendphp/Markupphp/Rendererphp/Htmlphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Markupphp_Rendererphp_Htmlphp_HtmlAbstract
php php*php/
requirephp_oncephp php'Zendphp/Markupphp/Rendererphp/Htmlphp/HtmlAbstractphp.phpphp'php;

php/php*php*
php php*php Tagphp interface
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@subpackagephp Rendererphp_Html
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Markupphp_Rendererphp_Htmlphp_Imgphp extendsphp Zendphp_Markupphp_Rendererphp_Htmlphp_HtmlAbstract
php{

php php php php php/php*php*
php php php php php php*php Convertphp thephp token
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@paramphp stringphp php$text
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp convertphp(Zendphp_Markupphp_Tokenphp php$tokenphp,php php$textphp)
php php php php php{
php php php php php php php php php$uriphp php=php php$textphp;

php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php(php[aphp-zphp]php[aphp-zphp+php\php-php.php]php*php)php:php/iphp'php,php php$uriphp)php)php php{
php php php php php php php php php php php php php$uriphp php=php php'httpphp:php/php/php'php php.php php$uriphp;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp ifphp thephp URLphp isphp valid
php php php php php php php php ifphp php(php!Zendphp_Markupphp_Rendererphp_Htmlphp:php:isValidUriphp(php$uriphp)php)php php{
php php php php php php php php php php php php returnphp php$textphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$tokenphp-php>hasAttributephp(php'altphp'php)php)php php{
php php php php php php php php php php php php php$altphp php=php php$tokenphp-php>getAttributephp(php'altphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php tryphp tophp getphp thephp alternativephp fromphp thephp URL
php php php php php php php php php php php php php$altphp php=php rtrimphp(php$textphp,php php'php/php'php)php;
php php php php php php php php php php php php php$altphp php=php strrchrphp(php$altphp,php php'php/php'php)php;
php php php php php php php php php php php php ifphp php(falsephp php!php=php=php strposphp(php$altphp,php php'php.php'php)php)php php{
php php php php php php php php php php php php php php php php php$altphp php=php substrphp(php$altphp,php php1php,php strposphp(php$altphp,php php'php.php'php)php php-php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php runphp thephp URIphp andphp altphp throughphp htmlentities
php php php php php php php php php$uriphp php=php htmlentitiesphp(php$uriphp,php ENTphp_QUOTESphp,php Zendphp_Markupphp_Rendererphp_Htmlphp:php:getEncodingphp(php)php)php;
php php php php php php php php php$altphp php=php htmlentitiesphp(php$altphp,php ENTphp_QUOTESphp,php Zendphp_Markupphp_Rendererphp_Htmlphp:php:getEncodingphp(php)php)php;


php php php php php php php php returnphp php"php<imgphp srcphp=php\php"php{php$uriphp}php\php"php altphp=php\php"php{php$altphp}php\php"php"php php.php Zendphp_Markupphp_Rendererphp_Htmlphp:php:renderAttributesphp(php$tokenphp)php php.php php"php php/php>php"php;
php php php php php}

php}
