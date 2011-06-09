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
php php*php php@versionphp php php php php$Idphp:php Mathphp.phpphp php2php1php1php8php0php php2php0php1php0php-php0php2php-php2php3php php2php2php:php0php0php:php2php9Zphp matthewphp php$
php php*php/


php/php*php*
php php*php Utilityphp classphp forphp proxyingphp mathphp functionphp tophp bcmathphp functionsphp,php ifphp presentphp,
php php*php otherwisephp tophp PHPphp builtinphp mathphp operatorsphp,php withphp limitedphp detectionphp ofphp overflowphp conditionsphp.
php php*php Samplingphp ofphp PHPphp environmentsphp andphp platformsphp suggestsphp thatphp atphp leastphp php8php0php%php tophp php9php0php%php supportphp bcmathphp.
php php*php Thusphp,php thisphp filephp shouldphp bephp asphp lightphp asphp possiblephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Locale
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Localephp_Math
php{
php php php php php/php/php supportphp unitphp testingphp withoutphp usingphp bcmathphp functions
php php php php publicphp staticphp php$php_bcmathDisabledphp php=php falsephp;

php php php php publicphp staticphp php$addphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp'php,php php'Addphp'php)php;
php php php php publicphp staticphp php$subphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp'php,php php'Subphp'php)php;
php php php php publicphp staticphp php$powphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp'php,php php'Powphp'php)php;
php php php php publicphp staticphp php$mulphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp'php,php php'Mulphp'php)php;
php php php php publicphp staticphp php$divphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp'php,php php'Divphp'php)php;
php php php php publicphp staticphp php$compphp php php=php arrayphp(php'Zendphp_Localephp_Mathphp'php,php php'Compphp'php)php;
php php php php publicphp staticphp php$sqrtphp php php=php arrayphp(php'Zendphp_Localephp_Mathphp'php,php php'Sqrtphp'php)php;
php php php php publicphp staticphp php$modphp php php php=php arrayphp(php'Zendphp_Localephp_Mathphp'php,php php'Modphp'php)php;
php php php php publicphp staticphp php$scalephp php=php php'bcscalephp'php;

php php php php publicphp staticphp functionphp isBcmathDisabledphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_bcmathDisabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Surprisinglyphp,php thephp resultsphp ofphp thisphp implementationphp ofphp roundphp(php)
php php php php php php*php provephp betterphp thanphp thephp nativephp PHPphp roundphp(php)php.php Forphp examplephp,php tryphp:
php php php php php php*php php php roundphp(php6php3php9php.php7php9php5php,php php2php)php;
php php php php php php*php php php roundphp(php2php6php7php.php8php3php5php,php php2php)php;
php php php php php php*php php php roundphp(php0php.php3php0php2php5php1php5php,php php5php)php;
php php php php php php*php php php roundphp(php0php.php3php6php6php6php5php,php php4php)php;
php php php php php php*php thenphp tryphp:
php php php php php php*php php php Zendphp_Localephp_Mathphp:php:roundphp(php'php6php3php9php.php7php9php5php'php,php php2php)php;
php php php php php php*php/
php php php php publicphp staticphp functionphp roundphp(php$opphp1php,php php$precisionphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_bcmathDisabledphp)php php{
php php php php php php php php php php php php php$opphp1php php=php roundphp(php$opphp1php,php php$precisionphp)php;
php php php php php php php php php php php php ifphp php(strposphp(php(stringphp)php php$opphp1php,php php'Ephp'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp selfphp:php:normalizephp(roundphp(php$opphp1php,php php$precisionphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(strposphp(php$opphp1php,php php'Ephp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$opphp1php php=php selfphp:php:floatalizephp(php$opphp1php)php;
php php php php php php php php php}

php php php php php php php php php$opphp1php php php php php=php trimphp(selfphp:php:normalizephp(php$opphp1php)php)php;
php php php php php php php php php$lengthphp php=php strlenphp(php$opphp1php)php;
php php php php php php php php ifphp php(php(php$decPosphp php=php strposphp(php$opphp1php,php php'php.php'php)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$opphp1php php.php=php php'php.php0php'php;
php php php php php php php php php php php php php$decPosphp php=php php$lengthphp;
php php php php php php php php php php php php php$lengthphp php+php=php php2php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$precisionphp <php php0php php&php&php absphp(php$precisionphp)php php>php php$decPosphp)php php{
php php php php php php php php php php php php returnphp php'php0php'php;
php php php php php php php php php}

php php php php php php php php php$digitsBeforeDotphp php=php php$lengthphp php-php php(php$decPosphp php+php php1php)php;
php php php php php php php php ifphp php(php$precisionphp php>php=php php(php$lengthphp php-php php(php$decPosphp php+php php1php)php)php)php php{
php php php php php php php php php php php php returnphp php$opphp1php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$precisionphp php=php=php=php php0php)php php{
php php php php php php php php php php php php php$triggerPosphp php=php php1php;
php php php php php php php php php php php php php$roundPosphp php php php=php php-php1php;
php php php php php php php php php}php elseifphp php(php$precisionphp php>php php0php)php php{
php php php php php php php php php php php php php$triggerPosphp php=php php$precisionphp php+php php1php;
php php php php php php php php php php php php php$roundPosphp php php php=php php$precisionphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$triggerPosphp php=php php$precisionphp;
php php php php php php php php php php php php php$roundPosphp php php php=php php$precisionphp php-php1php;
php php php php php php php php php}

php php php php php php php php php$triggerDigitphp php=php php$opphp1php[php$triggerPosphp php+php php$decPosphp]php;
php php php php php php php php ifphp php(php$precisionphp <php php0php)php php{
php php php php php php php php php php php php php/php/php zerophp fillphp digitsphp tophp thephp leftphp ofphp thephp decimalphp place
php php php php php php php php php php php php php$opphp1php php=php substrphp(php$opphp1php,php php0php,php php$decPosphp php+php php$precisionphp)php php.php strphp_padphp(php'php'php,php absphp(php$precisionphp)php,php php'php0php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$triggerDigitphp php>php=php php'php5php'php)php php{
php php php php php php php php php php php php ifphp php(php$roundPosphp php+php php$decPosphp php=php=php php-php1php)php php{
php php php php php php php php php php php php php php php php returnphp strphp_padphp(php'php1php'php,php php$decPosphp php+php php1php,php php'php0php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$roundUpphp php=php strphp_padphp(php'php'php,php php$lengthphp,php php'php0php'php)php;
php php php php php php php php php php php php php$roundUpphp[php$decPosphp]php php=php php'php.php'php;
php php php php php php php php php php php php php$roundUpphp[php$roundPosphp php+php php$decPosphp]php php=php php'php1php'php;

php php php php php php php php php php php php ifphp php(php$opphp1php php>php php0php)php php{
php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_bcmathDisabledphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Mathphp_PhpMathphp:php:Addphp(php$opphp1php,php php$roundUpphp,php php$precisionphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp selfphp:php:Addphp(php$opphp1php,php php$roundUpphp,php php$precisionphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_bcmathDisabledphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Mathphp_PhpMathphp:php:Subphp(php$opphp1php,php php$roundUpphp,php php$precisionphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp selfphp:php:Subphp(php$opphp1php,php php$roundUpphp,php php$precisionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php$precisionphp php>php=php php0php)php php{
php php php php php php php php php php php php returnphp substrphp(php$opphp1php,php php0php,php php$decPosphp php+php php(php$precisionphp php?php php$precisionphp php+php php1php:php php0php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php(stringphp)php php$opphp1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp aphp scientificphp notationphp tophp float
php php php php php php*php Additionallyphp fixedphp aphp problemphp withphp PHPphp <php=php php5php.php2php.xphp withphp bigphp integers
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php publicphp staticphp functionphp floatalizephp(php$valuephp)
php php php php php{
php php php php php php php php php$valuephp php=php strtoupperphp(php$valuephp)php;
php php php php php php php php ifphp php(strposphp(php$valuephp,php php'Ephp'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}

php php php php php php php php php$numberphp php=php substrphp(php$valuephp,php php0php,php strposphp(php$valuephp,php php'Ephp'php)php)php;
php php php php php php php php ifphp php(strposphp(php$numberphp,php php'php.php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$postphp php php php=php strlenphp(substrphp(php$numberphp,php strposphp(php$numberphp,php php'php.php'php)php php+php php1php)php)php;
php php php php php php php php php php php php php$mantisphp php=php substrphp(php$valuephp,php strposphp(php$valuephp,php php'Ephp'php)php php+php php1php)php;
php php php php php php php php php php php php ifphp php(php$mantisphp <php php0php)php php{
php php php php php php php php php php php php php php php php php$postphp php+php=php absphp(php(intphp)php php$mantisphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$valuephp php=php numberphp_formatphp(php$valuephp,php php$postphp,php php'php.php'php,php php'php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$valuephp php=php numberphp_formatphp(php$valuephp,php php0php,php php'php.php'php,php php'php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizesphp anphp inputphp tophp standardphp englishphp notation
php php php php php php*php Fixesphp aphp problemphp ofphp BCMathphp withphp setLocalephp whichphp isphp PHPphp related
php php php php php php*
php php php php php php*php php@paramphp php php integerphp php php$valuephp php Valuephp tophp normalize
php php php php php php*php php@returnphp php stringphp php php php php php php php php php php Normalizedphp stringphp withoutphp BCMathphp problems
php php php php php php*php/
php php php php publicphp staticphp functionphp normalizephp(php$valuephp)
php php php php php{
php php php php php php php php php$convertphp php=php localeconvphp(php)php;
php php php php php php php php php$valuephp php=php strphp_replacephp(php$convertphp[php'thousandsphp_sepphp'php]php,php php"php"php,php(stringphp)php php$valuephp)php;
php php php php php php php php php$valuephp php=php strphp_replacephp(php$convertphp[php'positivephp_signphp'php]php,php php"php"php,php php$valuephp)php;
php php php php php php php php php$valuephp php=php strphp_replacephp(php$convertphp[php'decimalphp_pointphp'php]php,php php"php.php"php,php$valuephp)php;
php php php php php php php php ifphp php(php!emptyphp(php$convertphp[php'negativephp_signphp'php]php)php andphp php(strposphp(php$valuephp,php php$convertphp[php'negativephp_signphp'php]php)php)php)php php{
php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(php$convertphp[php'negativephp_signphp'php]php,php php"php"php,php php$valuephp)php;
php php php php php php php php php php php php php$valuephp php=php php"php-php"php php.php php$valuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Localizesphp anphp inputphp fromphp standardphp englishphp notation
php php php php php php*php Fixesphp aphp problemphp ofphp BCMathphp withphp setLocalephp whichphp isphp PHPphp related
php php php php php php*
php php php php php php*php php@paramphp php php integerphp php php$valuephp php Valuephp tophp normalize
php php php php php php*php php@returnphp php stringphp php php php php php php php php php php Normalizedphp stringphp withoutphp BCMathphp problems
php php php php php php*php/
php php php php publicphp staticphp functionphp localizephp(php$valuephp)
php php php php php{
php php php php php php php php php$convertphp php=php localeconvphp(php)php;
php php php php php php php php php$valuephp php=php strphp_replacephp(php"php.php"php,php php$convertphp[php'decimalphp_pointphp'php]php,php php(stringphp)php php$valuephp)php;
php php php php php php php php ifphp php(php!emptyphp(php$convertphp[php'negativephp_signphp'php]php)php andphp php(strposphp(php$valuephp,php php"php-php"php)php)php)php php{
php php php php php php php php php php php php php$valuephp php=php strphp_replacephp(php"php-php"php,php php$convertphp[php'negativephp_signphp'php]php,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Changesphp exponentialphp numbersphp tophp plainphp stringphp numbers
php php php php php php*php Fixesphp aphp problemphp ofphp BCMathphp withphp numbersphp containingphp exponents
php php php php php php*
php php php php php php*php php@paramphp integerphp php$valuephp Valuephp tophp erasephp thephp exponent
php php php php php php*php php@paramphp integerphp php$scalephp php(Optionalphp)php Scalephp tophp use
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp exponentphp(php$valuephp,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'bcmathphp'php)php)php php{
php php php php php php php php php php php php returnphp php$valuephp;
php php php php php php php php php}

php php php php php php php php php$splitphp php=php explodephp(php'ephp'php,php php$valuephp)php;
php php php php php php php php ifphp php(countphp(php$splitphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php$splitphp php=php explodephp(php'Ephp'php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$splitphp)php php>php php1php)php php{
php php php php php php php php php php php php php$valuephp php=php bcmulphp(php$splitphp[php0php]php,php bcpowphp(php1php0php,php php$splitphp[php1php]php,php php$scalephp)php,php php$scalephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php BCAddphp php-php fixesphp aphp problemphp ofphp BCMathphp andphp exponentialphp numbers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$opphp1
php php php php php php*php php@paramphp php stringphp php php$opphp2
php php php php php php*php php@paramphp php integerphp php$scale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp Addphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php php$opphp1php php=php selfphp:php:exponentphp(php$opphp1php,php php$scalephp)php;
php php php php php php php php php$opphp2php php=php selfphp:php:exponentphp(php$opphp2php,php php$scalephp)php;

php php php php php php php php returnphp bcaddphp(php$opphp1php,php php$opphp2php,php php$scalephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php BCSubphp php-php fixesphp aphp problemphp ofphp BCMathphp andphp exponentialphp numbers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$opphp1
php php php php php php*php php@paramphp php stringphp php php$opphp2
php php php php php php*php php@paramphp php integerphp php$scale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp Subphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php php$opphp1php php=php selfphp:php:exponentphp(php$opphp1php,php php$scalephp)php;
php php php php php php php php php$opphp2php php=php selfphp:php:exponentphp(php$opphp2php,php php$scalephp)php;
php php php php php php php php returnphp bcsubphp(php$opphp1php,php php$opphp2php,php php$scalephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php BCPowphp php-php fixesphp aphp problemphp ofphp BCMathphp andphp exponentialphp numbers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$opphp1
php php php php php php*php php@paramphp php stringphp php php$opphp2
php php php php php php*php php@paramphp php integerphp php$scale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp Powphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php php$opphp1php php=php selfphp:php:exponentphp(php$opphp1php,php php$scalephp)php;
php php php php php php php php php$opphp2php php=php selfphp:php:exponentphp(php$opphp2php,php php$scalephp)php;
php php php php php php php php returnphp bcpowphp(php$opphp1php,php php$opphp2php,php php$scalephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php BCMulphp php-php fixesphp aphp problemphp ofphp BCMathphp andphp exponentialphp numbers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$opphp1
php php php php php php*php php@paramphp php stringphp php php$opphp2
php php php php php php*php php@paramphp php integerphp php$scale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp Mulphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php php$opphp1php php=php selfphp:php:exponentphp(php$opphp1php,php php$scalephp)php;
php php php php php php php php php$opphp2php php=php selfphp:php:exponentphp(php$opphp2php,php php$scalephp)php;
php php php php php php php php returnphp bcmulphp(php$opphp1php,php php$opphp2php,php php$scalephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php BCDivphp php-php fixesphp aphp problemphp ofphp BCMathphp andphp exponentialphp numbers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$opphp1
php php php php php php*php php@paramphp php stringphp php php$opphp2
php php php php php php*php php@paramphp php integerphp php$scale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp Divphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php php$opphp1php php=php selfphp:php:exponentphp(php$opphp1php,php php$scalephp)php;
php php php php php php php php php$opphp2php php=php selfphp:php:exponentphp(php$opphp2php,php php$scalephp)php;
php php php php php php php php returnphp bcdivphp(php$opphp1php,php php$opphp2php,php php$scalephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php BCSqrtphp php-php fixesphp aphp problemphp ofphp BCMathphp andphp exponentialphp numbers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$opphp1
php php php php php php*php php@paramphp php integerphp php$scale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp Sqrtphp(php$opphp1php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php php$opphp1php php=php selfphp:php:exponentphp(php$opphp1php,php php$scalephp)php;
php php php php php php php php returnphp bcsqrtphp(php$opphp1php,php php$scalephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php BCModphp php-php fixesphp aphp problemphp ofphp BCMathphp andphp exponentialphp numbers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$opphp1
php php php php php php*php php@paramphp php stringphp php php$opphp2
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp Modphp(php$opphp1php,php php$opphp2php)
php php php php php{
php php php php php php php php php$opphp1php php=php selfphp:php:exponentphp(php$opphp1php)php;
php php php php php php php php php$opphp2php php=php selfphp:php:exponentphp(php$opphp2php)php;
php php php php php php php php returnphp bcmodphp(php$opphp1php,php php$opphp2php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php BCCompphp php-php fixesphp aphp problemphp ofphp BCMathphp andphp exponentialphp numbers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$opphp1
php php php php php php*php php@paramphp php stringphp php php$opphp2
php php php php php php*php php@paramphp php integerphp php$scale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp Compphp(php$opphp1php,php php$opphp2php,php php$scalephp php=php nullphp)
php php php php php{
php php php php php php php php php$opphp1php php=php selfphp:php:exponentphp(php$opphp1php,php php$scalephp)php;
php php php php php php php php php$opphp2php php=php selfphp:php:exponentphp(php$opphp2php,php php$scalephp)php;
php php php php php php php php returnphp bccompphp(php$opphp1php,php php$opphp2php,php php$scalephp)php;
php php php php php}
php}

ifphp php(php!extensionphp_loadedphp(php'bcmathphp'php)
php php php php php|php|php php(definedphp(php'TESTSphp_ZENDphp_LOCALEphp_BCMATHphp_ENABLEDphp'php)php php&php&php php!TESTSphp_ZENDphp_LOCALEphp_BCMATHphp_ENABLEDphp)
php)php php{
php php php php requirephp_oncephp php'Zendphp/Localephp/Mathphp/PhpMathphp.phpphp'php;
php php php php Zendphp_Localephp_Mathphp_PhpMathphp:php:disablephp(php)php;
php}
