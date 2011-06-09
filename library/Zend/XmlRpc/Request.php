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
php php*php/

php/php*php*
php php*php Zendphp_XmlRpcphp_Value
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp.phpphp'php;

php/php*php*
php php*php Zendphp_XmlRpcphp_Fault
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Faultphp.phpphp'php;

php/php*php*
php php*php XmlRpcphp Requestphp object
php php*
php php*php Encapsulatesphp anphp XmlRpcphp requestphp,php holdingphp thephp methodphp callphp andphp allphp parametersphp.
php php*php Providesphp accessorsphp forphp thesephp,php asphp wellphp asphp thephp abilityphp tophp loadphp fromphp XMLphp andphp to
php php*php createphp thephp XMLphp requestphp stringphp.
php php*
php php*php Additionallyphp,php ifphp errorsphp occurphp settingphp thephp methodphp orphp parsingphp XMLphp,php aphp faultphp is
php php*php generatedphp andphp storedphp inphp php{php@linkphp php$php_faultphp}php;php developersphp mayphp checkphp forphp itphp using
php php*php php{php@linkphp isFaultphp(php)php}php andphp php{php@linkphp getFaultphp(php)php}php.
php php*
php php*php php@categoryphp Zend
php php*php php@packagephp php Zendphp_XmlRpc
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php$Idphp:php Requestphp.phpphp php2php0php2php0php8php php2php0php1php0php-php0php1php-php1php1php php2php2php:php3php7php:php3php7Zphp larsphp php$
php php*php/
classphp Zendphp_XmlRpcphp_Request
php{
php php php php php/php*php*
php php php php php php*php Requestphp characterphp encoding
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Methodphp tophp call
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_methodphp;

php php php php php/php*php*
php php php php php php*php XMLphp request
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_xmlphp;

php php php php php/php*php*
php php php php php php*php Methodphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Faultphp objectphp,php ifphp any
php php php php php php*php php@varphp Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php protectedphp php$php_faultphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php XMLphp-RPCphp typephp forphp eachphp param
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_typesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php XMLphp-RPCphp requestphp params
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_xmlRpcParamsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp XMLphp-RPCphp request
php php php php php php*
php php php php php php*php php@paramphp stringphp php$methodphp php(optionalphp)
php php php php php php*php php@paramphp arrayphp php$paramsphp php php(optionalphp)
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$methodphp php=php nullphp,php php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$methodphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setMethodphp(php$methodphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$paramsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setParamsphp(php$paramsphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp encodingphp tophp usephp inphp request
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Request
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:setEncodingphp(php$encodingphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp requestphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp methodphp tophp call
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@returnphp booleanphp Returnsphp truephp onphp successphp,php falsephp ifphp methodphp namephp isphp invalid
php php php php php php*php/
php php php php publicphp functionphp setMethodphp(php$methodphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$methodphp)php php|php|php php!pregphp_matchphp(php'php/php^php[aphp-zphp0php-php9php_php.php:php\php/php]php+php$php/iphp'php,php php$methodphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php3php4php,php php'Invalidphp methodphp namephp php(php"php'php php.php php$methodphp php.php php'php"php)php'php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_methodphp php=php php$methodphp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp callphp method
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMethodphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_methodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp parameterphp tophp thephp parameterphp stack
php php php php php php*
php php php php php php*php Addsphp aphp parameterphp tophp thephp parameterphp stackphp,php associatingphp itphp withphp thephp type
php php php php php php*php php$typephp ifphp provided
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@paramphp stringphp php$typephp Optionalphp;php typephp hinting
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addParamphp(php$valuephp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp[php]php php=php php$valuephp;
php php php php php php php php ifphp php(nullphp php=php=php=php php$typephp)php php{
php php php php php php php php php php php php php/php/php Detectphp typephp ifphp notphp providedphp explicitly
php php php php php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_XmlRpcphp_Valuephp)php php{
php php php php php php php php php php php php php php php php php$typephp php=php php$valuephp-php>getTypephp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$xmlRpcValuephp php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php$typephp php php php php php php php php=php php$xmlRpcValuephp-php>getTypephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_typesphp[php]php php php=php php$typephp;
php php php php php php php php php$thisphp-php>php_xmlRpcParamsphp[php]php php=php arrayphp(php'valuephp'php php=php>php php$valuephp,php php'typephp'php php=php>php php$typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp parametersphp array
php php php php php php*
php php php php php php*php Ifphp calledphp withphp aphp singlephp,php arrayphp valuephp,php thatphp arrayphp isphp usedphp tophp setphp the
php php php php php php*php parametersphp stackphp.php Ifphp calledphp withphp multiplephp valuesphp orphp aphp singlephp nonphp-array
php php php php php php*php valuephp,php thephp argumentsphp arephp usedphp tophp setphp thephp parametersphp stackphp.
php php php php php php*
php php php php php php*php Bestphp isphp tophp callphp withphp arrayphp ofphp thephp formatphp,php inphp orderphp tophp allowphp typephp hinting
php php php php php php*php whenphp creatingphp thephp XMLRPCphp valuesphp forphp eachphp parameterphp:
php php php php php php*php php<codephp>
php php php php php php*php php$arrayphp php=php arrayphp(
php php php php php php*php php php php php arrayphp(
php php php php php php*php php php php php php php php php php'valuephp'php php=php>php php$valuephp,
php php php php php php*php php php php php php php php php php'typephp'php php php=php>php php$type
php php php php php php*php php php php php php)php[php,php php.php.php.php php]
php php php php php php*php php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(php)
php php php php php{
php php php php php php php php php$argcphp php=php funcphp_numphp_argsphp(php)php;
php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php ifphp php(php0php php=php=php php$argcphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php1php php=php=php php$argcphp)php php&php&php isphp_arrayphp(php$argvphp[php0php]php)php)php php{
php php php php php php php php php php php php php$paramsphp php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$typesphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$wellFormedphp php=php truephp;
php php php php php php php php php php php php foreachphp php(php$argvphp[php0php]php asphp php$argphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$argphp)php php|php|php php!issetphp(php$argphp[php'valuephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$wellFormedphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$paramsphp[php]php php=php php$argphp[php'valuephp'php]php;

php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$argphp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$xmlRpcValuephp php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$argphp[php'valuephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php$argphp[php'typephp'php]php php=php php$xmlRpcValuephp-php>getTypephp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$typesphp[php]php php=php php$argphp[php'typephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$wellFormedphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_xmlRpcParamsphp php=php php$argvphp[php0php]php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_paramsphp php=php php$paramsphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_typesphp php php=php php$typesphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_paramsphp php=php php$argvphp[php0php]php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_typesphp php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$xmlRpcParamsphp php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$argvphp[php0php]php asphp php$argphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$argphp instanceofphp Zendphp_XmlRpcphp_Valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php php$argphp-php>getTypephp(php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$xmlRpcValuephp php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$argphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php php php php php php php php=php php$xmlRpcValuephp-php>getTypephp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$xmlRpcParamsphp[php]php php=php arrayphp(php'valuephp'php php=php>php php$argphp,php php'typephp'php php=php>php php$typephp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_typesphp[php]php php=php php$typephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_xmlRpcParamsphp php=php php$xmlRpcParamsphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_paramsphp php=php php$argvphp;
php php php php php php php php php$thisphp-php>php_typesphp php php=php arrayphp(php)php;
php php php php php php php php php$xmlRpcParamsphp php php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$argvphp asphp php$argphp)php php{
php php php php php php php php php php php php ifphp php(php$argphp instanceofphp Zendphp_XmlRpcphp_Valuephp)php php{
php php php php php php php php php php php php php php php php php$typephp php=php php$argphp-php>getTypephp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$xmlRpcValuephp php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$argphp)php;
php php php php php php php php php php php php php php php php php$typephp php php php php php php php php=php php$xmlRpcValuephp-php>getTypephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$xmlRpcParamsphp[php]php php=php arrayphp(php'valuephp'php php=php>php php$argphp,php php'typephp'php php=php>php php$typephp)php;
php php php php php php php php php php php php php$thisphp-php>php_typesphp[php]php php=php php$typephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_xmlRpcParamsphp php=php php$xmlRpcParamsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp arrayphp ofphp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp parameterphp types
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getTypesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp XMLphp andphp parsephp intophp requestphp components
php php php php php php*
php php php php php php*php php@paramphp stringphp php$request
php php php php php php*php php@returnphp booleanphp Truephp onphp successphp,php falsephp ifphp anphp errorphp occurredphp.
php php php php php php*php/
php php php php publicphp functionphp loadXmlphp(php$requestphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$requestphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php3php5php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$xmlphp php=php newphp SimpleXMLElementphp(php$requestphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php Notphp validphp XML
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php3php1php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp methodphp name
php php php php php php php php ifphp php(emptyphp(php$xmlphp-php>methodNamephp)php)php php{
php php php php php php php php php php php php php/php/php Missingphp methodphp name
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php3php2php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_methodphp php=php php(stringphp)php php$xmlphp-php>methodNamephp;

php php php php php php php php php/php/php Checkphp forphp parameters
php php php php php php php php ifphp php(php!emptyphp(php$xmlphp-php>paramsphp)php)php php{
php php php php php php php php php php php php php$typesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$argvphp php php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$xmlphp-php>paramsphp-php>childrenphp(php)php asphp php$paramphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$paramphp-php>valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php3php3php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$paramphp php php php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$paramphp-php>valuephp,php Zendphp_XmlRpcphp_Valuephp:php:XMLphp_STRINGphp)php;
php php php php php php php php php php php php php php php php php php php php php$typesphp[php]php php=php php$paramphp-php>getTypephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$argvphp[php]php php php=php php$paramphp-php>getValuephp(php)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php3php6php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_typesphp php php=php php$typesphp;
php php php php php php php php php php php php php$thisphp-php>php_paramsphp php=php php$argvphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_xmlphp php=php php$requestphp;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp currentphp requestphp containphp errorsphp andphp shouldphp itphp returnphp aphp fault
php php php php php php*php responsephp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isFaultphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_faultphp instanceofphp Zendphp_XmlRpcphp_Faultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp faultphp responsephp,php ifphp any
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php publicphp functionphp getFaultphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_faultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp methodphp parametersphp asphp XMLRPCphp values
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getXmlRpcParamsphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_xmlRpcParamsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_xmlRpcParamsphp asphp php$paramphp)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php php$paramphp[php'valuephp'php]php;
php php php php php php php php php php php php php php php php php$typephp php php=php issetphp(php$paramphp[php'typephp'php]php)php php?php php$paramphp[php'typephp'php]php php:php Zendphp_XmlRpcphp_Valuephp:php:AUTOphp_DETECTphp_TYPEphp;

php php php php php php php php php php php php php php php php ifphp php(php!php$valuephp instanceofphp Zendphp_XmlRpcphp_Valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$valuephp,php php$typephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$paramsphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp XMLphp request
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php php$argsphp php php php=php php$thisphp-php>php_getXmlRpcParamsphp(php)php;
php php php php php php php php php$methodphp php=php php$thisphp-php>getMethodphp(php)php;

php php php php php php php php php$generatorphp php=php Zendphp_XmlRpcphp_Valuephp:php:getGeneratorphp(php)php;
php php php php php php php php php$generatorphp-php>openElementphp(php'methodCallphp'php)
php php php php php php php php php php php php php php php php php php php-php>openElementphp(php'methodNamephp'php,php php$methodphp)
php php php php php php php php php php php php php php php php php php php-php>closeElementphp(php'methodNamephp'php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$argsphp)php php&php&php countphp(php$argsphp)php)php php{
php php php php php php php php php php php php php$generatorphp-php>openElementphp(php'paramsphp'php)php;

php php php php php php php php php php php php foreachphp php(php$argsphp asphp php$argphp)php php{
php php php php php php php php php php php php php php php php php$generatorphp-php>openElementphp(php'paramphp'php)php;
php php php php php php php php php php php php php php php php php$argphp-php>generateXmlphp(php)php;
php php php php php php php php php php php php php php php php php$generatorphp-php>closeElementphp(php'paramphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$generatorphp-php>closeElementphp(php'paramsphp'php)php;
php php php php php php php php php}
php php php php php php php php php$generatorphp-php>closeElementphp(php'methodCallphp'php)php;

php php php php php php php php returnphp php$generatorphp-php>flushphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp XMLphp request
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>saveXMLphp(php)php;
php php php php php}
php}
