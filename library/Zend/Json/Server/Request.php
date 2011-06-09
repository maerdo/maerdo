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
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Requestphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Serverphp_Request
php{
php php php php php/php*php*
php php php php php php*php Requestphp ID
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_idphp;

php php php php php/php*php*
php php php php php php*php Flag
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isMethodErrorphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Requestedphp method
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_methodphp;

php php php php php/php*php*
php php php php php php*php Regexphp forphp method
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_methodRegexphp php=php php'php/php^php[aphp-zphp]php[aphp-zphp0php-php9php_php.php]php*php$php/iphp'php;

php php php php php/php*php*
php php php php php php*php Requestphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php JSONphp-RPCphp versionphp ofphp request
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_versionphp php=php php'php1php.php0php'php;

php php php php php/php*php*
php php php php php php*php Setphp requestphp state
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$methodsphp php=php getphp_classphp_methodsphp(php$thisphp)php;
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$methodphp,php php$methodsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}php elseifphp php(php$keyphp php=php=php php'jsonrpcphp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setVersionphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp parameterphp tophp thephp request
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php publicphp functionphp addParamphp(php$valuephp,php php$keyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$keyphp)php php|php|php php!isphp_stringphp(php$keyphp)php)php php{
php php php php php php php php php php php php php$indexphp php=php countphp(php$thisphp-php>php_paramsphp)php;
php php php php php php php php php php php php php$thisphp-php>php_paramsphp[php$indexphp]php php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_paramsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp manyphp params
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php publicphp functionphp addParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php foreachphp php(php$paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>addParamphp(php$valuephp,php php$keyphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp params
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addParamsphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp paramphp byphp indexphp orphp key
php php php php php php*
php php php php php php*php php@paramphp php intphp|stringphp php$index
php php php php php php*php php@returnphp mixedphp|nullphp Nullphp whenphp notphp found
php php php php php php*php/
php php php php publicphp functionphp getParamphp(php$indexphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$indexphp,php php$thisphp-php>php_paramsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$indexphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp method
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php publicphp functionphp setMethodphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php$thisphp-php>php_methodRegexphp,php php$namephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_isMethodErrorphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_methodphp php=php php$namephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp requestphp methodphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMethodphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_methodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wasphp aphp badphp methodphp providedphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isMethodErrorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_isMethodErrorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp identifier
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$name
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php publicphp functionphp setIdphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_idphp php=php php(stringphp)php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp requestphp identifier
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_idphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp JSONphp-RPCphp version
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$version
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Request
php php php php php php*php/
php php php php publicphp functionphp setVersionphp(php$versionphp)
php php php php php{
php php php php php php php php ifphp php(php'php2php.php0php'php php=php=php php$versionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_versionphp php=php php'php2php.php0php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_versionphp php=php php'php1php.php0php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp JSONphp-RPCphp version
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getVersionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_versionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp statephp basedphp onphp JSON
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$json
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp loadJsonphp(php$jsonphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php php$optionsphp php=php Zendphp_Jsonphp:php:decodephp(php$jsonphp)php;
php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp requestphp tophp JSON
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toJsonphp(php)
php php php php php{
php php php php php php php php php$jsonArrayphp php=php arrayphp(
php php php php php php php php php php php php php'methodphp'php php=php>php php$thisphp-php>getMethodphp(php)
php php php php php php php php php)php;
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$idphp php=php php$thisphp-php>getIdphp(php)php)php)php php{
php php php php php php php php php php php php php$jsonArrayphp[php'idphp'php]php php=php php$idphp;
php php php php php php php php php}
php php php php php php php php php$paramsphp php=php php$thisphp-php>getParamsphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php$jsonArrayphp[php'paramsphp'php]php php=php php$paramsphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php'php2php.php0php'php php=php=php php$thisphp-php>getVersionphp(php)php)php php{
php php php php php php php php php php php php php$jsonArrayphp[php'jsonrpcphp'php]php php=php php'php2php.php0php'php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Jsonphp:php:encodephp(php$jsonArrayphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp requestphp tophp stringphp php(JSONphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toJsonphp(php)php;
php php php php php}
php}
