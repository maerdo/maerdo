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
php php*php php@versionphp php php php php$Idphp:php Projectphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_Project
php php php php extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php php php php/php/implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_DocblockManifestInterface
php{

php php php php protectedphp php$php_specialtiesphp php=php arrayphp(php'Infophp'php)php;

php php php php php/php*php*
php php php php php php*php createphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp stringphp php$nameOfProfilephp shortNamephp=n
php php php php php php*php php@paramphp stringphp php$fileOfProfilephp shortNamephp=f
php php php php php php*php/
php php php php publicphp functionphp createphp(php$pathphp,php php$nameOfProfilephp php=php nullphp,php php$fileOfProfilephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$pathphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$pathphp php=php getcwdphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$pathphp php=php trimphp(php$pathphp)php;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php php$createdphp php=php mkdirphp(php$pathphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$createdphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Couldphp notphp createphp requestedphp projectphp directoryphp php\php'php'php php.php php$pathphp php.php php'php\php'php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$pathphp php=php strphp_replacephp(php'php\php\php'php,php php'php/php'php,php realpathphp(php$pathphp)php)php;
php php php php php php php php php}

php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_RETURNphp_FALSEphp,php php$pathphp)php;

php php php php php php php php ifphp php(php$profilephp php!php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Aphp projectphp alreadyphp existsphp herephp'php)php;
php php php php php php php php php}

php php php php php php php php php$profileDataphp php=php nullphp;

php php php php php php php php ifphp php(php$fileOfProfilephp php!php=php nullphp php&php&php filephp_existsphp(php$fileOfProfilephp)php)php php{
php php php php php php php php php php php php php$profileDataphp php=php filephp_getphp_contentsphp(php$fileOfProfilephp)php;
php php php php php php php php php}

php php php php php php php php php$storagephp php=php php$thisphp-php>php_registryphp-php>getStoragephp(php)php;
php php php php php php php php ifphp php(php$profileDataphp php=php=php php'php'php php&php&php php$nameOfProfilephp php!php=php nullphp php&php&php php$storagephp-php>isEnabledphp(php)php)php php{
php php php php php php php php php php php php php$profileDataphp php=php php$storagephp-php>getphp(php'projectphp/profilesphp/php'php php.php php$nameOfProfilephp php.php php'php.xmlphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$profileDataphp php=php=php php'php'php)php php{
php php php php php php php php php php php php php$profileDataphp php=php php$thisphp-php>php_getDefaultProfilephp(php)php;
php php php php php php php php php}

php php php php php php php php php$newProfilephp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp(arrayphp(
php php php php php php php php php php php php php'projectDirectoryphp'php php=php>php php$pathphp,
php php php php php php php php php php php php php'profileDataphp'php php=php>php php$profileData
php php php php php php php php php php php php php)php)php;

php php php php php php php php php$newProfilephp-php>loadFromDataphp(php)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp projectphp atphp php'php php.php php$pathphp)php;
php php php php php php php php php$responsephp-php>appendContentphp(php'Notephp:php php'php,php arrayphp(php'separatorphp'php php=php>php falsephp,php php'colorphp'php php=php>php php'yellowphp'php)php)php;
php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php'Thisphp commandphp createdphp aphp webphp projectphp,php php'
php php php php php php php php php php php php php.php php'forphp morephp informationphp settingphp upphp yourphp VHOSTphp,php pleasephp seephp docsphp/READMEphp'php)php;

php php php php php php php php foreachphp php(php$newProfilephp-php>getIteratorphp(php)php asphp php$resourcephp)php php{
php php php php php php php php php php php php php$resourcephp-php>createphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp showphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Youphp probablyphp meantphp tophp runphp php"showphp projectphp.infophp"php.php'php,php arrayphp(php'colorphp'php php=php>php php'yellowphp'php)php)php;
php php php php php}

php php php php publicphp functionphp showInfophp(php)
php php php php php{
php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_RETURNphp_FALSEphp)php;
php php php php php php php php ifphp php(php!php$profilephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Nophp projectphp foundphp.php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Workingphp withphp projectphp locatedphp atphp:php php'php php.php php$profilephp-php>getAttributephp(php'projectDirectoryphp'php)php)php;
php php php php php php php php php}
php php php php php}

