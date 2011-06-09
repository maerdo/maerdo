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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DbAdapterphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Providerphp_Interactable
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Interactablephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_DbAdapter
php php php php extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interactablephp,php Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendable
php{

php php php php protectedphp php$php_appConfigFilePathphp php=php nullphp;

php php php php protectedphp php$php_configphp php=php nullphp;

php php php php protectedphp php$php_sectionNamephp php=php php'productionphp'php;

php php php php publicphp functionphp configurephp(php$dsnphp php=php nullphp,php php/php*php php$interactivelyPromptphp php=php falsephp,php php*php/php php$sectionNamephp php=php php'productionphp'php)
php php php php php{
php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php$appConfigFileResourcephp php=php php$profilephp-php>searchphp(php'applicationConfigFilephp'php)php;

php php php php php php php php ifphp php(php$appConfigFileResourcephp php=php=php falsephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'Aphp projectphp withphp anphp applicationphp configphp filephp isphp requiredphp tophp usephp thisphp providerphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_appConfigFilePathphp php=php php$appConfigFileResourcephp-php>getPathphp(php)php;

php php php php php php php php php$thisphp-php>php_configphp php=php newphp Zendphp_Configphp_Iniphp(php$thisphp-php>php_appConfigFilePathphp,php nullphp,php arrayphp(php'skipExtendsphp'php php=php>php truephp,php php'allowModificationsphp'php php=php>php truephp)php)php;

php php php php php php php php ifphp php(php$sectionNamephp php!php=php php'productionphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_sectionNamephp php=php php$sectionNamephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_configphp-php>php{php$thisphp-php>php_sectionNamephp}php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'Thephp configphp doesphp notphp havephp aphp php'php php.php php$thisphp-php>php_sectionNamephp php.php php'php sectionphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp-php>php{php$thisphp-php>php_sectionNamephp}php-php>resourcesphp-php>dbphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'Thephp configphp alreadyphp hasphp aphp dbphp resourcephp configuredphp inphp sectionphp php'php php.php php$thisphp-php>php_sectionNamephp php.php php'php.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$dsnphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_configureViaDSNphp(php$dsnphp)php;
php php php php php php php php php/php/php}php elseifphp php(php$interactivelyPromptphp)php php{
php php php php php php php php php/php/php php php php php$thisphp-php>php_promptForConfigphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Nothingphp tophp dophp!php'php)php;
php php php php php php php php php}


php php php php php}

php php php php protectedphp functionphp php_configureViaDSNphp(php$dsnphp)
php php php php php{
php php php php php php php php php$dsnVarsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(strposphp(php$dsnphp,php php'php=php'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Atphp leastphp onephp namephp valuephp pairphp isphp expectedphp,php typciallyphp php'
php php php php php php php php php php php php php php php php php.php php'inphp thephp formatphp ofphp php"adapterphp=Mysqliphp&usernamephp=unamephp&passwordphp=mypassphp&dbnamephp=mydbphp"php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php parsephp_strphp(php$dsnphp,php php$dsnVarsphp)php;

php php php php php php php php php/php/php parsephp_strphp suffersphp whenphp magicphp_quotesphp isphp enabled
php php php php php php php php ifphp php(getphp_magicphp_quotesphp_gpcphp(php)php)php php{
php php php php php php php php php php php php arrayphp_walkphp_recursivephp(php$dsnVarsphp,php arrayphp(php$thisphp,php php'php_cleanMagicQuotesInValuesphp'php)php)php;
php php php php php php php php php}

php php php php php php php php php$dbConfigValuesphp php=php arrayphp(php'resourcesphp'php php=php>php arrayphp(php'dbphp'php php=php>php nullphp)php)php;

php php php php php php php php ifphp php(issetphp(php$dsnVarsphp[php'adapterphp'php]php)php)php php{
php php php php php php php php php php php php php$dbConfigValuesphp[php'resourcesphp'php]php[php'dbphp'php]php[php'adapterphp'php]php php=php php$dsnVarsphp[php'adapterphp'php]php;
php php php php php php php php php php php php unsetphp(php$dsnVarsphp[php'adapterphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$dbConfigValuesphp[php'resourcesphp'php]php[php'dbphp'php]php[php'paramsphp'php]php php=php php$dsnVarsphp;

php php php php php php php php php$isPretendphp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php;

php php php php php php php php php/php/php getphp thephp configphp resource
php php php php php php php php php$applicationConfigphp php=php php$thisphp-php>php_loadedProfilephp-php>searchphp(php'ApplicationConfigFilephp'php)php;
php php php php php php php php php$applicationConfigphp-php>addItemphp(php$dbConfigValuesphp,php php$thisphp-php>php_sectionNamephp,php nullphp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php ifphp php(php$isPretendphp)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Aphp dbphp configurationphp forphp thephp php'php php.php php$thisphp-php>php_sectionName
php php php php php php php php php php php php php php php php php.php php'php sectionphp wouldphp bephp writtenphp tophp thephp applicationphp configphp filephp withphp thephp followingphp contentsphp:php php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php$applicationConfigphp-php>getContentsphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$applicationConfigphp-php>createphp(php)php;
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Aphp dbphp configurationphp forphp thephp php'php php.php php$thisphp-php>php_sectionName
php php php php php php php php php php php php php php php php php.php php'php sectionphp hasphp beenphp writtenphp tophp thephp applicationphp configphp filephp.php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php protectedphp functionphp php_cleanMagicQuotesInValuesphp(php&php$valuephp,php php$keyphp)
php php php php php{
php php php php php php php php php$valuephp php=php stripslashesphp(php$valuephp)php;
php php php php php}

php}
