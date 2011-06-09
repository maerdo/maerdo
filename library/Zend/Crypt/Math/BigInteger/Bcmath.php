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
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@subpackagephp Math
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Bcmathphp.phpphp php2php2php6php5php3php php2php0php1php0php-php0php7php-php2php2php php1php8php:php4php1php:php3php9Zphp mabephp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Mathphp/BigIntegerphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Supportphp forphp arbitraryphp precisionphp mathematicsphp inphp PHPphp.
php php*
php php*php Zendphp_Cryptphp_Mathphp_BigIntegerphp_Bcmathphp isphp aphp wrapperphp acrossphp thephp PHPphp BCMath
php php*php extensionphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Bcmathphp implementsphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Interface
php{

php php php php php/php*php*
php php php php php php*php Initialisephp aphp bigphp integerphp intophp anphp extensionphp specificphp typephp.php Thisphp isphp not
php php php php php php*php applicablephp tophp BCMathphp.
php php php php php php*php php@paramphp stringphp php$operand
php php php php php php*php php@paramphp intphp php$base
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp initphp(php$operandphp,php php$basephp php=php php1php0php)
php php php php php{
php php php php php php php php returnphp php$operandphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp twophp arbitraryphp precisionphp numbers
php php php php php php*
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp addphp(php$leftphp_operandphp,php php$rightphp_operandphp)
php php php php php{
php php php php php php php php returnphp bcaddphp(php$leftphp_operandphp,php php$rightphp_operandphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp subtractphp(php$leftphp_operandphp,php php$rightphp_operandphp)
php php php php php{
php php php php php php php php returnphp bcsubphp(php$leftphp_operandphp,php php$rightphp_operandphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Comparephp twophp bigphp integersphp andphp returnsphp resultphp asphp anphp integerphp wherephp php0php means
php php php php php php*php bothphp arephp identicalphp,php php1php thatphp leftphp_operandphp isphp largerphp,php orphp php-php1php that
php php php php php php*php rightphp_operandphp isphp largerphp.
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp comparephp(php$leftphp_operandphp,php php$rightphp_operandphp)
php php php php php{
php php php php php php php php returnphp bccompphp(php$leftphp_operandphp,php php$rightphp_operandphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dividephp twophp bigphp integersphp andphp returnphp resultphp orphp NULLphp ifphp thephp denominator
php php php php php php*php isphp zerophp.
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp dividephp(php$leftphp_operandphp,php php$rightphp_operandphp)
php php php php php{
php php php php php php php php returnphp bcdivphp(php$leftphp_operandphp,php php$rightphp_operandphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp modulusphp(php$leftphp_operandphp,php php$modulusphp)
php php php php php{
php php php php php php php php returnphp bcmodphp(php$leftphp_operandphp,php php$modulusphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp multiplyphp(php$leftphp_operandphp,php php$rightphp_operandphp)
php php php php php{
php php php php php php php php returnphp bcmulphp(php$leftphp_operandphp,php php$rightphp_operandphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp powphp(php$leftphp_operandphp,php php$rightphp_operandphp)
php php php php php{
php php php php php php php php returnphp bcpowphp(php$leftphp_operandphp,php php$rightphp_operandphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp powmodphp(php$leftphp_operandphp,php php$rightphp_operandphp,php php$modulusphp)
php php php php php{
php php php php php php php php returnphp bcpowmodphp(php$leftphp_operandphp,php php$rightphp_operandphp,php php$modulusphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$leftphp_operand
php php php php php php*php php@paramphp stringphp php$rightphp_operand
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp sqrtphp(php$operandphp)
php php php php php{
php php php php php php php php returnphp bcsqrtphp(php$operandphp)php;
php php php php php}


php php php php publicphp functionphp binaryToIntegerphp(php$operandphp)
php php php php php{
php php php php php php php php php$resultphp php=php php'php0php'php;
php php php php php php php php whilephp php(strlenphp(php$operandphp)php)php php{
php php php php php php php php php php php php php$ordphp php=php ordphp(substrphp(php$operandphp,php php0php,php php1php)php)php;
php php php php php php php php php php php php php$resultphp php=php bcaddphp(bcmulphp(php$resultphp,php php2php5php6php)php,php php$ordphp)php;
php php php php php php php php php php php php php$operandphp php=php substrphp(php$operandphp,php php1php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php publicphp functionphp integerToBinaryphp(php$operandphp)
php php php php php{
php php php php php php php php php$cmpphp php=php bccompphp(php$operandphp,php php0php)php;
php php php php php php php php php$returnphp php=php php'php'php;
php php php php php php php php ifphp php(php$cmpphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php"php\php0php"php;
php php php php php php php php php}
php php php php php php php php whilephp php(bccompphp(php$operandphp,php php0php)php php>php php0php)php php{
php php php php php php php php php php php php php$returnphp php=php chrphp(bcmodphp(php$operandphp,php php2php5php6php)php)php php.php php$returnphp;
php php php php php php php php php php php php php$operandphp php=php bcdivphp(php$operandphp,php php2php5php6php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(ordphp(php$returnphp[php0php]php)php php>php php1php2php7php)php php{
php php php php php php php php php php php php php$returnphp php=php php"php\php0php"php php.php php$returnphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*publicphp functionphp integerToBinaryphp(php$operandphp)
php php php php php{
php php php php php php php php php$returnphp php=php php'php'php;
php php php php php php php php whilephp(bccompphp(php$operandphp,php php'php0php'php)php)php php{
php php php php php php php php php php php php php$returnphp php.php=php chrphp(bcmodphp(php$operandphp,php php'php2php5php6php'php)php)php;
php php php php php php php php php php php php php$operandphp php=php bcdivphp(php$operandphp,php php'php2php5php6php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}php*php*php/php php/php/php Priorphp versionphp forphp referencedphp offset


php php php php publicphp functionphp hexToDecimalphp(php$operandphp)
php php php php php{
php php php php php php php php php$returnphp php=php php'php0php'php;
php php php php php php php php whilephp(strlenphp(php$hexphp)php)php php{
php php php php php php php php php php php php php$hexphp php=php hexdecphp(substrphp(php$operandphp,php php0php,php php4php)php)php;
php php php php php php php php php php php php php$decphp php=php bcaddphp(bcmulphp(php$returnphp,php php6php5php5php3php6php)php,php php$hexphp)php;
php php php php php php php php php php php php php$operandphp php=php substrphp(php$operandphp,php php4php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php}