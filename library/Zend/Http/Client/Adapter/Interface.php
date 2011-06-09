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
php php*php php@versionphp php php php php$Idphp:php Interfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Anphp interfacephp descriptionphp forphp Zendphp_Httpphp_Clientphp_Adapterphp classesphp.
php php*
php php*php Thesephp classesphp arephp usedphp asphp connectorsphp forphp Zendphp_Httpphp_Clientphp,php performingphp the
php php*php tasksphp ofphp connectingphp,php writingphp,php readingphp andphp closingphp connectionphp tophp thephp serverphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Clientphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Httpphp_Clientphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Setphp thephp configurationphp arrayphp forphp thephp adapter
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$config
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(php$configphp php=php arrayphp(php)php)php;

php php php php php/php*php*
php php php php php php*php Connectphp tophp thephp remotephp server
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$host
php php php php php php*php php@paramphp intphp php php php php php$port
php php php php php php*php php@paramphp booleanphp php$secure
php php php php php php*php/
php php php php publicphp functionphp connectphp(php$hostphp,php php$portphp php=php php8php0php,php php$securephp php=php falsephp)php;

php php php php php/php*php*
php php php php php php*php Sendphp requestphp tophp thephp remotephp server
php php php php php php*
php php php php php php*php php@paramphp stringphp php php php php php php php php$method
php php php php php php*php php@paramphp Zendphp_Uriphp_Httpphp php$url
php php php php php php*php php@paramphp stringphp php php php php php php php php$httpphp_ver
php php php php php php*php php@paramphp arrayphp php php php php php php php php php$headers
php php php php php php*php php@paramphp stringphp php php php php php php php php$body
php php php php php php*php php@returnphp stringphp Requestphp asphp text
php php php php php php*php/
php php php php publicphp functionphp writephp(php$methodphp,php php$urlphp,php php$httpphp_verphp php=php php'php1php.php1php'php,php php$headersphp php=php arrayphp(php)php,php php$bodyphp php=php php'php'php)php;

php php php php php/php*php*
php php php php php php*php Readphp responsephp fromphp server
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readphp(php)php;

php php php php php/php*php*
php php php php php php*php Closephp thephp connectionphp tophp thephp server
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp closephp(php)php;
php}
