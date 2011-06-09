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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ResourceAbstractphp.phpphp php2php3php3php8php4php php2php0php1php0php-php1php1php-php1php9php php0php0php:php0php0php:php2php9Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_Resource
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/Resourcephp.phpphp'php;

php/php*php*
php php*php Abstractphp classphp forphp bootstrapphp resources
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_Resource
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Applicationphp_Resourcephp_ResourceAbstractphp implementsphp Zendphp_Applicationphp_Resourcephp_Resource
php{
php php php php php/php*php*
php php php php php php*php Parentphp bootstrap
php php php php php php*
php php php php php php*php php@varphp Zendphp_Applicationphp_Bootstrapphp_Bootstrapper
php php php php php php*php/
php php php php protectedphp php$php_bootstrapphp;

php php php php php/php*php*
php php php php php php*php Optionsphp forphp thephp resource
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Optionphp keysphp tophp skipphp whenphp callingphp setOptionsphp(php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_skipOptionsphp php=php arrayphp(
php php php php php php php php php'optionsphp'php,
php php php php php php php php php'configphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Createphp aphp instancephp withphp options
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}php elsephp ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp-php>toArrayphp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp fromphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Configurationphp forphp resource
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'bootstrapphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setBootstrapphp(php$optionsphp[php'bootstrapphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'bootstrapphp'php]php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(strtolowerphp(php$keyphp)php,php php$thisphp-php>php_skipOptionsphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php strtolowerphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp php=php php$thisphp-php>mergeOptionsphp(php$thisphp-php>php_optionsphp,php php$optionsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp resourcephp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergephp optionsphp recursively
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$arrayphp1
php php php php php php*php php@paramphp php mixedphp php$arrayphp2
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp mergeOptionsphp(arrayphp php$arrayphp1php,php php$arrayphp2php php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$arrayphp2php)php)php php{
php php php php php php php php php php php php foreachphp php(php$arrayphp2php asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$arrayphp2php[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$arrayphp1php[php$keyphp]php php=php php(arrayphp_keyphp_existsphp(php$keyphp,php php$arrayphp1php)php php&php&php isphp_arrayphp(php$arrayphp1php[php$keyphp]php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php?php php$thisphp-php>mergeOptionsphp(php$arrayphp1php[php$keyphp]php,php php$arrayphp2php[php$keyphp]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php:php php$arrayphp2php[php$keyphp]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$arrayphp1php[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$arrayphp1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp bootstrapphp tophp whichphp thephp resourcephp isphp attached
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp php$bootstrap
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*php/
php php php php publicphp functionphp setBootstrapphp(Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp php$bootstrapphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bootstrapphp php=php php$bootstrapphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp bootstrapphp tophp whichphp thephp resourcephp isphp attached
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_Applicationphp_Bootstrapphp_Bootstrapper
php php php php php php*php/
php php php php publicphp functionphp getBootstrapphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_bootstrapphp;
php php php php php}
php}
