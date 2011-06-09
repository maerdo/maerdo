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
php php*php php@versionphp php php php php$Idphp:php DbTablephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Providerphp_DbTable
php php php php extendsphp Zendphp_Toolphp_Projectphp_Providerphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendable
php{

php php php php protectedphp php$php_specialtiesphp php=php arrayphp(php'FromDatabasephp'php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Filter
php php php php php php*php/
php php php php protectedphp php$php_nameFilterphp php=php nullphp;

php php php php publicphp staticphp functionphp createResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$dbTableNamephp,php php$actualTableNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$moduleNamephp php!php=php nullphp php&php&php isphp_stringphp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php'modulesDirectoryphp'php,php php'moduleDirectoryphp'php php=php>php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp[php]php php=php php'modelsDirectoryphp'php;

php php php php php php php php php$modelsDirectoryphp php=php php$profilephp-php>searchphp(php$profileSearchParamsphp)php;

php php php php php php php php ifphp php(php!php(php$modelsDirectoryphp instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Aphp modelsphp directoryphp wasphp notphp foundphp'php php.
php php php php php php php php php php php php php php php php php(php(php$moduleNamephp)php php?php php'php forphp modulephp php'php php.php php$moduleNamephp php.php php'php.php'php php:php php'php.php'php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$dbTableDirectoryphp php=php php$modelsDirectoryphp-php>searchphp(php'DbTableDirectoryphp'php)php)php)php php{
php php php php php php php php php php php php php$dbTableDirectoryphp php=php php$modelsDirectoryphp-php>createResourcephp(php'DbTableDirectoryphp'php)php;
php php php php php php php php php}

php php php php php php php php php$dbTableFilephp php=php php$dbTableDirectoryphp-php>createResourcephp(php'DbTableFilephp'php,php arrayphp(php'dbTableNamephp'php php=php>php php$dbTableNamephp,php php'actualTableNamephp'php php=php>php php$actualTableNamephp)php)php;

php php php php php php php php returnphp php$dbTableFilephp;
php php php php php}

php php php php publicphp staticphp functionphp hasResourcephp(Zendphp_Toolphp_Projectphp_Profilephp php$profilephp,php php$dbTableNamephp,php php$moduleNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$moduleNamephp php!php=php nullphp php&php&php isphp_stringphp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php php$profileSearchParamsphp php=php arrayphp(php'modulesDirectoryphp'php,php php'moduleDirectoryphp'php php=php>php arrayphp(php'moduleNamephp'php php=php>php php$moduleNamephp)php)php;
php php php php php php php php php}

php php php php php php php php php$profileSearchParamsphp[php]php php=php php'modelsDirectoryphp'php;

php php php php php php php php php$modelsDirectoryphp php=php php$profilephp-php>searchphp(php$profileSearchParamsphp)php;

php php php php php php php php ifphp php(php!php(php$modelsDirectoryphp instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)
php php php php php php php php php php php php php|php|php php!php(php$dbTableDirectoryphp php=php php$modelsDirectoryphp-php>searchphp(php'DbTableDirectoryphp'php)php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$dbTableFilephp php=php php$dbTableDirectoryphp-php>searchphp(arrayphp(php'DbTableFilephp'php php=php>php arrayphp(php'dbTableNamephp'php php=php>php php$dbTableNamephp)php)php)php;

php php php php php php php php returnphp php(php$dbTableFilephp instanceofphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp)php php?php truephp php:php falsephp;
php php php php php}


php php php php publicphp functionphp createphp(php$namephp,php php$actualTableNamephp,php php$modulephp php=php nullphp,php php$forceOverwritephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php/php/php Checkphp thatphp therephp isphp notphp aphp dashphp orphp underscorephp,php returnphp ifphp doesntphp matchphp regex
php php php php php php php php ifphp php(pregphp_matchphp(php'php#php[php_php-php]php#php'php,php php$namephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'DbTablephp namesphp shouldphp bephp camelphp casedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$originalNamephp php=php php$namephp;
php php php php php php php php php$namephp php=php ucfirstphp(php$namephp)php;

php php php php php php php php ifphp php(php$actualTableNamephp php=php=php php'php'php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Youphp mustphp providephp bothphp thephp DbTablephp namephp asphp wellphp asphp thephp actualphp dbphp tablephp\php'sphp namephp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:hasResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$modulephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Thisphp projectphp alreadyphp hasphp aphp DbTablephp namedphp php'php php.php php$namephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php getphp requestphp/responsephp object
php php php php php php php php php$requestphp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php php/php/php alertphp thephp userphp aboutphp inlinephp convertedphp names
php php php php php php php php php$tensephp php=php php(php(php$requestphp-php>isPretendphp(php)php)php php?php php'wouldphp bephp'php php:php php'isphp'php)php;

php php php php php php php php ifphp php(php$namephp php!php=php=php php$originalNamephp)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php'Notephp:php Thephp canonicalphp modelphp namephp thatphp php'php php.php php$tense
php php php php php php php php php php php php php php php php php php php php php.php php'php usedphp withphp otherphp providersphp isphp php"php'php php.php php$namephp php.php php'php"php;php'
php php php php php php php php php php php php php php php php php php php php php.php php'php notphp php"php'php php.php php$originalNamephp php.php php'php"php asphp suppliedphp'php,
php php php php php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php arrayphp(php'yellowphp'php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$tableResourcephp php=php selfphp:php:createResourcephp(php$thisphp-php>php_loadedProfilephp,php php$namephp,php php$actualTableNamephp,php php$modulephp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;
php php php php php php php php php php php php php$responsephp-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php dophp thephp creation
php php php php php php php php ifphp php(php$requestphp-php>isPretendphp(php)php)php php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Wouldphp createphp aphp DbTablephp atphp php'php php php.php php$tableResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$responsephp-php>appendContentphp(php'Creatingphp aphp DbTablephp atphp php'php php.php php$tableResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php$tableResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp createFromDatabasephp(php$modulephp php=php nullphp,php php$forceOverwritephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_loadProfilephp(selfphp:php:NOphp_PROFILEphp_THROWphp_EXCEPTIONphp)php;

php php php php php php php php php$bootstrapResourcephp php=php php$thisphp-php>php_loadedProfilephp-php>searchphp(php'BootstrapFilephp'php)php;

php php php php php php php php php/php*php php@varphp php$zendAppphp Zendphp_Applicationphp php*php/
php php php php php php php php php$zendAppphp php=php php$bootstrapResourcephp-php>getApplicationInstancephp(php)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$zendAppphp-php>bootstrapphp(php'dbphp'php)php;
php php php php php php php php php}php catchphp php(Zendphp_Applicationphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(php'Dbphp resourcephp notphp availablephp,php youphp mightphp needphp tophp configurephp aphp DbAdapterphp.php'php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php*php php@varphp php$dbphp Zendphp_Dbphp_Adapterphp_Abstractphp php*php/
php php php php php php php php php$dbphp php=php php$zendAppphp-php>getBootstrapphp(php)php-php>getResourcephp(php'dbphp'php)php;

php php php php php php php php php$tableResourcesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$dbphp-php>listTablesphp(php)php asphp php$actualTableNamephp)php php{

php php php php php php php php php php php php php$dbTableNamephp php=php php$thisphp-php>php_convertTableNameToClassNamephp(php$actualTableNamephp)php;

php php php php php php php php php php php php ifphp php(php!php$forceOverwritephp php&php&php selfphp:php:hasResourcephp(php$thisphp-php>php_loadedProfilephp,php php$dbTableNamephp,php php$modulephp)php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Providerphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Thisphp DbTablephp resourcephp alreadyphp existsphp,php ifphp youphp wishphp tophp overwritephp itphp,php php'
php php php php php php php php php php php php php php php php php php php php php.php php'passphp thephp php"forceOverwritephp"php flagphp tophp thisphp providerphp.php'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$tableResourcesphp[php]php php=php selfphp:php:createResourcephp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_loadedProfilephp,
php php php php php php php php php php php php php php php php php$dbTableNamephp,
php php php php php php php php php php php php php php php php php$actualTableNamephp,
php php php php php php php php php php php php php php php php php$module
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$tableResourcesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Therephp arephp nophp tablesphp inphp thephp selectedphp databasephp tophp writephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php dophp thephp creation
php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isPretendphp(php)php)php php{

php php php php php php php php php php php php foreachphp php(php$tableResourcesphp asphp php$tableResourcephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Wouldphp createphp aphp DbTablephp atphp php'php php php.php php$tableResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php foreachphp php(php$tableResourcesphp asphp php$tableResourcephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>appendContentphp(php'Creatingphp aphp DbTablephp atphp php'php php.php php$tableResourcephp-php>getContextphp(php)php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php php php php php$tableResourcephp-php>createphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_storeProfilephp(php)php;
php php php php php php php php php}


php php php php php}

php php php php protectedphp functionphp php_convertTableNameToClassNamephp(php$tableNamephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_nameFilterphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_nameFilterphp php=php newphp Zendphp_Filterphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_nameFilter
php php php php php php php php php php php php php php php php php-php>addFilterphp(newphp Zendphp_Filterphp_Wordphp_UnderscoreToCamelCasephp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_nameFilterphp-php>filterphp(php$tableNamephp)php;
php php php php php}

php}