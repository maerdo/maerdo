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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp StrikeIron
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Basephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Servicephp_StrikeIronphp_Decorator
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/StrikeIronphp/Decoratorphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp StrikeIron
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_StrikeIronphp_Base
php{
php php php php php/php*php*
php php php php php php*php Configurationphp options
php php php php php php*php php@paramphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php'usernamephp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'passwordphp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'clientphp'php php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'optionsphp'php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'headersphp'php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'wsdlphp'php php php php php php=php>php nullphp)php;

php php php php php/php*php*
php php php php php php*php Outputphp headersphp returnedphp byphp thephp lastphp callphp tophp SOAPClientphp-php>php_php_soapCallphp(php)
php php php php php php*php php@paramphp array
php php php php php php*php/
php php php php protectedphp php$php_outputHeadersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php Keyphp/valuephp pairphp options
php php php php php php*php php@throwsphp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'soapphp'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/StrikeIronphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_StrikeIronphp_Exceptionphp(php'SOAPphp extensionphp isphp notphp enabledphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp php php=php arrayphp_mergephp(php$thisphp-php>php_optionsphp,php php$optionsphp)php;

php php php php php php php php php$thisphp-php>php_initSoapHeadersphp(php)php;
php php php php php php php php php$thisphp-php>php_initSoapClientphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp methodphp callsphp tophp thephp SOAPClientphp instancephp,php transformingphp method
php php php php php php*php callsphp andphp responsesphp forphp conveniencephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$methodphp php Methodphp name
php php php php php php*php php@paramphp php arrayphp php php php$paramsphp php Parametersphp forphp method
php php php php php php*php php@returnphp mixedphp php php php php php php php php php php php Result
php php php php php php*php php@throwsphp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$paramsphp)
php php php php php{
php php php php php php php php php/php/php preparephp methodphp namephp andphp parametersphp forphp soapphp call
php php php php php php php php listphp(php$methodphp,php php$paramsphp)php php=php php$thisphp-php>php_transformCallphp(php$methodphp,php php$paramsphp)php;
php php php php php php php php php$paramsphp php=php issetphp(php$paramsphp[php0php]php)php php?php arrayphp(php$paramsphp[php0php]php)php php:php arrayphp(php)php;

php php php php php php php php php/php/php makephp soapphp callphp,php capturingphp thephp resultphp andphp outputphp headers
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_optionsphp[php'clientphp'php]php-php>php_php_soapCallphp(php$methodphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'optionsphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'headersphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_outputHeadersphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$messagephp php=php getphp_classphp(php$ephp)php php.php php'php:php php'php php.php php$ephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/StrikeIronphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_StrikeIronphp_Exceptionphp(php$messagephp,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php transformphp/decoratephp thephp resultphp andphp returnphp it
php php php php php php php php php$resultphp php=php php$thisphp-php>php_transformResultphp(php$resultphp,php php$methodphp,php php$paramsphp)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp thephp SOAPClientphp instance
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initSoapClientphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>php_optionsphp[php'optionsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'optionsphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php issetphp(php$thisphp-php>php_optionsphp[php'clientphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'clientphp'php]php php=php newphp SoapClientphp(php$thisphp-php>php_optionsphp[php'wsdlphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'optionsphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp thephp headersphp tophp passphp tophp SOAPClientphp-php>php_php_soapCallphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_initSoapHeadersphp(php)
php php php php php{
php php php php php php php php php/php/php validatephp headersphp andphp checkphp ifphp LicenseInfophp wasphp given
php php php php php php php php php$foundLicenseInfophp php=php falsephp;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'headersphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!php isphp_arrayphp(php$thisphp-php>php_optionsphp[php'headersphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'headersphp'php]php php=php arrayphp(php$thisphp-php>php_optionsphp[php'headersphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_optionsphp[php'headersphp'php]php asphp php$headerphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php php$headerphp instanceofphp SoapHeaderphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/StrikeIronphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_StrikeIronphp_Exceptionphp(php'Headerphp mustphp bephp instancephp ofphp SoapHeaderphp'php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$headerphp-php>namephp php=php=php php'LicenseInfophp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$foundLicenseInfophp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'headersphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php addphp defaultphp LicenseInfophp headerphp ifphp aphp customphp onephp wasphp notphp supplied
php php php php php php php php ifphp php(php!php php$foundLicenseInfophp)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'headersphp'php]php[php]php php=php newphp SoapHeaderphp(php'httpphp:php/php/wsphp.strikeironphp.comphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'LicenseInfophp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php'RegisteredUserphp'php php=php>php arrayphp(php'UserIDphp'php php php php=php>php php$thisphp-php>php_optionsphp[php'usernamephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Passwordphp'php php=php>php php$thisphp-php>php_optionsphp[php'passwordphp'php]php)php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformphp aphp methodphp namephp orphp methodphp parametersphp beforephp sendingphp them
php php php php php php*php tophp thephp remotephp servicephp.php php Thisphp canphp bephp usefulphp forphp inflectionphp orphp other
php php php php php php*php transformsphp tophp givephp thephp methodphp callphp aphp morephp PHPphp-likephp interfacephp.
php php php php php php*
php php php php php php*php php@seephp php php php php_php_callphp(php)
php php php php php php*php php@paramphp php stringphp php php$methodphp php Methodphp namephp calledphp fromphp PHP
php php php php php php*php php@paramphp php mixedphp php php php$paramphp php php Parametersphp passedphp fromphp PHP
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php php php[php$methodphp,php php$paramsphp]php forphp SOAPClientphp-php>php_php_soapCallphp(php)
php php php php php php*php/
php php php php protectedphp functionphp php_transformCallphp(php$methodphp,php php$paramsphp)
php php php php php{
php php php php php php php php returnphp arrayphp(ucfirstphp(php$methodphp)php,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformphp thephp resultphp returnedphp fromphp aphp methodphp beforephp returning
php php php php php php*php itphp tophp thephp PHPphp callerphp.php php Thisphp canphp bephp usefulphp forphp transforming
php php php php php php*php thephp SOAPClientphp returnedphp resultphp tophp bephp morephp PHPphp-likephp.
php php php php php php*
php php php php php php*php Thephp php$methodphp namephp andphp php$paramsphp passedphp tophp thephp methodphp arephp providedphp to
php php php php php php*php allowphp decisionsphp tophp bephp madephp aboutphp howphp tophp transformphp thephp resultphp based
php php php php php php*php onphp whatphp wasphp originallyphp calledphp.
php php php php php php*
php php php php php php*php php@seephp php php php php_php_callphp(php)
php php php php php php*php php@paramphp php php$resultphp php Rawphp resultphp returnedphp fromphp SOAPClientphp_php>php_php_soapCallphp(php)
php php php php php php*php php@paramphp php php$methodphp php Methodphp namephp thatphp wasphp passedphp tophp SOAPClientphp-php>php_php_soapCallphp(php)
php php php php php php*php php@paramphp php php$paramsphp php Methodphp parametersphp thatphp werephp passedphp tophp SOAPClientphp-php>php_php_soapCallphp(php)
php php php php php php*php php@returnphp mixedphp php php php Transformedphp result
php php php php php php*php/
php php php php protectedphp functionphp php_transformResultphp(php$resultphp,php php$methodphp,php php$paramsphp)
php php php php php{
php php php php php php php php php$resultObjectNamephp php=php php"php{php$methodphp}Resultphp"php;
php php php php php php php php ifphp php(issetphp(php$resultphp-php>php$resultObjectNamephp)php)php php{
php php php php php php php php php php php php php$resultphp php=php php$resultphp-php>php$resultObjectNamephp;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_objectphp(php$resultphp)php)php php{
php php php php php php php php php php php php php$resultphp php=php newphp Zendphp_Servicephp_StrikeIronphp_Decoratorphp(php$resultphp,php php$resultObjectNamephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp WSDLphp URLphp forphp thisphp servicephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getWsdlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'wsdlphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp SOAPphp Clientphp instancephp forphp thisphp servicephp.
php php php php php php*php/
php php php php publicphp functionphp getSoapClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'clientphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp StrikeIronphp outputphp headersphp returnedphp withphp thephp lastphp methodphp responsephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getLastOutputHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_outputHeadersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp StrikeIronphp subscriptionphp informationphp forphp thisphp servicephp.
php php php php php php*php Ifphp anyphp servicephp methodphp wasphp recentlyphp calledphp,php thephp subscriptionphp info
php php php php php php*php shouldphp havephp beenphp returnedphp inphp thephp SOAPphp headersphp sophp itphp isphp cached
php php php php php php*php andphp returnedphp fromphp thephp cachephp.php php Otherwisephp,php thephp getRemainingHitsphp(php)
php php php php php php*php methodphp isphp calledphp asphp aphp dummyphp tophp getphp thephp subscriptionphp infophp headersphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php php$nowphp php php php php php php php php php Forcephp aphp callphp tophp getRemainingHitsphp insteadphp ofphp cachephp?
php php php php php php*php php@paramphp php stringphp php php php$queryMethodphp php Methodphp thatphp willphp causephp SubscriptionInfophp headerphp tophp bephp sent
php php php php php php*php php@returnphp Zendphp_Servicephp_StrikeIronphp_Decoratorphp php Decoratedphp subscriptionphp info
php php php php php php*php php@throwsphp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getSubscriptionInfophp(php$nowphp php=php falsephp,php php$queryMethodphp php=php php'GetRemainingHitsphp'php)
php php php php php{
php php php php php php php php ifphp php(php$nowphp php|php|php emptyphp(php$thisphp-php>php_outputHeadersphp[php'SubscriptionInfophp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php$queryMethodphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php capturephp subscriptionphp infophp ifphp returnedphp inphp outputphp headers
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_outputHeadersphp[php'SubscriptionInfophp'php]php)php)php php{
php php php php php php php php php php php php php$infophp php=php php(objectphp)php$thisphp-php>php_outputHeadersphp[php'SubscriptionInfophp'php]php;
php php php php php php php php php php php php php$subscriptionInfophp php=php newphp Zendphp_Servicephp_StrikeIronphp_Decoratorphp(php$infophp,php php'SubscriptionInfophp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$msgphp php=php php'Nophp SubscriptionInfophp headerphp foundphp inphp lastphp outputphp headersphp'php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_StrikeIronphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/StrikeIronphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_StrikeIronphp_Exceptionphp(php$msgphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$subscriptionInfophp;
php php php php php}
php}
