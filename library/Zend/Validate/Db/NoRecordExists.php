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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php NoRecordExistsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Dbphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Dbphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Confirmsphp aphp recordphp doesphp notphp existphp inphp aphp tablephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@usesphp php php php php php php Zendphp_Validatephp_Dbphp_Abstract
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Dbphp_NoRecordExistsphp extendsphp Zendphp_Validatephp_Dbphp_Abstract
php{
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$validphp php=php truephp;
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php php$resultphp php=php php$thisphp-php>php_queryphp(php$valuephp)php;
php php php php php php php php ifphp php(php$resultphp)php php{
php php php php php php php php php php php php php$validphp php=php falsephp;
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:ERRORphp_RECORDphp_FOUNDphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$validphp;
php php php php php}
php}
