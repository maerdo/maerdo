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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Profile
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Providerphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Repository
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Repositoryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Profilephp_FileParserphp_Xml
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/FileParserphp/Xmlphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Registry
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp.phpphp'php;

requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Providerphp/Initializablephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php php php extendsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Initializable
php{

php php php php constphp NOphp_PROFILEphp_THROWphp_EXCEPTIONphp php=php truephp;
php php php php constphp NOphp_PROFILEphp_RETURNphp_FALSEphp php php php php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp staticphp php$php_isInitializedphp php=php falsephp;

php php php php protectedphp php$php_projectPathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Projectphp_Profile
php php php php php php*php/
php php php php protectedphp php$php_loadedProfilephp php=php nullphp;

php php php php publicphp functionphp initializephp(php)
php php php php php{
php php php php php php php php php/php/php initializephp thephp ZFphp Contextsphp php(onlyphp oncephp perphp phpphp requestphp)
php php php php php php php php ifphp php(php!selfphp:php:php$php_isInitializedphp)php php{

php php php php php php php php php php php php php/php/php loadphp allphp basephp contextsphp ONCE
php php php php php php php php php php php php php$contextRegistryphp php=php Zendphp_Toolphp_Projectphp_Contextphp_Repositoryphp:php:getInstancephp(php)php;
php php php php php php php php php php php php php$contextRegistryphp-php>addContextsFromDirectoryphp(
php php php php php php php php php php php php php php php php dirnamephp(dirnamephp(php_php_FILEphp_php_php)php)php php.php php'php/Contextphp/Zfphp/php'php,php php'Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_php'
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$contextRegistryphp-php>addContextsFromDirectoryphp(
php php php php php php php php php php php php php php php php dirnamephp(dirnamephp(php_php_FILEphp_php_php)php)php php.php php'php/Contextphp/Filesystemphp/php'php,php php'Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_php'
php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php/php/php determinephp ifphp therephp arephp projectphp specficphp providersphp ONCE
php php php php php php php php php php php php php$profilePathphp php=php php$thisphp-php>php_findProfileDirectoryphp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_hasProjectProviderDirectoryphp(php$profilePathphp php.php DIRECTORYphp_SEPARATORphp php.php php'php.zfprojectphp.xmlphp'php)php)php php{
php php php php php php php php php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(php)php;
php php php php php php php php php php php php php php php php php/php/php projectphp providersphp directoryphp resource
php php php php php php php php php php php php php php php php php$ppdphp php=php php$profilephp-php>searchphp(php'ProjectProvidersDirectoryphp'php)php;
php php php php php php php php php php php php php php php php php$ppdphp-php>loadProvidersphp(php$thisphp-php>php_registryphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php selfphp:php:php$php_isInitializedphp php=php truephp;
php php php php php php php php php}

php php php php php php php php php/php/php loadphp upphp thephp extendingphp providersphp requiredphp contextphp classes
php php php php php php php php ifphp php(php$contextClassesphp php=php php$thisphp-php>getContextClassesphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_loadContextClassesIntoRegistryphp(php$contextClassesphp)php;
php php php php php php php php php}

php php php php php}

php php php php publicphp functionphp getContextClassesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_getProjectphp isphp designedphp tophp findphp ifphp therephp isphp projectphp filephp inphp thephp contextphp ofphp where
php php php php php php*php thephp clientphp hasphp beenphp calledphp fromphp.php.php php php Thephp searchphp orderphp isphp asphp followsphp.php.
php php php php php php*php php php php php-php traversingphp downwardsphp fromphp php(PWDphp)php php-php currentphp workingphp directory
php php php php php php*php php php php php-php ifphp anphp enpointphp variablephp hasphp beenphp registeredphp inphp tehphp clientphp registryphp php-php keyphp=workingDirectory
php php php php php php*php php php php php-php ifphp anphp ENVphp variablephp withphp thephp keyphp ZFPROJECTphp_PATHphp isphp found
php php php php php php*
php php php php php php*php php@paramphp php$loadProfileFlagphp boolphp Whetherphp orphp notphp tophp throwphp anphp exceptionphp whenphp nophp profilephp isphp found
php php php php php php*php php@paramphp php$projectDirectoryphp stringphp Thephp projectphp directoryphp tophp usephp tophp search
php php php php php php*php php@paramphp php$searchParentDirectoriesphp boolphp Whetherphp orphp notphp tophp searchphp upperphp levelphp direcotries
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profile
php php php php php php*php/
php php php php protectedphp functionphp php_loadProfilephp(php$loadProfileFlagphp php=php selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp,php php$projectDirectoryphp php=php nullphp,php php$searchParentDirectoriesphp php=php truephp)
php php php php php{
php php php php php php php php php$foundPathphp php=php php$thisphp-php>php_findProfileDirectoryphp(php$projectDirectoryphp,php php$searchParentDirectoriesphp)php;

php php php php php php php php ifphp php(php$foundPathphp php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php$loadProfileFlagphp php=php=php selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Aphp projectphp profilephp wasphp notphp foundphp.php'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$profilephp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp(php)php;
php php php php php php php php php$profilephp-php>setAttributephp(php'projectDirectoryphp'php,php php$foundPathphp)php;
php php php php php php php php php$profilephp-php>loadFromFilephp(php)php;
php php php php php php php php php$thisphp-php>php_loadedProfilephp php=php php$profilephp;
php php php php php php php php returnphp php$profilephp;
php php php php php}

php php php php protectedphp functionphp php_findProfileDirectoryphp(php$projectDirectoryphp php=php nullphp,php php$searchParentDirectoriesphp php=php truephp)
php php php php php{
php php php php php php php php php/php/php usephp thephp cwdphp ifphp nophp directoryphp wasphp provided
php php php php php php php php ifphp php(php$projectDirectoryphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$projectDirectoryphp php=php getcwdphp(php)php;
php php php php php php php php php}php elseifphp php(realpathphp(php$projectDirectoryphp)php php=php=php falsephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Thephp php$projectDirectoryphp suppliedphp doesphp notphp existphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$profilephp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp(php)php;

php php php php php php php php php$parentDirectoriesArrayphp php=php explodephp(DIRECTORYphp_SEPARATORphp,php ltrimphp(php$projectDirectoryphp,php DIRECTORYphp_SEPARATORphp)php)php;
php php php php php php php php whilephp php(php$parentDirectoriesArrayphp)php php{
php php php php php php php php php php php php php$projectDirectoryAssembledphp php=php implodephp(DIRECTORYphp_SEPARATORphp,php php$parentDirectoriesArrayphp)php;

php php php php php php php php php php php php ifphp php(DIRECTORYphp_SEPARATORphp php!php=php=php php"php\php\php"php)php php{
php php php php php php php php php php php php php php php php php$projectDirectoryAssembledphp php=php DIRECTORYphp_SEPARATORphp php.php php$projectDirectoryAssembledphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$profilephp-php>setAttributephp(php'projectDirectoryphp'php,php php$projectDirectoryAssembledphp)php;
php php php php php php php php php php php php ifphp php(php$profilephp-php>isLoadableFromFilephp(php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$profilephp)php;
php php php php php php php php php php php php php php php php returnphp php$projectDirectoryAssembledphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php breakphp afterphp firstphp runphp ifphp wephp arephp notphp tophp checkphp upperphp directories
php php php php php php php php php php php php ifphp php(php$searchParentDirectoriesphp php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php arrayphp_popphp(php$parentDirectoriesArrayphp)php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp thephp projectphp profilephp fromphp thephp currentphp workingphp directoryphp,php ifphp notphp throwphp exception
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profile
php php php php php php*php/
php php php php protectedphp functionphp php_loadProfileRequiredphp(php)
php php php php php{
php php php php php php php php php$profilephp php=php php$thisphp-php>php_loadProfilephp(php)php;
php php php php php php php php ifphp php(php$profilephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Providerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Aphp projectphp profilephp wasphp notphp foundphp inphp thephp currentphp workingphp directoryphp.php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$profilephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentlyphp loadedphp profile
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profile
php php php php php php*php/
php php php php protectedphp functionphp php_getProfilephp(php$loadProfileFlagphp php=php selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_loadedProfilephp)php php{
php php php php php php php php php php php php ifphp php(php(php$thisphp-php>php_loadProfilephp(php$loadProfileFlagphp)php php=php=php=php falsephp)php php&php&php php(php$loadProfileFlagphp php=php=php=php selfphp:php:NOphp_PROFILEphp_RETURNphp_FALSEphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_loadedProfilephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_storeProfilephp(php)
php php php php php php*
php php php php php php*php Thisphp methodphp willphp storephp thephp profilephp intophp itsphp properphp location
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_storeProfilephp(php)
php php php php php{
php php php php php php php php php$projectProfileFilephp php=php php$thisphp-php>php_loadedProfilephp-php>searchphp(php'ProjectProfileFilephp'php)php;

php php php php php php php php php$namephp php=php php$projectProfileFilephp-php>getContextphp(php)php-php>getPathphp(php)php;

php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Updatingphp projectphp profilephp php\php'php'php php.php php$namephp php.php php'php\php'php'php)php;

php php php php php php php php php$projectProfileFilephp-php>getContextphp(php)php-php>savephp(php)php;
php php php php php}

php php php php protectedphp functionphp php_getContentForContextphp(Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$contextphp,php php$methodNamephp,php php$parametersphp)
php php php php php{
php php php php php php php php php$storagephp php=php php$thisphp-php>php_registryphp-php>getStoragephp(php)php;
php php php php php php php php ifphp php(php!php$storagephp-php>isEnabledphp(php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!classphp_existsphp(php'Zendphp_Toolphp_Projectphp_Contextphp_Contentphp_Enginephp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Contentphp/Enginephp.phpphp'php;
php php php php php php php php php}

php php php php php php php php php$enginephp php=php newphp Zendphp_Toolphp_Projectphp_Contextphp_Contentphp_Enginephp(php$storagephp)php;
php php php php php php php php returnphp php$enginephp-php>getContentphp(php$contextphp,php php$methodNamephp,php php$parametersphp)php;
php php php php php}

php php php php protectedphp functionphp php_hasProjectProviderDirectoryphp(php$pathToProfileFilephp)
php php php php php{
php php php php php php php php php/php/php dophp somephp staticphp analysisphp ofphp thephp filephp sophp thatphp wephp canphp determinphp whetherphp orphp notphp tophp incure
php php php php php php php php php/php/php thephp costphp ofphp loadingphp thephp profilephp beforephp thephp systemphp isphp fullyphp bootstrapped
php php php php php php php php ifphp php(php!filephp_existsphp(php$pathToProfileFilephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$contentsphp php=php filephp_getphp_contentsphp(php$pathToProfileFilephp)php;
php php php php php php php php ifphp php(strstrphp(php$contentsphp,php php'php<projectProvidersDirectoryphp'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(strstrphp(php$contentsphp,php php'php<projectProvidersDirectoryphp enabledphp=php"falsephp"php'php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_loadContextClassesIntoRegistryphp(php)php php-php Thisphp isphp calledphp byphp thephp constructor
php php php php php php*php sophp thatphp childphp providersphp canphp providephp aphp listphp ofphp contextsphp tophp loadphp intophp the
php php php php php php*php contextphp repository
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$contextClasses
php php php php php php*php/
php php php php privatephp functionphp php_loadContextClassesIntoRegistryphp(php$contextClassesphp)
php php php php php{
php php php php php php php php php$registryphp php=php Zendphp_Toolphp_Projectphp_Contextphp_Repositoryphp:php:getInstancephp(php)php;

php php php php php php php php foreachphp php(php$contextClassesphp asphp php$contextClassphp)php php{
php php php php php php php php php php php php php$registryphp-php>addContextClassphp(php$contextClassphp)php;
php php php php php php php php php}
php php php php php}
php}
