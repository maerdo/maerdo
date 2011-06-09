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
php php*php php@packagephp php php php Zendphp_Captcha
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php php@seephp Zendphp_Captchaphp_Adapterphp php*php/
requirephp_oncephp php'Zendphp/Captchaphp/Adapterphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Validatephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Basephp classphp forphp Captchaphp adapters
php php*
php php*php Providesphp somephp utilityphp functionalityphp tophp buildphp on
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Captcha
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Basephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
abstractphp classphp Zendphp_Captchaphp_Basephp extendsphp Zendphp_Validatephp_Abstractphp implementsphp Zendphp_Captchaphp_Adapter
php{
php php php php php/php*php*
php php php php php php*php Elementphp name
php php php php php php*
php php php php php php*php Usefulphp tophp generatephp/checkphp formphp fields
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp;

php php php php php/php*php*
php php php php php php*php Captchaphp options
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Optionsphp tophp skipphp whenphp processingphp options
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_skipOptionsphp php=php arrayphp(
php php php php php php php php php'optionsphp'php,
php php php php php php php php php'configphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Getphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_namephp php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Setphp options
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}php elsephp ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp singlephp optionphp forphp thephp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Element
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(strtolowerphp(php$keyphp)php,php php$thisphp-php>php_skipOptionsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp php(php$keyphp)php;
php php php php php php php php ifphp php(methodphp_existsphp php(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php/php/php Setterphp existsphp;php usephp it
php php php php php php php php php php php php php$thisphp-php>php$methodphp php(php$valuephp)php;
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}php elseifphp php(propertyphp_existsphp(php$thisphp,php php$keyphp)php)php php{
php php php php php php php php php php php php php/php/php Assumephp itphp'sphp metadata
php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php$valuephp;
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp statephp fromphp optionsphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Formphp_Element
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp optionsphp representingphp objectphp state
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp statephp fromphp configphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Captchaphp_Base
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp optionalphp decorator
php php php php php php*
php php php php php php*php Byphp defaultphp,php returnphp nullphp,php indicatingphp nophp extraphp decoratorphp neededphp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp getDecoratorphp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}
php}
