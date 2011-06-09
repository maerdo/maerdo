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
php php*php php@packagephp php php php Zendphp_Locale
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php PhpMathphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Utilityphp classphp forphp proxyingphp mathphp functionphp tophp bcmathphp functionsphp,php ifphp presentphp,
php php*php otherwisephp tophp PHPphp builtinphp mathphp operatorsphp,php withphp limitedphp detectionphp ofphp overflowphp conditionsphp.
php php*php Samplingphp ofphp PHPphp environmentsphp andphp platformsphp suggestsphp thatphp atphp leastphp php8php0php%php tophp php9php0php%php supportphp bcmathphp.
php php*php Thisphp filephp shouldphp onlyphp bephp loadedphp forphp thephp php1php0php%php tophp php2php0php%php lackingphp accessphp tophp thephp bcmathphp extensionphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Locale
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Localephp_Mathphp_PhpMathphp extendsphp Zendphp_Localephp_Math
php{
php php php php publicphp staticphp functionphp disablephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_bcmathDisabledphp php=php truephp;
php php php php php php php php selfphp:php:php$addphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Addphp'php)php;
php php php php php php php php selfphp:php:php$subphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Subphp'php)php;
php php php php php php php php selfphp:php:php$powphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Powphp'php)php;
php php php php php php php php selfphp:php:php$mulphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Mulphp'php)php;
php php php php php php php php selfphp:php:php$divphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Divphp'php)php;
php php php php php php php php selfphp:php:php$compphp php php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Compphp'php)php;
php php php php php php php php selfphp:php:php$sqrtphp php php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Sqrtphp'php)php;
php php php php php php php php selfphp:php:php$modphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Modphp'php)php;
php php php php php php php php selfphp:php:php$scalephp php=php arrayphp(php'Zendphp_Localephp_Mathphp_PhpMathphp'php,php php'Scalephp'php)php;

php php php php php php php php selfphp:php:php$defaultScalephp php php php php php=php php0php;
php php php php php php php php selfphp:php:php$defaultPrecisionphp php=php php1php;
php php php php php}

php php php php publicphp staticphp php$defaultScalephp;
php php php php publicphp staticphp php$defaultPrecisionphp;


php php php php publicphp staticphp functionphp Addphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$scalephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$scalephp php php php php php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultScalephp;
php php php php php php php php php php php php php$precisionphp php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultPrecisionphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$precisionphp php=php powphp(php1php0php,php php-php$scalephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$opphp1php)php)php php{
php php php php php php php php php php php php php$opphp1php php=php php0php;
php php php php php php php php php}
php php php php php php php php php$opphp1php php=php selfphp:php:normalizephp(php$opphp1php)php;
php php php php php php php php php$opphp2php php=php selfphp:php:normalizephp(php$opphp2php)php;
php php php php php php php php php$resultphp php=php php$opphp1php php+php php$opphp2php;
php php php php php php php php ifphp php(isphp_infinitephp(php$resultphp)php php orphp php php(absphp(php$resultphp php-php php$opphp2php php-php php$opphp1php)php php>php php$precisionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Mathphp_Exceptionphp(php"additionphp overflowphp:php php$opphp1php php+php php$opphp2php php!php=php php$resultphp"php,php php$opphp1php,php php$opphp2php,php php$resultphp)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:roundphp(selfphp:php:normalizephp(php$resultphp)php,php php$scalephp)php;
php php php php php}

php php php php publicphp staticphp functionphp Subphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$scalephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$scalephp php php php php php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultScalephp;
php php php php php php php php php php php php php$precisionphp php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultPrecisionphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$precisionphp php=php powphp(php1php0php,php php-php$scalephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$opphp1php)php)php php{
php php php php php php php php php php php php php$opphp1php php=php php0php;
php php php php php php php php php}
php php php php php php php php php$opphp1php php php=php selfphp:php:normalizephp(php$opphp1php)php;
php php php php php php php php php$opphp2php php php=php selfphp:php:normalizephp(php$opphp2php)php;
php php php php php php php php php$resultphp php=php php$opphp1php php-php php$opphp2php;
php php php php php php php php ifphp php(isphp_infinitephp(php$resultphp)php php orphp php php(absphp(php$resultphp php+php php$opphp2php php-php php$opphp1php)php php>php php$precisionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Mathphp_Exceptionphp(php"subtractionphp overflowphp:php php$opphp1php php-php php$opphp2php php!php=php php$resultphp"php,php php$opphp1php,php php$opphp2php,php php$resultphp)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:roundphp(selfphp:php:normalizephp(php$resultphp)php,php php$scalephp)php;
php php php php php}

php php php php publicphp staticphp functionphp Powphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$scalephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$scalephp php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultScalephp;
php php php php php php php php php}

