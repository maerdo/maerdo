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
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php0php9php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Yamlphp.phpphp php2php3php2php9php4php php2php0php1php0php-php1php1php-php0php5php php0php0php:php2php7php:php3php4Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Configphp_Writer
php php*php/
requirephp_oncephp php'Zendphp/Configphp/Writerphp/FileAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Configphp_Yaml
php php*php/
requirephp_oncephp php'Zendphp/Configphp/Yamlphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Config
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php0php9php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Configphp_Writerphp_Yamlphp extendsphp Zendphp_Configphp_Writerphp_FileAbstract
php{
php php php php php/php*php*
php php php php php php*php Whatphp tophp callphp whenphp wephp needphp tophp decodephp somephp YAMLphp?
php php php php php php*
php php php php php php*php php@varphp callable
php php php php php php*php/
php php php php protectedphp php$php_yamlEncoderphp php=php arrayphp(php'Zendphp_Configphp_Writerphp_Yamlphp'php,php php'encodephp'php)php;

php php php php php/php*php*
php php php php php php*php Getphp callbackphp forphp decodingphp YAML
php php php php php php*
php php php php php php*php php@returnphp callable
php php php php php php*php/
php php php php publicphp functionphp getYamlEncoderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_yamlEncoderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbackphp forphp decodingphp YAML
php php php php php php*
php php php php php php*php php@paramphp php php$yamlEncoderphp thephp decoderphp tophp set
php php php php php php*php php@returnphp Zendphp_Configphp_Yaml
php php php php php php*php/
php php php php publicphp functionphp setYamlEncoderphp(php$yamlEncoderphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$yamlEncoderphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Configphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Configphp_Exceptionphp(php'Invalidphp parameterphp tophp setYamlEncoderphp php-php mustphp bephp callablephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_yamlEncoderphp php=php php$yamlEncoderphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp Zendphp_Configphp intophp aphp YAMLphp configphp stringphp.
php php php php php php*
php php php php php php*php php@sincephp php1php.php1php0
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php$dataphp php php php php php php php php=php php$thisphp-php>php_configphp-php>toArrayphp(php)php;
php php php php php php php php php$sectionNamephp php=php php$thisphp-php>php_configphp-php>getSectionNamephp(php)php;
php php php php php php php php php$extendsphp php php php php php=php php$thisphp-php>php_configphp-php>getExtendsphp(php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$sectionNamephp)php)php php{
php php php php php php php php php php php php php$dataphp php=php arrayphp(php$sectionNamephp php=php>php php$dataphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$extendsphp asphp php$sectionphp php=php>php php$parentSectionphp)php php{
php php php php php php php php php php php php php$dataphp[php$sectionphp]php[Zendphp_Configphp_Yamlphp:php:EXTENDSphp_NAMEphp]php php=php php$parentSectionphp;
php php php php php php php php php}

php php php php php php php php php/php/php Ensurephp thatphp eachphp php"extendsphp"php sectionphp actuallyphp exists
php php php php php php php php foreachphp php(php$dataphp asphp php$sectionphp php=php>php php$sectionDataphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$sectionDataphp)php php&php&php issetphp(php$sectionDataphp[Zendphp_Configphp_Yamlphp:php:EXTENDSphp_NAMEphp]php)php)php php{
php php php php php php php php php php php php php php php php php$sectionExtendsphp php=php php$sectionDataphp[Zendphp_Configphp_Yamlphp:php:EXTENDSphp_NAMEphp]php;
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$sectionExtendsphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Removephp php"extendsphp"php declarationphp ifphp sectionphp doesphp notphp exist
php php php php php php php php php php php php php php php php php php php php unsetphp(php$dataphp[php$sectionphp]php[Zendphp_Configphp_Yamlphp:php:EXTENDSphp_NAMEphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp callphp_userphp_funcphp(php$thisphp-php>getYamlEncoderphp(php)php,php php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Veryphp dumbphp YAMLphp encoder
php php php php php php*
php php php php php php*php Untilphp wephp havephp Zendphp_Yamlphp.php.php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$dataphp YAMLphp data
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp encodephp(php$dataphp)
php php php php php{
php php php php php php php php returnphp selfphp:php:php_encodeYamlphp(php0php,php php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Servicephp functionphp forphp encodingphp YAML
php php php php php php*
php php php php php php*php php@paramphp intphp php$indentphp Currentphp indentphp level
php php php php php php*php php@paramphp arrayphp php$dataphp Dataphp tophp encode
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_encodeYamlphp(php$indentphp,php php$dataphp)
php php php php php{
php php php php php php php php resetphp(php$dataphp)php;
php php php php php php php php php$resultphp php=php php"php"php;
php php php php php php php php php$numericphp php=php isphp_numericphp(keyphp(php$dataphp)php)php;

php php php php php php php php foreachphp(php$dataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$encodedphp php=php php"php\nphp"php.selfphp:php:php_encodeYamlphp(php$indentphp+php1php,php php$valuephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$encodedphp php=php php(stringphp)php$valuephp.php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp php.php=php strphp_repeatphp(php"php php php"php,php php$indentphp)php.php(php$numericphp?php"php-php php"php:php"php$keyphp:php php"php)php.php$encodedphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}
php}
