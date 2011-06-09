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
php php*php php@versionphp php php php php$Idphp:php Dbphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;

php/php*php*
php php*php Resourcephp forphp creatingphp databasephp adapter
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Dbphp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php Adapterphp tophp use
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_adapterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Dbphp_Adapterphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_dbphp;

php php php php php/php*php*
php php php php php php*php Parametersphp tophp use
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Wetherphp tophp registerphp thephp createdphp adapterphp asphp defaultphp tablephp adapter
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isDefaultTableAdapterphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Setphp thephp adapter
php php php php php php*
php php php php php php*php php@paramphp php php$adapterphp string
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Db
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(php$adapterphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Adapterphp typephp tophp use
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp adapterphp params
php php php php php php*
php php php php php php*php php@paramphp php php$adapterphp string
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Db
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp php=php php$paramsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Adapterphp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp tophp usephp thisphp asphp defaultphp tablephp adapter
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$defaultTableAdapter
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Db
php php php php php php*php/
php php php php publicphp functionphp setIsDefaultTableAdapterphp(php$isDefaultTableAdapterphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_isDefaultTableAdapterphp php=php php$isDefaultTableAdapterphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thisphp adapterphp thephp defaultphp tablephp adapterphp?
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp isDefaultTableAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isDefaultTableAdapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp initializedphp DBphp connection
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_Dbphp_Adapterphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getDbAdapterphp(php)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$thisphp-php>php_dbphp)
php php php php php php php php php php php php php&php&php php(nullphp php!php=php=php php(php$adapterphp php=php php$thisphp-php>getAdapterphp(php)php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dbphp php=php Zendphp_Dbphp:php:factoryphp(php$adapterphp,php php$thisphp-php>getParamsphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dbphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapterphp_Abstractphp|null
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$dbphp php=php php$thisphp-php>getDbAdapterphp(php)php)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>isDefaultTableAdapterphp(php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Dbphp_Tablephp:php:setDefaultAdapterphp(php$dbphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$dbphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp metadataphp cache
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Cachephp_Corephp php$cache
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Db
php php php php php php*php/
php php php php publicphp functionphp setDefaultMetadataCachephp(php$cachephp)
php php php php php{
php php php php php php php php php$metadataCachephp php=php nullphp;

php php php php php php php php ifphp php(isphp_stringphp(php$cachephp)php)php php{
php php php php php php php php php php php php php$bootstrapphp php=php php$thisphp-php>getBootstrapphp(php)php;
php php php php php php php php php php php php ifphp php(php$bootstrapphp instanceofphp Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapper
php php php php php php php php php php php php php php php php php&php&php php$bootstrapphp-php>hasPluginResourcephp(php'CacheManagerphp'php)
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
