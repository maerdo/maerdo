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
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Maskphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Filterphp_String
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Filterphp/Stringphp.phpphp'php;


php/php*php*
php php*php Zendphp_Ldapphp_Filterphp_Maskphp providesphp aphp simplephp stringphp filterphp tophp bephp usedphp withphp aphp maskphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Ldapphp_Filterphp_Maskphp extendsphp Zendphp_Ldapphp_Filterphp_String
php{
php php php php php/php*php*
php php php php php php*php Createsphp aphp Zendphp_Ldapphp_Filterphp_Stringphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$mask
php php php php php php*php php@paramphp stringphp php$valuephp,php.php.php.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$maskphp,php php$valuephp)
php php php php php{
php php php php php php php php php$argsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp<countphp(php$argsphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$argsphp[php$iphp]php php=php selfphp:php:escapeValuephp(php$argsphp[php$iphp]php)php;
php php php php php php php php php}
php php php php php php php php php$filterphp php=php vsprintfphp(php$maskphp,php php$argsphp)php;
php php php php php php php php parentphp:php:php_php_constructphp(php$filterphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp representationphp ofphp thephp filterphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filterphp;
php php php php php}
php}