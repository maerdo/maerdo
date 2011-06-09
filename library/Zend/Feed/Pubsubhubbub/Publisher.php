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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Publisherphp.phpphp php2php3php0php7php5php php2php0php1php0php-php1php0php-php1php0php php2php1php:php3php1php:php3php0Zphp padraicphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Pubsubhubbub
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php{
php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp URLsphp forphp allphp Hubphp Serversphp usedphp byphp thephp Publisherphp,php andphp to
php php php php php php*php whichphp allphp topicphp updatephp notificationsphp willphp bephp sentphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_hubUrlsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp topicphp php(Atomphp orphp RSSphp feedphp)php URLsphp whichphp havephp beenphp updatedphp and
php php php php php php*php whosephp updatedphp statusphp willphp bephp notifiedphp tophp allphp Hubphp Serversphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_updatedTopicUrlsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp anyphp errorsphp includingphp keysphp forphp php'responsephp'php,php php'hubUrlphp'php.
php php php php php php*php Thephp responsephp isphp thephp actualphp Zendphp_Httpphp_Responsephp objectphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_errorsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp topicphp php(Atomphp orphp RSSphp feedphp)php URLsphp whichphp havephp beenphp updatedphp and
php php php php php php*php whosephp updatedphp statusphp willphp bephp notifiedphp tophp allphp Hubphp Serversphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_parametersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructorphp;php acceptsphp anphp arrayphp orphp Zendphp_Configphp instancephp tophp preset
php php php php php php*php optionsphp forphp thephp Publisherphp withoutphp callingphp allphp supportedphp setter
php php php php php php*php methodsphp inphp turnphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Optionsphp arrayphp orphp Zendphp_Configphp instance
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$configphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$configphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$configphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp anyphp injectedphp configurationphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Optionsphp arrayphp orphp Zendphp_Configphp instance
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(php$configphp)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Arrayphp orphp Zendphp_Configphp objectphp'
php php php php php php php php php php php php php php php php php.php php'expectedphp,php gotphp php'php php.php gettypephp(php$configphp)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'hubUrlsphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addHubUrlsphp(php$configphp[php'hubUrlsphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'updatedTopicUrlsphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addUpdatedTopicUrlsphp(php$configphp[php'updatedTopicUrlsphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'parametersphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setParametersphp(php$configphp[php'parametersphp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp Hubphp Serverphp URLphp supportedphp byphp Publisher
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp addHubUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"urlphp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$urlphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp'
php php php php php php php php php php php php php php php php php.php'URLphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_hubUrlsphp[php]php php=php php$urlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp arrayphp ofphp Hubphp Serverphp URLsphp supportedphp byphp Publisher
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$urls
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp addHubUrlsphp(arrayphp php$urlsphp)
php php php php php{
php php php php php php php php foreachphp php(php$urlsphp asphp php$urlphp)php php{
php php php php php php php php php php php php php$thisphp-php>addHubUrlphp(php$urlphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp Hubphp Serverphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp removeHubUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$urlphp,php php$thisphp-php>getHubUrlsphp(php)php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php php$keyphp php=php arrayphp_searchphp(php$urlphp,php php$thisphp-php>php_hubUrlsphp)php;
php php php php php php php php unsetphp(php$thisphp-php>php_hubUrlsphp[php$keyphp]php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp uniquephp Hubphp Serverphp URLsphp currentlyphp available
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHubUrlsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_hubUrlsphp php=php arrayphp_uniquephp(php$thisphp-php>php_hubUrlsphp)php;
php php php php php php php php returnphp php$thisphp-php>php_hubUrlsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp URLphp tophp aphp topicphp php(Atomphp orphp RSSphp feedphp)php whichphp hasphp beenphp updated
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp addUpdatedTopicUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"urlphp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$urlphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp'
php php php php php php php php php php php php php php php php php.php'URLphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_updatedTopicUrlsphp[php]php php=php php$urlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp arrayphp ofphp Topicphp URLsphp whichphp havephp beenphp updated
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$urls
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp addUpdatedTopicUrlsphp(arrayphp php$urlsphp)
php php php php php{
php php php php php php php php foreachphp php(php$urlsphp asphp php$urlphp)php php{
php php php php php php php php php php php php php$thisphp-php>addUpdatedTopicUrlphp(php$urlphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp anphp updatedphp topicphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp removeUpdatedTopicUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$urlphp,php php$thisphp-php>getUpdatedTopicUrlsphp(php)php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php php$keyphp php=php arrayphp_searchphp(php$urlphp,php php$thisphp-php>php_updatedTopicUrlsphp)php;
php php php php php php php php unsetphp(php$thisphp-php>php_updatedTopicUrlsphp[php$keyphp]php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp uniquephp updatedphp topicphp URLsphp currentlyphp available
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getUpdatedTopicUrlsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_updatedTopicUrlsphp php=php arrayphp_uniquephp(php$thisphp-php>php_updatedTopicUrlsphp)php;
php php php php php php php php returnphp php$thisphp-php>php_updatedTopicUrlsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Notifiesphp aphp singlephp Hubphp Serverphp URLphp ofphp changes
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$urlphp Thephp Hubphp Serverphp'sphp URL
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp Thrownphp onphp failure
php php php php php php*php/
php php php php publicphp functionphp notifyHubphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"urlphp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$urlphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp'
php php php php php php php php php php php php php php php php php.php'URLphp'php)php;
php php php php php php php php php}
php php php php php php php php php$clientphp php=php php$thisphp-php>php_getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$urlphp)php;
php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php)php;
php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php4php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Notificationphp tophp Hubphp Serverphp php'
php php php php php php php php php php php php php php php php php.php php'atphp php"php'php php.php php$urlphp php.php php'php"php appearsphp tophp havephp failedphp withphp aphp statusphp codephp ofphp php"php'
php php php php php php php php php php php php php php php php php.php php$responsephp-php>getStatusphp(php)php php.php php'php"php andphp messagephp php"php'
php php php php php php php php php php php php php php php php php.php php$responsephp-php>getMessagephp(php)php php.php php'php"php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Notifiesphp allphp Hubphp Serverphp URLsphp ofphp changes
php php php php php php*
php php php php php php*php Ifphp aphp Hubphp notificationphp failsphp,php certainphp dataphp willphp bephp retainedphp inphp an
php php php php php php*php anphp arrayphp retrievedphp usingphp getErrorsphp(php)php,php ifphp aphp failurephp occursphp forphp anyphp Hubs
php php php php php php*php thephp isSuccessphp(php)php checkphp willphp returnphp FALSEphp.php Thisphp methodphp isphp designedphp not
php php php php php php*php tophp needlesslyphp failphp withphp anphp Exceptionphp/Errorphp unlessphp fromphp Zendphp_Httpphp_Clientphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp Thrownphp ifphp nophp hubsphp attached
php php php php php php*php/
php php php php publicphp functionphp notifyAllphp(php)
php php php php php{
php php php php php php php php php$clientphp php=php php$thisphp-php>php_getHttpClientphp(php)php;
php php php php php php php php php$hubsphp php php php=php php$thisphp-php>getHubUrlsphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$hubsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Nophp Hubphp Serverphp URLsphp'
php php php php php php php php php php php php php php php php php.php php'php havephp beenphp setphp sophp nophp notifcationsphp canphp bephp sentphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_errorsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$hubsphp asphp php$urlphp)php php{
php php php php php php php php php php php php php$clientphp-php>setUriphp(php$urlphp)php;
php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php)php;
php php php php php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php4php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'responsephp'php php=php>php php$responsephp,
php php php php php php php php php php php php php php php php php php php php php'hubUrlphp'php php=php>php php$url
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp optionalphp parameterphp tophp thephp updatephp notificationphp requests
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp|nullphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp setParameterphp(php$namephp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setParametersphp(php$namephp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$namephp)php php|php|php php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"namephp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$namephp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>removeParameterphp(php$namephp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$valuephp)php php|php|php php(php!isphp_stringphp(php$valuephp)php php&php&php php$valuephp php!php=php=php nullphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"valuephp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$valuephp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_parametersphp[php$namephp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp optionalphp parameterphp tophp thephp updatephp notificationphp requests
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$parameters
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp setParametersphp(arrayphp php$parametersphp)
php php php php php{
php php php php php php php php foreachphp php(php$parametersphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setParameterphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp anphp optionalphp parameterphp forphp thephp notificationphp requests
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Publisher
php php php php php php*php/
php php php php publicphp functionphp removeParameterphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$namephp)php php|php|php php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"namephp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$namephp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_parametersphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_parametersphp[php$namephp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp optionalphp parametersphp forphp notificationphp requests
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParametersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp booleanphp indicatorphp ofphp whetherphp thephp notificationsphp tophp Hub
php php php php php php*php Serversphp werephp ALLphp successfulphp.php Ifphp evenphp onephp failedphp,php FALSEphp isphp returnedphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isSuccessphp(php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_errorsphp)php php>php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp errorsphp metphp fromphp anyphp failuresphp,php includingphp keysphp:
php php php php php php*php php'responsephp'php php=php>php thephp Zendphp_Httpphp_Responsephp objectphp fromphp thephp failure
php php php php php php*php php'hubUrlphp'php php=php>php thephp URLphp ofphp thephp Hubphp Serverphp whosephp notificationphp failed
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getErrorsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_errorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp basicphp preparedphp HTTPphp clientphp forphp use
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp functionphp php_getHttpClientphp(php)
php php php php php{
php php php php php php php php php$clientphp php=php Zendphp_Feedphp_Pubsubhubbubphp:php:getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setMethodphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;
php php php php php php php php php$clientphp-php>setConfigphp(arrayphp(
php php php php php php php php php php php php php'useragentphp'php php=php>php php'Zendphp_Feedphp_Pubsubhubbubphp_Publisherphp/php'php php.php Zendphp_Versionphp:php:VERSIONphp,
php php php php php php php php php)php)php;
php php php php php php php php php$paramsphp php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php]php php=php php'hubphp.modephp=publishphp'php;
php php php php php php php php php$topicsphp php php php=php php$thisphp-php>getUpdatedTopicUrlsphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$topicsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Nophp updatedphp topicphp URLsphp'
php php php php php php php php php php php php php php php php php.php php'php havephp beenphp setphp'php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$topicsphp asphp php$topicUrlphp)php php{
php php php php php php php php php php php php php$paramsphp[php]php php=php php'hubphp.urlphp=php'php php.php urlencodephp(php$topicUrlphp)php;
php php php php php php php php php}
php php php php php php php php php$optParamsphp php=php php$thisphp-php>getParametersphp(php)php;
php php php php php php php php foreachphp php(php$optParamsphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$paramsphp[php]php php=php urlencodephp(php$namephp)php php.php php'php=php'php php.php urlencodephp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php php$paramStringphp php=php implodephp(php'php&php'php,php php$paramsphp)php;
php php php php php php php php php$clientphp-php>setRawDataphp(php$paramStringphp,php php'applicationphp/xphp-wwwphp-formphp-urlencodedphp'php)php;
php php php php php php php php returnphp php$clientphp;
php php php php php}
php}