php php php php protectedphp functionphp php_getDefaultProfilephp(php)
php php php php php{
php php php php php php php php php$dataphp php=php <php<php<EOS
<php?xmlphp versionphp=php"php1php.php0php"php encodingphp=php"UTFphp-php8php"php?php>
php<projectProfilephp typephp=php"defaultphp"php versionphp=php"php1php.php1php0php"php>
php php php php php<projectDirectoryphp>
php php php php php php php php php<projectProfileFilephp php/php>
php php php php php php php php php<applicationDirectoryphp>
php php php php php php php php php php php php php<apisDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<configsDirectoryphp>
php php php php php php php php php php php php php php php php php<applicationConfigFilephp typephp=php"iniphp"php php/php>
php php php php php php php php php php php php <php/configsDirectoryphp>
php php php php php php php php php php php php php<controllersDirectoryphp>
php php php php php php php php php php php php php php php php php<controllerFilephp controllerNamephp=php"Indexphp"php>
php php php php php php php php php php php php php php php php php php php php php<actionMethodphp actionNamephp=php"indexphp"php php/php>
php php php php php php php php php php php php php php php php <php/controllerFilephp>
php php php php php php php php php php php php php php php php php<controllerFilephp controllerNamephp=php"Errorphp"php php/php>
php php php php php php php php php php php php <php/controllersDirectoryphp>
php php php php php php php php php php php php php<formsDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<layoutsDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<modelsDirectoryphp php/php>
php php php php php php php php php php php php php<modulesDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<viewsDirectoryphp>
php php php php php php php php php php php php php php php php php<viewScriptsDirectoryphp>
php php php php php php php php php php php php php php php php php php php php php<viewControllerScriptsDirectoryphp forControllerNamephp=php"Indexphp"php>
php php php php php php php php php php php php php php php php php php php php php php php php php<viewScriptFilephp forActionNamephp=php"indexphp"php php/php>
php php php php php php php php php php php php php php php php php php php php <php/viewControllerScriptsDirectoryphp>
php php php php php php php php php php php php php php php php php php php php php<viewControllerScriptsDirectoryphp forControllerNamephp=php"Errorphp"php>
php php php php php php php php php php php php php php php php php php php php php php php php php<viewScriptFilephp forActionNamephp=php"errorphp"php php/php>
php php php php php php php php php php php php php php php php php php php php <php/viewControllerScriptsDirectoryphp>
php php php php php php php php php php php php php php php php <php/viewScriptsDirectoryphp>
php php php php php php php php php php php php php php php php php<viewHelpersDirectoryphp php/php>
php php php php php php php php php php php php php php php php php<viewFiltersDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php <php/viewsDirectoryphp>
php php php php php php php php php php php php php<bootstrapFilephp php/php>
php php php php php php php php <php/applicationDirectoryphp>
php php php php php php php php php<dataDirectoryphp enabledphp=php"falsephp"php>
php php php php php php php php php php php php php<cacheDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<searchIndexesDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<localesDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<logsDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<sessionsDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<uploadsDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php <php/dataDirectoryphp>
php php php php php php php php php<docsDirectoryphp>
php php php php php php php php php php php php php<filephp filesystemNamephp=php"READMEphp.txtphp"php defaultContentCallbackphp=php"Zendphp_Toolphp_Projectphp_Providerphp_Projectphp:php:getDefaultReadmeContentsphp"php/php>
php php php php php php php php <php/docsDirectoryphp>
php php php php php php php php php<libraryDirectoryphp>
php php php php php php php php php php php php php<zfStandardLibraryDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php <php/libraryDirectoryphp>
php php php php php php php php php<publicDirectoryphp>
php php php php php php php php php php php php php<publicStylesheetsDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<publicScriptsDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<publicImagesDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php php php php php<publicIndexFilephp php/php>
php php php php php php php php php php php php php<htaccessFilephp php/php>
php php php php php php php php <php/publicDirectoryphp>
php php php php php php php php php<projectProvidersDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php<temporaryDirectoryphp enabledphp=php"falsephp"php php/php>
php php php php php php php php php<testsDirectoryphp>
php php php php php php php php php php php php php<testPHPUnitConfigFilephp php/php>
php php php php php php php php php php php php php<testApplicationDirectoryphp>
php php php php php php php php php php php php php php php php php<testApplicationBootstrapFilephp php/php>
php php php php php php php php php php php php <php/testApplicationDirectoryphp>
php php php php php php php php php php php php php<testLibraryDirectoryphp>
php php php php php php php php php php php php php php php php php<testLibraryBootstrapFilephp php/php>
php php php php php php php php php php php php <php/testLibraryDirectoryphp>
php php php php php php php php <php/testsDirectoryphp>
php php php php <php/projectDirectoryphp>
<php/projectProfilephp>
EOSphp;
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php publicphp staticphp functionphp getDefaultReadmeContentsphp(php$callerphp php=php nullphp)
php php php php php{
php php php php php php php php php$projectDirResourcephp php=php php$callerphp-php>getResourcephp(php)php-php>getProfilephp(php)php-php>searchphp(php'projectDirectoryphp'php)php;
php php php php php php php php ifphp php(php$projectDirResourcephp)php php{
php php php php php php php php php php php php php$namephp php=php ltrimphp(strrchrphp(php$projectDirResourcephp-php>getPathphp(php)php,php DIRECTORYphp_SEPARATORphp)php,php DIRECTORYphp_SEPARATORphp)php;
php php php php php php php php php php php php php$pathphp php=php php$projectDirResourcephp-php>getPathphp(php)php php.php php'php/publicphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$pathphp php=php php'php/pathphp/tophp/publicphp'php;
php php php php php php php php php}

php php php php php php php php returnphp <php<<php EOS
README
php=php=php=php=php=php=

Thisphp directoryphp shouldphp bephp usedphp tophp placephp projectphp specficphp documentationphp including
butphp notphp limitedphp tophp projectphp notesphp,php generatedphp APIphp/phpdocphp documentationphp,php or
manualphp filesphp generatedphp orphp handphp writtenphp.php php Ideallyphp,php thisphp directoryphp wouldphp remain
inphp yourphp developmentphp environmentphp onlyphp andphp shouldphp notphp bephp deployedphp withphp your
applicationphp tophp itphp'sphp finalphp productionphp locationphp.


Settingphp Upphp Yourphp VHOST
php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=php=

Thephp followingphp isphp aphp samplephp VHOSTphp youphp mightphp wantphp tophp considerphp forphp yourphp projectphp.

php<VirtualHostphp php*php:php8php0php>
php php php DocumentRootphp php"php$pathphp"
php php php ServerNamephp php$namephp.local

php php php php#php Thisphp shouldphp bephp omittedphp inphp thephp productionphp environment
php php php SetEnvphp APPLICATIONphp_ENVphp development

php php php php<Directoryphp php"php$pathphp"php>
php php php php php php php Optionsphp Indexesphp MultiViewsphp FollowSymLinks
php php php php php php php AllowOverridephp All
php php php php php php php Orderphp allowphp,deny
php php php php php php php Allowphp fromphp all
php php php <php/Directoryphp>

<php/VirtualHostphp>

EOSphp;
php php php php php}
php}