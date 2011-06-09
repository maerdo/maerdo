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
php php*php php@subpackagephp Nirvanix
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Nirvanixphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php Thisphp classphp allowsphp Nirvanixphp authenticationphp credentialsphp tophp bephp specified
php php*php inphp onephp placephp andphp providesphp aphp factoryphp forphp returningphp conveniencephp wrappers
php php*php aroundphp thephp Nirvanixphp webphp servicephp namespacesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Nirvanix
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Nirvanix
php{
php php php php php/php*php*
php php php php php php*php Optionsphp tophp passphp tophp namespacephp proxies
php php php php php php*php php@paramphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Authenticatesphp withphp Nirvanixphp tophp receivephp a
php php php php php php*php sessionTokenphp,php whichphp isphp thenphp passedphp tophp eachphp futurephp requestphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$authParamsphp php Authenticationphp POSTphp parametersphp.php php This
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php shouldphp havephp keysphp php"usernamephp"php,php php"passwordphp"php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php andphp php"appKeyphp"php.
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php php php php Optionsphp tophp passphp tophp namespacephp proxies
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$authParamsphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php mergephp optionsphp withphp defaultphp options
php php php php php php php php php$defaultOptionsphp php=php arrayphp(php'defaultsphp'php php php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'httpClientphp'php php=php>php newphp Zendphp_Httpphp_Clientphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'hostphp'php php php php php php php php=php>php php'httpphp:php/php/servicesphp.nirvanixphp.comphp'php)php;
php php php php php php php php php$thisphp-php>php_optionsphp php=php arrayphp_mergephp(php$defaultOptionsphp,php php$optionsphp)php;

php php php php php php php php php/php/php loginphp andphp savephp sessionTokenphp tophp defaultphp POSTphp params
php php php php php php php php php$respphp php=php php$thisphp-php>getServicephp(php'Authenticationphp'php)php-php>loginphp(php$authParamsphp)php;
php php php php php php php php php$thisphp-php>php_optionsphp[php'defaultsphp'php]php[php'sessionTokenphp'php]php php=php php(stringphp)php$respphp-php>SessionTokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Nirvanixphp dividesphp itsphp servicephp intophp namespacesphp,php withphp eachphp namespace
php php php php php php*php providingphp differentphp functionalityphp.php php Thisphp isphp aphp factoryphp methodphp that
php php php php php php*php returnsphp aphp preconfiguredphp Zendphp_Servicephp_Nirvanixphp_Namespacephp_Basephp proxyphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$namespacephp php Namephp ofphp thephp namespace
php php php php php php*php php@returnphp Zendphp_Servicephp_Nirvanixphp_Namespacephp_Base
php php php php php php*php/
php php php php publicphp functionphp getServicephp(php$namespacephp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php switchphp php(php$namespacephp)php php{
php php php php php php php php php php php php casephp php'IMFSphp'php:
php php php php php php php php php php php php php php php php php$classphp php=php php'Zendphp_Servicephp_Nirvanixphp_Namespacephp_Imfsphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$classphp php=php php'Zendphp_Servicephp_Nirvanixphp_Namespacephp_Basephp'php;
php php php php php php php php php}

php php php php php php php php php$optionsphp[php'namespacephp'php]php php=php ucfirstphp(php$namespacephp)php;
php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$thisphp-php>php_optionsphp,php php$optionsphp)php;

php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classphp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp php$classphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp configuredphp optionsphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php}
