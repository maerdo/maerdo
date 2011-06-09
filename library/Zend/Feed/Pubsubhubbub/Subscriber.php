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
php php*php php@versionphp php php php php$Idphp:php Subscriberphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Pubsubhubbub
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php{
php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp URLsphp forphp allphp Hubphp Serversphp tophp subscribephp/unsubscribephp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_hubUrlsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp optionalphp parametersphp tophp bephp includedphp inphp any
php php php php php php*php php(unphp)subscribephp requestsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_parametersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp URLphp ofphp thephp topicphp php(Rssphp orphp Atomphp feedphp)php whichphp isphp thephp subjectphp of
php php php php php php*php ourphp currentphp intentphp tophp subscribephp tophp/unsubscribephp fromphp updatesphp from
php php php php php php*php thephp currentlyphp configuredphp Hubphp Serversphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_topicUrlphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Thephp URLphp Hubphp Serversphp mustphp usephp whenphp communicatingphp withphp thisphp Subscriber
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_callbackUrlphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Thephp numberphp ofphp secondsphp forphp whichphp thephp subscriberphp wouldphp likephp tophp havephp the
php php php php php php*php subscriptionphp activephp.php Defaultsphp tophp nullphp,php iphp.ephp.php notphp sentphp,php tophp setupphp a
php php php php php php*php permanentphp subscriptionphp ifphp possiblephp.
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_leaseSecondsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp preferredphp verificationphp modephp php(syncphp orphp asyncphp)php.php Byphp defaultphp,php this
php php php php php php*php Subscriberphp prefersphp synchronousphp verificationphp,php butphp isphp considered
php php php php php php*php desireablephp tophp supportphp asynchronousphp verificationphp ifphp possiblephp.
php php php php php php*
php php php php php php*php Zendphp_Feedphp_Pubsubhubbubphp_Subscriberphp willphp alwaysphp sendphp bothphp modesphp,php whose
php php php php php php*php orderphp ofphp occurancephp inphp thephp parameterphp listphp determinesphp thisphp preferencephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_preferredVerificationMode
php php php php php php php php php=php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_SYNCphp;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp anyphp errorsphp includingphp keysphp forphp php'responsephp'php,php php'hubUrlphp'php.
php php php php php php*php Thephp responsephp isphp thephp actualphp Zendphp_Httpphp_Responsephp objectphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_errorsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp Hubphp Serverphp URLsphp forphp Hubsphp operatingphp atphp thisphp timephp in
php php php php php php*php asynchronousphp verificationphp modephp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_asyncHubsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp instancephp ofphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp usedphp tophp background
php php php php php php*php savephp anyphp verificationphp tokensphp associatedphp withphp aphp subscriptionphp orphp otherphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterface
php php php php php php*php/
php php php php protectedphp php$php_storagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp authenticationphp credentialsphp forphp HTTPphp Basicphp Authentication
php php php php php php*php ifphp requiredphp byphp specificphp Hubsphp.php Thephp arrayphp isphp indexedphp byphp Hubphp Endpointphp URI
php php php php php php*php andphp thephp valuephp isphp aphp simplephp arrayphp ofphp thephp usernamephp andphp passwordphp tophp applyphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_authenticationsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Tellsphp thephp Subscriberphp tophp appendphp anyphp subscriptionphp identifierphp tophp thephp path
php php php php php php*php ofphp thephp basephp Callbackphp URLphp.php Ephp.gphp.php anphp identifierphp php"subkeyphp1php"php wouldphp bephp added
php php php php php php*php tophp thephp callbackphp URLphp php"httpphp:php/php/wwwphp.examplephp.comphp/callbackphp"php tophp createphp aphp subscription
php php php php php php*php specificphp Callbackphp URLphp ofphp php"httpphp:php/php/wwwphp.examplephp.comphp/callbackphp/subkeyphp1php"php.
php php php php php php*
php php php php php php*php Thisphp isphp requiredphp forphp allphp Hubsphp usingphp thephp Pubsubhubbubphp php0php.php1php Specificationphp.
php php php php php php*php Itphp shouldphp bephp manuallyphp interceptedphp andphp passedphp tophp thephp Callbackphp classphp using
php php php php php php*php Zendphp_Feedphp_Pubsubhubbubphp_Subscriberphp_Callbackphp:php:setSubscriptionKeyphp(php)php.php Will
php php php php php php*php requirephp aphp routephp inphp thephp formphp php"callbackphp/php:subkeyphp"php tophp allowphp thephp parameterphp be
php php php php php php*php retrievedphp fromphp anphp actionphp usingphp thephp Zendphp_Controllerphp_Actionphp:php:php_getParamphp(php)
php php php php php php*php methodphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_usePathParameterphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructorphp;php acceptsphp anphp arrayphp orphp Zendphp_Configphp instancephp tophp preset
php php php php php php*php optionsphp forphp thephp Subscriberphp withoutphp callingphp allphp supportedphp setter
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
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(php$configphp)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Arrayphp orphp Zendphp_Configphp objectphp'
php php php php php php php php php php php php php php php php php.php php'php expectedphp,php gotphp php'php php.php gettypephp(php$configphp)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'hubUrlsphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addHubUrlsphp(php$configphp[php'hubUrlsphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'callbackUrlphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCallbackUrlphp(php$configphp[php'callbackUrlphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'topicUrlphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setTopicUrlphp(php$configphp[php'topicUrlphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'storagephp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setStoragephp(php$configphp[php'storagephp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'leaseSecondsphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setLeaseSecondsphp(php$configphp[php'leaseSecondsphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'parametersphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setParametersphp(php$configphp[php'parametersphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'authenticationsphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addAuthenticationsphp(php$configphp[php'authenticationsphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'usePathParameterphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>usePathParameterphp(php$configphp[php'usePathParameterphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'preferredVerificationModephp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setPreferredVerificationModephp(
php php php php php php php php php php php php php php php php php$configphp[php'preferredVerificationModephp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp topicphp URLphp php(RSSphp orphp Atomphp feedphp)php tophp whichphp thephp intendedphp php(unphp)subscribe
php php php php php php*php eventphp willphp relate
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp setTopicUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"urlphp"php'
php php php php php php php php php php php php php php php php php.php'php ofphp php"php'php php.php php$urlphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp'
php php php php php php php php php php php php php php php php php.php'php URLphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_topicUrlphp php=php php$urlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp topicphp URLphp php(RSSphp orphp Atomphp feedphp)php tophp whichphp thephp intendedphp php(unphp)subscribe
php php php php php php*php eventphp willphp relate
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTopicUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_topicUrlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Aphp validphp Topicphp php(RSSphp orphp Atomphp'
php php php php php php php php php php php php php php php php php.php php'php feedphp)php URLphp MUSTphp bephp setphp beforephp attemptingphp anyphp operationphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_topicUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp numberphp ofphp secondsphp forphp whichphp anyphp subscriptionphp willphp remainphp valid
php php php php php php*
php php php php php php*php php@paramphp php intphp php$seconds
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp setLeaseSecondsphp(php$secondsphp)
php php php php php{
php php php php php php php php php$secondsphp php=php intvalphp(php$secondsphp)php;
php php php php php php php php ifphp php(php$secondsphp <php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Expectedphp leasephp secondsphp'
php php php php php php php php php php php php php php php php php.php php'php mustphp bephp anphp integerphp greaterphp thanphp zerophp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_leaseSecondsphp php=php php$secondsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp numberphp ofphp leasephp secondsphp onphp subscriptions
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getLeaseSecondsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_leaseSecondsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp callbackphp URLphp tophp bephp usedphp byphp Hubphp Serversphp whenphp communicatingphp with
php php php php php php*php thisphp Subscriber
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp setCallbackUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"urlphp"php'
php php php php php php php php php php php php php php php php php.php php'php ofphp php"php'php php.php php$urlphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp'
php php php php php php php php php php php php php php php php php.php php'php URLphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_callbackUrlphp php=php php$urlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp callbackphp URLphp tophp bephp usedphp byphp Hubphp Serversphp whenphp communicatingphp with
php php php php php php*php thisphp Subscriber
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCallbackUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_callbackUrlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Aphp validphp Callbackphp URLphp MUSTphp bephp'
php php php php php php php php php php php php php php php php php.php php'php setphp beforephp attemptingphp anyphp operationphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_callbackUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp preferredphp verificationphp modephp php(syncphp orphp asyncphp)php.php Byphp defaultphp,php this
php php php php php php*php Subscriberphp prefersphp synchronousphp verificationphp,php butphp doesphp support
php php php php php php*php asynchronousphp ifphp thatphp'sphp thephp Hubphp Serverphp'sphp utilisedphp modephp.
php php php php php php*
php php php php php php*php Zendphp_Feedphp_Pubsubhubbubphp_Subscriberphp willphp alwaysphp sendphp bothphp modesphp,php whose
php php php php php php*php orderphp ofphp occurancephp inphp thephp parameterphp listphp determinesphp thisphp preferencephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Shouldphp bephp php'syncphp'php orphp php'asyncphp'
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp setPreferredVerificationModephp(php$modephp)
php php php php php{
php php php php php php php php ifphp php(php$modephp php!php=php=php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_SYNC
php php php php php php php php php&php&php php$modephp php!php=php=php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_ASYNCphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp preferredphp'
php php php php php php php php php php php php php php php php php.php php'php modephp specifiedphp:php php"php'php php.php php$modephp php.php php'php"php butphp shouldphp bephp onephp ofphp'
php php php php php php php php php php php php php php php php php.php php'php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_SYNCphp orphp'
php php php php php php php php php php php php php php php php php.php php'php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_ASYNCphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_preferredVerificationModephp php=php php$modephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp preferredphp verificationphp modephp php(syncphp orphp asyncphp)php.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPreferredVerificationModephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_preferredVerificationModephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp Hubphp Serverphp URLphp supportedphp byphp Publisher
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp addHubUrlphp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"urlphp"php'
php php php php php php php php php php php php php php php php php.php php'php ofphp php"php'php php.php php$urlphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp'
php php php php php php php php php php php php php php php php php.php php'php URLphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_hubUrlsphp[php]php php=php php$urlphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp arrayphp ofphp Hubphp Serverphp URLsphp supportedphp byphp Publisher
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$urls
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
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
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
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
php php php php php php*php Addphp authenticationphp credentialsphp forphp aphp givenphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@paramphp php arrayphp php$authentication
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp addAuthenticationphp(php$urlphp,php arrayphp php$authenticationphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$urlphp)php php|php|php php!isphp_stringphp(php$urlphp)php php|php|php php!Zendphp_Uriphp:php:checkphp(php$urlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"urlphp"php'
php php php php php php php php php php php php php php php php php.php php'php ofphp php"php'php php.php php$urlphp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp andphp aphp validphp'
php php php php php php php php php php php php php php php php php.php php'php URLphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_authenticationsphp[php$urlphp]php php=php php$authenticationphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp authenticationphp credentialsphp forphp hubphp URLs
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$authentications
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp addAuthenticationsphp(arrayphp php$authenticationsphp)
php php php php php{
php php php php php php php php foreachphp php(php$authenticationsphp asphp php$urlphp php=php>php php$authenticationphp)php php{
php php php php php php php php php php php php php$thisphp-php>addAuthenticationphp(php$urlphp,php php$authenticationphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp hubphp URLphp authenticationphp credentials
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAuthenticationsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_authenticationsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp tophp usephp aphp pathphp parameter
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$bool
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp usePathParameterphp(php$boolphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_usePathParameterphp php=php php$boolphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp optionalphp parameterphp tophp thephp php(unphp)subscribephp requests
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp|nullphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
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
php php php php php php php php php php php php php php php php php.php php'php ofphp php"php'php php.php php$namephp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>removeParameterphp(php$namephp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$valuephp)php php|php|php php(php!isphp_stringphp(php$valuephp)php php&php&php php$valuephp php!php=php=php nullphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"valuephp"php'
php php php php php php php php php php php php php php php php php.php php'php ofphp php"php'php php.php php$valuephp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_parametersphp[php$namephp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp optionalphp parameterphp tophp thephp php(unphp)subscribephp requests
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp|nullphp php$value
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp setParametersphp(arrayphp php$parametersphp)
php php php php php{
php php php php php php php php foreachphp php(php$parametersphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setParameterphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp anphp optionalphp parameterphp forphp thephp php(unphp)subscribephp requests
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp removeParameterphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$namephp)php php|php|php php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp parameterphp php"namephp"php'
php php php php php php php php php php php php php php php php php.php php'php ofphp php"php'php php.php php$namephp php.php php'php"php mustphp bephp aphp nonphp-emptyphp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_parametersphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_parametersphp[php$namephp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp optionalphp parametersphp forphp php(unphp)subscribephp requests
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParametersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp anphp instancephp ofphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp usedphp tophp background
php php php php php php*php savephp anyphp verificationphp tokensphp associatedphp withphp aphp subscriptionphp orphp otherphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp php$storage
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriber
php php php php php php*php/
php php php php publicphp functionphp setStoragephp(Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterfacephp php$storagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_storagephp php=php php$storagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp anphp instancephp ofphp Zendphp_Feedphp_Pubsubhubbubphp_Storagephp_StorageInterfacephp used
php php php php php php*php tophp backgroundphp savephp anyphp verificationphp tokensphp associatedphp withphp aphp subscription
php php php php php php*php orphp otherphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Modelphp_SubscriptionInterface
php php php php php php*php/
php php php php publicphp functionphp getStoragephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_storagephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Nophp storagephp vehiclephp php'
php php php php php php php php php php php php php php php php php.php php'hasphp beenphp setphp.php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_storagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Subscribephp tophp onephp orphp morephp Hubphp Serversphp usingphp thephp storedphp Hubphp URLs
php php php php php php*php forphp thephp givenphp Topicphp URLphp php(RSSphp orphp Atomphp feedphp)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp subscribeAllphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_doRequestphp(php'subscribephp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsubscribephp fromphp onephp orphp morephp Hubphp Serversphp usingphp thephp storedphp Hubphp URLs
php php php php php php*php forphp thephp givenphp Topicphp URLphp php(RSSphp orphp Atomphp feedphp)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp unsubscribeAllphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_doRequestphp(php'unsubscribephp'php)php;
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
php php php php php php*php Returnphp anphp arrayphp ofphp Hubphp Serverphp URLsphp whophp returnedphp aphp responsephp indicating
php php php php php php*php operationphp inphp Asynchronousphp Verificationphp Modephp,php iphp.ephp.php theyphp willphp notphp confirm
php php php php php php*php anyphp php(unphp)subscriptionphp immediatelyphp butphp atphp aphp laterphp timephp php(Hubsphp mayphp be
php php php php php php*php doingphp thisphp asphp aphp batchphp processphp whenphp loadphp balancingphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAsyncHubsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_asyncHubsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executesphp anphp php(unphp)subscribephp request
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$mode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_doRequestphp(php$modephp)
php php php php php{
php php php php php php php php php$clientphp php=php php$thisphp-php>php_getHttpClientphp(php)php;
php php php php php php php php php$hubsphp php php php=php php$thisphp-php>getHubUrlsphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$hubsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Nophp Hubphp Serverphp URLsphp'
php php php php php php php php php php php php php php php php php.php php'php havephp beenphp setphp sophp nophp subscriptionsphp canphp bephp attemptedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_errorsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_asyncHubsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$hubsphp asphp php$urlphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$urlphp,php php$thisphp-php>php_authenticationsphp)php)php php{
php php php php php php php php php php php php php php php php php$authphp php=php php$thisphp-php>php_authenticationsphp[php$urlphp]php;
php php php php php php php php php php php php php php php php php$clientphp-php>setAuthphp(php$authphp[php0php]php,php php$authphp[php1php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$clientphp-php>setUriphp(php$urlphp)php;
php php php php php php php php php php php php php$clientphp-php>setRawDataphp(
php php php php php php php php php php php php php php php php php$thisphp-php>php_getRequestParametersphp(php$urlphp,php php$modephp)php,
php php php php php php php php php php php php php php php php php'applicationphp/xphp-wwwphp-formphp-urlencodedphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php)php;
php php php php php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php4
php php php php php php php php php php php php php php php php php&php&php php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php2
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'responsephp'php php=php>php php$responsephp,
php php php php php php php php php php php php php php php php php php php php php'hubUrlphp'php php php php=php>php php$urlphp,
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Atphp firstphp Iphp thoughtphp itphp wasphp neededphp,php butphp thephp backendphp storagephp will
php php php php php php php php php php php php php php*php allowphp trackingphp asyncphp withoutphp anyphp userphp interferencephp.php Itphp'sphp left
php php php php php php php php php php php php php php*php herephp inphp casephp thephp userphp isphp interestedphp inphp knowingphp whatphp Hubs
php php php php php php php php php php php php php php*php arephp usingphp asyncphp verificationphp modesphp sophp theyphp mayphp updatephp Modelsphp and
php php php php php php php php php php php php php php*php movephp thesephp tophp asynchronousphp processesphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php}php elseifphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php2php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_asyncHubsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'responsephp'php php=php>php php$responsephp,
php php php php php php php php php php php php php php php php php php php php php'hubUrlphp'php php php php=php>php php$urlphp,
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp basicphp preparedphp HTTPphp clientphp forphp use
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Mustphp bephp php"subscribephp"php orphp php"unsubscribephp"
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp functionphp php_getHttpClientphp(php)
php php php php php{
php php php php php php php php php$clientphp php=php Zendphp_Feedphp_Pubsubhubbubphp:php:getHttpClientphp(php)php;
php php php php php php php php php$clientphp-php>setMethodphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;
php php php php php php php php php$clientphp-php>setConfigphp(arrayphp(php'useragentphp'php php=php>php php'Zendphp_Feedphp_Pubsubhubbubphp_Subscriberphp/php'
php php php php php php php php php php php php php.php Zendphp_Versionphp:php:VERSIONphp)php)php;
php php php php php php php php returnphp php$clientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp listphp ofphp standardphp protocolphp/optionalphp parametersphp forphp additionphp to
php php php php php php*php clientphp'sphp POSTphp bodyphp thatphp arephp specificphp tophp thephp currentphp Hubphp Serverphp URL
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hubUrl
php php php php php php*php php@paramphp php modephp php$hubUrl
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getRequestParametersphp(php$hubUrlphp,php php$modephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$modephp,php arrayphp(php'subscribephp'php,php php'unsubscribephp'php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp modephp specifiedphp:php php"php'
php php php php php php php php php php php php php php php php php.php php$modephp php.php php'php"php whichphp shouldphp havephp beenphp php"subscribephp"php orphp php"unsubscribephp"php'php)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp php=php arrayphp(
php php php php php php php php php php php php php'hubphp.modephp'php php php=php>php php$modephp,
php php php php php php php php php php php php php'hubphp.topicphp'php php=php>php php$thisphp-php>getTopicUrlphp(php)php,
php php php php php php php php php)php;

php php php php php php php php ifphp php(php$thisphp-php>getPreferredVerificationModephp(php)
php php php php php php php php php php php php php php php php php=php=php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_SYNC
php php php php php php php php php)php php{
php php php php php php php php php php php php php$vmodesphp php=php arrayphp(
php php php php php php php php php php php php php php php php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_SYNCphp,
php php php php php php php php php php php php php php php php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_ASYNCphp,
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$vmodesphp php=php arrayphp(
php php php php php php php php php php php php php php php php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_ASYNCphp,
php php php php php php php php php php php php php php php php Zendphp_Feedphp_Pubsubhubbubphp:php:VERIFICATIONphp_MODEphp_SYNCphp,
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$paramsphp[php'hubphp.verifyphp'php]php php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$vmodesphp asphp php$vmodephp)php php{
php php php php php php php php php php php php php$paramsphp[php'hubphp.verifyphp'php]php[php]php php=php php$vmodephp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Establishphp aphp persistentphp verifyphp_tokenphp andphp attachphp keyphp tophp callback
php php php php php php php php php php*php URLphp'sphp pathphp/querystring
php php php php php php php php php php*php/
php php php php php php php php php$keyphp php php php=php php$thisphp-php>php_generateSubscriptionKeyphp(php$paramsphp,php php$hubUrlphp)php;
php php php php php php php php php$tokenphp php=php php$thisphp-php>php_generateVerifyTokenphp(php)php;
php php php php php php php php php$paramsphp[php'hubphp.verifyphp_tokenphp'php]php php=php php$tokenphp;

php php php php php php php php php/php/php Notephp:php queryphp stringphp onlyphp usablephp withphp PuSHphp php0php.php2php Hubs
php php php php php php php php ifphp php(php!php$thisphp-php>php_usePathParameterphp)php php{
php php php php php php php php php php php php php$paramsphp[php'hubphp.callbackphp'php]php php=php php$thisphp-php>getCallbackUrlphp(php)
php php php php php php php php php php php php php php php php php.php php'php?xhubphp.subscriptionphp=php'php php.php Zendphp_Feedphp_Pubsubhubbubphp:php:urlencodephp(php$keyphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$paramsphp[php'hubphp.callbackphp'php]php php=php rtrimphp(php$thisphp-php>getCallbackUrlphp(php)php,php php'php/php'php)
php php php php php php php php php php php php php php php php php.php php'php/php'php php.php Zendphp_Feedphp_Pubsubhubbubphp:php:urlencodephp(php$keyphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$modephp php=php=php php'subscribephp'php php&php&php php$thisphp-php>getLeaseSecondsphp(php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$paramsphp[php'hubphp.leasephp_secondsphp'php]php php=php php$thisphp-php>getLeaseSecondsphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php hubphp.secretphp notphp currentlyphp supported
php php php php php php php php php$optParamsphp php=php php$thisphp-php>getParametersphp(php)php;
php php php php php php php php foreachphp php(php$optParamsphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$paramsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php php/php/php storephp subscriptionphp tophp storage
php php php php php php php php php$nowphp php=php newphp Zendphp_Datephp;
php php php php php php php php php$expiresphp php=php nullphp;
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'hubphp.leasephp_secondsphp'php]php)php)php php{
php php php php php php php php php php php php php$expiresphp php=php php$nowphp-php>addphp(php$paramsphp[php'hubphp.leasephp_secondsphp'php]php,php Zendphp_Datephp:php:SECONDphp)
php php php php php php php php php php php php php php php php php-php>getphp(php'yyyyphp-MMphp-ddphp HHphp:mmphp:ssphp'php)php;
php php php php php php php php php}
php php php php php php php php php$dataphp php=php arrayphp(
php php php php php php php php php php php php php'idphp'php php php php php php php php php php php php php php php php php php=php>php php$keyphp,
php php php php php php php php php php php php php'topicphp_urlphp'php php php php php php php php php php php=php>php php$paramsphp[php'hubphp.topicphp'php]php,
php php php php php php php php php php php php php'hubphp_urlphp'php php php php php php php php php php php php php=php>php php$hubUrlphp,
php php php php php php php php php php php php php'createdphp_timephp'php php php php php php php php=php>php php$nowphp-php>getphp(php'yyyyphp-MMphp-ddphp HHphp:mmphp:ssphp'php)php,
php php php php php php php php php php php php php'leasephp_secondsphp'php php php php php php php=php>php php$expiresphp,
php php php php php php php php php php php php php'verifyphp_tokenphp'php php php php php php php php=php>php hashphp(php'shaphp2php5php6php'php,php php$paramsphp[php'hubphp.verifyphp_tokenphp'php]php)php,
php php php php php php php php php php php php php'secretphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php'expirationphp_timephp'php php php php php=php>php php$expiresphp,
php php php php php php php php php php php php php'subscriptionphp_statephp'php php=php>php Zendphp_Feedphp_Pubsubhubbubphp:php:SUBSCRIPTIONphp_NOTVERIFIEDphp,
php php php php php php php php php)php;
php php php php php php php php php$thisphp-php>getStoragephp(php)php-php>setSubscriptionphp(php$dataphp)php;

php php php php php php php php returnphp php$thisphp-php>php_toByteValueOrderedStringphp(
php php php php php php php php php php php php php$thisphp-php>php_urlEncodephp(php$paramsphp)
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Simplephp helperphp tophp generatephp aphp verificationphp tokenphp usedphp inphp php(unphp)subscribe
php php php php php php*php requestsphp tophp aphp Hubphp Serverphp.php Followsphp nophp particularphp methodphp,php whichphp means
php php php php php php*php itphp mightphp bephp improvedphp/changedphp inphp futurephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hubUrlphp Thephp Hubphp Serverphp URLphp forphp whichphp thisphp tokenphp willphp apply
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_generateVerifyTokenphp(php)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_testStaticTokenphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_testStaticTokenphp;
php php php php php php php php php}
php php php php php php php php returnphp uniqidphp(randphp(php)php,php truephp)php php.php timephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Simplephp helperphp tophp generatephp aphp verificationphp tokenphp usedphp inphp php(unphp)subscribe
php php php php php php*php requestsphp tophp aphp Hubphp Serverphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hubUrlphp Thephp Hubphp Serverphp URLphp forphp whichphp thisphp tokenphp willphp apply
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_generateSubscriptionKeyphp(arrayphp php$paramsphp,php php$hubUrlphp)
php php php php php{
php php php php php php php php php$keyBasephp php=php php$paramsphp[php'hubphp.topicphp'php]php php.php php$hubUrlphp;
php php php php php php php php php$keyphp php php php php php=php mdphp5php(php$keyBasephp)php;
php php php php php php php php returnphp php$keyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php URLphp Encodephp anphp arrayphp ofphp parameters
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_urlEncodephp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$encodedphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$ekeyphp php=php Zendphp_Feedphp_Pubsubhubbubphp:php:urlencodephp(php$keyphp)php;
php php php php php php php php php php php php php php php php php$encodedphp[php$ekeyphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$duplicateKeyphp)php php{
php php php php php php php php php php php php php php php php php php php php php$encodedphp[php$ekeyphp]php[php]
php php php php php php php php php php php php php php php php php php php php php php php php php=php Zendphp_Feedphp_Pubsubhubbubphp:php:urlencodephp(php$duplicateKeyphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$encodedphp[Zendphp_Feedphp_Pubsubhubbubphp:php:urlencodephp(php$keyphp)php]
php php php php php php php php php php php php php php php php php php php php php=php Zendphp_Feedphp_Pubsubhubbubphp:php:urlencodephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$encodedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Orderphp outgoingphp parameters
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_toByteValueOrderedStringphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php uksortphp(php$paramsphp,php php'strnatcmpphp'php)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$keyduplicatephp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp[php]php php=php php$keyphp php.php php'php=php'php php.php php$keyduplicatephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$returnphp[php]php php=php php$keyphp php.php php'php=php'php php.php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php'php&php'php,php php$returnphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Thisphp isphp STRICTLYphp forphp testingphp purposesphp onlyphp.php.php.
php php php php php php*php/
php php php php protectedphp php$php_testStaticTokenphp php=php nullphp;

php php php php finalphp publicphp functionphp setTestStaticTokenphp(php$tokenphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_testStaticTokenphp php=php php(stringphp)php php$tokenphp;
php php php php php}
php}
