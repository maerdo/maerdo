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
php php*php php@versionphp php php php php$Idphp:php Configphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Config
php{

php php php php protectedphp php$php_configFilepathphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Config
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_configphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionNamephp php=php>php php$optionValuephp)php php{
php php php php php php php php php php php php php$setMethodNamephp php=php php'setphp'php php.php php$optionNamephp;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$setMethodNamephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$setMethodNamephp}php(php$optionValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$configFilepath
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Config
php php php php php php*php/
php php php php publicphp functionphp setConfigFilepathphp(php$configFilepathphp)
php php php php php{
php php php php php php php php ifphp php(php!filephp_existsphp(php$configFilepathphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Providedphp pathphp tophp configphp php'php php.php php$configFilepathphp php.php php'php doesphp notphp existphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_configFilepathphp php=php php$configFilepathphp;
php php php php php php php php php$thisphp-php>loadConfigphp(php$configFilepathphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp thephp configurationphp fromphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$configFilepath
php php php php php php*php/
php php php php protectedphp functionphp loadConfigphp(php$configFilepathphp)
php php php php php{
php php php php php php php php php$suffixphp php=php substrphp(php$configFilepathphp,php php-php4php)php;

php php php php php php php php switchphp php(php$suffixphp)php php{
php php php php php php php php php php php php casephp php'php.iniphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Iniphp.phpphp'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp php=php newphp Zendphp_Configphp_Iniphp(php$configFilepathphp,php nullphp,php arrayphp(php'allowModificationsphp'php php=php>php truephp)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php.xmlphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Xmlphp.phpphp'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp php=php newphp Zendphp_Configphp_Xmlphp(php$configFilepathphp,php nullphp,php arrayphp(php'allowModificationsphp'php php=php>php truephp)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php.phpphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp.phpphp'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp php=php newphp Zendphp_Configphp(includephp php$configFilepathphp,php truephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Unknownphp configphp filephp typephp php'
php php php php php php php php php php php php php php php php php php php php php.php php$suffixphp php.php php'php atphp locationphp php'php php.php php$configFilepath
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp filepathphp ofphp thephp configurationphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getConfigFilepathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_configFilepathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp configurationphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$defaultValue
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getphp(php$namephp,php php$defaultValuephp=nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConfigInstancephp(php)php-php>getphp(php$namephp,php php$defaultValuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp configurationphp value
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConfigInstancephp(php)php-php>php{php$namephp}php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp aphp configurationphp valuephp issetphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$namephp)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>existsphp(php)php php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp issetphp(php$thisphp-php>getConfigInstancephp(php)php-php>php{php$namephp}php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$namephp)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>getConfigInstancephp(php)php-php>php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getConfigInstancephp(php)php-php>php$namephp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp Userphp profilephp hasphp aphp configurationphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp existsphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>php_configphp!php=php=nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@throwsphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Config
php php php php php php*php/
php php php php publicphp functionphp getConfigInstancephp(php)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>existsphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php"Clientphp hasphp nophp persistentphp configurationphp.php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_configphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp changesphp tophp thephp configurationphp intophp persistencephp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp savephp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>existsphp(php)php)php php{
php php php php php php php php php php php php php$writerphp php=php php$thisphp-php>getConfigWriterphp(php)php;
php php php php php php php php php php php php php$writerphp-php>writephp(php$thisphp-php>getConfigFilepathphp(php)php,php php$thisphp-php>getConfigInstancephp(php)php,php truephp)php;
php php php php php php php php php php php php php$thisphp-php>loadConfigphp(php$thisphp-php>getConfigFilepathphp(php)php)php;

php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp configphp writerphp thatphp correspondsphp tophp thephp currentphp configphp filephp typephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Configphp_Writerphp_FileAbstract
php php php php php php*php/
php php php php protectedphp functionphp getConfigWriterphp(php)
php php php php php{
php php php php php php php php php$suffixphp php=php substrphp(php$thisphp-php>getConfigFilepathphp(php)php,php php-php4php)php;
php php php php php php php php switchphp(php$suffixphp)php php{
php php php php php php php php php php php php casephp php'php.iniphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Configphp/Writerphp/Iniphp.phpphp"php;
php php php php php php php php php php php php php php php php php$writerphp php=php newphp Zendphp_Configphp_Writerphp_Iniphp(php)php;
php php php php php php php php php php php php php php php php php$writerphp-php>setRenderWithoutSectionsphp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php.xmlphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Configphp/Writerphp/Xmlphp.phpphp"php;
php php php php php php php php php php php php php php php php php$writerphp php=php newphp Zendphp_Configphp_Writerphp_Xmlphp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php.phpphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Configphp/Writerphp/Arrayphp.phpphp"php;
php php php php php php php php php php php php php php php php php$writerphp php=php newphp Zendphp_Configphp_Writerphp_Arrayphp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Unknownphp configphp filephp typephp php'
php php php php php php php php php php php php php php php php php php php php php.php php$suffixphp php.php php'php atphp locationphp php'php php.php php$thisphp-php>getConfigFilepathphp(php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$writerphp;
php php php php php}
php}