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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Authentication
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Authentication
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Authenticationphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Hmac
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Authentication
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Authenticationphp_Sphp3php extendsphp Zendphp_Servicephp_Amazonphp_Authentication
php{
php php php php php/php*php*
php php php php php php*php Addphp thephp Sphp3php Authorizationphp signaturephp tophp thephp requestphp headers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php&php$headers
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generateSignaturephp(php$methodphp,php php$pathphp,php php&php$headersphp)
php php php php php{
php php php php php php php php ifphp php(php!php isphp_arrayphp(php$headersphp)php)php php{
php php php php php php php php php php php php php$headersphp php=php arrayphp(php$headersphp)php;
php php php php php php php php php}

php php php php php php php php php$typephp php=php php$mdphp5php php=php php$datephp php=php php'php'php;

php php php php php php php php php/php/php Searchphp forphp thephp Contentphp-typephp,php Contentphp-MDphp5php andphp Datephp headers
php php php php php php php php foreachphp php(php$headersphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php ifphp php(strcasecmpphp(php$keyphp,php php'contentphp-typephp'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php php$valphp;
php php php php php php php php php php php php php}php elsephp ifphp php(strcasecmpphp(php$keyphp,php php'contentphp-mdphp5php'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$mdphp5php php=php php$valphp;
php php php php php php php php php php php php php}php elsephp ifphp php(strcasecmpphp(php$keyphp,php php'datephp'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$datephp php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp wephp havephp anphp xphp-amzphp-datephp headerphp,php usephp thatphp insteadphp ofphp thephp normalphp Date
php php php php php php php php ifphp php(issetphp(php$headersphp[php'xphp-amzphp-datephp'php]php)php php&php&php issetphp(php$datephp)php)php php{
php php php php php php php php php php php php php$datephp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php php$sigphp_strphp php=php php"php$methodphp\nphp$mdphp5php\nphp$typephp\nphp$datephp\nphp"php;

php php php php php php php php php/php/php Forphp xphp-amzphp-php headersphp,php combinephp likephp keysphp,php lowercasephp themphp,php sortphp them
php php php php php php php php php/php/php alphabeticallyphp andphp removephp excessphp spacesphp aroundphp values
php php php php php php php php php$amzphp_headersphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$headersphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$keyphp php=php strtolowerphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(substrphp(php$keyphp,php php0php,php php6php)php php=php=php php'xphp-amzphp-php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$amzphp_headersphp[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$amzphp_headersphp[php$keyphp]php[php]php php=php pregphp_replacephp(php'php/php\sphp+php/php'php,php php'php php'php,php php$valphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$amzphp_headersphp)php)php php{
php php php php php php php php php php php php ksortphp(php$amzphp_headersphp)php;
php php php php php php php php php php php php foreachphp php(php$amzphp_headersphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php php$sigphp_strphp php.php=php php$keyphp php.php php'php:php'php php.php implodephp(php'php,php'php,php php$valphp)php php.php php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$sigphp_strphp php.php=php php'php/php'php.parsephp_urlphp(php$pathphp,php PHPphp_URLphp_PATHphp)php;
php php php php php php php php ifphp php(strposphp(php$pathphp,php php'php?locationphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$sigphp_strphp php.php=php php'php?locationphp'php;
php php php php php php php php php}php else
php php php php php php php php php php php php ifphp php(strposphp(php$pathphp,php php'php?aclphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$sigphp_strphp php.php=php php'php?aclphp'php;
php php php php php php php php php php php php php}php else
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$pathphp,php php'php?torrentphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$sigphp_strphp php.php=php php'php?torrentphp'php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php$signaturephp php=php basephp6php4php_encodephp(Zendphp_Cryptphp_Hmacphp:php:computephp(php$thisphp-php>php_secretKeyphp,php php'shaphp1php'php,php utfphp8php_encodephp(php$sigphp_strphp)php,php Zendphp_Cryptphp_Hmacphp:php:BINARYphp)php)php;
php php php php php php php php php$headersphp[php'Authorizationphp'php]php php=php php'AWSphp php'php php.php php$thisphp-php>php_accessKeyphp php.php php'php:php'php php.php php$signaturephp;

php php php php php php php php returnphp php$sigphp_strphp;
php php php php php}
php}
