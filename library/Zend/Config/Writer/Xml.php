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
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Xmlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Configphp_Writer
php php*php/
requirephp_oncephp php'Zendphp/Configphp/Writerphp/FileAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Configphp_Xml
php php*php/
requirephp_oncephp php'Zendphp/Configphp/Xmlphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Configphp_Writerphp_Xmlphp extendsphp Zendphp_Configphp_Writerphp_FileAbstract
php{
php php php php php/php*php*
php php php php php php*php Renderphp aphp Zendphp_Configphp intophp aphp XMLphp configphp stringphp.
php php php php php php*
php php php php php php*php php@sincephp php1php.php1php0
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$xmlphp php php php php php php php php php=php newphp SimpleXMLElementphp(php'php<zendphp-configphp xmlnsphp:zfphp=php"php'php php.php Zendphp_Configphp_Xmlphp:php:XMLphp_NAMESPACEphp php.php php'php"php/php>php'php)php;
php php php php php php php php php$extendsphp php php php php php=php php$thisphp-php>php_configphp-php>getExtendsphp(php)php;
php php php php php php php php php$sectionNamephp php=php php$thisphp-php>php_configphp-php>getSectionNamephp(php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$sectionNamephp)php)php php{
php php php php php php php php php php php php php$childphp php=php php$xmlphp-php>addChildphp(php$sectionNamephp)php;

php php php php php php php php php php php php php$thisphp-php>php_addBranchphp(php$thisphp-php>php_configphp,php php$childphp,php php$xmlphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_configphp asphp php$sectionNamephp php=php>php php$dataphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php(php$dataphp instanceofphp Zendphp_Configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$xmlphp-php>addChildphp(php$sectionNamephp,php php(stringphp)php php$dataphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$childphp php=php php$xmlphp-php>addChildphp(php$sectionNamephp)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$extendsphp[php$sectionNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$childphp-php>addAttributephp(php'zfphp:extendsphp'php,php php$extendsphp[php$sectionNamephp]php,php Zendphp_Configphp_Xmlphp:php:XMLphp_NAMESPACEphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_addBranchphp(php$dataphp,php php$childphp,php php$xmlphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$domphp php=php domphp_importphp_simplexmlphp(php$xmlphp)php-php>ownerDocumentphp;
php php php php php php php php php$domphp-php>formatOutputphp php=php truephp;

php php php php php php php php php$xmlStringphp php=php php$domphp-php>saveXMLphp(php)php;

php php php php php php php php returnphp php$xmlStringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp branchphp tophp anphp XMLphp objectphp recursively
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php php php php php php$config
php php php php php php*php php@paramphp php SimpleXMLElementphp php$xml
php php php php php php*php php@paramphp php SimpleXMLElementphp php$parent
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addBranchphp(Zendphp_Configphp php$configphp,php SimpleXMLElementphp php$xmlphp,php SimpleXMLElementphp php$parentphp)
php php php php php{
php php php php php php php php php$branchTypephp php=php nullphp;

php php php php php php php php foreachphp php(php$configphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php$branchTypephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$branchTypephp php=php php'numericphp'php;
php php php php php php php php php php php php php php php php php php php php php$branchNamephp php=php php$xmlphp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$xmlphp php php php php php php php php=php php$parentphp;

php php php php php php php php php php php php php php php php php php php php unsetphp(php$parentphp-php>php{php$branchNamephp}php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$branchTypephp php=php php'stringphp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php$branchTypephp php!php=php=php php(isphp_numericphp(php$keyphp)php php?php php'numericphp'php php:php php'stringphp'php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Mixingphp ofphp stringphp andphp numericphp keysphp isphp notphp allowedphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$branchTypephp php=php=php=php php'numericphp'php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php php php php php$childphp php=php php$parentphp-php>addChildphp(php$branchNamephp)php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_addBranchphp(php$valuephp,php php$childphp,php php$parentphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$parentphp-php>addChildphp(php$branchNamephp,php php(stringphp)php php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php php php php php$childphp php=php php$xmlphp-php>addChildphp(php$keyphp)php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_addBranchphp(php$valuephp,php php$childphp,php php$xmlphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$xmlphp-php>addChildphp(php$keyphp,php php(stringphp)php php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}
php}
