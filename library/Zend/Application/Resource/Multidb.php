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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Multidbphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;

requirephp_oncephp php'Zendphp/Dbphp/Tablephp.phpphp'php;

php/php*php*
php php*php/

php/php*php*
php php*php Cachephp Managerphp resource
php php*
php php*php Examplephp configurationphp:
php php*php php<prephp>
php php*php php php resourcesphp.multidbphp.defaultMetadataCachephp php=php php"databasephp"
php php*
php php*php php php resourcesphp.multidbphp.dbphp1php.adapterphp php=php php"pdophp_mysqlphp"
php php*php php php resourcesphp.multidbphp.dbphp1php.hostphp php=php php"localhostphp"
php php*php php php resourcesphp.multidbphp.dbphp1php.usernamephp php=php php"webuserphp"
php php*php php php resourcesphp.multidbphp.dbphp1php.passwordphp php=php php"XXXXphp"
php php*php php php resourcesphp.multidbphp.dbphp1php.dbnamephp php=php php"dbphp1php"
php php*php php php resourcesphp.multidbphp.dbphp1php.defaultphp php=php true
php php*
php php*php php php resourcesphp.multidbphp.dbphp2php.adapterphp php=php php"pdophp_pgsqlphp"
php php*php php php resourcesphp.multidbphp.dbphp2php.hostphp php=php php"examplephp.comphp"
php php*php php php resourcesphp.multidbphp.dbphp2php.usernamephp php=php php"dbaphp"
php php*php php php resourcesphp.multidbphp.dbphp2php.passwordphp php=php php"notthatpublicphp"
php php*php php php resourcesphp.multidbphp.dbphp2php.dbnamephp php=php php"dbphp2php"
php php*php <php/prephp>
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Multidbphp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php Associativephp arrayphp containingphp allphp configuredphp dbphp's
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dbsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp instancephp ofphp thephp defaultphp dbphp,php ifphp set
php php php php php php*
php php php php php php*php php@varphp nullphp|Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_defaultDbphp;

