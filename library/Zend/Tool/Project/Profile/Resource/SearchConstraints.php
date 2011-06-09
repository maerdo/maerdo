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
php php*php php@versionphp php php php php$Idphp:php SearchConstraintsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Thisphp classphp isphp anphp iteratorphp thatphp willphp iteratephp onlyphp overphp enabledphp resources
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_SearchConstraints
php{

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_constraintsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addConstraintphp(php$optionsphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php setOptionsphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$option
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_SearchConstraints
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionphp asphp php$optionNamephp php=php>php php$optionValuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_intphp(php$optionNamephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addConstraintphp(php$optionValuephp)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_stringphp(php$optionNamephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addConstraintphp(arrayphp(php'namephp'php php=php>php php$optionNamephp,php php'paramsphp'php php=php>php php$optionValuephp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php addConstraintphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$constraint
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_SearchConstraints
php php php php php php*php/
php php php php publicphp functionphp addConstraintphp(php$constraintphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$constraintphp)php)php php{
php php php php php php php php php php php php php$namephp php php php=php php$constraintphp;
php php php php php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$constraintphp)php)php php{
php php php php php php php php php php php php php$namephp php php php=php php$constraintphp[php'namephp'php]php;
php php php php php php php php php php php php php$paramsphp php=php php$constraintphp[php'paramsphp'php]php;
php php php php php php php php php}

php php php php php php php php php$constraintphp php=php php$thisphp-php>php_makeConstraintphp(php$namephp,php php$paramsphp)php;

php php php php php php php php arrayphp_pushphp(php$thisphp-php>php_constraintsphp,php php$constraintphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getConstraintphp(php)
php php php php php php*
php php php php php php*php php@returnphp ArrayObject
php php php php php php*php/
php php php php publicphp functionphp getConstraintphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_shiftphp(php$thisphp-php>php_constraintsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_makeConstraint
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$params
php php php php php php*php php@returnphp ArrayObject
php php php php php php*php/
php php php php protectedphp functionphp php_makeConstraintphp(php$namephp,php php$paramsphp)
php php php php php{
php php php php php php php php php$valuephp php=php arrayphp(php'namephp'php php=php>php php$namephp,php php'paramsphp'php php=php>php php$paramsphp)php;
php php php php php php php php returnphp newphp ArrayObjectphp(php$valuephp,php ArrayObjectphp:php:ARRAYphp_ASphp_PROPSphp)php;
php php php php php}

php}