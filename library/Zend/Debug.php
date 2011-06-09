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
php php*php php@packagephp php php php Zendphp_Debug
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Debugphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Concretephp classphp forphp generatingphp debugphp dumpsphp relatedphp tophp thephp outputphp sourcephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Debug
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Debug
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_sapiphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Getphp thephp currentphp valuephp ofphp thephp debugphp outputphp environmentphp.
php php php php php php*php Thisphp defaultsphp tophp thephp valuephp ofphp PHPphp_SAPIphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp;
php php php php php php*php/
php php php php publicphp staticphp functionphp getSapiphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_sapiphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_sapiphp php=php PHPphp_SAPIphp;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_sapiphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp debugphp ouputphp environmentphp.
php php php php php php*php Settingphp aphp valuephp ofphp nullphp causesphp Zendphp_Debugphp tophp usephp PHPphp_SAPIphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sapi
php php php php php php*php php@returnphp voidphp;
php php php php php php*php/
php php php php publicphp staticphp functionphp setSapiphp(php$sapiphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_sapiphp php=php php$sapiphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Debugphp helperphp functionphp.php php Thisphp isphp aphp wrapperphp forphp varphp_dumpphp(php)php thatphp adds
php php php php php php*php thephp php<prephp php/php>php tagsphp,php cleansphp upphp newlinesphp andphp indentsphp,php andphp runs
php php php php php php*php htmlentitiesphp(php)php beforephp outputphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php$varphp php php Thephp variablephp tophp dumpphp.
php php php php php php*php php@paramphp php stringphp php$labelphp OPTIONALphp Labelphp tophp prependphp tophp outputphp.
php php php php php php*php php@paramphp php boolphp php php php$echophp php OPTIONALphp Echophp outputphp ifphp truephp.
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp dumpphp(php$varphp,php php$labelphp=nullphp,php php$echophp=truephp)
php php php php php{
php php php php php php php php php/php/php formatphp thephp label
php php php php php php php php php$labelphp php=php php(php$labelphp=php=php=nullphp)php php?php php'php'php php:php rtrimphp(php$labelphp)php php.php php'php php'php;

php php php php php php php php php/php/php varphp_dumpphp thephp variablephp intophp aphp bufferphp andphp keepphp thephp output
php php php php php php php php obphp_startphp(php)php;
php php php php php php php php varphp_dumpphp(php$varphp)php;
php php php php php php php php php$outputphp php=php obphp_getphp_cleanphp(php)php;

php php php php php php php php php/php/php neatenphp thephp newlinesphp andphp indents
php php php php php php php php php$outputphp php=php pregphp_replacephp(php"php/php\php]php\php=php\php>php\nphp(php\sphp+php)php/mphp"php,php php"php]php php=php>php php"php,php php$outputphp)php;
php php php php php php php php ifphp php(selfphp:php:getSapiphp(php)php php=php=php php'cliphp'php)php php{
php php php php php php php php php php php php php$outputphp php=php PHPphp_EOLphp php.php php$label
php php php php php php php php php php php php php php php php php php php php php.php PHPphp_EOLphp php.php php$output
php php php php php php php php php php php php php php php php php php php php php.php PHPphp_EOLphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp(php!extensionphp_loadedphp(php'xdebugphp'php)php)php php{
php php php php php php php php php php php php php php php php php$outputphp php=php htmlspecialcharsphp(php$outputphp,php ENTphp_QUOTESphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$outputphp php=php php'php<prephp>php'
php php php php php php php php php php php php php php php php php php php php php.php php$label
php php php php php php php php php php php php php php php php php php php php php.php php$output
php php php php php php php php php php php php php php php php php php php php php.php php'<php/prephp>php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$echophp)php php{
php php php php php php php php php php php php echophp(php$outputphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$outputphp;
php php php php php}

php}
