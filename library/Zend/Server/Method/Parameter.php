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
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Method
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Parameterphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Methodphp parameterphp metadata
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Method
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serverphp_Methodphp_Parameter
php{
php php php php php/php*php*
php php php php php php*php php@varphp mixedphp Defaultphp parameterphp value
php php php php php php*php/
php php php php protectedphp php$php_defaultValuephp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Parameterphp description
php php php php php php*php/
php php php php protectedphp php$php_descriptionphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Parameterphp variablephp name
php php php php php php*php/
php php php php protectedphp php$php_namephp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Isphp parameterphp optionalphp?
php php php php php php*php/
php php php php protectedphp php$php_optionalphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Parameterphp type
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php php'mixedphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp statephp fromphp arrayphp ofphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp defaultphp value
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$defaultValue
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setDefaultValuephp(php$defaultValuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultValuephp php=php php$defaultValuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp defaultphp value
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getDefaultValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp description
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$description
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setDescriptionphp(php$descriptionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_descriptionphp php=php php(stringphp)php php$descriptionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp description
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_descriptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_namephp php=php php(stringphp)php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionalphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setOptionalphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionalphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp parameterphp optionalphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isOptionalphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionalphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp parameterphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php php(stringphp)php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp parameterphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php php php php php=php>php php$thisphp-php>getTypephp(php)php,
php php php php php php php php php php php php php'namephp'php php php php php php php php php php=php>php php$thisphp-php>getNamephp(php)php,
php php php php php php php php php php php php php'optionalphp'php php php php php php=php>php php$thisphp-php>isOptionalphp(php)php,
php php php php php php php php php php php php php'defaultValuephp'php php=php>php php$thisphp-php>getDefaultValuephp(php)php,
php php php php php php php php php php php php php'descriptionphp'php php php=php>php php$thisphp-php>getDescriptionphp(php)php,
php php php php php php php php php)php;
php php php php php}
php}