php php php php php php php php php$opphp1php php=php selfphp:php:normalizephp(php$opphp1php)php;
php php php php php php php php php$opphp2php php=php selfphp:php:normalizephp(php$opphp2php)php;

php php php php php php php php php/php/php BCMathphp extensionphp doesnphp'tphp usephp decimalphp partphp ofphp thephp power
php php php php php php php php php/php/php Providephp thephp samephp behavior
php php php php php php php php php$opphp2php php=php php(php$opphp2php php>php php0php)php php?php floorphp(php$opphp2php)php php:php ceilphp(php$opphp2php)php;

php php php php php php php php php$resultphp php=php powphp(php$opphp1php,php php$opphp2php)php;
php php php php php php php php ifphp php(isphp_infinitephp(php$resultphp)php php orphp php isphp_nanphp(php$resultphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Mathphp_Exceptionphp(php"powerphp overflowphp:php php$opphp1php php^php php$opphp2php"php,php php$opphp1php,php php$opphp2php,php php$resultphp)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:roundphp(selfphp:php:normalizephp(php$resultphp)php,php php$scalephp)php;
php php php php php}

php php php php publicphp staticphp functionphp Mulphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$scalephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$scalephp php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultScalephp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$opphp1php)php)php php{
php php php php php php php php php php php php php$opphp1php php=php php0php;
php php php php php php php php php}
php php php php php php php php php$opphp1php php=php selfphp:php:normalizephp(php$opphp1php)php;
php php php php php php php php php$opphp2php php=php selfphp:php:normalizephp(php$opphp2php)php;
php php php php php php php php php$resultphp php=php php$opphp1php php*php php$opphp2php;
php php php php php php php php ifphp php(isphp_infinitephp(php$resultphp)php php orphp php isphp_nanphp(php$resultphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Mathphp_Exceptionphp(php"multiplicationphp overflowphp:php php$opphp1php php*php php$opphp2php php!php=php php$resultphp"php,php php$opphp1php,php php$opphp2php,php php$resultphp)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:roundphp(selfphp:php:normalizephp(php$resultphp)php,php php$scalephp)php;
php php php php php}

php php php php publicphp staticphp functionphp Divphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$scalephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$scalephp php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultScalephp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$opphp2php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Mathphp_Exceptionphp(php"canphp notphp dividephp byphp zerophp"php,php php$opphp1php,php php$opphp2php,php nullphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$opphp1php)php)php php{
php php php php php php php php php php php php php$opphp1php php=php php0php;
php php php php php php php php php}
php php php php php php php php php$opphp1php php=php selfphp:php:normalizephp(php$opphp1php)php;
php php php php php php php php php$opphp2php php=php selfphp:php:normalizephp(php$opphp2php)php;
php php php php php php php php php$resultphp php=php php$opphp1php php/php php$opphp2php;
php php php php php php php php ifphp php(isphp_infinitephp(php$resultphp)php php orphp php isphp_nanphp(php$resultphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Mathphp_Exceptionphp(php"divisionphp overflowphp:php php$opphp1php php/php php$opphp2php php!php=php php$resultphp"php,php php$opphp1php,php php$opphp2php,php php$resultphp)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:roundphp(selfphp:php:normalizephp(php$resultphp)php,php php$scalephp)php;
php php php php php}

php php php php publicphp staticphp functionphp Sqrtphp(php$opphp1php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$scalephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$scalephp php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultScalephp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$opphp1php)php)php php{
php php php php php php php php php php php php php$opphp1php php=php php0php;
php php php php php php php php php}
php php php php php php php php php$opphp1php php=php selfphp:php:normalizephp(php$opphp1php)php;
php php php php php php php php php$resultphp php=php sqrtphp(php$opphp1php)php;
php php php php php php php php ifphp php(isphp_nanphp(php$resultphp)php)php php{
php php php php php php php php php php php php returnphp NULLphp;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:roundphp(selfphp:php:normalizephp(php$resultphp)php,php php$scalephp)php;
php php php php php}

