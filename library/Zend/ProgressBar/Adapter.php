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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_ProgressBar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Adapterphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp classphp forphp Zendphp_ProgressBarphp_Adapters
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_ProgressBar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_ProgressBarphp_Adapter
php{
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
php php php php php php*php Createphp aphp newphp adapter
php php php php php php*
php php php php php php*php php$optionsphp mayphp bephp eitherphp bephp anphp arrayphp orphp aphp Zendphp_Configphp objectphp which
php php php php php php*php specifiesphp adapterphp relatedphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp nullphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp viaphp aphp Zendphp_Configphp instance
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapter
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp viaphp anphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapter
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(strtolowerphp(php$keyphp)php,php php$thisphp-php>php_skipOptionsphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Notifyphp thephp adapterphp aboutphp anphp update
php php php php php php*
php php php php php php*php php@paramphp php floatphp php php php$currentphp php php php php php php Currentphp progressphp value
php php php php php php*php php@paramphp php floatphp php php php$maxphp php php php php php php php php php php Maxphp progressphp value
php php php php php php*php php@paramphp php floatphp php php php$percentphp php php php php php php Currentphp percentphp value
php php php php php php*php php@paramphp php integerphp php$timeTakenphp php php php php Takenphp timephp inphp seconds
php php php php php php*php php@paramphp php integerphp php$timeRemainingphp Remainingphp timephp inphp seconds
php php php php php php*php php@paramphp php stringphp php php$textphp php php php php php php php php php Statusphp text
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp notifyphp(php$currentphp,php php$maxphp,php php$percentphp,php php$timeTakenphp,php php$timeRemainingphp,php php$textphp)php;

php php php php php/php*php*
php php php php php php*php Calledphp whenphp thephp progressphp isphp explicitlyphp finished
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp finishphp(php)php;
php}
