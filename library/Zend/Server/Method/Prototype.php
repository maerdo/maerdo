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
php php*php php@versionphp php php php php$Idphp:php Prototypephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Methodphp prototypephp metadata
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Method
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serverphp_Methodphp_Prototype
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Returnphp type
php php php php php php*php/
php php php php protectedphp php$php_returnTypephp php=php php'voidphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Mapphp parameterphp namesphp tophp parameterphp index
php php php php php php*php/
php php php php protectedphp php$php_parameterNameMapphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Methodphp parameters
php php php php php php*php/
php php php php protectedphp php$php_parametersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$optionsphp)php php&php&php isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp returnphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$returnType
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Prototype
php php php php php php*php/
php php php php publicphp functionphp setReturnTypephp(php$returnTypephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_returnTypephp php=php php$returnTypephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp returnphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getReturnTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_returnTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp parameter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$parameter
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Prototype
php php php php php php*php/
php php php php publicphp functionphp addParameterphp(php$parameterphp)
php php php php php{
php php php php php php php php ifphp php(php$parameterphp instanceofphp Zendphp_Serverphp_Methodphp_Parameterphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_parametersphp[php]php php=php php$parameterphp;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$namephp php=php php$parameterphp-php>getNamephp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_parameterNameMapphp[php$namephp]php php=php countphp(php$thisphp-php>php_parametersphp)php php-php php1php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Methodphp/Parameterphp.phpphp'php;
php php php php php php php php php php php php php$parameterphp php=php newphp Zendphp_Serverphp_Methodphp_Parameterphp(arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php(stringphp)php php$parameterphp,
php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php$thisphp-php>php_parametersphp[php]php php=php php$parameterphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp parameters
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$parameter
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Prototype
php php php php php php*php/
php php php php publicphp functionphp addParametersphp(arrayphp php$parametersphp)
php php php php php{
php php php php php php php php foreachphp php(php$parametersphp asphp php$parameterphp)php php{
php php php php php php php php php php php php php$thisphp-php>addParameterphp(php$parameterphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp parameters
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$parameters
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Prototype
php php php php php php*php/
php php php php publicphp functionphp setParametersphp(arrayphp php$parametersphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parametersphp php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_parameterNameMapphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>addParametersphp(php$parametersphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp parametersphp asphp listphp ofphp types
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParametersphp(php)
php php php php php{
php php php php php php php php php$typesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_parametersphp asphp php$parameterphp)php php{
php php php php php php php php php php php php php$typesphp[php]php php=php php$parameterphp-php>getTypephp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$typesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp parameterphp objects
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParameterObjectsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp singlephp parameterphp byphp namephp orphp index
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$index
php php php php php php*php php@returnphp nullphp|Zendphp_Serverphp_Methodphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp getParameterphp(php$indexphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$indexphp)php php&php&php php!isphp_numericphp(php$indexphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$indexphp,php php$thisphp-php>php_parameterNameMapphp)php)php php{
php php php php php php php php php php php php php$indexphp php=php php$thisphp-php>php_parameterNameMapphp[php$indexphp]php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$indexphp,php php$thisphp-php>php_parametersphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_parametersphp[php$indexphp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp statephp fromphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Prototype
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
php php php php php php*php Serializephp tophp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'returnTypephp'php php=php>php php$thisphp-php>getReturnTypephp(php)php,
php php php php php php php php php php php php php'parametersphp'php php=php>php php$thisphp-php>getParametersphp(php)php,
php php php php php php php php php)php;
php php php php php}
php}
