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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp StrikeIron
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php StrikeIronphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Thisphp classphp allowsphp StrikeIronphp authenticationphp credentialsphp tophp bephp specified
php php*php inphp onephp placephp andphp providesphp aphp factoryphp forphp returningphp instancesphp ofphp different
php php*php StrikeIronphp servicephp classesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp StrikeIron
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_StrikeIron
php{
php php php php php/php*php*
php php php php php php*php Optionsphp tophp passphp tophp Zendphp_Servicephp_StrikeIronphp_Basephp constructor
php php php php php php*php php@paramphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php$optionsphp php Optionsphp tophp passphp tophp Zendphp_Servicephp_StrikeIronphp_Basephp constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Factoryphp methodphp tophp returnphp aphp preconfiguredphp Zendphp_Servicephp_StrikeIronphp_php*
php php php php php php*php instancephp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp php php$optionsphp php Servicephp options
php php php php php php*php php@returnphp objectphp php php php php php php Zendphp_Servicephp_StrikeIronphp_php*php instance
php php php php php php*php php@throwsphp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getServicephp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$classphp php=php issetphp(php$optionsphp[php'classphp'php]php)php php?php php$optionsphp[php'classphp'php]php php:php php'Basephp'php;
php php php php php php php php unsetphp(php$optionsphp[php'classphp'php]php)php;

php php php php php php php php ifphp php(strposphp(php$classphp,php php'php_php'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$classphp php=php php"Zendphp_Servicephp_StrikeIronphp_php{php$classphp}php"php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php php@Zendphp_Loaderphp:php:loadClassphp(php$classphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Exceptionphp(php'Classphp filephp notphp foundphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$msgphp php=php php"Servicephp php'php$classphp'php couldphp notphp bephp loadedphp:php php"php php.php php$ephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/StrikeIronphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_StrikeIronphp_Exceptionphp(php$msgphp,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php instantiatephp andphp returnphp thephp service
php php php php php php php php php$servicephp php=php newphp php$classphp(arrayphp_mergephp(php$thisphp-php>php_optionsphp,php php$optionsphp)php)php;
php php php php php php php php returnphp php$servicephp;
php php php php php}

php}