php php php php publicphp staticphp functionphp Modphp(php$opphp1php,php php$opphp2php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$opphp1php)php)php php{
php php php php php php php php php php php php php$opphp1php php=php php0php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$opphp2php)php)php php{
php php php php php php php php php php php php returnphp NULLphp;
php php php php php php php php php}
php php php php php php php php php$opphp1php php=php selfphp:php:normalizephp(php$opphp1php)php;
php php php php php php php php php$opphp2php php=php selfphp:php:normalizephp(php$opphp2php)php;
php php php php php php php php ifphp php(php(intphp)php$opphp2php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp NULLphp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php$opphp1php php%php php$opphp2php;
php php php php php php php php ifphp php(isphp_nanphp(php$resultphp)php php orphp php php(php(php$opphp1php php-php php$resultphp)php php%php php$opphp2php php!php=php php0php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Mathphp_Exceptionphp(php"modulusphp calculationphp errorphp:php php$opphp1php php%php php$opphp2php php!php=php php$resultphp"php,php php$opphp1php,php php$opphp2php,php php$resultphp)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:normalizephp(php$resultphp)php;
php php php php php}

php php php php publicphp staticphp functionphp Compphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$scalephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$scalephp php php php php php=php Zendphp_Localephp_Mathphp_PhpMathphp:php:php$defaultScalephp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$opphp1php)php)php php{
php php php php php php php php php php php php php$opphp1php php=php php0php;
php php php php php php php php php}
php php php php php php php php php$opphp1php php=php selfphp:php:normalizephp(php$opphp1php)php;
php php php php php php php php php$opphp2php php=php selfphp:php:normalizephp(php$opphp2php)php;
php php php php php php php php ifphp php(php$scalephp <php>php php0php)php php{
php php php php php php php php php php php php php$opphp1php php=php selfphp:php:roundphp(php$opphp1php,php php$scalephp)php;
php php php php php php php php php php php php php$opphp2php php=php selfphp:php:roundphp(php$opphp2php,php php$scalephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$opphp1php php=php php(php$opphp1php php>php php0php)php php?php floorphp(php$opphp1php)php php:php ceilphp(php$opphp1php)php;
php php php php php php php php php php php php php$opphp2php php=php php(php$opphp2php php>php php0php)php php?php floorphp(php$opphp2php)php php:php ceilphp(php$opphp2php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$opphp1php php>php php$opphp2php)php php{
php php php php php php php php php php php php returnphp php1php;
php php php php php php php php php}php elsephp ifphp php(php$opphp1php <php php$opphp2php)php php{
php php php php php php php php php php php php returnphp php-php1php;
php php php php php php php php php}
php php php php php php php php returnphp php0php;
php php php php php}

php php php php publicphp staticphp functionphp Scalephp(php$scalephp)
php php php php php{
php php php php php php php php ifphp php(php$scalephp php>php php9php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Localephp_Mathphp_Exceptionphp(php"canphp notphp scalephp tophp precisionphp php$scalephp"php,php php$scalephp,php nullphp,php nullphp)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:php$defaultScalephp php php php php php=php php$scalephp;
php php php php php php php php selfphp:php:php$defaultPrecisionphp php=php powphp(php1php0php,php php-php$scalephp)php;
php php php php php php php php returnphp truephp;
php php php php php}
php}

Zendphp_Localephp_Mathphp_PhpMathphp:php:disablephp(php)php;php php/php/php disablephp usephp ofphp bcmathphp functions
