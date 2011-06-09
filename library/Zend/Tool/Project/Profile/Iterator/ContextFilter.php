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
php php*php php@versionphp php php php php$Idphp:php ContextFilterphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php Thisphp classphp isphp anphp iteratorphp thatphp willphp iteratephp onlyphp overphp enabledphp resources
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_ContextFilterphp extendsphp RecursiveFilterIterator
php{

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_acceptTypesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_denyTypesphp php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_acceptNamesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_denyNamesphp php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_rawOptionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)
php php php php php php*
php php php php php php*php php@paramphp RecursiveIteratorphp php$iterator
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(RecursiveIteratorphp php$iteratorphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$iteratorphp)php;
php php php php php php php php php$thisphp-php>php_rawOptionsphp php=php php$optionsphp;
php php php php php php php php ifphp php(php$optionsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php setOptionsphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionNamephp php=php>php php$optionValuephp)php php{
php php php php php php php php php php php php ifphp php(substrphp(php$optionNamephp,php php-php1php,php php1php)php php!php=php php'sphp'php)php php{
php php php php php php php php php php php php php php php php php$optionNamephp php.php=php php'sphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php'setphp'php php.php php$optionNamephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php'setphp'php php.php php$optionNamephp}php(php$optionValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php setAcceptTypesphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$acceptTypes
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_ContextFilter
php php php php php php*php/
php php php php publicphp functionphp setAcceptTypesphp(php$acceptTypesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$acceptTypesphp)php)php php{
php php php php php php php php php php php php php$acceptTypesphp php=php arrayphp(php$acceptTypesphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_acceptTypesphp php=php php$acceptTypesphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setDenyTypesphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$denyTypes
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_ContextFilter
php php php php php php*php/
php php php php publicphp functionphp setDenyTypesphp(php$denyTypesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$denyTypesphp)php)php php{
php php php php php php php php php php php php php$denyTypesphp php=php arrayphp(php$denyTypesphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_denyTypesphp php=php php$denyTypesphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setAcceptNamesphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$acceptNames
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_ContextFilter
php php php php php php*php/
php php php php publicphp functionphp setAcceptNamesphp(php$acceptNamesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$acceptNamesphp)php)php php{
php php php php php php php php php php php php php$acceptNamesphp php=php arrayphp(php$acceptNamesphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$acceptNamesphp asphp php$nphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php$acceptNamesphp[php$nphp]php php=php strtolowerphp(php$vphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_acceptNamesphp php=php php$acceptNamesphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setDenyNamesphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$denyNames
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_ContextFilter
php php php php php php*php/
php php php php publicphp functionphp setDenyNamesphp(php$denyNamesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$denyNamesphp)php)php php{
php php php php php php php php php php php php php$denyNamesphp php=php arrayphp(php$denyNamesphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$denyNamesphp asphp php$nphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php$denyNamesphp[php$nphp]php php=php strtolowerphp(php$vphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_denyNamesphp php=php php$denyNamesphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php acceptphp(php)php isphp requiredphp byphp tehphp RecursiveFilterIterator
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp acceptphp(php)
php php php php php{
php php php php php php php php php$currentItemphp php=php php$thisphp-php>currentphp(php)php;

php php php php php php php php ifphp php(inphp_arrayphp(strtolowerphp(php$currentItemphp-php>getNamephp(php)php)php,php php$thisphp-php>php_acceptNamesphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elseifphp php(inphp_arrayphp(strtolowerphp(php$currentItemphp-php>getNamephp(php)php)php,php php$thisphp-php>php_denyNamesphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_acceptTypesphp asphp php$acceptTypephp)php php{
php php php php php php php php php php php php ifphp php(php$currentItemphp-php>getContentphp(php)php instanceofphp php$acceptTypephp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_denyTypesphp asphp php$denyTypephp)php php{
php php php php php php php php php php php php ifphp php(php$currentItemphp-php>getContextphp(php)php instanceofphp php$denyTypephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getChildrenphp(php)
php php php php php php*
php php php php php php*php Thisphp isphp herephp duephp tophp aphp bugphp/designphp issuephp inphp PHP
php php php php php php*php php@link
php php php php php php*
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php functionphp getChildrenphp(php)
php php php php php{

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>refphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>refphp php=php newphp ReflectionClassphp(php$thisphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>refphp-php>newInstancephp(php$thisphp-php>getInnerIteratorphp(php)php-php>getChildrenphp(php)php,php php$thisphp-php>php_rawOptionsphp)php;
php php php php php}

php}
