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
php php*php DateTextBoxphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Formphp_Elementphp_ValidationTextBox
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DateTextBoxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Elementphp_DateTextBoxphp extendsphp Zendphp_Dojophp_Formphp_Elementphp_ValidationTextBox
php{
php php php php php/php*php*
php php php php php php*php Usephp DateTextBoxphp dijitphp viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'DateTextBoxphp'php;

php php php php php/php*php*
php php php php php php*php Allowedphp formatLengthphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_allowedFormatTypesphp php=php arrayphp(
php php php php php php php php php'longphp'php,
php php php php php php php php php'shortphp'php,
php php php php php php php php php'mediumphp'php,
php php php php php php php php php'fullphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Allowedphp selectorphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_allowedSelectorTypesphp php=php arrayphp(
php php php php php php php php php'timephp'php,
php php php php php php php php php'datephp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setphp amphp,pmphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$amphp,pm
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_DateTextBox
php php php php php php*php/
php php php php publicphp functionphp setAmPmphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>setConstraintphp(php'amphp,pmphp'php,php php(boolphp)php php$flagphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp amphp,pmphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getAmPmphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasConstraintphp(php'amphp,pmphp'php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php(php'truephp'php php=php=php$thisphp-php>getConstraintphp(php'amphp,pmphp'php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp strictphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$strict
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_DateTextBox
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

php php php php php/php*php*
php php php php php php*php Setphp locale
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$locale
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_DateTextBox
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
php php php php php php*php Setphp datephp formatphp pattern
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pattern
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setDatePatternphp(php$patternphp)
php php php php php{
php php php php php php php php php$thisphp-php>setConstraintphp(php'datePatternphp'php,php php(stringphp)php php$patternphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp datephp formatphp pattern
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDatePatternphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'datePatternphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp numericphp formatphp formatLength
php php php php php php*
php php php php php php*php php@seephp php php php php$php_allowedFormatTypes
php php php php php php*php php@paramphp php stringphp php$formatLength
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setFormatLengthphp(php$formatLengthphp)
php php php php php{
php php php php php php php php php$formatLengthphp php=php strtolowerphp(php$formatLengthphp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$formatLengthphp,php php$thisphp-php>php_allowedFormatTypesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(sprintfphp(php'Invalidphp formatLengthphp php"php%sphp"php specifiedphp'php,php php$formatLengthphp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setConstraintphp(php'formatLengthphp'php,php php$formatLengthphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp formatLength
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFormatLengthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'formatLengthphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp numericphp formatphp Selector
php php php php php php*
php php php php php php*php php@seephp php php php php$php_allowedSelectorTypes
php php php php php php*php php@paramphp php stringphp php$selector
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php php php php php*php/
php php php php publicphp functionphp setSelectorphp(php$selectorphp)
php php php php php{
php php php php php php php php php$selectorphp php=php strtolowerphp(php$selectorphp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$selectorphp,php php$thisphp-php>php_allowedSelectorTypesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(sprintfphp(php'Invalidphp Selectorphp php"php%sphp"php specifiedphp'php,php php$selectorphp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setConstraintphp(php'selectorphp'php,php php$selectorphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp selector
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getSelectorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'selectorphp'php)php;
php php php php php}
php}
