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
php php*php php@versionphp php php php php$Idphp:php Callbackphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Pubsubhubbub
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Pubsubhubbub
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/CallbackAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriberphp_Callback
php php php php extendsphp Zendphp_Feedphp_Pubsubhubbubphp_CallbackAbstract
php{
php php php php php/php*php*
php php php php php php*php Containsphp thephp contentphp ofphp anyphp feedsphp sentphp asphp updatesphp tophp thephp Callbackphp URL
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_feedUpdatephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Holdsphp aphp manuallyphp setphp subscriptionphp keyphp php(iphp.ephp.php identifiesphp aphp unique
php php php php php php*php subscriptionphp)php whichphp isphp typicalphp whenphp itphp isphp notphp passedphp inphp thephp queryphp string
php php php php php php*php butphp isphp partphp ofphp thephp Callbackphp URLphp pathphp,php requiringphp manualphp retrievalphp ephp.gphp.
php php php php php php*php usingphp aphp routephp andphp thephp Zendphp_Controllerphp_Actionphp:php:php_getParamphp(php)php methodphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_subscriptionKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Afterphp verificationphp,php thisphp isphp setphp tophp thephp verifiedphp subscriptionphp'sphp dataphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_currentSubscriptionDataphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Setphp aphp subscriptionphp keyphp tophp usephp forphp thephp currentphp callbackphp requestphp manuallyphp.
php php php php php php*php Requiredphp ifphp usePathParameterphp isphp enabledphp forphp thephp Subscriberphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriberphp_Callback
php php php php php php*php/
php php php php publicphp functionphp setSubscriptionKeyphp(php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_subscriptionKeyphp php=php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp anyphp callbackphp fromphp aphp Hubphp Serverphp respondingphp tophp aphp subscriptionphp or
php php php php php php*php unsubscriptionphp requestphp.php Thisphp shouldphp bephp thephp Hubphp Serverphp confirmingphp the
php php php php php php*php thephp requestphp priorphp tophp takingphp actionphp onphp itphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$httpGetDataphp GETphp dataphp ifphp availablephp andphp notphp inphp php$php_GET
php php php php php php*php php@paramphp php boolphp php$sendResponseNowphp Whetherphp tophp sendphp responsephp nowphp orphp whenphp asked
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp handlephp(arrayphp php$httpGetDataphp php=php nullphp,php php$sendResponseNowphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$httpGetDataphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$httpGetDataphp php=php php$php_GETphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Handlephp anyphp feedphp updatesphp php(sorryphp forphp thephp messphp php:Pphp)
php php php php php php php php php php*
php php php php php php php php php php*php Thisphp DOESphp NOTphp attemptphp tophp processphp aphp feedphp updatephp.php Feedphp updates
php php php php php php php php php php*php SHOULDphp bephp validatedphp/processedphp byphp anphp asynchronousphp processphp sophp as
php php php php php php php php php php*php tophp avoidphp holdingphp upphp responsesphp tophp thephp Hubphp.
php php php php php php php php php php*php/
php php php php php php php php php$contentTypephp php=php php$thisphp-php>php_getHeaderphp(php'Contentphp-Typephp'php)php;
php php php php php php php php ifphp php(strtolowerphp(php$php_SERVERphp[php'REQUESTphp_METHODphp'php]php)php php=php=php php'postphp'
php php php php php php php php php php php php php&php&php php$thisphp-php>php_hasValidVerifyTokenphp(nullphp,php falsephp)
php php php php php php php php php php php php php&php&php php(striposphp(php$contentTypephp,php php'applicationphp/atomphp+xmlphp'php)php php=php=php=php php0
php php php php php php php php php php php php php php php php php|php|php striposphp(php$contentTypephp,php php'applicationphp/rssphp+xmlphp'php)php php=php=php=php php0
php php php php php php php php php php php php php php php php php|php|php striposphp(php$contentTypephp,php php'applicationphp/xmlphp'php)php php=php=php=php php0
php php php php php php php php php php php php php php php php php|php|php striposphp(php$contentTypephp,php php'textphp/xmlphp'php)php php=php=php=php php0
php php php php php php php php php php php php php php php php php|php|php striposphp(php$contentTypephp,php php'applicationphp/rdfphp+xmlphp'php)php php=php=php=php php0php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeedUpdatephp(php$thisphp-php>php_getRawBodyphp(php)php)php;
php php php php php php php php php php php php php$thisphp-php>getHttpResponsephp(php)
php php php php php php php php php php php php php php php php php php-php>setHeaderphp(php'Xphp-Hubphp-Onphp-Behalfphp-Ofphp'php,php php$thisphp-php>getSubscriberCountphp(php)php)php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php Handlephp anyphp php(unphp)subscribephp confirmationphp requests
php php php php php php php php php php*php/
php php php php php php php php php}php elseifphp php(php$thisphp-php>isValidHubVerificationphp(php$httpGetDataphp)php)php php{
php php php php php php php php php php php php php$dataphp php=php php$thisphp-php>php_currentSubscriptionDataphp;
php php php php php php php php php php php php php$thisphp-php>getHttpResponsephp(php)php-php>setBodyphp(php$httpGetDataphp[php'hubphp_challengephp'php]php)php;
php php php php php php php php php php php php php$dataphp[php'subscriptionphp_statephp'php]php php=php Zendphp_Feedphp_Pubsubhubbubphp:php:SUBSCRIPTIONphp_VERIFIEDphp;
php php php php php php php php php php php php ifphp php(issetphp(php$httpGetDataphp[php'hubphp_leasephp_secondsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$dataphp[php'leasephp_secondsphp'php]php php=php php$httpGetDataphp[php'hubphp_leasephp_secondsphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>getStoragephp(php)php-php>setSubscriptionphp(php$dataphp)php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php Heyphp,php Cphp'monphp!php Wephp triedphp everythingphp elsephp!
php php php php php php php php php php*php/
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>getHttpResponsephp(php)php-php>setHttpResponseCodephp(php4php0php4php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$sendResponseNowphp)php php{
php php php php php php php php php php php php php$thisphp-php>sendResponsephp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp validityphp ofphp thephp requestphp simplyphp byphp makingphp aphp quickphp passphp and
php php php php php php*php confirmingphp thephp presencephp ofphp allphp REQUIREDphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$httpGetData
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidHubVerificationphp(arrayphp php$httpGetDataphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Asphp perphp thephp specificationphp,php thephp hubphp.verifyphp_tokenphp isphp OPTIONALphp.php This
php php php php php php php php php php*php implementationphp ofphp Pubsubhubbubphp considersphp itphp REQUIREDphp andphp will
php php php php php php php php php php*php alwaysphp sendphp aphp hubphp.verifyphp_tokenphp parameterphp tophp bephp echoedphp back
php php php php php php php php php php*php byphp thephp Hubphp Serverphp.php Thereforephp,php itsphp absencephp isphp consideredphp invalidphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(strtolowerphp(php$php_SERVERphp[php'REQUESTphp_METHODphp'php]php)php php!php=php=php php'getphp'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$requiredphp php=php arrayphp(
php php php php php php php php php php php php php'hubphp_modephp'php,
php php php php php php php php php php php php php'hubphp_topicphp'php,
php php php php php php php php php php php php php'hubphp_challengephp'php,
php php php php php php php php php php php php php'hubphp_verifyphp_tokenphp'php,
php php php php php php php php php)php;
php php php php php php php php foreachphp php(php$requiredphp asphp php$keyphp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$keyphp,php php$httpGetDataphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$httpGetDataphp[php'hubphp_modephp'php]php php!php=php=php php'subscribephp'
php php php php php php php php php php php php php&php&php php$httpGetDataphp[php'hubphp_modephp'php]php php!php=php=php php'unsubscribephp'
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$httpGetDataphp[php'hubphp_modephp'php]php php=php=php php'subscribephp'
php php php php php php php php php php php php php&php&php php!arrayphp_keyphp_existsphp(php'hubphp_leasephp_secondsphp'php,php php$httpGetDataphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$httpGetDataphp[php'hubphp_topicphp'php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Attemptphp tophp retrievephp anyphp Verificationphp Tokenphp Keyphp attachedphp tophp Callback
php php php php php php php php php php*php URLphp'sphp pathphp byphp ourphp Subscriberphp implementation
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!php$thisphp-php>php_hasValidVerifyTokenphp(php$httpGetDataphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newlyphp receivedphp feedphp php(Atomphp/RSSphp)php sentphp byphp aphp Hubphp asphp anphp updatephp tophp a
php php php php php php*php Topicphp wephp'vephp subscribedphp tophp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$feed
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_Subscriberphp_Callback
php php php php php php*php/
php php php php publicphp functionphp setFeedUpdatephp(php$feedphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_feedUpdatephp php=php php$feedphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp anyphp newlyphp receivedphp feedphp php(Atomphp/RSSphp)php updatephp wasphp received
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasFeedUpdatephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_feedUpdatephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp newlyphp receivedphp feedphp php(Atomphp/RSSphp)php sentphp byphp aphp Hubphp asphp anphp updatephp tophp a
php php php php php php*php Topicphp wephp'vephp subscribedphp tophp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFeedUpdatephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_feedUpdatephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp forphp aphp validphp verifyphp_tokenphp.php Byphp defaultphp attemptsphp tophp comparephp values
php php php php php php*php withphp thatphp sentphp fromphp Hubphp,php otherwisephp merelyphp ascertainsphp itsphp existencephp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$httpGetData
php php php php php php*php php@paramphp php boolphp php$checkValue
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_hasValidVerifyTokenphp(arrayphp php$httpGetDataphp php=php nullphp,php php$checkValuephp php=php truephp)
php php php php php{
php php php php php php php php php$verifyTokenKeyphp php=php php$thisphp-php>php_detectVerifyTokenKeyphp(php$httpGetDataphp)php;
php php php php php php php php ifphp php(emptyphp(php$verifyTokenKeyphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$verifyTokenExistsphp php=php php$thisphp-php>getStoragephp(php)php-php>hasSubscriptionphp(php$verifyTokenKeyphp)php;
php php php php php php php php ifphp php(php!php$verifyTokenExistsphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$checkValuephp)php php{
php php php php php php php php php php php php php$dataphp php=php php$thisphp-php>getStoragephp(php)php-php>getSubscriptionphp(php$verifyTokenKeyphp)php;
php php php php php php php php php php php php php$verifyTokenphp php=php php$dataphp[php'verifyphp_tokenphp'php]php;
php php php php php php php php php php php php ifphp php(php$verifyTokenphp php!php=php=php hashphp(php'shaphp2php5php6php'php,php php$httpGetDataphp[php'hubphp_verifyphp_tokenphp'php]php)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_currentSubscriptionDataphp php=php php$dataphp;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp detectphp thephp verificationphp tokenphp keyphp.php Thisphp wouldphp bephp passedphp in
php php php php php php*php thephp Callbackphp URLphp php(whichphp wephp arephp handlingphp withphp thisphp classphp!php)php asphp aphp URI
php php php php php php*php pathphp partphp php(thephp lastphp partphp byphp conventionphp)php.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$httpGetData
php php php php php php*php php@returnphp falsephp|string
php php php php php php*php/
php php php php protectedphp functionphp php_detectVerifyTokenKeyphp(arrayphp php$httpGetDataphp php=php nullphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Availablephp whenphp subphp keysphp encodingphp inphp Callbackphp URLphp path
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_subscriptionKeyphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_subscriptionKeyphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Availablephp onlyphp ifphp allowedphp byphp PuSHphp php0php.php2php Hubs
php php php php php php php php php php*php/
php php php php php php php php ifphp php(isphp_arrayphp(php$httpGetDataphp)
php php php php php php php php php php php php php&php&php issetphp(php$httpGetDataphp[php'xhubphp_subscriptionphp'php]php)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp php$httpGetDataphp[php'xhubphp_subscriptionphp'php]php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Availablephp php(possiblyphp)php ifphp corruptedphp inphp transitphp andphp notphp partphp ofphp php$php_GET
php php php php php php php php php php*php/
php php php php php php php php php$paramsphp php=php php$thisphp-php>php_parseQueryStringphp(php)php;
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'xhubphp.subscriptionphp'php]php)php)php php{
php php php php php php php php php php php php returnphp rawurldecodephp(php$paramsphp[php'xhubphp.subscriptionphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildphp anphp arrayphp ofphp Queryphp Stringphp parametersphp.
php php php php php php*php Thisphp bypassesphp php$php_GETphp whichphp mungesphp parameterphp namesphp andphp cannotphp accept
php php php php php php*php multiplephp parametersphp withphp thephp samephp keyphp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp|void
php php php php php php*php/
php php php php protectedphp functionphp php_parseQueryStringphp(php)
php php php php php{
php php php php php php php php php$paramsphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php$queryStringphp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php)php)php php{
php php php php php php php php php php php php php$queryStringphp php=php php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$queryStringphp)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$partsphp php=php explodephp(php'php&php'php,php php$queryStringphp)php;
php php php php php php php php foreachphp php(php$partsphp asphp php$kvpairphp)php php{
php php php php php php php php php php php php php$pairphp php php=php explodephp(php'php=php'php,php php$kvpairphp)php;
php php php php php php php php php php php php php$keyphp php php php=php rawurldecodephp(php$pairphp[php0php]php)php;
php php php php php php php php php php php php php$valuephp php=php rawurldecodephp(php$pairphp[php1php]php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$paramsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php php=php arrayphp(php$paramsphp[php$keyphp]php,php php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$paramsphp;
php php php php php}
php}
