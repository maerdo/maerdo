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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php1php3php0php1php php2php0php1php0php-php0php3php-php0php2php php2php3php:php0php1php:php1php9Zphp yoshidaphp@zendphp.cophp.jpphp php$
php php*php/

php/php*php*
php php*php Zendphp_Controllerphp_Responsephp_Abstract
php php*
php php*php Basephp classphp forphp Zendphp_Controllerphp responses
php php*
php php*php php@packagephp Zendphp_Controller
php php*php php@subpackagephp Response
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Controllerphp_Responsephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Bodyphp content
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_bodyphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Exceptionphp stack
php php php php php php*php php@varphp Exception
php php php php php php*php/
php php php php protectedphp php$php_exceptionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp headersphp.php Eachphp headerphp isphp anphp arrayphp withphp keysphp php'namephp'php andphp php'valuephp'
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp rawphp headersphp.php Eachphp headerphp isphp aphp singlephp stringphp,php thephp entirephp headerphp tophp emit
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headersRawphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php HTTPphp responsephp codephp tophp usephp inphp headers
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_httpResponseCodephp php=php php2php0php0php;

php php php php php/php*php*
php php php php php php*php Flagphp;php isphp thisphp responsephp aphp redirectphp?
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_isRedirectphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp renderphp exceptionsphp;php offphp byphp default
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_renderExceptionsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Flagphp;php ifphp truephp,php whenphp headerphp operationsphp arephp calledphp afterphp headersphp havephp been
php php php php php php*php sentphp,php anphp exceptionphp willphp bephp raisedphp;php otherwisephp,php processingphp willphp continue
php php php php php php*php asphp normalphp.php Defaultsphp tophp truephp.
php php php php php php*
php php php php php php*php php@seephp canSendHeadersphp(php)
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php publicphp php$headersSentThrowsExceptionphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Normalizephp aphp headerphp name
php php php php php php*
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

