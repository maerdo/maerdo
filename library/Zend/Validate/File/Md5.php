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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Mdphp5php.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Filephp_Hash
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Filephp/Hashphp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp thephp mdphp5php hashphp ofphp givenphp files
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_Mdphp5php extendsphp Zendphp_Validatephp_Filephp_Hash
php{
php php php php php/php*php*
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp DOESphp_NOTphp_MATCHphp php=php php'fileMdphp5DoesNotMatchphp'php;
php php php php constphp NOTphp_DETECTEDphp php php php=php php'fileMdphp5NotDetectedphp'php;
php php php php constphp NOTphp_FOUNDphp php php php php php php=php php'fileMdphp5NotFoundphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:DOESphp_NOTphp_MATCHphp php=php>php php"Filephp php'php%valuephp%php'php doesphp notphp matchphp thephp givenphp mdphp5php hashesphp"php,
php php php php php php php php selfphp:php:NOTphp_DETECTEDphp php php php=php>php php"Aphp mdphp5php hashphp couldphp notphp bephp evaluatedphp forphp thephp givenphp filephp"php,
php php php php php php php php selfphp:php:NOTphp_FOUNDphp php php php php php php=php>php php"Filephp php'php%valuephp%php'php isphp notphp readablephp orphp doesphp notphp existphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Hashphp ofphp thephp file
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hashphp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php$hashphp isphp thephp hashphp wephp acceptphp forphp thephp filephp php$file
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_scalarphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'hashphp1php'php php=php>php php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setMdphp5php(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp setphp mdphp5php hashes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMdphp5php(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getHashphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp mdphp5php hashphp forphp onephp orphp multiplephp files
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$options
php php php php php php*php php@paramphp php stringphp php php php php php php php$algorithmphp php(Deprecatedphp)php Algorithmphp tophp usephp,php fixedphp tophp mdphp5
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Hashphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setHashphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php php(arrayphp)php php$optionsphp;
php php php php php php php php php}

php php php php php php php php php$optionsphp[php'algorithmphp'php]php php=php php'mdphp5php'php;
php php php php php php php php parentphp:php:setHashphp(php$optionsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp mdphp5php hashphp forphp onephp orphp multiplephp files
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Hashphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMdphp5php(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>setHashphp(php$optionsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp thephp mdphp5php hashphp forphp onephp orphp multiplephp files
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$options
php php php php php php*php php@paramphp php stringphp php php php php php php php$algorithmphp php(Deprecatedphp)php Algorithmphp tophp usephp,php fixedphp tophp mdphp5
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Hashphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addHashphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php php(arrayphp)php php$optionsphp;
php php php php php php php php php}

php php php php php php php php php$optionsphp[php'algorithmphp'php]php php=php php'mdphp5php'php;
php php php php php php php php parentphp:php:addHashphp(php$optionsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp thephp mdphp5php hashphp forphp onephp orphp multiplephp files
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Hashphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addMdphp5php(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>addHashphp(php$optionsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp givenphp filephp confirmsphp thephp setphp hash
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Filenamephp tophp checkphp forphp hash
php php php php php php*php php@paramphp php arrayphp php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Isphp filephp readablephp php?
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php ifphp php(php!Zendphp_Loaderphp:php:isReadablephp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_FOUNDphp)php;
php php php php php php php php php}

php php php php php php php php php$hashesphp php=php arrayphp_uniquephp(arrayphp_keysphp(php$thisphp-php>php_hashphp)php)php;
php php php php php php php php php$filehashphp php=php hashphp_filephp(php'mdphp5php'php,php php$valuephp)php;
php php php php php php php php ifphp php(php$filehashphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_DETECTEDphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp(php$hashesphp asphp php$hashphp)php php{
php php php php php php php php php php php php ifphp php(php$filehashphp php=php=php=php php$hashphp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:DOESphp_NOTphp_MATCHphp)php;
php php php php php}
php}
