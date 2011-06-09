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
php php*php php@versionphp php php php php$Idphp:php HttpResponsephp.phpphp php2php0php7php8php5php php2php0php1php0php-php0php1php-php3php1php php0php9php:php4php3php:php0php3Zphp mikaelkaelphp php$
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
classphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponse
php{
php php php php php/php*php*
php php php php php php*php Thephp bodyphp ofphp anyphp responsephp tophp thephp currentphp callbackphp request
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_bodyphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp headersphp.php Eachphp headerphp isphp anphp arrayphp withphp keysphp php'namephp'php andphp php'valuephp'
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php HTTPphp responsephp codephp tophp usephp inphp headers
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_httpResponseCodephp php=php php2php0php0php;

php php php php php/php*php*
php php php php php php*php Sendphp thephp responsephp,php includingphp allphp headers
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp sendResponsephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>sendHeadersphp(php)php;
php php php php php php php php echophp php$thisphp-php>getBodyphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp allphp headers
php php php php php php*
php php php php php php*php Sendsphp anyphp headersphp specifiedphp.php Ifphp anphp php{php@linkphp setHttpResponseCodephp(php)php HTTPphp responsephp codephp}
php php php php php php*php hasphp beenphp specifiedphp,php itphp isphp sentphp withphp thephp firstphp headerphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp sendHeadersphp(php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_headersphp)php php|php|php php(php2php0php0php php!php=php php$thisphp-php>php_httpResponseCodephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>canSendHeadersphp(truephp)php;
php php php php php php php php php}php elseifphp php(php2php0php0php php=php=php php$thisphp-php>php_httpResponseCodephp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$httpCodeSentphp php=php falsephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_headersphp asphp php$headerphp)php php{
php php php php php php php php php php php php ifphp php(php!php$httpCodeSentphp php&php&php php$thisphp-php>php_httpResponseCodephp)php php{
php php php php php php php php php php php php php php php php headerphp(php$headerphp[php'namephp'php]php php.php php'php:php php'php php.php php$headerphp[php'valuephp'php]php,php php$headerphp[php'replacephp'php]php,php php$thisphp-php>php_httpResponseCodephp)php;
php php php php php php php php php php php php php php php php php$httpCodeSentphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php headerphp(php$headerphp[php'namephp'php]php php.php php'php:php php'php php.php php$headerphp[php'valuephp'php]php,php php$headerphp[php'replacephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$httpCodeSentphp)php php{
php php php php php php php php php php php php headerphp(php'HTTPphp/php1php.php1php php'php php.php php$thisphp-php>php_httpResponseCodephp)php;
php php php php php php php php php php php php php$httpCodeSentphp php=php truephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp header
php php php php php php*
php php php php php php*php Ifphp php$replacephp isphp truephp,php replacesphp anyphp headersphp alreadyphp definedphp withphp that
php php php php php php*php php$namephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php booleanphp php$replace
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponse
php php php php php php*php/
php php php php publicphp functionphp setHeaderphp(php$namephp,php php$valuephp,php php$replacephp php=php falsephp)
php php php php php{
php php php php php php php php php$namephp php php=php php$thisphp-php>php_normalizeHeaderphp(php$namephp)php;
php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp;
php php php php php php php php ifphp php(php$replacephp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_headersphp asphp php$keyphp php=php>php php$headerphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$namephp php=php=php php$headerphp[php'namephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_headersphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_headersphp[php]php php=php arrayphp(
php php php php php php php php php php php php php'namephp'php php php php php=php>php php$namephp,
php php php php php php php php php php php php php'valuephp'php php php php=php>php php$valuephp,
php php php php php php php php php php php php php'replacephp'php php=php>php php$replacephp,
php php php php php php php php php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp aphp specificphp Headerphp isphp setphp andphp returnphp itsphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_normalizeHeaderphp(php$namephp)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_headersphp asphp php$headerphp)php php{
php php php php php php php php php php php php ifphp php(php$headerphp[php'namephp'php]php php=php=php php$namephp)php php{
php php php php php php php php php php php php php php php php returnphp php$headerphp[php'valuephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp arrayphp ofphp headersphp;php seephp php{php@linkphp php$php_headersphp}php forphp format
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Canphp wephp sendphp headersphp?
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$throwphp Whetherphp orphp notphp tophp throwphp anphp exceptionphp ifphp headersphp havephp beenphp sentphp;php defaultsphp tophp false
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Feedphp_Pubsubhubbubphp_Exception
php php php php php php*php/
php php php php publicphp functionphp canSendHeadersphp(php$throwphp php=php falsephp)
php php php php php{
php php php php php php php php php$okphp php=php headersphp_sentphp(php$filephp,php php$linephp)php;
php php php php php php php php ifphp php(php$okphp php&php&php php$throwphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Cannotphp sendphp headersphp;php headersphp alreadyphp sentphp inphp php'php php.php php$filephp php.php php'php,php linephp php'php php.php php$linephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php!php$okphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp HTTPphp responsephp codephp tophp usephp withphp headers
php php php php php php*
php php php php php php*php php@paramphp php intphp php$code
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponse
php php php php php php*php/
php php php php publicphp functionphp setHttpResponseCodephp(php$codephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_intphp(php$codephp)php php|php|php php(php1php0php0php php>php php$codephp)php php|php|php php(php5php9php9php <php php$codephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Invalidphp HTTPphp responsephp'
php php php php php php php php php php php php php.php php'php codephp:php'php php.php php$codephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_httpResponseCodephp php=php php$codephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp HTTPphp responsephp code
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getHttpResponseCodephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_httpResponseCodephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp bodyphp content
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp Zendphp_Feedphp_Pubsubhubbubphp_HttpResponse
php php php php php php*php/
php php php php publicphp functionphp setBodyphp(php$contentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bodyphp php=php php(stringphp)php php$contentphp;
php php php php php php php php php$thisphp-php>setHeaderphp(php'contentphp-lengthphp'php,php strlenphp(php$contentphp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp bodyphp content
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBodyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_bodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizesphp aphp headerphp namephp tophp Xphp-Capitalizedphp-Names
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_normalizeHeaderphp(php$namephp)
php php php php php{
php php php php php php php php php$filteredphp php=php strphp_replacephp(arrayphp(php'php-php'php,php php'php_php'php)php,php php'php php'php,php php(stringphp)php php$namephp)php;
php php php php php php php php php$filteredphp php=php ucwordsphp(strtolowerphp(php$filteredphp)php)php;
php php php php php php php php php$filteredphp php=php strphp_replacephp(php'php php'php,php php'php-php'php,php php$filteredphp)php;
php php php php php php php php returnphp php$filteredphp;
php php php php php}
php}
