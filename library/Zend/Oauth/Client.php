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
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Clientphp.phpphp php2php3php0php7php6php php2php0php1php0php-php1php0php-php1php0php php2php1php:php3php7php:php2php0Zphp padraicphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp.phpphp'php;

php/php*php*php Zendphp_Httpphp_Clientphp php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Httpphp_Utilityphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Httpphp/Utilityphp.phpphp'php;

php/php*php*php Zendphp_Oauthphp_Configphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Configphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Clientphp extendsphp Zendphp_Httpphp_Client
php{
php php php php php/php*php*
php php php php php php*php Flagphp tophp indicatephp thatphp thephp clientphp hasphp detectedphp thephp serverphp asphp supporting
php php php php php php*php OAuthphp php1php.php0a
php php php php php php*php/
php php php php publicphp staticphp php$supportsRevisionAphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Holdsphp thephp currentphp OAuthphp Configurationphp setphp encapsulatedphp inphp anphp instance
php php php php php php*php ofphp Zendphp_Oauthphp_Configphp;php itphp'sphp notphp aphp Zendphp_Configphp instancephp sincephp thatphp level
php php php php php php*php ofphp abstractionphp isphp unnecessaryphp andphp doesnphp'tphp letphp mephp escapephp thephp accessors
php php php php php php*php andphp mutatorsphp anywayphp!
php php php php php php*
php php php php php php*php php@varphp Zendphp_Oauthphp_Config
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Truephp ifphp thisphp requestphp isphp beingphp madephp withphp dataphp suppliedphp by
php php php php php php*php aphp streamphp objectphp insteadphp ofphp aphp rawphp encodedphp stringphp.
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_streamingRequestphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp;php createsphp aphp newphp HTTPphp Clientphp instancephp whichphp itselfphp is
php php php php php php*php justphp aphp typicalphp Zendphp_Httpphp_Clientphp subclassphp withphp somephp OAuthphp icingphp to
php php php php php php*php assistphp inphp automatingphp OAuthphp parameterphp generationphp,php additionphp and
php php php php php php*php cryptographiocphp signingphp ofphp requestsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$oauthOptions
php php php php php php*php php@paramphp php stringphp php$uri
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$oauthOptionsphp,php php$uriphp php=php nullphp,php php$configphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$configphp[php'rfcphp3php9php8php6php_strictphp'php]php)php)php php{
php php php php php php php php php php php php php$configphp[php'rfcphp3php9php8php6php_strictphp'php]php php=php truephp;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$uriphp,php php$configphp)php;
php php php php php php php php php$thisphp-php>php_configphp php=php newphp Zendphp_Oauthphp_Configphp;
php php php php php php php php ifphp php(php$oauthOptionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$oauthOptionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$oauthOptionsphp php=php php$oauthOptionsphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_configphp-php>setOptionsphp(php$oauthOptionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp connectionphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp|stringphp php$adapter
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>adapterphp;
php php php php php}

php php php php/php*php*
php php php php php php*php Loadphp thephp connectionphp adapter
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Clientphp_Adapterphp_Interfacephp php$adapter
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(php$adapterphp)
php php php php php{
php php php php php php php php ifphp php(php$adapterphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>adapterphp php=php php$adapterphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php parentphp:php:setAdapterphp(php$adapterphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp streamingRequestphp variablephp whichphp controlsphp whetherphp wephp are
php php php php php php*php sendingphp thephp rawphp php(alreadyphp encodedphp)php POSTphp dataphp fromphp aphp streamphp sourcephp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$valuephp Thephp valuephp tophp setphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setStreamingRequestphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamingRequestphp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp whetherphp thephp clientphp isphp setphp tophp performphp streamingphp requestsphp.
php php php php php php*
php php php php php php*php php@returnphp booleanphp Truephp ifphp yesphp,php falsephp otherwisephp.
php php php php php php*php/
php php php php publicphp functionphp getStreamingRequestphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_streamingRequestphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp thephp requestphp bodyphp php(forphp POSTphp andphp PUTphp requestsphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_prepareBodyphp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_streamingRequestphp)php php{
php php php php php php php php php php php php php$thisphp-php>setHeadersphp(selfphp:php:CONTENTphp_LENGTHphp,
php php php php php php php php php php php php php php php php php$thisphp-php>rawphp_postphp_dataphp-php>getTotalSizephp(php)php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>rawphp_postphp_dataphp;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php returnphp parentphp:php:php_prepareBodyphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp customphp parametersphp wephp setphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp resetParametersphp(php$clearAllphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamingRequestphp php=php falsephp;
php php php php php php php php returnphp parentphp:php:resetParametersphp(php$clearAllphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp rawphp php(alreadyphp encodedphp)php POSTphp dataphp fromphp aphp streamphp sourcephp.
php php php php php php*
php php php php php php*php Thisphp isphp usedphp tophp supportphp POSTingphp fromphp openphp filephp handlesphp without
php php php php php php*php cachingphp thephp entirephp bodyphp intophp memoryphp.php Itphp isphp aphp wrapperphp around
php php php php php php*php Zendphp_Httpphp_Clientphp:php:setRawDataphp(php)php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dataphp Thephp requestphp data
php php php php php php*php php@paramphp stringphp php$enctypephp Thephp encodingphp type
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp setRawDataStreamphp(php$dataphp,php php$enctypephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamingRequestphp php=php truephp;
php php php php php php php php returnphp php$thisphp-php>setRawDataphp(php$dataphp,php php$enctypephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Samephp asphp Zendphp_Httpphp_Clientphp:php:setMethodphp(php)php exceptphp itphp alsophp createsphp an
php php php php php php*php Oauthphp specificphp referencephp tophp thephp methodphp typephp.
php php php php php php*php Mightphp bephp defunctphp andphp removedphp inphp aphp laterphp iterationphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp setMethodphp(php$methodphp php=php selfphp:php:GETphp)
php php php php php{
php php php php php php php php ifphp php(php$methodphp php=php=php selfphp:php:GETphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestMethodphp(selfphp:php:GETphp)php;
php php php php php php php php php}php elseifphp(php$methodphp php=php=php selfphp:php:POSTphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestMethodphp(selfphp:php:POSTphp)php;
php php php php php php php php php}php elseifphp(php$methodphp php=php=php selfphp:php:PUTphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestMethodphp(selfphp:php:PUTphp)php;
php php php php php php php php php}php php elseifphp(php$methodphp php=php=php selfphp:php:DELETEphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestMethodphp(selfphp:php:DELETEphp)php;
php php php php php php php php php}php php php elseifphp(php$methodphp php=php=php selfphp:php:HEADphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestMethodphp(selfphp:php:HEADphp)php;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:setMethodphp(php$methodphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Samephp asphp Zendphp_Httpphp_Clientphp:php:requestphp(php)php exceptphp justphp beforephp thephp requestphp is
php php php php php php*php executedphp,php wephp automaticallyphp appendphp anyphp necessaryphp OAuthphp parametersphp and
php php php php php php*php signphp thephp requestphp usingphp thephp relevantphp signaturephp methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php publicphp functionphp requestphp(php$methodphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$methodphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setMethodphp(php$methodphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>prepareOauthphp(php)php;
php php php php php php php php returnphp parentphp:php:requestphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp OAuthphp preparationphp onphp thephp requestphp beforephp sendingphp.
php php php php php php*
php php php php php php*php Thisphp primarilyphp meansphp takingphp aphp requestphp,php correctlyphp encodingphp andphp signing
php php php php php php*php allphp parametersphp,php andphp applyingphp thephp correctphp OAuthphp schemephp tophp thephp method
php php php php php php*php beingphp usedphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp Ifphp POSTBODYphp schemephp requestedphp,php butphp GETphp requestphp methodphp usedphp;php orphp ifphp invalidphp requestphp schemephp provided
php php php php php php*php/
php php php php publicphp functionphp prepareOauthphp(php)
php php php php php{
php php php php php php php php php$requestSchemephp php=php php$thisphp-php>getRequestSchemephp(php)php;
php php php php php php php php php$requestMethodphp php=php php$thisphp-php>getRequestMethodphp(php)php;
php php php php php php php php php$queryphp php=php nullphp;
php php php php php php php php ifphp php(php$requestSchemephp php=php=php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_HEADERphp)php php{
php php php php php php php php php php php php php$oauthHeaderValuephp php=php php$thisphp-php>getTokenphp(php)php-php>toHeaderphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getUriphp(truephp)php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_getSignableParametersAsQueryStringphp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>setHeadersphp(php'Authorizationphp'php,php php$oauthHeaderValuephp)php;
php php php php php php php php php}php elseifphp php(php$requestSchemephp php=php=php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_POSTBODYphp)php php{
php php php php php php php php php php php php ifphp php(php$requestMethodphp php=php=php selfphp:php:GETphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Thephp clientphp isphp configuredphp tophp'
php php php php php php php php php php php php php php php php php php php php php.php php'php passphp OAuthphp parametersphp throughphp aphp POSTphp bodyphp butphp requestphp methodphp'
php php php php php php php php php php php php php php php php php php php php php.php php'php isphp setphp tophp GETphp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rawphp php=php php$thisphp-php>getTokenphp(php)php-php>toQueryStringphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getUriphp(truephp)php,
php php php php php php php php php php php php php php php php php$thisphp-php>php_configphp,
php php php php php php php php php php php php php php php php php$thisphp-php>php_getSignableParametersAsQueryStringphp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>setRawDataphp(php$rawphp,php php'applicationphp/xphp-wwwphp-formphp-urlencodedphp'php)php;
php php php php php php php php php php php php php$thisphp-php>paramsPostphp php=php arrayphp(php)php;
php php php php php php php php php}php elseifphp php(php$requestSchemephp php=php=php Zendphp_Oauthphp:php:REQUESTphp_SCHEMEphp_QUERYSTRINGphp)php php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$queryphp php=php php$thisphp-php>getUriphp(php)php-php>getQueryphp(php)php;
php php php php php php php php php php php php ifphp php(php$queryphp)php php{
php php php php php php php php php php php php php php php php php$queryPartsphp php=php explodephp(php'php&php'php,php php$thisphp-php>getUriphp(php)php-php>getQueryphp(php)php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$queryPartsphp asphp php$queryPartphp)php php{
php php php php php php php php php php php php php php php php php php php php php$kvTuplephp php=php explodephp(php'php=php'php,php php$queryPartphp)php;
php php php php php php php php php php php php php php php php php php php php php$paramsphp[urldecodephp(php$kvTuplephp[php0php]php)php]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php(arrayphp_keyphp_existsphp(php1php,php php$kvTuplephp)php php?php urldecodephp(php$kvTuplephp[php1php]php)php php:php NULLphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>paramsPostphp)php)php php{
php php php php php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$paramsphp,php php$thisphp-php>paramsPostphp)php;
php php php php php php php php php php php php php php php php php$queryphp php php=php php$thisphp-php>getTokenphp(php)php-php>toQueryStringphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getUriphp(truephp)php,php php$thisphp-php>php_configphp,php php$params
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$queryphp php=php php$thisphp-php>getTokenphp(php)php-php>toQueryStringphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getUriphp(truephp)php,php php$thisphp-php>php_configphp,php php$params
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>getUriphp(php)php-php>setQueryphp(php$queryphp)php;
php php php php php php php php php php php php php$thisphp-php>paramsGetphp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(php'Invalidphp requestphp schemephp:php php'php php.php php$requestSchemephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Collectphp allphp signablephp parametersphp intophp aphp singlephp arrayphp acrossphp queryphp string
php php php php php php*php andphp POSTphp bodyphp.php Thesephp arephp returnedphp asphp aphp properlyphp formattedphp single
php php php php php php*php queryphp stringphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getSignableParametersAsQueryStringphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>paramsGetphp)php)php php{
php php php php php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$paramsphp,php php$thisphp-php>paramsGetphp)php;
php php php php php php php php php php php php php php php php php$queryphp php php=php php$thisphp-php>getTokenphp(php)php-php>toQueryStringphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getUriphp(truephp)php,php php$thisphp-php>php_configphp,php php$params
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>paramsPostphp)php)php php{
php php php php php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$paramsphp,php php$thisphp-php>paramsPostphp)php;
php php php php php php php php php php php php php php php php php$queryphp php php=php php$thisphp-php>getTokenphp(php)php-php>toQueryStringphp(
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getUriphp(truephp)php,php php$thisphp-php>php_configphp,php php$params
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Simplephp Proxyphp tophp thephp currentphp Zendphp_Oauthphp_Configphp methodphp.php Itphp'sphp thatphp instance
php php php php php php*php whichphp holdsphp allphp configurationphp methodsphp andphp valuesphp thisphp objectphp alsophp presents
php php php php php php*php asphp itphp'sphp APIphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Oauthphp_Exceptionphp ifphp methodphp doesphp notphp existphp inphp configphp object
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$argsphp)
php php php php php{
php php php php php php php php ifphp php(php!methodphp_existsphp(php$thisphp-php>php_configphp,php php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Oauthphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Oauthphp_Exceptionphp(php'Methodphp doesphp notphp existphp:php php'php php.php php$methodphp)php;
php php php php php php php php php}
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_configphp,php$methodphp)php,php php$argsphp)php;
php php php php php}
php}
