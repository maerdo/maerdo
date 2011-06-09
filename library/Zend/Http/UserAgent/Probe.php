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
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/AbstractDevicephp.phpphp'php;

php/php*php*
php php*php Probephp browserphp typephp matcher
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_UserAgentphp_Probephp extendsphp Zendphp_Httpphp_UserAgentphp_AbstractDevice
php{
php php php php php/php*php*
php php php php php php*php Userphp Agentphp Signatures
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_uaSignaturesphp php=php arrayphp(
php php php php php php php php php'witbephp'php,
php php php php php php php php php'netvigiephp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Comparisonphp ofphp thephp UserAgentphp chainphp andphp Userphp Agentphp signatures
php php php php php php*
php php php php php php*php php@paramphp stringphp php$userAgentphp Userphp Agentphp chain
php php php php php php*php php@paramphp php arrayphp php$serverphp php$php_SERVERphp likephp param
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp matchphp(php$userAgentphp,php php$serverphp)
php php php php php{
php php php php php php php php returnphp selfphp:php:php_matchAgentAgainstSignaturesphp(php$userAgentphp,php selfphp:php:php$php_uaSignaturesphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Givesphp thephp currentphp browserphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php'probephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Lookphp forphp features
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_defineFeaturesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>setFeaturephp(php'imagesphp'php,php falsephp,php php'productphp_capabilityphp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'iframesphp'php,php falsephp,php php'productphp_capabilityphp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'framesphp'php,php falsephp,php php'productphp_capabilityphp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'javascriptphp'php,php falsephp,php php'productphp_capabilityphp'php)php;
php php php php php php php php returnphp parentphp:php:php_defineFeaturesphp(php)php;
php php php php php}
php}
