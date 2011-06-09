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
php php*php php@versionphp php php php php$Idphp:php Alphaphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Alphaphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp INVALIDphp php php php php php php=php php'alphaInvalidphp'php;
php php php php constphp NOTphp_ALPHAphp php php php php=php php'notAlphaphp'php;
php php php php constphp STRINGphp_EMPTYphp php=php php'alphaStringEmptyphp'php;

php php php php php/php*php*
php php php php php php*php Whetherphp tophp allowphp whitephp spacephp charactersphp;php offphp byphp default
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php php@deprecated
php php php php php php*php/
php php php php publicphp php$allowWhiteSpacephp;

php php php php php/php*php*
php php php php php php*php Alphabeticphp filterphp usedphp forphp validation
php php php php php php*
php php php php php php*php php@varphp Zendphp_Filterphp_Alpha
php php php php php php*php/
php php php php protectedphp staticphp php$php_filterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp php php php php php php=php>php php"Invalidphp typephp givenphp.php Stringphp expectedphp"php,
php php php php php php php php selfphp:php:NOTphp_ALPHAphp php php php php=php>php php"php'php%valuephp%php'php containsphp nonphp alphabeticphp charactersphp"php,
php php php php php php php php selfphp:php:STRINGphp_EMPTYphp php=php>php php"php'php%valuephp%php'php isphp anphp emptyphp stringphp"
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setsphp defaultphp optionphp valuesphp forphp thisphp instance
php php php php php php*
php php php php php php*php php@paramphp php booleanphp|Zendphp_Configphp php$allowWhiteSpace
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$allowWhiteSpacephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$allowWhiteSpacephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$allowWhiteSpacephp php=php php$allowWhiteSpacephp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$allowWhiteSpacephp)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'allowWhiteSpacephp'php,php php$allowWhiteSpacephp)php)php php{
php php php php php php php php php php php php php php php php php$allowWhiteSpacephp php=php php$allowWhiteSpacephp[php'allowWhiteSpacephp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$allowWhiteSpacephp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>allowWhiteSpacephp php=php php(booleanphp)php php$allowWhiteSpacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp allowWhiteSpacephp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getAllowWhiteSpacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>allowWhiteSpacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp allowWhiteSpacephp option
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$allowWhiteSpace
php php php php php php*php php@returnphp Zendphp_Filterphp_Alphaphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setAllowWhiteSpacephp(php$allowWhiteSpacephp)
php php php php php{
php php php php php php php php php$thisphp-php>allowWhiteSpacephp php=php php(booleanphp)php php$allowWhiteSpacephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp containsphp onlyphp alphabeticphp characters
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php ifphp php(php'php'php php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:STRINGphp_EMPTYphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_filterphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Filterphp_Alpha
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Alphaphp.phpphp'php;
php php php php php php php php php php php php selfphp:php:php$php_filterphp php=php newphp Zendphp_Filterphp_Alphaphp(php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_filterphp-php>allowWhiteSpacephp php=php php$thisphp-php>allowWhiteSpacephp;

php php php php php php php php ifphp php(php$valuephp php!php=php=php selfphp:php:php$php_filterphp-php>filterphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_ALPHAphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php}
