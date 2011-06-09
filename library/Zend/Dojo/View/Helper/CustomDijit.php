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
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php CustomDijitphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Dojophp_Viewphp_Helperphp_DijitContainerphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Helperphp/DijitContainerphp.phpphp'php;

php/php*php*
php php*php Arbitraryphp dijitphp support
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Viewphp_Helperphp_DijitContainer
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php php*php/
classphp Zendphp_Dojophp_Viewphp_Helperphp_CustomDijitphp extendsphp Zendphp_Dojophp_Viewphp_Helperphp_DijitContainer
php{
php php php php php/php*php*
php php php php php php*php Defaultphp dojoTypephp;php setphp thephp valuephp whenphp extending
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultDojoTypephp;

php php php php php/php*php*
php php php php php php*php Renderphp aphp customphp dijit
php php php php php php*
php php php php php php*php Requiresphp thatphp eitherphp thephp php{php@linkphp php$php_defaultDojotypephp}php propertyphp isphp setphp,php or
php php php php php php*php thatphp youphp passphp aphp valuephp tophp thephp php"dojoTypephp"php keyphp ofphp thephp php$paramsphp argumentphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php arrayphp php$attribs
php php php php php php*php php@returnphp stringphp|Zendphp_Dojophp_Viewphp_Helperphp_CustomDijit
php php php php php php*php/
php php php php publicphp functionphp customDijitphp(php$idphp php=php nullphp,php php$valuephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php,php arrayphp php$attribsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$idphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dojoTypephp'php,php php$paramsphp)
php php php php php php php php php php php php php&php&php php(nullphp php=php=php=php php$thisphp-php>php_defaultDojoTypephp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Viewphp_Exceptionphp(php'Nophp dojoTypephp specifiedphp;php cannotphp createphp dijitphp'php)php;
php php php php php php php php php}php elseifphp php(arrayphp_keyphp_existsphp(php'dojoTypephp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dijitphp php php=php php$paramsphp[php'dojoTypephp'php]php;
php php php php php php php php php php php php php$thisphp-php>php_modulephp php=php php$paramsphp[php'dojoTypephp'php]php;
php php php php php php php php php php php php unsetphp(php$paramsphp[php'dojoTypephp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dijitphp php php=php php$thisphp-php>php_defaultDojoTypephp;
php php php php php php php php php php php php php$thisphp-php>php_modulephp php=php php$thisphp-php>php_defaultDojoTypephp;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'rootNodephp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setRootNodephp(php$paramsphp[php'rootNodephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$paramsphp[php'rootNodephp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_createLayoutContainerphp(php$idphp,php php$valuephp,php php$paramsphp,php php$attribsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Beginphp capturingphp contentphp.
php php php php php php*
php php php php php php*php Requiresphp thatphp eitherphp thephp php{php@linkphp php$php_defaultDojotypephp}php propertyphp isphp setphp,php or
php php php php php php*php thatphp youphp passphp aphp valuephp tophp thephp php"dojoTypephp"php keyphp ofphp thephp php$paramsphp argumentphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php arrayphp php$attribs
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp captureStartphp(php$idphp,php arrayphp php$paramsphp php=php arrayphp(php)php,php arrayphp php$attribsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dojoTypephp'php,php php$paramsphp)
php php php php php php php php php php php php php&php&php php(nullphp php=php=php=php php$thisphp-php>php_defaultDojoTypephp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Viewphp_Exceptionphp(php'Nophp dojoTypephp specifiedphp;php cannotphp createphp dijitphp'php)php;
php php php php php php php php php}php elseifphp php(arrayphp_keyphp_existsphp(php'dojoTypephp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dijitphp php php=php php$paramsphp[php'dojoTypephp'php]php;
php php php php php php php php php php php php php$thisphp-php>php_modulephp php=php php$paramsphp[php'dojoTypephp'php]php;
php php php php php php php php php php php php unsetphp(php$paramsphp[php'dojoTypephp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dijitphp php php=php php$thisphp-php>php_defaultDojoTypephp;
php php php php php php php php php php php php php$thisphp-php>php_modulephp php=php php$thisphp-php>php_defaultDojoTypephp;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:captureStartphp(php$idphp,php php$paramsphp,php php$attribsphp)php;
php php php php php}
php}
