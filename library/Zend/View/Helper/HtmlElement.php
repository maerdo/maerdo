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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HtmlElementphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Viewphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Viewphp_Helperphp_HtmlElementphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php EOLphp character
php php php php php php*php/
php php php php constphp EOLphp php=php php"php\nphp"php;

php php php php php/php*php*
php php php php php php*php Thephp tagphp closingphp bracket
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_closingBracketphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Getphp thephp tagphp closingphp bracket
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getClosingBracketphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_closingBracketphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isXhtmlphp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_closingBracketphp php=php php'php php/php>php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_closingBracketphp php=php php'php>php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_closingBracketphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp doctypephp XHTMLphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_isXhtmlphp(php)
php php php php php{
php php php php php php php php php$doctypephp php=php php$thisphp-php>viewphp-php>doctypephp(php)php;
php php php php php php php php returnphp php$doctypephp-php>isXhtmlphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp anphp associativephp arrayphp tophp aphp stringphp ofphp tagphp attributesphp.
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$attribsphp Fromphp thisphp arrayphp,php eachphp keyphp-valuephp pairphp is
php php php php php php*php convertedphp tophp anphp attributephp namephp andphp valuephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp XHTMLphp forphp thephp attributesphp.
php php php php php php*php/
php php php php protectedphp functionphp php_htmlAttribsphp(php$attribsphp)
php php php php php{
php php php php php php php php php$xhtmlphp php=php php'php'php;
php php php php php php php php foreachphp php(php(arrayphp)php php$attribsphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$keyphp php=php php$thisphp-php>viewphp-php>escapephp(php$keyphp)php;

php php php php php php php php php php php php ifphp php(php(php'onphp'php php=php=php substrphp(php$keyphp,php php0php,php php2php)php)php php|php|php php(php'constraintsphp'php php=php=php php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Donphp'tphp escapephp eventphp attributesphp;php php_dophp_php substitutephp doublephp quotesphp withphp singles
php php php php php php php php php php php php php php php php ifphp php(php!isphp_scalarphp(php$valphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php nonphp-scalarphp dataphp shouldphp bephp castphp tophp JSONphp first
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$valphp php=php Zendphp_Jsonphp:php:encodephp(php$valphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$valphp php=php pregphp_replacephp(php'php/php"php(php[php^php"php]php*php)php"php:php/php'php,php php'php$php1php:php'php,php php$valphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valphp php=php implodephp(php'php php'php,php php$valphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$valphp php=php php$thisphp-php>viewphp-php>escapephp(php$valphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php'idphp'php php=php=php php$keyphp)php php{
php php php php php php php php php php php php php php php php php$valphp php=php php$thisphp-php>php_normalizeIdphp(php$valphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(strposphp(php$valphp,php php'php"php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$xhtmlphp php.php=php php"php php$keyphp=php'php$valphp'php"php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$xhtmlphp php.php=php php"php php$keyphp=php\php"php$valphp\php"php"php;
php php php php php php php php php php php php php}

php php php php php php php php php}
php php php php php php php php returnphp php$xhtmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp anphp ID
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_normalizeIdphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(strstrphp(php$valuephp,php php'php[php'php)php)php php{
php php php php php php php php php php php php ifphp php(php'php[php]php'php php=php=php substrphp(php$valuephp,php php-php2php)php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php substrphp(php$valuephp,php php0php,php strlenphp(php$valuephp)php php-php php2php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$valuephp php=php trimphp(php$valuephp,php php'php]php'php)php;
php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(php'php]php[php'php,php php'php-php'php,php php$valuephp)php;
php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(php'php[php'php,php php'php-php'php,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}
php}
