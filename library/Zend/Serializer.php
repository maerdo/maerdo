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
php php*php php@packagephp php php php Zendphp_Serializer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Serializerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Loaderphp_PluginLoaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Serializer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serializer
php{
php php php php php/php*php*
php php php php php php*php Pluginphp loaderphp tophp loadphp adapterphp.
php php php php php php*
php php php php php php*php php@varphp nullphp|Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php privatephp staticphp php$php_adapterLoaderphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp defaultphp adapterphp.
php php php php php php*
php php php php php php*php php@varphp stringphp|Zendphp_Serializerphp_AdapterInterface
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultAdapterphp php=php php'PhpSerializephp'php;

php php php php php/php*php*
php php php php php php*php Createphp aphp serializerphp adapterphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Serializerphp_Adapterphp_AdapterInterfacephp php$adapterNamephp Namephp ofphp thephp adapterphp class
php php php php php php*php php@paramphp arrayphp php|Zendphp_Configphp php$optsphp Serializerphp options
php php php php php php*php php@returnphp Zendphp_Serializerphp_Adapterphp_AdapterInterface
php php php php php php*php/
php php php php publicphp staticphp functionphp factoryphp(php$adapterNamephp,php php$optsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$adapterNamephp instanceofphp Zendphp_Serializerphp_Adapterphp_AdapterInterfacephp)php php{
php php php php php php php php php php php php returnphp php$adapterNamephp;php php/php/php php$adapterNamephp isphp alreadyphp anphp adapterphp object
php php php php php php php php php}

php php php php php php php php php$adapterLoaderphp php=php selfphp:php:getAdapterLoaderphp(php)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$adapterClassphp php=php php$adapterLoaderphp-php>loadphp(php$adapterNamephp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php'Canphp\php'tphp loadphp serializerphp adapterphp php"php'php.php$adapterNamephp.php'php"php'php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php ZFphp-php8php8php4php2php:
php php php php php php php php php/php/php checkphp thatphp thephp loadedphp classphp implementsphp Zendphp_Serializerphp_Adapterphp_AdapterInterfacephp withoutphp executephp code
php php php php php php php php ifphp php(php!inphp_arrayphp(php'Zendphp_Serializerphp_Adapterphp_AdapterInterfacephp'php,php classphp_implementsphp(php$adapterClassphp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serializerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serializerphp_Exceptionphp(php'Thephp serializerphp adapterphp classphp php"php'php.php$adapterClassphp.php'php"php mustphp implementphp Zendphp_Serializerphp_Adapterphp_AdapterInterfacephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp php$adapterClassphp(php$optsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp adapterphp pluginphp loaderphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp getAdapterLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_adapterLoaderphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_adapterLoaderphp php=php selfphp:php:php_getDefaultAdapterLoaderphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_adapterLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Changephp thephp adapterphp pluginphp loadphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_PluginLoaderphp php$pluginLoader
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setAdapterLoaderphp(Zendphp_Loaderphp_PluginLoaderphp php$pluginLoaderphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_adapterLoaderphp php=php php$pluginLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetsphp thephp internalphp adapterphp pluginphp loader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp resetAdapterLoaderphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_adapterLoaderphp php=php selfphp:php:php_getDefaultAdapterLoaderphp(php)php;
php php php php php php php php returnphp selfphp:php:php$php_adapterLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp defaultphp adapterphp pluginphp loader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_getDefaultAdapterLoaderphp(php)
php php php php php{
php php php php php php php php php$loaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(php)php;
php php php php php php php php php$loaderphp-php>addPrefixPathphp(php'Zendphp_Serializerphp_Adapterphp'php,php dirnamephp(php_php_FILEphp_php_php)php.php'php/Serializerphp/Adapterphp'php)php;
php php php php php php php php returnphp php$loaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Changephp thephp defaultphp adapterphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Serializerphp_Adapterphp_AdapterInterfacephp php$adapter
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$options
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultAdapterphp(php$adapterphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php selfphp:php:php$php_defaultAdapterphp php=php selfphp:php:factoryphp(php$adapterphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp defaultphp adapterphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Serializerphp_Adapterphp_AdapterInterface
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultAdapterphp(php)
php php php php php{
php php php php php php php php ifphp php(php!selfphp:php:php$php_defaultAdapterphp instanceofphp Zendphp_Serializerphp_Adapterphp_AdapterInterfacephp)php php{
php php php php php php php php php php php php selfphp:php:setDefaultAdapterphp(selfphp:php:php$php_defaultAdapterphp)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_defaultAdapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatesphp aphp storablephp representationphp ofphp aphp valuephp usingphp thephp defaultphp adapterphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp serializephp(php$valuephp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'adapterphp'php]php)php)php php{
php php php php php php php php php php php php php$adapterphp php=php selfphp:php:factoryphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$adapterphp php=php selfphp:php:getDefaultAdapterphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$adapterphp-php>serializephp(php$valuephp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp PHPphp valuephp fromphp aphp storedphp representationphp usingphp thephp defaultphp adapterphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$serialized
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Serializerphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp unserializephp(php$serializedphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'adapterphp'php]php)php)php php{
php php php php php php php php php php php php php$adapterphp php=php selfphp:php:factoryphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$adapterphp php=php selfphp:php:getDefaultAdapterphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$adapterphp-php>unserializephp(php$serializedphp,php php$optionsphp)php;
php php php php php}
php}
