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
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Jsonphp_Serverphp_Smd
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Smdphp.phpphp'php;

php/php*php*
php php*php Createphp Servicephp Mappingphp Descriptionphp forphp aphp method
php php*
php php*php php@packagephp php php php Zendphp_Json
php php*php php@subpackagephp Server
php php*php php@versionphp php php php php$Idphp:php Servicephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php{
php php php php php/php*php*php#php@php+
php php php php php php*php Servicephp metadata
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_envelopephp php php=php Zendphp_Jsonphp_Serverphp_Smdphp:php:ENVphp_JSONRPCphp_php1php;
php php php php protectedphp php$php_namephp;
php php php php protectedphp php$php_returnphp;
php php php php protectedphp php$php_targetphp;
php php php php protectedphp php$php_transportphp php=php php'POSTphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Allowedphp envelopephp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_envelopeTypesphp php=php arrayphp(
php php php php php php php php Zendphp_Jsonphp_Serverphp_Smdphp:php:ENVphp_JSONRPCphp_php1php,
php php php php php php php php Zendphp_Jsonphp_Serverphp_Smdphp:php:ENVphp_JSONRPCphp_php2php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Regexphp forphp names
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_nameRegexphp php=php php'php/php^php[aphp-zphp]php[aphp-zphp0php-php9php.php_php]php+php$php/iphp'php;

php php php php php/php*php*
php php php php php php*php Parameterphp optionphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramOptionTypesphp php=php arrayphp(
php php php php php php php php php'namephp'php php php php php php php php php=php>php php'isphp_stringphp'php,
php php php php php php php php php'optionalphp'php php php php php=php>php php'isphp_boolphp'php,
php php php php php php php php php'defaultphp'php php php php php php=php>php nullphp,
php php php php php php php php php'descriptionphp'php php=php>php php'isphp_stringphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Servicephp params
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Mappingphp ofphp parameterphp typesphp tophp JSONphp-RPCphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramMapphp php=php arrayphp(
php php php php php php php php php'anyphp'php php php php php php=php>php php'anyphp'php,
php php php php php php php php php'arrphp'php php php php php php=php>php php'arrayphp'php,
php php php php php php php php php'arrayphp'php php php php=php>php php'arrayphp'php,
php php php php php php php php php'assocphp'php php php php=php>php php'objectphp'php,
php php php php php php php php php'boolphp'php php php php php=php>php php'booleanphp'php,
php php php php php php php php php'booleanphp'php php=php>php php'booleanphp'php,
php php php php php php php php php'dblphp'php php php php php php=php>php php'floatphp'php,
php php php php php php php php php'doublephp'php php php=php>php php'floatphp'php,
php php php php php php php php php'falsephp'php php php php=php>php php'booleanphp'php,
php php php php php php php php php'floatphp'php php php php=php>php php'floatphp'php,
php php php php php php php php php'hashphp'php php php php php=php>php php'objectphp'php,
php php php php php php php php php'integerphp'php php=php>php php'integerphp'php,
php php php php php php php php php'intphp'php php php php php php=php>php php'integerphp'php,
php php php php php php php php php'mixedphp'php php php php=php>php php'anyphp'php,
php php php php php php php php php'nilphp'php php php php php php=php>php php'nullphp'php,
php php php php php php php php php'nullphp'php php php php php=php>php php'nullphp'php,
php php php php php php php php php'objectphp'php php php=php>php php'objectphp'php,
php php php php php php php php php'stringphp'php php php=php>php php'stringphp'php,
php php php php php php php php php'strphp'php php php php php php=php>php php'stringphp'php,
php php php php php php php php php'structphp'php php php=php>php php'objectphp'php,
php php php php php php php php php'truephp'php php php php php=php>php php'booleanphp'php,
php php php php php php php php php'voidphp'php php php php php=php>php php'nullphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Allowedphp transportphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_transportTypesphp php=php arrayphp(
php php php php php php php php php'POSTphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$spec
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Jsonphp_Serverphp_Exceptionphp ifphp nophp namephp provided
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$specphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$specphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setNamephp(php$specphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$specphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php php$thisphp-php>getNamephp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'SMDphp servicephp descriptionphp requiresphp aphp namephp;php nonephp providedphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp state
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$methodsphp php=php getphp_classphp_methodsphp(php$thisphp)php;
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php'optionsphp'php php=php=php strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$methodphp,php php$methodsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp servicephp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php php@throwsphp Zendphp_Jsonphp_Serverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php php(stringphp)php php$namephp;
php php php php php php php php ifphp php(php!pregphp_matchphp(php$thisphp-php>php_nameRegexphp,php php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(sprintfphp(php'Invalidphp namephp php"php%sphp"php providedphp forphp servicephp;php mustphp followphp PHPphp methodphp namingphp conventionsphp'php,php php$namephp)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_namephp php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Transport
php php php php php php*
php php php php php php*php Currentlyphp limitedphp tophp POST
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$transport
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php/
php php php php publicphp functionphp setTransportphp(php$transportphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$transportphp,php php$thisphp-php>php_transportTypesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(sprintfphp(php'Invalidphp transportphp php"php%sphp"php;php pleasephp selectphp onephp ofphp php(php%sphp)php'php,php php$transportphp,php implodephp(php'php,php php'php,php php$thisphp-php>php_transportTypesphp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_transportphp php=php php$transportphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp transport
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTransportphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_transportphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp servicephp target
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$target
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php/
php php php php publicphp functionphp setTargetphp(php$targetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_targetphp php=php php(stringphp)php php$targetphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp servicephp target
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTargetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_targetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp envelopephp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$envelopeType
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php/
php php php php publicphp functionphp setEnvelopephp(php$envelopeTypephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$envelopeTypephp,php php$thisphp-php>php_envelopeTypesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(sprintfphp(php'Invalidphp envelopephp typephp php"php%sphp"php;php pleasephp specifyphp onephp ofphp php(php%sphp)php'php,php php$envelopeTypephp,php implodephp(php'php,php php'php,php php$thisphp-php>php_envelopeTypesphp)php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_envelopephp php=php php$envelopeTypephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp envelopephp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEnvelopephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_envelopephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp parameterphp tophp thephp service
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$type
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@paramphp php intphp|nullphp php$order
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php/
php php php php publicphp functionphp addParamphp(php$typephp,php arrayphp php$optionsphp php=php arrayphp(php)php,php php$orderphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$typephp)php)php php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_validateParamTypephp(php$typephp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$typephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$typephp asphp php$keyphp php=php>php php$paramTypephp)php php{
php php php php php php php php php php php php php php php php php$typephp[php$keyphp]php php=php php$thisphp-php>php_validateParamTypephp(php$paramTypephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'Invalidphp paramphp typephp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$paramOptionsphp php=php arrayphp(
php php php php php php php php php php php php php'typephp'php php=php>php php$typephp,
php php php php php php php php php)php;
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$keyphp,php arrayphp_keysphp(php$thisphp-php>php_paramOptionTypesphp)php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$callbackphp php=php php$thisphp-php>php_paramOptionTypesphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$callbackphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$paramOptionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_paramsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php'paramphp'php php=php>php php$paramOptionsphp,
php php php php php php php php php php php php php'orderphp'php php=php>php php$orderphp,
php php php php php php php php php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp params
php php php php php php*
php php php php php php*php Eachphp paramphp shouldphp bephp anphp arrayphp,php andphp shouldphp includephp thephp keyphp php'typephp'php.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php/
php php php php publicphp functionphp addParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php ksortphp(php$paramsphp)php;
php php php php php php php php foreachphp php(php$paramsphp asphp php$optionsphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'typephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$typephp php php=php php$optionsphp[php'typephp'php]php;
php php php php php php php php php php php php php$orderphp php=php php(arrayphp_keyphp_existsphp(php'orderphp'php,php php$optionsphp)php)php php?php php$optionsphp[php'orderphp'php]php php:php nullphp;
php php php php php php php php php php php php php$thisphp-php>addParamphp(php$typephp,php php$optionsphp,php php$orderphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp allphp parameters
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addParamsphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp parameters
php php php php php php*
php php php php php php*php Returnsphp allphp paramsphp inphp specifiedphp orderphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$indexphp php php=php php0php;
php php php php php php php php foreachphp php(php$thisphp-php>php_paramsphp asphp php$paramphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$paramphp[php'orderphp'php]php)php php{
php php php php php php php php php php php php php php php php ifphp php(arrayphp_searchphp(php$indexphp,php arrayphp_keysphp(php$paramsphp)php,php truephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php+php+php$indexphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$paramsphp[php$indexphp]php php=php php$paramphp[php'paramphp'php]php;
php php php php php php php php php php php php php php php php php+php+php$indexphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$paramsphp[php$paramphp[php'orderphp'php]php]php php=php php$paramphp[php'paramphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ksortphp(php$paramsphp)php;
php php php php php php php php returnphp php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp returnphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$type
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp_Service
php php php php php php*php/
php php php php publicphp functionphp setReturnphp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$typephp)php)php php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_validateParamTypephp(php$typephp,php truephp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$typephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$typephp asphp php$keyphp php=php>php php$returnTypephp)php php{
php php php php php php php php php php php php php php php php php$typephp[php$keyphp]php php=php php$thisphp-php>php_validateParamTypephp(php$returnTypephp,php truephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'Invalidphp paramphp typephp providedphp php(php"php'php php.php gettypephp(php$typephp)php php.php'php"php)php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_returnphp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp returnphp type
php php php php php php*
php php php php php php*php php@returnphp stringphp|array
php php php php php php*php/
php php php php publicphp functionphp getReturnphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp servicephp descriptionphp tophp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php$namephp php php php php php php php=php php$thisphp-php>getNamephp(php)php;
php php php php php php php php php$envelopephp php php php=php php$thisphp-php>getEnvelopephp(php)php;
php php php php php php php php php$targetphp php php php php php=php php$thisphp-php>getTargetphp(php)php;
php php php php php php php php php$transportphp php php=php php$thisphp-php>getTransportphp(php)php;
php php php php php php php php php$parametersphp php=php php$thisphp-php>getParamsphp(php)php;
php php php php php php php php php$returnsphp php php php php=php php$thisphp-php>getReturnphp(php)php;

php php php php php php php php ifphp php(emptyphp(php$targetphp)php)php php{
php php php php php php php php php php php php returnphp compactphp(php'envelopephp'php,php php'transportphp'php,php php'parametersphp'php,php php'returnsphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$paramInfophp php=php compactphp(php'envelopephp'php,php php'targetphp'php,php php'transportphp'php,php php'parametersphp'php,php php'returnsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp JSONphp encodingphp ofphp service
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toJsonphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php arrayphp(php$thisphp-php>getNamephp(php)php php=php>php php$thisphp-php>toArrayphp(php)php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Jsonphp:php:encodephp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toJsonphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp parameterphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp true
php php php php php php*php php@throwsphp Zendphp_Jsonphp_Serverphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateParamTypephp(php$typephp,php php$isReturnphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$typephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'Invalidphp paramphp typephp providedphp php(php"php'php php.php php$typephp php.php'php"php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$typephp,php php$thisphp-php>php_paramMapphp)php)php php{
php php php php php php php php php php php php php$typephp php=php php'objectphp'php;
php php php php php php php php php}

php php php php php php php php php$paramTypephp php=php php$thisphp-php>php_paramMapphp[php$typephp]php;
php php php php php php php php ifphp php(php!php$isReturnphp php&php&php php(php'nullphp'php php=php=php php$paramTypephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Jsonphp_Serverphp_Exceptionphp(php'Invalidphp paramphp typephp providedphp php(php"php'php php.php php$typephp php.php php'php"php)php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$paramTypephp;
php php php php php}
php}
