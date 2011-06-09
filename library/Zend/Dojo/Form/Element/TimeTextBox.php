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
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Dojophp_Formphp_Elementphp_DateTextBoxphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Formphp/Elementphp/DateTextBoxphp.phpphp'php;

php/php*php*
php php*php TimeTextBoxphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Formphp_Elementphp_DateTextBox
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php TimeTextBoxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Elementphp_TimeTextBoxphp extendsphp Zendphp_Dojophp_Formphp_Elementphp_DateTextBox
php{
php php php php php/php*php*
php php php php php php*php Usephp TimeTextBoxphp dijitphp viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'TimeTextBoxphp'php;

php php php php php/php*php*
php php php php php php*php Validatephp ISOphp php8php6php0php1php timephp format
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$format
php php php php php php*php php@returnphp true
php php php php php php*php php@throwsphp Zendphp_Formphp_Elementphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateIsophp8php6php0php1php(php$formatphp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^Tphp\dphp{php2php}php:php\dphp{php2php}php:php\dphp{php2php}php$php/php'php,php php$formatphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(sprintfphp(php'Invalidphp formatphp php"php%sphp"php providedphp;php mustphp matchphp Tphp:php0php0php:php0php0php:php0php0php formatphp'php,php php$formatphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp timephp formatphp pattern
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pattern
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setTimePatternphp(php$patternphp)
php php php php php{
php php php php php php php php php$thisphp-php>setConstraintphp(php'timePatternphp'php,php php(stringphp)php php$patternphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp timephp formatphp pattern
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getTimePatternphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'timePatternphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp clickableIncrement
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$format
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setClickableIncrementphp(php$formatphp)
php php php php php{
php php php php php php php php php$formatphp php=php php(stringphp)php php$formatphp;
php php php php php php php php php$thisphp-php>php_validateIsophp8php6php0php1php(php$formatphp)php;
php php php php php php php php php$thisphp-php>setConstraintphp(php'clickableIncrementphp'php,php php$formatphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp clickableIncrement
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getClickableIncrementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'clickableIncrementphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp visibleIncrement
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$format
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setVisibleIncrementphp(php$formatphp)
php php php php php{
php php php php php php php php php$formatphp php=php php(stringphp)php php$formatphp;
php php php php php php php php php$thisphp-php>php_validateIsophp8php6php0php1php(php$formatphp)php;
php php php php php php php php php$thisphp-php>setConstraintphp(php'visibleIncrementphp'php,php php$formatphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp visibleIncrement
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getVisibleIncrementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'visibleIncrementphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp visibleRange
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$format
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setVisibleRangephp(php$formatphp)
php php php php php{
php php php php php php php php php$formatphp php=php php(stringphp)php php$formatphp;
php php php php php php php php php$thisphp-php>php_validateIsophp8php6php0php1php(php$formatphp)php;
php php php php php php php php php$thisphp-php>setConstraintphp(php'visibleRangephp'php,php php$formatphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp visibleRange
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getVisibleRangephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'visibleRangephp'php)php;
php php php php php}
php}
