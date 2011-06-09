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

php/php*php*php Zendphp_Dojophp_Formphp_Elementphp_DijitMultiphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Formphp/Elementphp/DijitMultiphp.phpphp'php;

php/php*php*
php php*php ComboBoxphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Formphp_Elementphp_DijitMulti
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ComboBoxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Elementphp_ComboBoxphp extendsphp Zendphp_Dojophp_Formphp_Elementphp_DijitMulti
php{
php php php php php/php*php*
php php php php php php*php Usephp ComboBoxphp dijitphp viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'ComboBoxphp'php;

php php php php php/php*php*
php php php php php php*php Flagphp:php autoregisterphp inArrayphp validatorphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_registerInArrayValidatorphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Getphp datastorephp information
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getStoreInfophp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'storephp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>dijitParamsphp[php'storephp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>dijitParamsphp[php'storephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datastorephp identifier
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$identifier
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_ComboBox
php php php php php php*php/
php php php php publicphp functionphp setStoreIdphp(php$identifierphp)
php php php php php{
php php php php php php php php php$storephp php=php php$thisphp-php>getStoreInfophp(php)php;
php php php php php php php php php$storephp[php'storephp'php]php php=php php(stringphp)php php$identifierphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'storephp'php,php php$storephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp datastorephp identifier
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStoreIdphp(php)
php php php php php{
php php php php php php php php php$storephp php=php php$thisphp-php>getStoreInfophp(php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'storephp'php,php php$storephp)php)php php{
php php php php php php php php php php php php returnphp php$storephp[php'storephp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datastorephp dijitphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dojoType
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_ComboBox
php php php php php php*php/
php php php php publicphp functionphp setStoreTypephp(php$dojoTypephp)
php php php php php{
php php php php php php php php php$storephp php=php php$thisphp-php>getStoreInfophp(php)php;
php php php php php php php php php$storephp[php'typephp'php]php php=php php(stringphp)php php$dojoTypephp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'storephp'php,php php$storephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp datastorephp dijitphp type
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getStoreTypephp(php)
php php php php php{
php php php php php php php php php$storephp php=php php$thisphp-php>getStoreInfophp(php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'typephp'php,php php$storephp)php)php php{
php php php php php php php php php php php php returnphp php$storephp[php'typephp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp datastorephp parameters
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_ComboBox
php php php php php php*php/
php php php php publicphp functionphp setStoreParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$storephp php=php php$thisphp-php>getStoreInfophp(php)php;
php php php php php php php php php$storephp[php'paramsphp'php]php php=php php$paramsphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'storephp'php,php php$storephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp datastorephp params
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getStoreParamsphp(php)
php php php php php{
php php php php php php php php php$storephp php=php php$thisphp-php>getStoreInfophp(php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'paramsphp'php,php php$storephp)php)php php{
php php php php php php php php php php php php returnphp php$storephp[php'paramsphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp autocompletephp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_ComboBox
php php php php php php*php/
php php php php publicphp functionphp setAutocompletephp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>setDijitParamphp(php'autocompletephp'php,php php(boolphp)php php$flagphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp autocompletephp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getAutocompletephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'autocompletephp'php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'autocompletephp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp valuephp validphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php mixedphp php$context
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$contextphp php=php nullphp)
php php php php php{
php php php php php php php php php$storeInfophp php=php php$thisphp-php>getStoreInfophp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$storeInfophp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setRegisterInArrayValidatorphp(falsephp)php;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:isValidphp(php$valuephp,php php$contextphp)php;
php php php php php}
php}
