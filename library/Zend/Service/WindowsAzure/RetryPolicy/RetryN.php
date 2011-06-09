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
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp RetryPolicy
php php*php php@versionphp php php php php$Idphp:php RetryNphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_RetryPolicyphp_RetryPolicyAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/RetryPolicyphp/RetryPolicyAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_RetryPolicyphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/RetryPolicyphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp RetryPolicy
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_RetryPolicyphp_RetryNphp extendsphp Zendphp_Servicephp_WindowsAzurephp_RetryPolicyphp_RetryPolicyAbstract
php{
php php php php php/php*php*
php php php php php php*php Numberphp ofphp retries
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_retryCountphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Intervalphp betweenphp retriesphp php(inphp millisecondsphp)
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_retryIntervalphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp intphp php$countphp php php php php php php php php php php php php php php php php php php php Numberphp ofphp retries
php php php php php php*php php@paramphp intphp php$intervalBetweenRetriesphp php php Intervalphp betweenphp retriesphp php(inphp millisecondsphp)
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$countphp php=php php1php,php php$intervalBetweenRetriesphp php=php php0php)
php php php php php{
php php php php php php php php php$thisphp-php>php_retryCountphp php=php php$countphp;
php php php php php php php php php$thisphp-php>php_retryIntervalphp php=php php$intervalBetweenRetriesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp functionphp underphp retryphp policy
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$functionphp php php php php php php Functionphp tophp execute
php php php php php php*php php@paramphp arrayphp php php php php php php php php$parametersphp php php php php Parametersphp forphp functionphp call
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp executephp(php$functionphp,php php$parametersphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$returnValuephp php=php nullphp;

php php php php php php php php forphp php(php$retriesLeftphp php=php php$thisphp-php>php_retryCountphp;php php$retriesLeftphp php>php=php php0php;php php-php-php$retriesLeftphp)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$returnValuephp php=php callphp_userphp_funcphp_arrayphp(php$functionphp,php php$parametersphp)php;
php php php php php php php php php php php php php php php php returnphp php$returnValuephp;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$exphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$retriesLeftphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_RetryPolicyphp_Exceptionphp(php"Exceededphp retryphp countphp ofphp php"php php.php php$thisphp-php>php_retryCountphp php.php php"php.php php"php php.php php$exphp-php>getMessagephp(php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php usleepphp(php$thisphp-php>php_retryIntervalphp php*php php1php0php0php0php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}
php}