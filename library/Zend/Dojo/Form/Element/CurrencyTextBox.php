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

php/php*php*php Zendphp_Dojophp_Formphp_Elementphp_NumberTextBoxphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Formphp/Elementphp/NumberTextBoxphp.phpphp'php;

php/php*php*
php php*php CurrencyTextBoxphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php CurrencyTextBoxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Elementphp_CurrencyTextBoxphp extendsphp Zendphp_Dojophp_Formphp_Elementphp_NumberTextBox
php{
php php php php php/php*php*
php php php php php php*php Usephp CurrencyTextBoxphp dijitphp viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'CurrencyTextBoxphp'php;

php php php php php/php*php*
php php php php php php*php Setphp currency
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$currency
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_CurrencyTextBox
php php php php php php*php/
php php php php publicphp functionphp setCurrencyphp(php$currencyphp)
php php php php php{
php php php php php php php php php$thisphp-php>setDijitParamphp(php'currencyphp'php,php php(stringphp)php php$currencyphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currency
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getCurrencyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'currencyphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp currencyphp symbol
php php php php php php*
php php php php php php*php Castsphp tophp stringphp,php uppercasesphp,php andphp trimsphp tophp threephp charactersphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$symbol
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_CurrencyTextBox
php php php php php php*php/
php php php php publicphp functionphp setSymbolphp(php$symbolphp)
php php php php php{
php php php php php php php php php$symbolphp php=php strtoupperphp(php(stringphp)php php$symbolphp)php;
php php php php php php php php php$lengthphp php=php strlenphp(php$symbolphp)php;
php php php php php php php php ifphp php(php3php php>php php$lengthphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(php'Invalidphp symbolphp providedphp;php pleasephp providephp ISOphp php4php2php1php7php alphabeticphp currencyphp codephp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php3php <php php$lengthphp)php php{
php php php php php php php php php php php php php$symbolphp php=php substrphp(php$symbolphp,php php0php,php php3php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setConstraintphp(php'symbolphp'php,php php$symbolphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp symbol
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getSymbolphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConstraintphp(php'symbolphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp currencyphp isphp fractional
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_CurrencyTextBox
php php php php php php*php/
php php php php publicphp functionphp setFractionalphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>setConstraintphp(php'fractionalphp'php,php php(boolphp)php php$flagphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp whetherphp orphp notphp tophp presentphp fractionalphp values
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getFractionalphp(php)
php php php php php{
php php php php php php php php returnphp php(php'truephp'php php=php=php php$thisphp-php>getConstraintphp(php'fractionalphp'php)php)php;
php php php php php}
php}
