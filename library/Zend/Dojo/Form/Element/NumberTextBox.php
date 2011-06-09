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

php/php*php*php Zendphp_Dojophp_Formphp_Elementphp_ValidationTextBoxphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Formphp/Elementphp/ValidationTextBoxphp.phpphp'php;

php/php*php*
php php*php NumberTextBoxphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Formphp_Elementphp_ValidationTextBox
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php NumberTextBoxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBoxphp extendsphp Zendphp_Dojophp_Formphp_Elementphp_ValidationTextBox
php{
php php php php php/php*php*
php php php php php php*php Usephp NumberTextBoxphp dijitphp viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'NumberTextBoxphp'php;

php php php php php/php*php*
php php php php php php*php Allowedphp numericphp typephp formats
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_allowedTypesphp php=php arrayphp(
php php php php php php php php php'decimalphp'php,
php php php php php php php php php'scientificphp'php,
php php php php php php php php php'percentphp'php,
php php php php php php php php php'currencyphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setphp locale
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$locale
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setLocalephp(php$localephp)
php php php php php{
php php php php php php php php php$thisphp-php>setConstraintphp(php'localephp'php,php php(stringphp)php php$localephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp locale
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLocalephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'localephp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp numericphp formatphp pattern
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pattern
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setPatternphp(php$patternphp)
php php php php php{
php php php php php php php php php$thisphp-php>setConstraintphp(php'patternphp'php,php php(stringphp)php php$patternphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp numericphp formatphp pattern
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getPatternphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'patternphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp numericphp formatphp type
php php php php php php*
php php php php php php*php php@seephp php php php php$php_allowedTypes
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtolowerphp(php$typephp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php php$thisphp-php>php_allowedTypesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(sprintfphp(php'Invalidphp numericphp typephp php"php%sphp"php specifiedphp'php,php php$typephp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setConstraintphp(php'typephp'php,php php$typephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp type
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'typephp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp decimalphp places
php php php php php php*
php php php php php php*php php@paramphp php intphp php$places
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setPlacesphp(php$placesphp)
php php php php php{
php php php php php php php php php$thisphp-php>setConstraintphp(php'placesphp'php,php php(intphp)php php$placesphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp decimalphp places
php php php php php php*
php php php php php php*php php@returnphp intphp|null
php php php php php php*php/
php php php php publicphp functionphp getPlacesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'placesphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp strictphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$strict
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setStrictphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>setConstraintphp(php'strictphp'php,php php(boolphp)php php$flagphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp strictphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getStrictphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasConstraintphp(php'strictphp'php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php(php'truephp'php php=php=php php$thisphp-php>getConstraintphp(php'strictphp'php)php)php;
php php php php php}
php}