php php php php php/php*php*
php php php php php php*php Setphp aphp header
php php php php php php*
php php php php php php*php Ifphp php$replacephp isphp truephp,php replacesphp anyphp headersphp alreadyphp definedphp withphp that
php php php php php php*php php$namephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@paramphp booleanphp php$replace
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setHeaderphp(php$namephp,php php$valuephp,php php$replacephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>canSendHeadersphp(truephp)php;
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
php php php php php php php php php php php php php'replacephp'php php=php>php php$replace
php php php php php php php php php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp redirectphp URL
php php php php php php*
php php php php php php*php Setsphp Locationphp headerphp andphp responsephp codephp.php Forcesphp replacementphp ofphp anyphp prior
php php php php php php*php redirectsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$url
php php php php php php*php php@paramphp intphp php$code
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setRedirectphp(php$urlphp,php php$codephp php=php php3php0php2php)
php php php php php{
php php php php php php php php php$thisphp-php>canSendHeadersphp(truephp)php;
php php php php php php php php php$thisphp-php>setHeaderphp(php'Locationphp'php,php php$urlphp,php truephp)
php php php php php php php php php php php php php php-php>setHttpResponseCodephp(php$codephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thisphp aphp redirectphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isRedirectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isRedirectphp;
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
php php php php php php*php Clearphp headers
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp clearHeadersphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_headersphp php=php arrayphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp specifiedphp HTTPphp header
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp clearHeaderphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php countphp(php$thisphp-php>php_headersphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_headersphp asphp php$indexphp php=php>php php$headerphp)php php{
php php php php php php php php php php php php ifphp php(php$namephp php=php=php php$headerphp[php'namephp'php]php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_headersphp[php$indexphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp rawphp HTTPphp header
php php php php php php*
php php php php php php*php Allowsphp settingphp nonphp keyphp php=php>php valuephp headersphp,php suchphp asphp statusphp codes
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setRawHeaderphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>canSendHeadersphp(truephp)php;
php php php php php php php php ifphp php(php'Locationphp'php php=php=php substrphp(php$valuephp,php php0php,php php8php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_isRedirectphp php=php truephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_headersRawphp[php]php php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp php{php@linkphp setRawHeaderphp(php)php rawphp HTTPphp headersphp}
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getRawHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headersRawphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp php{php@linkphp setRawHeaderphp(php)php rawphp HTTPphp headersphp}
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp clearRawHeadersphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_headersRawphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp specifiedphp rawphp HTTPphp header
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$headerRaw
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp clearRawHeaderphp(php$headerRawphp)
php php php php php{
php php php php php php php php ifphp php(php!php countphp(php$thisphp-php>php_headersRawphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$keyphp php=php arrayphp_searchphp(php$headerRawphp,php php$thisphp-php>php_headersRawphp)php;
php php php php php php php php unsetphp(php$thisphp-php>php_headersRawphp[php$keyphp]php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp headersphp,php normalphp andphp raw
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp clearAllHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>clearHeadersphp(php)
php php php php php php php php php php php php php php php php php php php php php-php>clearRawHeadersphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp HTTPphp responsephp codephp tophp usephp withphp headers
php php php php php php*
php php php php php php*php php@paramphp intphp php$code
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setHttpResponseCodephp(php$codephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_intphp(php$codephp)php php|php|php php(php1php0php0php php>php php$codephp)php php|php|php php(php5php9php9php <php php$codephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Responsephp_Exceptionphp(php'Invalidphp HTTPphp responsephp codephp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php3php0php0php <php=php php$codephp)php php&php&php php(php3php0php7php php>php=php php$codephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_isRedirectphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_isRedirectphp php=php falsephp;
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
php php php php php php*php Canphp wephp sendphp headersphp?
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$throwphp Whetherphp orphp notphp tophp throwphp anphp exceptionphp ifphp headersphp havephp beenphp sentphp;php defaultsphp tophp false
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Responsephp_Exception
php php php php php php*php/
php php php php publicphp functionphp canSendHeadersphp(php$throwphp php=php falsephp)
php php php php php{
php php php php php php php php php$okphp php=php headersphp_sentphp(php$filephp,php php$linephp)php;
php php php php php php php php ifphp php(php$okphp php&php&php php$throwphp php&php&php php$thisphp-php>headersSentThrowsExceptionphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Responsephp_Exceptionphp(php'Cannotphp sendphp headersphp;php headersphp alreadyphp sentphp inphp php'php php.php php$filephp php.php php'php,php linephp php'php php.php php$linephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php!php$okphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp allphp headers
php php php php php php*
php php php php php php*php Sendsphp anyphp headersphp specifiedphp.php Ifphp anphp php{php@linkphp setHttpResponseCodephp(php)php HTTPphp responsephp codephp}
php php php php php php*php hasphp beenphp specifiedphp,php itphp isphp sentphp withphp thephp firstphp headerphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp sendHeadersphp(php)
php php php php php{
php php php php php php php php php/php/php Onlyphp checkphp ifphp wephp canphp sendphp headersphp ifphp wephp havephp headersphp tophp send
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_headersRawphp)php php|php|php countphp(php$thisphp-php>php_headersphp)php php|php|php php(php2php0php0php php!php=php php$thisphp-php>php_httpResponseCodephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>canSendHeadersphp(truephp)php;
php php php php php php php php php}php elseifphp php(php2php0php0php php=php=php php$thisphp-php>php_httpResponseCodephp)php php{
php php php php php php php php php php php php php/php/php Havenphp'tphp changedphp thephp responsephp codephp,php andphp wephp havephp nophp headers
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$httpCodeSentphp php=php falsephp;

php php php php php php php php foreachphp php(php$thisphp-php>php_headersRawphp asphp php$headerphp)php php{
php php php php php php php php php php php php ifphp php(php!php$httpCodeSentphp php&php&php php$thisphp-php>php_httpResponseCodephp)php php{
php php php php php php php php php php php php php php php php headerphp(php$headerphp,php truephp,php php$thisphp-php>php_httpResponseCodephp)php;
php php php php php php php php php php php php php php php php php$httpCodeSentphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php headerphp(php$headerphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

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

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp bodyphp content
php php php php php php*
php php php php php php*php Ifphp php$namephp isphp notphp passedphp,php orphp isphp notphp aphp stringphp,php resetsphp thephp entirephp bodyphp and
php php php php php php*php setsphp thephp php'defaultphp'php keyphp tophp php$contentphp.
php php php php php php*
php php php php php php*php Ifphp php$namephp isphp aphp stringphp,php setsphp thephp namedphp segmentphp inphp thephp bodyphp arrayphp to
php php php php php php*php php$contentphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$content
php php php php php php*php php@paramphp nullphp|stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setBodyphp(php$contentphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$namephp)php php|php|php php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_bodyphp php=php arrayphp(php'defaultphp'php php=php>php php(stringphp)php php$contentphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_bodyphp[php$namephp]php php=php php(stringphp)php php$contentphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp contentphp tophp thephp bodyphp content
php php php php php php*
php php php php php php*php php@paramphp stringphp php$content
php php php php php php*php php@paramphp nullphp|stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp appendBodyphp(php$contentphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$namephp)php php|php|php php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_bodyphp[php'defaultphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_bodyphp[php'defaultphp'php]php php.php=php php(stringphp)php php$contentphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>appendphp(php'defaultphp'php,php php$contentphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(issetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_bodyphp[php$namephp]php php.php=php php(stringphp)php php$contentphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>appendphp(php$namephp,php php$contentphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp bodyphp array
php php php php php php*
php php php php php php*php Withphp nophp argumentsphp,php clearsphp thephp entirephp bodyphp arrayphp.php Givenphp aphp php$namephp,php clears
php php php php php php*php justphp thatphp namedphp segmentphp;php ifphp nophp segmentphp matchingphp php$namephp existsphp,php returns
php php php php php php*php falsephp tophp indicatephp anphp errorphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Namedphp segmentphp tophp clear
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp clearBodyphp(php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$namephp)php php{
php php php php php php php php php php php php php$namephp php=php php(stringphp)php php$namephp;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_bodyphp php=php arrayphp(php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp bodyphp content
php php php php php php*
php php php php php php*php Ifphp php$specphp isphp falsephp,php returnsphp thephp concatenatedphp valuesphp ofphp thephp bodyphp content
php php php php php php*php arrayphp.php Ifphp php$specphp isphp booleanphp truephp,php returnsphp thephp bodyphp contentphp arrayphp.php If
php php php php php php*php php$specphp isphp aphp stringphp andphp matchesphp aphp namedphp segmentphp,php returnsphp thephp contentsphp of
php php php php php php*php thatphp segmentphp;php otherwisephp,php returnsphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$spec
php php php php php php*php php@returnphp stringphp|arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getBodyphp(php$specphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(falsephp php=php=php=php php$specphp)php php{
php php php php php php php php php php php php obphp_startphp(php)php;
php php php php php php php php php php php php php$thisphp-php>outputBodyphp(php)php;
php php php php php php php php php php php php returnphp obphp_getphp_cleanphp(php)php;
php php php php php php php php php}php elseifphp php(truephp php=php=php=php php$specphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_bodyphp;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$specphp)php php&php&php issetphp(php$thisphp-php>php_bodyphp[php$specphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_bodyphp[php$specphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp aphp namedphp bodyphp segmentphp tophp thephp bodyphp contentphp array
php php php php php php*
php php php php php php*php Ifphp segmentphp alreadyphp existsphp,php replacesphp withphp php$contentphp andphp placesphp atphp endphp of
php php php php php php*php arrayphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$content
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp appendphp(php$namephp,php php$contentphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Responsephp_Exceptionphp(php'Invalidphp bodyphp segmentphp keyphp php(php"php'php php.php gettypephp(php$namephp)php php.php php'php"php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_bodyphp[php$namephp]php php=php php(stringphp)php php$contentphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Prependphp aphp namedphp bodyphp segmentphp tophp thephp bodyphp contentphp array
php php php php php php*
php php php php php php*php Ifphp segmentphp alreadyphp existsphp,php replacesphp withphp php$contentphp andphp placesphp atphp topphp of
php php php php php php*php arrayphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$content
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp prependphp(php$namephp,php php$contentphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Responsephp_Exceptionphp(php'Invalidphp bodyphp segmentphp keyphp php(php"php'php php.php gettypephp(php$namephp)php php.php php'php"php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php;
php php php php php php php php php}

php php php php php php php php php$newphp php=php arrayphp(php$namephp php=php>php php(stringphp)php php$contentphp)php;
php php php php php php php php php$thisphp-php>php_bodyphp php=php php$newphp php+php php$thisphp-php>php_bodyphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Insertphp aphp namedphp segmentphp intophp thephp bodyphp contentphp array
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php stringphp php$parent
php php php php php php*php php@paramphp php booleanphp php$beforephp Whetherphp tophp insertphp thephp newphp segmentphp beforephp or
php php php php php php*php afterphp thephp parentphp.php Defaultsphp tophp falsephp php(afterphp)
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp insertphp(php$namephp,php php$contentphp,php php$parentphp php=php nullphp,php php$beforephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Responsephp_Exceptionphp(php'Invalidphp bodyphp segmentphp keyphp php(php"php'php php.php gettypephp(php$namephp)php php.php php'php"php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(nullphp php!php=php=php php$parentphp)php php&php&php php!isphp_stringphp(php$parentphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Responsephp_Exceptionphp(php'Invalidphp bodyphp segmentphp parentphp keyphp php(php"php'php php.php gettypephp(php$parentphp)php php.php php'php"php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_bodyphp[php$namephp]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(nullphp php=php=php=php php$parentphp)php php|php|php php!issetphp(php$thisphp-php>php_bodyphp[php$parentphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>appendphp(php$namephp,php php$contentphp)php;
php php php php php php php php php}

php php php php php php php php php$insphp php php=php arrayphp(php$namephp php=php>php php(stringphp)php php$contentphp)php;
php php php php php php php php php$keysphp php=php arrayphp_keysphp(php$thisphp-php>php_bodyphp)php;
php php php php php php php php php$locphp php php=php arrayphp_searchphp(php$parentphp,php php$keysphp)php;
php php php php php php php php ifphp php(php!php$beforephp)php php{
php php php php php php php php php php php php php/php/php Incrementphp locationphp ifphp notphp insertingphp before
php php php php php php php php php php php php php+php+php$locphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php0php php=php=php=php php$locphp)php php{
php php php php php php php php php php php php php/php/php Ifphp locationphp ofphp keyphp isphp php0php,php wephp'rephp prepending
php php php php php php php php php php php php php$thisphp-php>php_bodyphp php=php php$insphp php+php php$thisphp-php>php_bodyphp;
php php php php php php php php php}php elseifphp php(php$locphp php>php=php php(countphp(php$thisphp-php>php_bodyphp)php)php)php php{
php php php php php php php php php php php php php/php/php Ifphp locationphp ofphp keyphp isphp maximalphp,php wephp'rephp appending
php php php php php php php php php php php php php$thisphp-php>php_bodyphp php=php php$thisphp-php>php_bodyphp php+php php$insphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Otherwisephp,php insertphp atphp locationphp specified
php php php php php php php php php php php php php$prephp php php=php arrayphp_slicephp(php$thisphp-php>php_bodyphp,php php0php,php php$locphp)php;
php php php php php php php php php php php php php$postphp php=php arrayphp_slicephp(php$thisphp-php>php_bodyphp,php php$locphp)php;
php php php php php php php php php php php php php$thisphp-php>php_bodyphp php=php php$prephp php+php php$insphp php+php php$postphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Echophp thephp bodyphp segments
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp outputBodyphp(php)
php php php php php{
php php php php php php php php php$bodyphp php=php implodephp(php'php'php,php php$thisphp-php>php_bodyphp)php;
php php php php php php php php echophp php$bodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp anphp exceptionphp withphp thephp response
php php php php php php*
php php php php php php*php php@paramphp Exceptionphp php$e
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setExceptionphp(Exceptionphp php$ephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_exceptionsphp[php]php php=php php$ephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp exceptionphp stack
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getExceptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_exceptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Hasphp anphp exceptionphp beenphp registeredphp withphp thephp responsephp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isExceptionphp(php)
php php php php php{
php php php php php php php php returnphp php!emptyphp(php$thisphp-php>php_exceptionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp responsephp objectphp containphp anphp exceptionphp ofphp aphp givenphp typephp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasExceptionOfTypephp(php$typephp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_exceptionsphp asphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$ephp instanceofphp php$typephp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp responsephp objectphp containphp anphp exceptionphp withphp aphp givenphp messagephp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasExceptionOfMessagephp(php$messagephp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_exceptionsphp asphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$messagephp php=php=php php$ephp-php>getMessagephp(php)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp responsephp objectphp containphp anphp exceptionphp withphp aphp givenphp codephp?
php php php php php php*
php php php php php php*php php@paramphp php intphp php$code
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasExceptionOfCodephp(php$codephp)
php php php php php{
php php php php php php php php php$codephp php=php php(intphp)php php$codephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_exceptionsphp asphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$codephp php=php=php php$ephp-php>getCodephp(php)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp exceptionsphp ofphp aphp givenphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp falsephp|array
php php php php php php*php/
php php php php publicphp functionphp getExceptionByTypephp(php$typephp)
php php php php php{
php php php php php php php php php$exceptionsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_exceptionsphp asphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$ephp instanceofphp php$typephp)php php{
php php php php php php php php php php php php php php php php php$exceptionsphp[php]php php=php php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$exceptionsphp)php)php php{
php php php php php php php php php php php php php$exceptionsphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$exceptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp exceptionsphp ofphp aphp givenphp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@returnphp falsephp|array
php php php php php php*php/
php php php php publicphp functionphp getExceptionByMessagephp(php$messagephp)
php php php php php{
php php php php php php php php php$exceptionsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_exceptionsphp asphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$messagephp php=php=php php$ephp-php>getMessagephp(php)php)php php{
php php php php php php php php php php php php php php php php php$exceptionsphp[php]php php=php php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$exceptionsphp)php)php php{
php php php php php php php php php php php php php$exceptionsphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$exceptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp exceptionsphp ofphp aphp givenphp code
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$code
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp getExceptionByCodephp(php$codephp)
php php php php php{
php php php php php php php php php$codephp php php php php php php php=php php(intphp)php php$codephp;
php php php php php php php php php$exceptionsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_exceptionsphp asphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$codephp php=php=php php$ephp-php>getCodephp(php)php)php php{
php php php php php php php php php php php php php php php php php$exceptionsphp[php]php php=php php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$exceptionsphp)php)php php{
php php php php php php php php php php php php php$exceptionsphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$exceptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp renderphp exceptionsphp php(offphp byphp defaultphp)
php php php php php php*
php php php php php php*php Ifphp calledphp withphp nophp argumentsphp orphp aphp nullphp argumentphp,php returnsphp thephp valuephp ofphp the
php php php php php php*php flagphp;php otherwisephp,php setsphp itphp andphp returnsphp thephp currentphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$flagphp Optional
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp renderExceptionsphp(php$flagphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$flagphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_renderExceptionsphp php=php php$flagphp php?php truephp php:php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_renderExceptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp thephp responsephp,php includingphp allphp headersphp,php renderingphp exceptionsphp ifphp so
php php php php php php*php requestedphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp sendResponsephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>sendHeadersphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>isExceptionphp(php)php php&php&php php$thisphp-php>renderExceptionsphp(php)php)php php{
php php php php php php php php php php php php php$exceptionsphp php=php php'php'php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>getExceptionphp(php)php asphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$exceptionsphp php.php=php php$ephp-php>php_php_toStringphp(php)php php.php php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php echophp php$exceptionsphp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>outputBodyphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp php_php_toStringphp functionality
php php php php php php*
php php php php php php*php Proxiesphp tophp php{php@linkphp sendResponsephp(php)php}php andphp returnsphp responsephp valuephp asphp string
php php php php php php*php usingphp outputphp bufferingphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php obphp_startphp(php)php;
php php php php php php php php php$thisphp-php>sendResponsephp(php)php;
php php php php php php php php returnphp obphp_getphp_cleanphp(php)php;
php php php php php}
php}
