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
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Frontend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Capturephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Cachephp_Core
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Corephp.phpphp'php;


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Frontend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Frontendphp_Capturephp extendsphp Zendphp_Cachephp_Core
php{
php php php php php/php*php*
php php php php php php*php Pagephp identifiers
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_idStackphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Tags
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tagsphp php=php arrayphp(php)php;

php php php php protectedphp php$php_extensionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Startphp thephp cache
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp Cachephp id
php php php php php php*php php@returnphp mixedphp Truephp ifphp thephp cachephp isphp hitphp php(falsephp elsephp)php withphp php$echoDataphp=truephp php(defaultphp)php php;php stringphp elsephp php(datasphp)
php php php php php php*php/
php php php php publicphp functionphp startphp(php$idphp,php arrayphp php$tagsphp,php php$extensionphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagsphp php=php php$tagsphp;
php php php php php php php php php$thisphp-php>php_extensionphp php=php php$extensionphp;
php php php php php php php php obphp_startphp(arrayphp(php$thisphp,php php'php_flushphp'php)php)php;
php php php php php php php php obphp_implicitphp_flushphp(falsephp)php;
php php php php php php php php php$thisphp-php>php_idStackphp[php]php php=php php$idphp;
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php callbackphp forphp outputphp buffering
php php php php php php*php php(shouldnphp'tphp reallyphp bephp calledphp manuallyphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp Bufferedphp output
php php php php php php*php php@returnphp stringphp Dataphp tophp sendphp tophp browser
php php php php php php*php/
php php php php publicphp functionphp php_flushphp(php$dataphp)
php php php php php{
php php php php php php php php php$idphp php=php arrayphp_popphp(php$thisphp-php>php_idStackphp)php;
php php php php php php php php ifphp php(php$idphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'usephp ofphp php_flushphp(php)php withoutphp aphp startphp(php)php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_extensionphp)php php{
php php php php php php php php php php php php php$thisphp-php>savephp(serializephp(arrayphp(php$dataphp,php php$thisphp-php>php_extensionphp)php)php,php php$idphp,php php$thisphp-php>php_tagsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>savephp(php$dataphp,php php$idphp,php php$thisphp-php>php_tagsphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}
php}
