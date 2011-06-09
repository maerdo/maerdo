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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Text
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php MultiBytephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php Zendphp_Textphp_MultiBytephp containsphp multibytephp safephp stringphp methods
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Text
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Textphp_MultiByte
php{
php php php php php/php*php*
php php php php php php*php Wordphp wrap
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$string
php php php php php php*php php@paramphp php integerphp php$width
php php php php php php*php php@paramphp php stringphp php php$break
php php php php php php*php php@paramphp php booleanphp php$cut
php php php php php php*php php@paramphp php stringphp php php$charset
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp wordWrapphp(php$stringphp,php php$widthphp php=php php7php5php,php php$breakphp php=php php"php\nphp"php,php php$cutphp php=php falsephp,php php$charsetphp php=php php'UTFphp-php8php'php)
php php php php php{
php php php php php php php php php$resultphp php php php php php=php arrayphp(php)php;
php php php php php php php php php$breakWidthphp php=php iconvphp_strlenphp(php$breakphp,php php$charsetphp)php;

php php php php php php php php whilephp php(php(php$stringLengthphp php=php iconvphp_strlenphp(php$stringphp,php php$charsetphp)php)php php>php php0php)php php{
php php php php php php php php php php php php php$breakPosphp php=php iconvphp_strposphp(php$stringphp,php php$breakphp,php php0php,php php$charsetphp)php;

php php php php php php php php php php php php ifphp php(php$breakPosphp php!php=php=php falsephp php&php&php php$breakPosphp <php php$widthphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$breakPosphp php=php=php=php php$stringLengthphp php-php php$breakWidthphp)php php{
php php php php php php php php php php php php php php php php php php php php php$subStringphp php=php php$stringphp;
php php php php php php php php php php php php php php php php php php php php php$cutLengthphp php=php nullphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$subStringphp php=php iconvphp_substrphp(php$stringphp,php php0php,php php$breakPosphp,php php$charsetphp)php;
php php php php php php php php php php php php php php php php php php php php php$cutLengthphp php=php php$breakPosphp php+php php$breakWidthphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$subStringphp php=php iconvphp_substrphp(php$stringphp,php php0php,php php$widthphp,php php$charsetphp)php;

php php php php php php php php php php php php php php php php ifphp php(php$subStringphp php=php=php=php php$stringphp)php php{
php php php php php php php php php php php php php php php php php php php php php$cutLengthphp php=php nullphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$nextCharphp php=php iconvphp_substrphp(php$stringphp,php php$widthphp,php php1php,php php$charsetphp)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$breakWidthphp php=php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$nextBreakphp php=php php$nextCharphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$nextBreakphp php=php iconvphp_substrphp(php$stringphp,php php$breakWidthphp,php php1php,php php$charsetphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$nextCharphp php=php=php=php php'php php'php php|php|php php$nextBreakphp php=php=php=php php$breakphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$afterNextCharphp php=php iconvphp_substrphp(php$stringphp,php php$widthphp php+php php1php,php php1php,php php$charsetphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$afterNextCharphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subStringphp php.php=php php$nextCharphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$cutLengthphp php=php iconvphp_strlenphp(php$subStringphp,php php$charsetphp)php php+php php1php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$spacePosphp php=php iconvphp_strrposphp(php$subStringphp,php php'php php'php,php php$charsetphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$spacePosphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subStringphp php=php iconvphp_substrphp(php$subStringphp,php php0php,php php$spacePosphp,php php$charsetphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$cutLengthphp php=php php$spacePosphp php+php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$cutphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$spacePosphp php=php iconvphp_strposphp(php$stringphp,php php'php php'php,php php0php,php php$charsetphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$spacePosphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subStringphp php=php iconvphp_substrphp(php$stringphp,php php0php,php php$spacePosphp,php php$charsetphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$cutLengthphp php=php php$spacePosphp php+php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subStringphp php=php php$stringphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$cutLengthphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subStringphp php=php iconvphp_substrphp(php$subStringphp,php php0php,php php$widthphp,php php$charsetphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$cutLengthphp php=php php$widthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$resultphp[php]php php=php php$subStringphp;

php php php php php php php php php php php php ifphp php(php$cutLengthphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$stringphp php=php iconvphp_substrphp(php$stringphp,php php$cutLengthphp,php php(php$stringLengthphp php-php php$cutLengthphp)php,php php$charsetphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp implodephp(php$breakphp,php php$resultphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Stringphp padding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$input
php php php php php php*php php@paramphp php integerphp php$padLength
php php php php php php*php php@paramphp php stringphp php php$padString
php php php php php php*php php@paramphp php integerphp php$padType
php php php php php php*php php@paramphp php stringphp php php$charset
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp strPadphp(php$inputphp,php php$padLengthphp,php php$padStringphp php=php php'php php'php,php php$padTypephp php=php STRphp_PADphp_RIGHTphp,php php$charsetphp php=php php'UTFphp-php8php'php)
php php php php php{
php php php php php php php php php$returnphp php php php php php php php php php php=php php'php'php;
php php php php php php php php php$lengthOfPaddingphp php=php php$padLengthphp php-php iconvphp_strlenphp(php$inputphp,php php$charsetphp)php;
php php php php php php php php php$padStringLengthphp php=php iconvphp_strlenphp(php$padStringphp,php php$charsetphp)php;

php php php php php php php php ifphp php(php$padStringLengthphp php=php=php=php php0php php|php|php php$lengthOfPaddingphp php=php=php=php php0php)php php{
php php php php php php php php php php php php php$returnphp php=php php$inputphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$repeatCountphp php=php floorphp(php$lengthOfPaddingphp php/php php$padStringLengthphp)php;

php php php php php php php php php php php php ifphp php(php$padTypephp php=php=php=php STRphp_PADphp_BOTHphp)php php{
php php php php php php php php php php php php php php php php php$lastStringLeftphp php php=php php'php'php;
php php php php php php php php php php php php php php php php php$lastStringRightphp php=php php'php'php;
php php php php php php php php php php php php php php php php php$repeatCountLeftphp php=php php$repeatCountRightphp php=php php(php$repeatCountphp php-php php$repeatCountphp php%php php2php)php php/php php2php;

php php php php php php php php php php php php php php php php php$lastStringLengthphp php php php php php php php=php php$lengthOfPaddingphp php-php php2php php*php php$repeatCountLeftphp php*php php$padStringLengthphp;
php php php php php php php php php php php php php php php php php$lastStringLeftLengthphp php php php=php php$lastStringRightLengthphp php=php floorphp(php$lastStringLengthphp php/php php2php)php;
php php php php php php php php php php php php php php php php php$lastStringRightLengthphp php+php=php php$lastStringLengthphp php%php php2php;

php php php php php php php php php php php php php php php php php$lastStringLeftphp php php=php iconvphp_substrphp(php$padStringphp,php php0php,php php$lastStringLeftLengthphp,php php$charsetphp)php;
php php php php php php php php php php php php php php php php php$lastStringRightphp php=php iconvphp_substrphp(php$padStringphp,php php0php,php php$lastStringRightLengthphp,php php$charsetphp)php;

php php php php php php php php php php php php php php php php php$returnphp php=php strphp_repeatphp(php$padStringphp,php php$repeatCountLeftphp)php php.php php$lastStringLeft
php php php php php php php php php php php php php php php php php php php php php php php php php.php php$input
php php php php php php php php php php php php php php php php php php php php php php php php php.php strphp_repeatphp(php$padStringphp,php php$repeatCountRightphp)php php.php php$lastStringRightphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$lastStringphp php=php iconvphp_substrphp(php$padStringphp,php php0php,php php$lengthOfPaddingphp php%php php$padStringLengthphp,php php$charsetphp)php;

php php php php php php php php php php php php php php php php ifphp php(php$padTypephp php=php=php=php STRphp_PADphp_LEFTphp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp php=php strphp_repeatphp(php$padStringphp,php php$repeatCountphp)php php.php php$lastStringphp php.php php$inputphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$returnphp php=php php$inputphp php.php strphp_repeatphp(php$padStringphp,php php$repeatCountphp)php php.php php$lastStringphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}
php}
