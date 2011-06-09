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
php php*php php@subpackagephp Callback
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php CallbackAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Pubsubhubbubphp_CallbackInterface
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/CallbackInterfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponse
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/HttpResponsephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@subpackagephp Callback
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Feedphp_Pubsubhubbubphp_CallbackAbstract
php php php php implementsphp Zendphp_Feedphp_Pubsubhubbubphp_CallbackInterface
php{
php php php php php/php*php*
php php php php php php*php Anphp instancephp ofphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp used
php php php php php php*php tophp backgroundphp savephp anyphp verificationphp tokensphp associatedphp withphp aphp subscription
php php php php php php*php orphp otherphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterface
php php php php php php*php/
php php php php protectedphp php$php_storagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Anphp instancephp ofphp aphp classphp handlingphp Httpphp Responsesphp.php Thisphp isphp implementedphp in
php php php php php php*php Zendphp_Feedphp_Pubsubhubbubphp_HttpResponsephp whichphp sharesphp anphp unenforcedphp interfacephp with
php php php php php php*php php(iphp.ephp.php notphp inheritedphp fromphp)php Zendphp_Controllerphp_Responsephp_Httpphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponsephp|Zendphp_Controllerphp_Responsephp_Http
php php php php php php*php/
php php php php protectedphp php$php_httpResponsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp numberphp ofphp Subscribersphp forphp whichphp anyphp updatesphp arephp onphp behalfphp ofphp.
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_subscriberCountphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Constructorphp;php acceptsphp anphp arrayphp orphp Zendphp_Configphp instancephp tophp preset
php php php php php php*php optionsphp forphp thephp Subscriberphp withoutphp callingphp allphp supportedphp setter
php php php php php php*php methodsphp inphp turnphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$optionsphp Optionsphp arrayphp orphp Zendphp_Configphp instance
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
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_CallbackAbstract
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(php$configphp)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Arrayphp orphp Zendphp_Configphp objectphp'
php php php php php php php php php php php php php.php php'expectedphp,php gotphp php'php php.php gettypephp(php$configphp)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'storagephp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setStoragephp(php$configphp[php'storagephp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp thephp responsephp,php includingphp allphp headersphp.
php php php php php php*php Ifphp youphp wishphp tophp handlephp thisphp viaphp Zendphp_Controllerphp,php usephp thephp getterphp methods
php php php php php php*php tophp retrievephp anyphp dataphp neededphp tophp bephp setphp onphp yourphp HTTPphp Responsephp objectphp,php or
php php php php php php*php simplyphp givephp thisphp objectphp thephp HTTPphp Responsephp instancephp tophp workphp withphp forphp youphp!
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp sendResponsephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getHttpResponsephp(php)php-php>sendResponsephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp anphp instancephp ofphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp used
php php php php php php*php tophp backgroundphp savephp anyphp verificationphp tokensphp associatedphp withphp aphp subscription
php php php php php php*php orphp otherphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp php$storage
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_CallbackAbstract
php php php php php php*php/
php php php php publicphp functionphp setStoragephp(Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp php$storagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_storagephp php=php php$storagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp anphp instancephp ofphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp used
php php php php php php*php tophp backgroundphp savephp anyphp verificationphp tokensphp associatedphp withphp aphp subscription
php php php php php php*php orphp otherphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterface
php php php php php php*php/
php php php php publicphp functionphp getStoragephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_storagephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Nophp storagephp objectphp hasphp beenphp'
php php php php php php php php php php php php php php php php php.php php'php setphp thatphp subclassesphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_storagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Anphp instancephp ofphp aphp classphp handlingphp Httpphp Responsesphp.php Thisphp isphp implementedphp in
php php php php php php*php Zendphp_Feedphp_Pubsubhubbubphp_HttpResponsephp whichphp sharesphp anphp unenforcedphp interfacephp with
php php php php php php*php php(iphp.ephp.php notphp inheritedphp fromphp)php Zendphp_Controllerphp_Responsephp_Httpphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Pubsubhubbubphp_HttpResponsephp|Zendphp_Controllerphp_Responsephp_Httpphp php$httpResponse
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_CallbackAbstract
php php php php php php*php/
php php php php publicphp functionphp setHttpResponsephp(php$httpResponsephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_objectphp(php$httpResponsephp)
php php php php php php php php php php php php php|php|php php(php!php$httpResponsephp instanceofphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponse
php php php php php php php php php php php php php php php php php&php&php php!php$httpResponsephp instanceofphp Zendphp_Controllerphp_Responsephp_Httpphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'HTTPphp Responsephp objectphp mustphp'
php php php php php php php php php php php php php php php php php.php php'php implementphp onephp ofphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponsephp orphp'
php php php php php php php php php php php php php php php php php.php php'php Zendphp_Controllerphp_Responsephp_Httpphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_httpResponsephp php=php php$httpResponsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Anphp instancephp ofphp aphp classphp handlingphp Httpphp Responsesphp.php Thisphp isphp implementedphp in
php php php php php php*php Zendphp_Feedphp_Pubsubhubbubphp_HttpResponsephp whichphp sharesphp anphp unenforcedphp interfacephp with
php php php php php php*php php(iphp.ephp.php notphp inheritedphp fromphp)php Zendphp_Controllerphp_Responsephp_Httpphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponsephp|Zendphp_Controllerphp_Responsephp_Http
php php php php php php*php/
php php php php publicphp functionphp getHttpResponsephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_httpResponsephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_httpResponsephp php=php newphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_httpResponsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp numberphp ofphp Subscribersphp forphp whichphp anyphp updatesphp arephp onphp behalfphp ofphp.
php php php php php php*php Inphp otherphp wordsphp,php isphp thisphp classphp servingphp onephp orphp morephp subscribersphp?php Howphp manyphp?
php php php php php php*php Defaultsphp tophp php1php ifphp leftphp unchangedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$count
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_CallbackAbstract
php php php php php php*php/
php php php php publicphp functionphp setSubscriberCountphp(php$countphp)
php php php php php{
php php php php php php php php php$countphp php=php intvalphp(php$countphp)php;
php php php php php php php php ifphp php(php$countphp <php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Subscriberphp countphp mustphp bephp'
php php php php php php php php php php php php php php php php php.php php'php greaterphp thanphp zerophp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_subscriberCountphp php=php php$countphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp numberphp ofphp Subscribersphp forphp whichphp anyphp updatesphp arephp onphp behalfphp ofphp.
php php php php php php*php Inphp otherphp wordsphp,php isphp thisphp classphp servingphp onephp orphp morephp subscribersphp?php Howphp manyphp?
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getSubscriberCountphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_subscriberCountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp detectphp thephp callbackphp URLphp php(specificallyphp thephp pathphp forwardphp)
php php php php php php*php/
php php php php protectedphp functionphp php_detectCallbackUrlphp(php)
php php php php php{
php php php php php php php php php$callbackUrlphp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php)php)php php{
php php php php php php php php php php php php php$callbackUrlphp php=php php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php;
php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'REQUESTphp_URIphp'php]php)php)php php{
php php php php php php php php php php php php php$callbackUrlphp php=php php$php_SERVERphp[php'REQUESTphp_URIphp'php]php;
php php php php php php php php php php php php php$schemephp php=php php'httpphp'php;
php php php php php php php php php php php php ifphp php(php$php_SERVERphp[php'HTTPSphp'php]php php=php=php php'onphp'php)php php{
php php php php php php php php php php php php php php php php php$schemephp php=php php'httpsphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$schemeAndHttpHostphp php=php php$schemephp php.php php'php:php/php/php'php php.php php$thisphp-php>php_getHttpHostphp(php)php;
php php php php php php php php php php php php ifphp php(strposphp(php$callbackUrlphp,php php$schemeAndHttpHostphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$callbackUrlphp php=php substrphp(php$callbackUrlphp,php strlenphp(php$schemeAndHttpHostphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php)php)php php{
php php php php php php php php php php php php php$callbackUrlphp=php php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$callbackUrlphp php.php=php php'php?php'php php.php php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$callbackUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp HTTPphp host
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getHttpHostphp(php)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php;
php php php php php php php php php}
php php php php php php php php php$schemephp php=php php'httpphp'php;
php php php php php php php php ifphp php(php$php_SERVERphp[php'HTTPSphp'php]php php=php=php php'onphp'php)php php{
php php php php php php php php php php php php php$schemephp php=php php'httpsphp'php;
php php php php php php php php php}
php php php php php php php php php$namephp php=php php$php_SERVERphp[php'SERVERphp_NAMEphp'php]php;
php php php php php php php php php$portphp php=php php$php_SERVERphp[php'SERVERphp_PORTphp'php]php;
php php php php php php php php ifphp php(php(php$schemephp php=php=php php'httpphp'php php&php&php php$portphp php=php=php php8php0php)
php php php php php php php php php php php php php|php|php php(php$schemephp php=php=php php'httpsphp'php php&php&php php$portphp php=php=php php4php4php3php)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp php$namephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$namephp php.php php'php:php'php php.php php$portphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp Headerphp valuephp fromphp eitherphp php$php_SERVERphp orphp Apache
php php php php php php*
php php php php php php*php php@paramphp stringphp php$header
php php php php php php*php/
php php php php protectedphp functionphp php_getHeaderphp(php$headerphp)
php php php php php{
php php php php php php php php php$tempphp php=php strtoupperphp(strphp_replacephp(php'php-php'php,php php'php_php'php,php php$headerphp)php)php;
php php php php php php php php ifphp php(php!emptyphp(php$php_SERVERphp[php$tempphp]php)php)php php{
php php php php php php php php php php php php returnphp php$php_SERVERphp[php$tempphp]php;
php php php php php php php php php}
php php php php php php php php php$tempphp php=php php'HTTPphp_php'php php.php strtoupperphp(strphp_replacephp(php'php-php'php,php php'php_php'php,php php$headerphp)php)php;
php php php php php php php php ifphp php(php!emptyphp(php$php_SERVERphp[php$tempphp]php)php)php php{
php php php php php php php php php php php php returnphp php$php_SERVERphp[php$tempphp]php;
php php php php php php php php php}
php php php php php php php php ifphp php(functionphp_existsphp(php'apachephp_requestphp_headersphp'php)php)php php{
php php php php php php php php php php php php php$headersphp php=php apachephp_requestphp_headersphp(php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$headersphp[php$headerphp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$headersphp[php$headerphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp rawphp bodyphp ofphp thephp request
php php php php php php*
php php php php php php*php php@returnphp stringphp|falsephp Rawphp bodyphp,php orphp falsephp ifphp notphp present
php php php php php php*php/
php php php php protectedphp functionphp php_getRawBodyphp(php)
php php php php php{
php php php php php php php php php$bodyphp php=php filephp_getphp_contentsphp(php'phpphp:php/php/inputphp'php)php;
php php php php php php php php ifphp php(strlenphp(trimphp(php$bodyphp)php)php php=php=php php0php php&php&php issetphp(php$GLOBALSphp[php'HTTPphp_RAWphp_POSTphp_DATAphp'php]php)php)php php{
php php php php php php php php php php php php php$bodyphp php=php php$GLOBALSphp[php'HTTPphp_RAWphp_POSTphp_DATAphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(strlenphp(trimphp(php$bodyphp)php)php php>php php0php)php php{
php php php php php php php php php php php php returnphp php$bodyphp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}
php}
