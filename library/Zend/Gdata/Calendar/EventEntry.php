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
php php*php php@packagephp php php php Zendphp_Gdata
php php*php php@subpackagephp Calendar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php EventEntryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Entry
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Entryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Kindphp_EventEntry
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Kindphp/EventEntryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Calendarphp_Extensionphp_SendEventNotifications
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Calendarphp/Extensionphp/SendEventNotificationsphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Calendarphp_Extensionphp_Timezone
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Calendarphp/Extensionphp/Timezonephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Calendarphp_Extensionphp_Link
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Calendarphp/Extensionphp/Linkphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Gdataphp_Calendarphp_Extensionphp_QuickAdd
php php*php/
requirephp_oncephp php'Zendphp/Gdataphp/Calendarphp/Extensionphp/QuickAddphp.phpphp'php;

php/php*php*
php php*php Dataphp modelphp classphp forphp aphp Googlephp Calendarphp Eventphp Entry
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Gdata
php php*php php@subpackagephp Calendar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Gdataphp_Calendarphp_EventEntryphp extendsphp Zendphp_Gdataphp_Kindphp_EventEntry
php{

php php php php protectedphp php$php_entryClassNamephp php=php php'Zendphp_Gdataphp_Calendarphp_EventEntryphp'php;
php php php php protectedphp php$php_sendEventNotificationsphp php=php nullphp;
php php php php protectedphp php$php_timezonephp php=php nullphp;
php php php php protectedphp php$php_quickaddphp php=php nullphp;

php php php php publicphp functionphp php_php_constructphp(php$elementphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>registerAllNamespacesphp(Zendphp_Gdataphp_Calendarphp:php:php$namespacesphp)php;
php php php php php php php php parentphp:php:php_php_constructphp(php$elementphp)php;
php php php php php}

php php php php publicphp functionphp getDOMphp(php$docphp php=php nullphp,php php$majorVersionphp php=php php1php,php php$minorVersionphp php=php nullphp)
php php php php php{
php php php php php php php php php$elementphp php=php parentphp:php:getDOMphp(php$docphp,php php$majorVersionphp,php php$minorVersionphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_sendEventNotificationsphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$elementphp-php>appendChildphp(php$thisphp-php>php_sendEventNotificationsphp-php>getDOMphp(php$elementphp-php>ownerDocumentphp)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_timezonephp php!php=php nullphp)php php{
php php php php php php php php php php php php php$elementphp-php>appendChildphp(php$thisphp-php>php_timezonephp-php>getDOMphp(php$elementphp-php>ownerDocumentphp)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_quickaddphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$elementphp-php>appendChildphp(php$thisphp-php>php_quickaddphp-php>getDOMphp(php$elementphp-php>ownerDocumentphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$elementphp;
php php php php php}

php php php php protectedphp functionphp takeChildFromDOMphp(php$childphp)
php php php php php{
php php php php php php php php php$absoluteNodeNamephp php=php php$childphp-php>namespaceURIphp php.php php'php:php'php php.php php$childphp-php>localNamephp;

php php php php php php php php switchphp php(php$absoluteNodeNamephp)php php{
php php php php php php php php php php php php casephp php$thisphp-php>lookupNamespacephp(php'gCalphp'php)php php.php php'php:php'php php.php php'sendEventNotificationsphp'php;
php php php php php php php php php php php php php php php php php$sendEventNotificationsphp php=php newphp Zendphp_Gdataphp_Calendarphp_Extensionphp_SendEventNotificationsphp(php)php;
php php php php php php php php php php php php php php php php php$sendEventNotificationsphp-php>transferFromDOMphp(php$childphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sendEventNotificationsphp php=php php$sendEventNotificationsphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php$thisphp-php>lookupNamespacephp(php'gCalphp'php)php php.php php'php:php'php php.php php'timezonephp'php;
php php php php php php php php php php php php php php php php php$timezonephp php=php newphp Zendphp_Gdataphp_Calendarphp_Extensionphp_Timezonephp(php)php;
php php php php php php php php php php php php php php php php php$timezonephp-php>transferFromDOMphp(php$childphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_timezonephp php=php php$timezonephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php$thisphp-php>lookupNamespacephp(php'atomphp'php)php php.php php'php:php'php php.php php'linkphp'php;
php php php php php php php php php php php php php php php php php$linkphp php=php newphp Zendphp_Gdataphp_Calendarphp_Extensionphp_Linkphp(php)php;
php php php php php php php php php php php php php php php php php$linkphp-php>transferFromDOMphp(php$childphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_linkphp[php]php php=php php$linkphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php$thisphp-php>lookupNamespacephp(php'gCalphp'php)php php.php php'php:php'php php.php php'quickaddphp'php;
php php php php php php php php php php php php php php php php php$quickaddphp php=php newphp Zendphp_Gdataphp_Calendarphp_Extensionphp_QuickAddphp(php)php;
php php php php php php php php php php php php php php php php php$quickaddphp-php>transferFromDOMphp(php$childphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_quickaddphp php=php php$quickaddphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php parentphp:php:takeChildFromDOMphp(php$childphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp getSendEventNotificationsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sendEventNotificationsphp;
php php php php php}

php php php php publicphp functionphp setSendEventNotificationsphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sendEventNotificationsphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getTimezonephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timezonephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp Zendphp_Gdataphp_Calendarphp_Extensionphp_Timezonephp php$value
php php php php php php*php php@returnphp Zendphp_Gdataphp_Extensionphp_EventEntryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setTimezonephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_timezonephp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getQuickAddphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_quickaddphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp Zendphp_Gdataphp_Calendarphp_Extensionphp_QuickAddphp php$value
php php php php php php*php php@returnphp Zendphp_Gdataphp_Extensionphp_ListEntryphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setQuickAddphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_quickaddphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php}
