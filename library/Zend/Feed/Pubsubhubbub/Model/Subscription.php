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
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@subpackagephp Entity
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Subscriptionphp.phpphp php2php2php5php0php7php php2php0php1php0php-php0php6php-php3php0php php1php9php:php1php1php:php2php7Zphp ramonphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_ModelAbstractphp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Modelphp/ModelAbstractphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp php*php/
requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Modelphp/SubscriptionInterfacephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Datephp php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@subpackagephp Entity
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_Subscription
php php php php extendsphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_ModelAbstract
php php php php implementsphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterface
php{

php php php php php/php*php*
php php php php php php*php Savephp subscriptionphp tophp RDMBS
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$data
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp setSubscriptionphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$dataphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'IDphp mustphp bephp setphp beforephp attemptingphp aphp savephp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php$thisphp-php>php_dbphp-php>findphp(php$dataphp[php'idphp'php]php)php;
php php php php php php php php ifphp php(countphp(php$resultphp)php)php php{
php php php php php php php php php php php php php$dataphp[php'createdphp_timephp'php]php php=php php$resultphp-php>currentphp(php)php-php>createdphp_timephp;
php php php php php php php php php php php php php$nowphp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'leasephp_secondsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$dataphp[php'expirationphp_timephp'php]php php=php php$nowphp-php>addphp(php$dataphp[php'leasephp_secondsphp'php]php,php Zendphp_Datephp:php:SECONDphp)
php php php php php php php php php php php php php php php php php-php>getphp(php'yyyyphp-MMphp-ddphp HHphp:mmphp:ssphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_dbphp-php>updatephp(
php php php php php php php php php php php php php php php php php$dataphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_dbphp-php>getAdapterphp(php)php-php>quoteIntophp(php'idphp php=php php?php'php,php php$dataphp[php'idphp'php]php)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dbphp-php>insertphp(php$dataphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp subscriptionphp byphp IDphp/key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getSubscriptionphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$keyphp)php php|php|php php!isphp_stringphp(php$keyphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"keyphp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$keyphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php$thisphp-php>php_dbphp-php>findphp(php$keyphp)php;
php php php php php php php php ifphp php(countphp(php$resultphp)php)php php{
php php php php php php php php php php php php returnphp php$resultphp-php>currentphp(php)php-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp aphp subscriptionphp matchingphp thephp keyphp exists
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasSubscriptionphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$keyphp)php php|php|php php!isphp_stringphp(php$keyphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"keyphp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$keyphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php$thisphp-php>php_dbphp-php>findphp(php$keyphp)php;
php php php php php php php php ifphp php(countphp(php$resultphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp subscription
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp deleteSubscriptionphp(php$keyphp)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>php_dbphp-php>findphp(php$keyphp)php;
php php php php php php php php ifphp php(countphp(php$resultphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dbphp-php>deletephp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_dbphp-php>getAdapterphp(php)php-php>quoteIntophp(php'idphp php=php php?php'php,php php$keyphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php}
