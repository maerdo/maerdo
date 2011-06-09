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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php DeclareVarsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp declaringphp defaultphp valuesphp ofphp templatephp variables
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_DeclareVarsphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Thephp viewphp objectphp thatphp createdphp thisphp helperphp objectphp.
php php php php php php*php php@varphp Zendphp_View
php php php php php php*php/
php php php php publicphp php$viewphp;

php php php php php/php*php*
php php php php php php*php Declarephp templatephp varsphp tophp setphp defaultphp valuesphp andphp avoidphp noticesphp whenphp usingphp strictVars
php php php php php php*
php php php php php php*php Primarilyphp forphp usephp whenphp usingphp php{php@linkphp Zendphp_Viewphp_Abstractphp:php:strictVarsphp(php)php Zendphp_Viewphp strictVarsphp(php)php}php,
php php php php php php*php thisphp helperphp canphp bephp usedphp tophp declarephp templatephp variablesphp thatphp mayphp orphp may
php php php php php php*php notphp alreadyphp bephp setphp inphp thephp viewphp objectphp,php asphp wellphp asphp tophp setphp defaultphp valuesphp.
php php php php php php*php Arraysphp passedphp asphp argumentsphp tophp thephp methodphp willphp bephp usedphp tophp setphp default
php php php php php php*php valuesphp;php otherwisephp,php ifphp thephp variablephp doesphp notphp existphp,php itphp isphp setphp tophp anphp empty
php php php php php php*php stringphp.
php php php php php php*
php php php php php php*php Usagephp:
php php php php php php*php php<codephp>
php php php php php php*php php$thisphp-php>declareVarsphp(
php php php php php php*php php php php php php'varNamephp1php'php,
php php php php php php*php php php php php php'varNamephp2php'php,
php php php php php php*php php php php php arrayphp(php'varNamephp3php'php php=php>php php'defaultValuephp'php,
php php php php php php*php php php php php php php php php php php php'varNamephp4php'php php=php>php arrayphp(php)
php php php php php php*php php php php php php)
php php php php php php*php php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp variablephp numberphp ofphp argumentsphp,php allphp stringphp namesphp ofphp variablesphp tophp test
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp declareVarsphp(php)
php php php php php{
php php php php php php php php php$argsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php foreachphp(php$argsphp asphp php$keyphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$keyphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_declareVarphp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php!issetphp(php$viewphp-php>php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_declareVarphp(php$keyphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp viewphp variable
php php php php php php*
php php php php php php*php Checksphp tophp seephp ifphp aphp php$keyphp isphp setphp inphp thephp viewphp objectphp;php ifphp notphp,php setsphp itphp tophp php$valuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php stringphp php$valuephp Defaultsphp tophp anphp emptyphp string
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_declareVarphp(php$keyphp,php php$valuephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>viewphp-php>php$keyphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>viewphp-php>php$keyphp php=php php$valuephp;
php php php php php php php php php}
php php php php php}
php}
