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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php StringTrimphp.phpphp php2php3php4php0php1php php2php0php1php0php-php1php1php-php1php9php php1php8php:php5php2php:php0php8Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_StringTrimphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Listphp ofphp charactersphp providedphp tophp thephp trimphp(php)php function
php php php php php php*
php php php php php php*php Ifphp thisphp isphp nullphp,php thenphp trimphp(php)php isphp calledphp withphp nophp specificphp characterphp listphp,
php php php php php php*php andphp itsphp defaultphp behaviorphp willphp bephp invokedphp,php trimmingphp whitespacephp.
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_charListphp;

php php php php php/php*php*
php php php php php php*php Setsphp filterphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php php php php php php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'charlistphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php$optionsphp php php php php php php php php php php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'charlistphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCharListphp(php$optionsphp[php'charlistphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp charListphp option
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getCharListphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_charListphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp charListphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$charList
php php php php php php*php php@returnphp Zendphp_Filterphp_StringTrimphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCharListphp(php$charListphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_charListphp php=php php$charListphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Returnsphp thephp stringphp php$valuephp withphp charactersphp strippedphp fromphp thephp beginningphp andphp end
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_charListphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_unicodeTrimphp(php(stringphp)php php$valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_unicodeTrimphp(php(stringphp)php php$valuephp,php php$thisphp-php>php_charListphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Unicodephp awarephp trimphp method
php php php php php php*php Fixesphp aphp PHPphp problem
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@paramphp stringphp php$charlist
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_unicodeTrimphp(php$valuephp,php php$charlistphp php=php php'php\php\php\php\sphp'php)
php php php php php{
php php php php php php php php php$charsphp php=php pregphp_replacephp(
php php php php php php php php php php php php arrayphp(php php'php/php[php\php^php\php-php\php]php\php\php\php]php/Sphp'php,php php'php/php\php\php\php{php4php}php/Sphp'php,php php'php/php\php/php/php'php)php,
php php php php php php php php php php php php arrayphp(php php'php\php\php\php\php\php\php0php'php,php php'php\php\php'php,php php'php\php/php'php php)php,
php php php php php php php php php php php php php$charlist
php php php php php php php php php)php;

php php php php php php php php php$patternphp php=php php'php^php[php'php php.php php$charsphp php.php php'php]php*php|php[php'php php.php php$charsphp php.php php'php]php*php$php'php;
php php php php php php php php returnphp pregphp_replacephp(php"php/php$patternphp/sSDphp"php,php php'php'php,php php$valuephp)php;
php php php php php}
php}
