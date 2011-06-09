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
php php*php php@versionphp php php php php$Idphp:php Dynamicphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Metadataphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Metadataphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Metadataphp_Attributable
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Metadataphp/Attributablephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Dynamic
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Interfacephp,php Zendphp_Toolphp_Frameworkphp_Metadataphp_Attributable
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php php'Dynamicphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_valuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dynamicAttributesphp php=php arrayphp(php)php;

php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optNamephp php=php>php php$optValuephp)php php{
php php php php php php php php php php php php php$methodNamephp php=php php'setphp'php php.php php$optNamephp;
php php php php php php php php php php php php php$thisphp-php>php{php$methodNamephp}php(php$optValuephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php setTypephp(php)
php php php php php php*
php php php php php php*php php@paramphp php$type
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Dynamic
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getTypephp(php)
php php php php php php*
php php php php php php*php Thephp typephp ofphp metadataphp thisphp describes
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setNamephp(php)
php php php php php php*
php php php php php php*php php@paramphp php$name
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Dynamic
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_namephp php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php Metadataphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setValuephp(php)
php php php php php php*
php php php php php php*php php@paramphp php$value
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Dynamic
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getValuephp(php)
php php php php php php*
php php php php php php*php Metadataphp Value
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}

php php php php publicphp functionphp getAttributesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dynamicAttributesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_issetphp(php)
php php php php php php*
php php php php php php*php Checkphp ifphp anphp attrbutephp isphp set
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$namephp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_dynamicAttributesphp[php$namephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_unsetphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$namephp)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_dynamicAttributesphp[php$namephp]php)php;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_getphp(php)php php-php Getphp aphp propertyphp viaphp propertyphp callphp php$metadataphp-php>foo
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php'getphp'php php.php php$namephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php{php'getphp'php php.php php$namephp}php(php)php;
php php php php php php php php php}php elseifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_dynamicAttributesphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dynamicAttributesphp[php$namephp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Registryphp_Exceptionphp(php'Propertyphp php'php php.php php$namephp php.php php'php wasphp notphp locatedphp inphp thisphp metadataphp.php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_setphp(php)php php-php Setphp aphp propertyphp viaphp thephp magicphp setphp php$metadataphp-php>foophp php=php php'foophp'
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php'setphp'php php.php php$namephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php{php'setphp'php php.php php$namephp}php(php$valuephp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dynamicAttributesphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php/php/php php php php php php php php php{
php/php/php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/Exceptionphp.phpphp'php;
php/php/php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Registryphp_Exceptionphp(php'Propertyphp php'php php.php php$namephp php.php php'php wasphp notphp locatedphp inphp thisphp registryphp.php'php)php;
php/php/php php php php php php php php php}
php php php php php}

php}
