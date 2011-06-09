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
php php*php php@versionphp php php php php$Idphp:php BigIntegerphp.phpphp php2php3php4php3php9php php2php0php1php0php-php1php1php-php2php3php php2php1php:php1php0php:php1php4Zphp alexanderphp php$
php php*php/

php/php*php*
php php*php Supportphp forphp arbitraryphp precisionphp mathematicsphp inphp PHPphp.
php php*
php php*php Zendphp_Cryptphp_Mathphp_BigIntegerphp isphp aphp wrapperphp acrossphp threephp PHPphp extensionsphp:php bcmathphp,php gmp
php php*php andphp bigphp_intphp.php Sincephp eachphp offerphp similarphp functionalityphp,php butphp availabilityphp of
php php*php eachphp differsphp acrossphp installationsphp ofphp PHPphp,php thisphp wrapperphp attemptsphp tophp select
php php*php thephp fastestphp optionphp availablephp andphp encapsulatephp aphp subsetphp ofphp itsphp functionality
php php*php whichphp allphp extensionsphp sharephp inphp commonphp.
php php*
php php*php Thisphp classphp requiresphp onephp ofphp thephp threephp extensionsphp tophp bephp availablephp.php BCMATH
php php*php whilephp thephp slowestphp,php isphp availablephp byphp defaultphp underphp Windowsphp,php andphp underphp Unix
php php*php ifphp PHPphp isphp compiledphp withphp thephp flagphp php"php-php-enablephp-bcmathphp"php.php GMPphp requiresphp thephp gmp
php php*php libraryphp fromphp httpphp:php/php/wwwphp.swoxphp.comphp/gmpphp/php andphp PHPphp compiledphp withphp thephp php"php-php-withphp-gmpphp"
php php*php flagphp.php BIGphp_INTphp supportphp isphp availablephp fromphp aphp bigphp_intphp PHPphp libraryphp availablephp from
php php*php onlyphp fromphp PECLphp php(aphp Windowsphp portphp isphp notphp availablephp)php.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cryptphp_Mathphp_BigInteger
php{

php php php php php/php*php*
php php php php php php*php Holdsphp anphp instancephp ofphp onephp ofphp thephp threephp arbitraryphp precisionphp wrappersphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_mathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp;php aphp Factoryphp whichphp detectsphp aphp suitablephp PHPphp extensionphp for
php php php php php php*php arbitraryphp precisionphp mathphp andphp instantiatesphp thephp suitablephp wrapper
php php php php php php*php objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$extension
php php php php php php*php php@throwsphp php Zendphp_Cryptphp_Mathphp_BigIntegerphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$extensionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$extensionphp php!php=php=php nullphp php&php&php php!inphp_arrayphp(php$extensionphp,php arrayphp(php'bcmathphp'php,php php'gmpphp'php,php php'bigintphp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp(php'Zendphp/Cryptphp/Mathphp/BigIntegerphp/Exceptionphp.phpphp'php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Exceptionphp(php'Invalidphp extensionphp typephp;php pleasephp usephp onephp ofphp bcmathphp,php gmpphp orphp bigintphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_loadAdapterphp(php$extensionphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Redirectphp allphp publicphp methodphp callsphp tophp thephp wrappedphp extensionphp objectphp.
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$methodName
php php php php php php*php php@paramphp php php arrayphp php$args
php php php php php php*php php@throwsphp php Zendphp_Cryptphp_Mathphp_BigIntegerphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodNamephp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp(php!methodphp_existsphp(php$thisphp-php>php_mathphp,php php$methodNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Mathphp/BigIntegerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Exceptionphp(php'invalidphp methodphp callphp:php php'php php.php getphp_classphp(php$thisphp-php>php_mathphp)php php.php php'php:php:php'php php.php php$methodNamephp php.php php'php(php)php doesphp notphp existphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_mathphp,php php$methodNamephp)php,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$extension
php php php php php php*php php@throwsphp php Zendphp_Cryptphp_Mathphp_BigIntegerphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_loadAdapterphp(php$extensionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$extensionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(extensionphp_loadedphp(php'gmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php$extensionphp php=php php'gmpphp'php;
php php php php php php php php php php php php php/php/php}php elseifphp php(extensionphp_loadedphp(php'bigphp_intphp'php)php)php php{
php php php php php php php php php php php php php/php/php php php php php$extensionphp php=php php'bigphp_intphp'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$extensionphp php=php php'bcmathphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp(php$extensionphp php=php=php php'gmpphp'php php&php&php extensionphp_loadedphp(php'gmpphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Mathphp/BigIntegerphp/Gmpphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_mathphp php=php newphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Gmpphp(php)php;
php php php php php php php php php/php/php}php elseifphp(php$extensionphp php=php=php php'bigintphp'php php&php&php extensionphp_loadedphp(php'bigphp_intphp'php)php)php php{
php php php php php php php php php/php/php php php php requirephp_oncephp php'Zendphp/Cryptphp_Mathphp/BigIntegerphp/Bigintphp.phpphp'php;
php php php php php php php php php/php/php php php php php$thisphp-php>php_mathphp php=php newphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Bigintphp(php)php;
php php php php php php php php php}php elseifphp php(php$extensionphp php=php=php php'bcmathphp'php php&php&php extensionphp_loadedphp(php'bcmathphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Mathphp/BigIntegerphp/Bcmathphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_mathphp php=php newphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Bcmathphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Mathphp/BigIntegerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Mathphp_BigIntegerphp_Exceptionphp(php$extensionphp php.php php'php bigphp integerphp precisionphp mathphp supportphp notphp detectedphp'php)php;
php php php php php php php php php}
php php php php php}

php}