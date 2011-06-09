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
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@subpackagephp PHP
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Methodphp.phpphp php2php3php5php6php2php php2php0php1php0php-php1php2php-php1php9php php2php3php:php2php3php:php2php2Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Memberphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Memberphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Docblock
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Docblockphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Parameter
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Parameterphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_CodeGeneratorphp_Phpphp_Methodphp extendsphp Zendphp_CodeGeneratorphp_Phpphp_Memberphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_CodeGeneratorphp_Phpphp_Docblock
php php php php php php*php/
php php php php protectedphp php$php_docblockphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isFinalphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_parametersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_bodyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php fromReflectionphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Reflectionphp_Methodphp php$reflectionMethod
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Method
php php php php php php*php/
php php php php publicphp staticphp functionphp fromReflectionphp(Zendphp_Reflectionphp_Methodphp php$reflectionMethodphp)
php php php php php{
php php php php php php php php php$methodphp php=php newphp selfphp(php)php;

php php php php php php php php php$methodphp-php>setSourceContentphp(php$reflectionMethodphp-php>getContentsphp(falsephp)php)php;
php php php php php php php php php$methodphp-php>setSourceDirtyphp(falsephp)php;

php php php php php php php php ifphp php(php$reflectionMethodphp-php>getDocCommentphp(php)php php!php=php php'php'php)php php{
php php php php php php php php php php php php php$methodphp-php>setDocblockphp(Zendphp_CodeGeneratorphp_Phpphp_Docblockphp:php:fromReflectionphp(php$reflectionMethodphp-php>getDocblockphp(php)php)php)php;
php php php php php php php php php}

php php php php php php php php php$methodphp-php>setFinalphp(php$reflectionMethodphp-php>isFinalphp(php)php)php;

php php php php php php php php ifphp php(php$reflectionMethodphp-php>isPrivatephp(php)php)php php{
php php php php php php php php php php php php php$methodphp-php>setVisibilityphp(selfphp:php:VISIBILITYphp_PRIVATEphp)php;
php php php php php php php php php}php elseifphp php(php$reflectionMethodphp-php>isProtectedphp(php)php)php php{
php php php php php php php php php php php php php$methodphp-php>setVisibilityphp(selfphp:php:VISIBILITYphp_PROTECTEDphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$methodphp-php>setVisibilityphp(selfphp:php:VISIBILITYphp_PUBLICphp)php;
php php php php php php php php php}

php php php php php php php php php$methodphp-php>setStaticphp(php$reflectionMethodphp-php>isStaticphp(php)php)php;

php php php php php php php php php$methodphp-php>setNamephp(php$reflectionMethodphp-php>getNamephp(php)php)php;

php php php php php php php php foreachphp php(php$reflectionMethodphp-php>getParametersphp(php)php asphp php$reflectionParameterphp)php php{
php php php php php php php php php php php php php$methodphp-php>setParameterphp(Zendphp_CodeGeneratorphp_Phpphp_Parameterphp:php:fromReflectionphp(php$reflectionParameterphp)php)php;
php php php php php php php php php}

php php php php php php php php php$methodphp-php>setBodyphp(php$reflectionMethodphp-php>getBodyphp(php)php)php;

php php php php php php php php returnphp php$methodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setFinalphp(php)
php php php php php php*
php php php php php php*php php@paramphp boolphp php$isFinal
php php php php php php*php/
php php php php publicphp functionphp setFinalphp(php$isFinalphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_isFinalphp php=php php(php$isFinalphp)php php?php truephp php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setParametersphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$parameters
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Method
php php php php php php*php/
php php php php publicphp functionphp setParametersphp(Arrayphp php$parametersphp)
php php php php php{
php php php php php php php php foreachphp php(php$parametersphp asphp php$parameterphp)php php{
php php php php php php php php php php php php php$thisphp-php>setParameterphp(php$parameterphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setParameterphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp|arrayphp php$parameter
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Method
php php php php php php*php/
php php php php publicphp functionphp setParameterphp(php$parameterphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$parameterphp)php)php php{
php php php php php php php php php php php php php$parameterphp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp(php$parameterphp)php;
php php php php php php php php php php php php php$parameterNamephp php=php php$parameterphp-php>getNamephp(php)php;
php php php php php php php php php}php elseifphp php(php$parameterphp instanceofphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp)php php{
php php php php php php php php php php php php php$parameterNamephp php=php php$parameterphp-php>getNamephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_CodeGeneratorphp_Phpphp_Exceptionphp(php'setParameterphp(php)php expectsphp eitherphp anphp arrayphp ofphp methodphp optionsphp orphp anphp instancephp ofphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_parametersphp[php$parameterNamephp]php php=php php$parameterphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getParametersphp(php)
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_CodeGeneratorphp_Phpphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp getParametersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setBodyphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$body
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Method
php php php php php php*php/
php php php php publicphp functionphp setBodyphp(php$bodyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bodyphp php=php php$bodyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getBodyphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBodyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_bodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php generatephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generatephp(php)
php php php php php{
php php php php php php php php php$outputphp php=php php'php'php;

php php php php php php php php php$indentphp php=php php$thisphp-php>getIndentationphp(php)php;

php php php php php php php php ifphp php(php(php$docblockphp php=php php$thisphp-php>getDocblockphp(php)php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$docblockphp-php>setIndentationphp(php$indentphp)php;
php php php php php php php php php php php php php$outputphp php.php=php php$docblockphp-php>generatephp(php)php;
php php php php php php php php php}

php php php php php php php php php$outputphp php.php=php php$indentphp;

php php php php php php php php ifphp php(php$thisphp-php>isAbstractphp(php)php)php php{
php php php php php php php php php php php php php$outputphp php.php=php php'abstractphp php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$outputphp php.php=php php(php(php$thisphp-php>isFinalphp(php)php)php php?php php'finalphp php'php php:php php'php'php)php;
php php php php php php php php php}

php php php php php php php php php$outputphp php.php=php php$thisphp-php>getVisibilityphp(php)
php php php php php php php php php php php php php.php php(php(php$thisphp-php>isStaticphp(php)php)php php?php php'php staticphp'php php:php php'php'php)
php php php php php php php php php php php php php.php php'php functionphp php'php php.php php$thisphp-php>getNamephp(php)php php.php php'php(php'php;

php php php php php php php php php$parametersphp php=php php$thisphp-php>getParametersphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$parametersphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$parametersphp asphp php$parameterphp)php php{
php php php php php php php php php php php php php php php php php$parameterOuputphp[php]php php=php php$parameterphp-php>generatephp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$outputphp php.php=php implodephp(php'php,php php'php,php php$parameterOuputphp)php;
php php php php php php php php php}

php php php php php php php php php$outputphp php.php=php php'php)php'php php.php selfphp:php:LINEphp_FEEDphp php.php php$indentphp php.php php'php{php'php php.php selfphp:php:LINEphp_FEEDphp;

php php php php php php php php ifphp php(php$thisphp-php>php_bodyphp php&php&php php$thisphp-php>isSourceDirtyphp(php)php)php php{
php php php php php php php php php php php php php$outputphp php.php=php php'php php php php php php php php php'
php php php php php php php php php php php php php php php php php php php php php.php php strphp_replacephp(selfphp:php:LINEphp_FEEDphp,php selfphp:php:LINEphp_FEEDphp php.php php$indentphp php.php php$indentphp,php trimphp(php$thisphp-php>php_bodyphp)php)
php php php php php php php php php php php php php php php php php php php php php.php php selfphp:php:LINEphp_FEEDphp;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_bodyphp)php php{
php php php php php php php php php php php php php$outputphp php.php=php php$thisphp-php>php_bodyphp php.php selfphp:php:LINEphp_FEEDphp;
php php php php php php php php php}

php php php php php php php php php$outputphp php.php=php php$indentphp php.php php'php}php'php php.php selfphp:php:LINEphp_FEEDphp;

php php php php php php php php returnphp php$outputphp;
php php php php php}

php}
