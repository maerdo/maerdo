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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Abstractphp Amazonphp classphp thatphp handlesphp thephp credentialsphp forphp anyphp ofphp thephp Webphp Servicesphp that
php php*php Amazonphp offers
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_Amazonphp_Abstractphp extendsphp Zendphp_Servicephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Amazonphp Accessphp Key
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultAccessKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Amazonphp Secretphp Key
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultSecretKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Amazonphp Secretphp Key
php php php php php php*php/
php php php php protectedphp php$php_secretKeyphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Amazonphp Accessphp Key
php php php php php php*php/
php php php php protectedphp php$php_accessKeyphp;


php php php php php/php*php*
php php php php php php*php Setphp thephp keysphp tophp usephp whenphp accessingphp SQSphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$accessphp_keyphp php php php php php php Setphp thephp defaultphp Accessphp Key
php php php php php php*php php@paramphp php stringphp php$secretphp_keyphp php php php php php php Setphp thephp defaultphp Secretphp Key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setKeysphp(php$accessKeyphp,php php$secretKeyphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultAccessKeyphp php=php php$accessKeyphp;
php php php php php php php php selfphp:php:php$php_defaultSecretKeyphp php=php php$secretKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp Amazonphp clientphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$accessphp_keyphp php php php php php php Overridephp thephp defaultphp Accessphp Key
php php php php php php*php php@paramphp php stringphp php$secretphp_keyphp php php php php php php Overridephp thephp defaultphp Secretphp Key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$accessKeyphp=nullphp,php php$secretKeyphp=nullphp)
php php php php php{
php php php php php php php php ifphp(php!php$accessKeyphp)php php{
php php php php php php php php php php php php php$accessKeyphp php=php selfphp:php:php$php_defaultAccessKeyphp;
php php php php php php php php php}
php php php php php php php php ifphp(php!php$secretKeyphp)php php{
php php php php php php php php php php php php php$secretKeyphp php=php selfphp:php:php$php_defaultSecretKeyphp;
php php php php php php php php php}

php php php php php php php php ifphp(php!php$accessKeyphp php|php|php php!php$secretKeyphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Exceptionphp(php"AWSphp keysphp werephp notphp suppliedphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_accessKeyphp php=php php$accessKeyphp;
php php php php php php php php php$thisphp-php>php_secretKeyphp php=php php$secretKeyphp;
php php php php php}



php php php php php/php*php*
php php php php php php*php Methodphp tophp fetchphp thephp Accessphp Key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getAccessKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_accessKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp fetchphp thephp Secretphp AWSphp Key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getSecretKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_secretKeyphp;
php php php php php}
php}
