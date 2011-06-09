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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php StringToLowerphp.phpphp php2php2php7php9php0php php2php0php1php0php-php0php8php-php0php3php php1php9php:php1php6php:php3php3Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_StringToLowerphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Encodingphp forphp thephp inputphp string
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp|Zendphp_Configphp php$optionsphp OPTIONAL
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp php php php php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'encodingphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'encodingphp'php,php php$optionsphp)php php&php&php functionphp_existsphp(php'mbphp_internalphp_encodingphp'php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'encodingphp'php]php php=php mbphp_internalphp_encodingphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'encodingphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setEncodingphp(php$optionsphp[php'encodingphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp inputphp encodingphp forphp thephp givenphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Filterphp_StringToLowerphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$encodingphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!functionphp_existsphp(php'mbphp_strtolowerphp'php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'mbstringphp isphp requiredphp forphp thisphp featurephp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$encodingphp php=php php(stringphp)php php$encodingphp;
php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(strtolowerphp(php$encodingphp)php,php arrayphp_mapphp(php'strtolowerphp'php,php mbphp_listphp_encodingsphp(php)php)php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Thephp givenphp encodingphp php'php$encodingphp'php isphp notphp supportedphp byphp mbstringphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Returnsphp thephp stringphp php$valuephp,php convertingphp charactersphp tophp lowercasephp asphp necessary
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_encodingphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp mbphp_strtolowerphp(php(stringphp)php php$valuephp,php php$thisphp-php>php_encodingphp)php;
php php php php php php php php php}

php php php php php php php php returnphp strtolowerphp(php(stringphp)php php$valuephp)php;
php php php php php}
php}