php php php php php/php*php*
php php php php php php*php Initializephp thephp Databasephp Connectionsphp php(instancesphp ofphp Zendphp_Dbphp_Tablephp_Abstractphp)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Multidb
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'defaultMetadataCachephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setDefaultMetadataCachephp(php$optionsphp[php'defaultMetadataCachephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'defaultMetadataCachephp'php]php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$optionsphp asphp php$idphp php=php>php php$paramsphp)php php{
php php php php php php php php php php php php php$adapterphp php=php php$paramsphp[php'adapterphp'php]php;
php php php php php php php php php php php php php$defaultphp php=php php(intphp)php php(
php php php php php php php php php php php php php php php php issetphp(php$paramsphp[php'isDefaultTableAdapterphp'php]php)php php&php&php php$paramsphp[php'isDefaultTableAdapterphp'php]
php php php php php php php php php php php php php php php php php|php|php issetphp(php$paramsphp[php'defaultphp'php]php)php php&php&php php$paramsphp[php'defaultphp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php unsetphp(
php php php php php php php php php php php php php php php php php$paramsphp[php'adapterphp'php]php,
php php php php php php php php php php php php php php php php php$paramsphp[php'defaultphp'php]php,
php php php php php php php php php php php php php php php php php$paramsphp[php'isDefaultTableAdapterphp'php]
php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php$thisphp-php>php_dbsphp[php$idphp]php php=php Zendphp_Dbphp:php:factoryphp(php$adapterphp,php php$paramsphp)php;

php php php php php php php php php php php php ifphp php(php$defaultphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_setDefaultphp(php$thisphp-php>php_dbsphp[php$idphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp thephp givenphp dbphp(identifierphp)php isphp thephp defaultphp dbphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Dbphp_Adapterphp_Abstractphp php$dbphp Thephp dbphp tophp determinephp whetherphp itphp'sphp setphp asphp default
php php php php php php*php php@returnphp booleanphp Truephp ifphp thephp givenphp parameterphp isphp configuredphp asphp defaultphp.php Falsephp otherwise
php php php php php php*php/
php php php php publicphp functionphp isDefaultphp(php$dbphp)
php php php php php{
php php php php php php php php ifphp(php!php$dbphp instanceofphp Zendphp_Dbphp_Adapterphp_Abstractphp)php php{
php php php php php php php php php php php php php$dbphp php=php php$thisphp-php>getDbphp(php$dbphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dbphp php=php=php=php php$thisphp-php>php_defaultDbphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp specifiedphp databasephp connection
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp|Zendphp_Dbphp_Adapterphp_Abstractphp php$dbphp Thephp adapterphp tophp retrievephp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Nullphp tophp retrievephp thephp defaultphp connection
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Resourcephp_Exceptionphp ifphp thephp givenphp parameterphp couldphp notphp bephp found
php php php php php php*php/
php php php php publicphp functionphp getDbphp(php$dbphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$dbphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getDefaultDbphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dbsphp[php$dbphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dbsphp[php$dbphp]php;
php php php php php php php php php}

php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(
php php php php php php php php php php php php php'Aphp DBphp adapterphp wasphp triedphp tophp retrievephp,php butphp wasphp notphp configuredphp'
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp defaultphp dbphp connection
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$justPickOnephp Ifphp truephp,php aphp randomphp php(thephp firstphp onephp inphp thephp stackphp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php connectionphp isphp returnedphp ifphp nophp defaultphp wasphp setphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php Ifphp falsephp,php nullphp isphp returnedphp ifphp nophp defaultphp wasphp setphp.
php php php php php php*php php@returnphp nullphp|Zendphp_Dbphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getDefaultDbphp(php$justPickOnephp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_defaultDbphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_defaultDbphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$justPickOnephp)php php{
php php php php php php php php php php php php returnphp resetphp(php$thisphp-php>php_dbsphp)php;php php/php/php Returnphp firstphp dbphp inphp dbphp pool
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp dbphp adapter
php php php php php php*
php php php php php php*php php@varphp Zendphp_Dbphp_Adapterphp_Abstractphp php$adapterphp Adapterphp tophp setphp asphp default
php php php php php php*php/
php php php php protectedphp functionphp php_setDefaultphp(Zendphp_Dbphp_Adapterphp_Abstractphp php$adapterphp)
php php php php php{
php php php php php php php php Zendphp_Dbphp_Tablephp:php:setDefaultAdapterphp(php$adapterphp)php;
php php php php php php php php php$thisphp-php>php_defaultDbphp php=php php$adapterphp;
php php php php php}

php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp metadataphp cache
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Cachephp_Corephp php$cache
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Multidb
php php php php php php*php/
php php php php protectedphp functionphp php_setDefaultMetadataCachephp(php$cachephp)
php php php php php{
php php php php php php php php php$metadataCachephp php=php nullphp;

php php php php php php php php ifphp php(isphp_stringphp(php$cachephp)php)php php{
php php php php php php php php php php php php php$bootstrapphp php=php php$thisphp-php>getBootstrapphp(php)php;
php php php php php php php php php php php php ifphp php(php$bootstrapphp instanceofphp Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapperphp php&php&
php php php php php php php php php php php php php php php php php$bootstrapphp-php>hasPluginResourcephp(php'CacheManagerphp'php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$cacheManagerphp php=php php$bootstrapphp-php>bootstrapphp(php'CacheManagerphp'php)
php php php php php php php php php php php php php php php php php php php php php-php>getResourcephp(php'CacheManagerphp'php)php;
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$cacheManagerphp php&php&php php$cacheManagerphp-php>hasCachephp(php$cachephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$metadataCachephp php=php php$cacheManagerphp-php>getCachephp(php$cachephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$cachephp instanceofphp Zendphp_Cachephp_Corephp)php php{
php php php php php php php php php php php php php$metadataCachephp php=php php$cachephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$metadataCachephp instanceofphp Zendphp_Cachephp_Corephp)php php{
php php php php php php php php php php php php Zendphp_Dbphp_Tablephp:php:setDefaultMetadataCachephp(php$metadataCachephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
