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

php/php*php*php Zendphp_Dojophp_Formphp_Elementphp_Dijitphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Formphp/Elementphp/Dijitphp.phpphp'php;

php/php*php*
php php*php Buttonphp dijit
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Buttonphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Elementphp_Buttonphp extendsphp Zendphp_Dojophp_Formphp_Elementphp_Dijit
php{
php php php php php/php*php*
php php php php php php*php Usephp Buttonphp dijitphp viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'Buttonphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$specphp Elementphp namephp orphp configuration
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$optionsphp Elementphp valuephp orphp configuration
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$specphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$specphp)php php&php&php php(php(nullphp php!php=php=php php$optionsphp)php php&php&php isphp_stringphp(php$optionsphp)php)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'labelphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$specphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp label
php php php php php php*
php php php php php php*php Ifphp nophp labelphp isphp presentphp,php returnsphp thephp currentlyphp setphp namephp.
php php php php php php*
php php php php php php*php Ifphp aphp translatorphp isphp presentphp,php returnsphp thephp translatedphp labelphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLabelphp(php)
php php php php php{
php php php php php php php php php$valuephp php=php parentphp:php:getLabelphp(php)php;

php php php php php php php php ifphp php(nullphp php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>getNamephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php)php)php php{
php php php php php php php php php php php php returnphp php$translatorphp-php>translatephp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Hasphp thisphp submitphp buttonphp beenphp selectedphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isCheckedphp(php)
php php php php php{
php php php php php php php php php$valuephp php=php php$thisphp-php>getValuephp(php)php;

php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$valuephp php!php=php php$thisphp-php>getLabelphp(php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Defaultphp decorators
php php php php php php*
php php php php php php*php Usesphp onlyphp php'DijitElementphp'php andphp php'DtDdWrapperphp'php decoratorsphp byphp defaultphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp loadDefaultDecoratorsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>loadDefaultDecoratorsIsDisabledphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$decoratorsphp php=php php$thisphp-php>getDecoratorsphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$decoratorsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addDecoratorphp(php'DijitElementphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'DtDdWrapperphp'php)php;
php php php php php php php php php}
php php php php php}
php}
