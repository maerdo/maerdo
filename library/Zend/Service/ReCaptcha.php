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
php php*php php@subpackagephp ReCaptcha
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php php@seephp Zendphp_Servicephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Servicephp/Abstractphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Jsonphp php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_Responsephp php*php/
requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/Responsephp.phpphp'php;

php/php*php*
php php*php Zendphp_Servicephp_ReCaptcha
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp ReCaptcha
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ReCaptchaphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Servicephp_ReCaptchaphp extendsphp Zendphp_Servicephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php URIphp tophp thephp regularphp API
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp APIphp_SERVERphp php=php php'httpphp:php/php/apiphp.recaptchaphp.netphp'php;

php php php php php/php*php*
php php php php php php*php URIphp tophp thephp securephp API
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp APIphp_SECUREphp_SERVERphp php=php php'httpsphp:php/php/apiphp-securephp.recaptchaphp.netphp'php;

php php php php php/php*php*
php php php php php php*php URIphp tophp thephp verifyphp server
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp VERIFYphp_SERVERphp php=php php'httpphp:php/php/apiphp-verifyphp.recaptchaphp.netphp/verifyphp'php;

php php php php php/php*php*
php php php php php php*php Publicphp keyphp usedphp whenphp displayingphp thephp captcha
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_publicKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Privatephp keyphp usedphp whenphp verifyingphp userphp input
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_privateKeyphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Ipphp addressphp usedphp whenphp verifyingphp userphp input
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_ipphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Parametersphp forphp thephp object
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(
php php php php php php php php php'sslphp'php php=php>php falsephp,php php/php*php Usephp SSLphp orphp notphp whenphp generatingphp thephp recaptchaphp php*php/
php php php php php php php php php'errorphp'php php=php>php nullphp,php php/php*php Thephp errorphp messagephp tophp displayphp inphp thephp recaptchaphp php*php/
php php php php php php php php php'xhtmlphp'php php=php>php falsephp php/php*php Enablephp XHTMLphp outputphp php(thisphp willphp notphp bephp XHTMLphp Strict
php php php php php php php php php php php php php php php php php php php php php php php php php php php php compliantphp sincephp thephp IFRAMEphp isphp necessaryphp when
php php php php php php php php php php php php php php php php php php php php php php php php php php php php Javascriptphp isphp disabledphp)php php*php/
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Optionsphp forphp tailoringphp reCaptcha
php php php php php php*
php php php php php php*php Seephp thephp differentphp optionsphp onphp httpphp:php/php/recaptchaphp.netphp/apidocsphp/captchaphp/clientphp.html
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'themephp'php php=php>php php'redphp'php,
php php php php php php php php php'langphp'php php=php>php php'enphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Responsephp fromphp thephp verifyphp server
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_ReCaptchaphp_Response
php php php php php php*php/
php php php php protectedphp php$php_responsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$publicKey
php php php php php php*php php@paramphp stringphp php$privateKey
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@paramphp stringphp php$ip
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$params
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$publicKeyphp php=php nullphp,php php$privateKeyphp php=php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp php=php nullphp,php php$optionsphp php=php nullphp,php php$ipphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$publicKeyphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setPublicKeyphp(php$publicKeyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$privateKeyphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setPrivateKeyphp(php$privateKeyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$ipphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setIpphp(php$ipphp)php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$php_SERVERphp[php'REMOTEphp_ADDRphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setIpphp(php$php_SERVERphp[php'REMOTEphp_ADDRphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$paramsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setParamsphp(php$paramsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$optionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp asphp string
php php php php php php*
php php php php php php*php Whenphp thephp instancephp isphp usedphp asphp aphp stringphp itphp willphp displayphp thephp recaptchaphp.
php php php php php php*php Sincephp wephp canphp'tphp throwphp exceptionsphp withinphp thisphp methodphp wephp willphp trigger
php php php php php php*php aphp userphp warningphp insteadphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>getHtmlphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$returnphp php=php php'php'php;
php php php php php php php php php php php php triggerphp_errorphp(php$ephp-php>getMessagephp(php)php,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp ipphp property
php php php php php php*
php php php php php php*php php@paramphp stringphp php$ip
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setIpphp(php$ipphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_ipphp php=php php$ipphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp ipphp property
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIpphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_ipphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp singlephp parameter
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setParamphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp[php$keyphp]php php=php php$valuephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp parameters
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$params
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptcha
php php php php php php*php php@throwsphp Zendphp_Servicephp_ReCaptchaphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(php$paramsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$paramsphp php=php php$paramsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setParamphp(php$kphp,php php$vphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Expectedphp arrayphp orphp Zendphp_Configphp objectphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp parameterphp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp singlephp parameter
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getParamphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$keyphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp singlephp option
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php$keyphp]php php=php php$valuephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp options
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptcha
php php php php php php*php php@throwsphp Zendphp_Servicephp_ReCaptchaphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$optionsphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$kphp,php php$vphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Expectedphp arrayphp orphp Zendphp_Configphp objectphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp optionsphp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp singlephp option
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php$keyphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp publicphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPublicKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_publicKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp publicphp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$publicKey
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setPublicKeyphp(php$publicKeyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_publicKeyphp php=php php$publicKeyphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp privatephp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPrivateKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_privateKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp privatephp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$privateKey
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setPrivateKeyphp(php$privateKeyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_privateKeyphp php=php php$privateKeyphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp HTMLphp codephp forphp thephp captcha
php php php php php php*
php php php php php php*php Thisphp methodphp usesphp thephp publicphp keyphp tophp fetchphp aphp recaptchaphp formphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Servicephp_ReCaptchaphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHtmlphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_publicKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp(php'Missingphp publicphp keyphp'php)php;
php php php php php php php php php}

php php php php php php php php php$hostphp php=php selfphp:php:APIphp_SERVERphp;

php php php php php php php php ifphp php(php(boolphp)php php$thisphp-php>php_paramsphp[php'sslphp'php]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php$hostphp php=php selfphp:php:APIphp_SECUREphp_SERVERphp;
php php php php php php php php php}

php php php php php php php php php$htmlBreakphp php=php php'php<brphp>php'php;
php php php php php php php php php$htmlInputClosingphp php=php php'php>php'php;

php php php php php php php php ifphp php(php(boolphp)php php$thisphp-php>php_paramsphp[php'xhtmlphp'php]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php$htmlBreakphp php=php php'php<brphp php/php>php'php;
php php php php php php php php php php php php php$htmlInputClosingphp php=php php'php/php>php'php;
php php php php php php php php php}

php php php php php php php php php$errorPartphp php=php php'php'php;

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_paramsphp[php'errorphp'php]php)php)php php{
php php php php php php php php php php php php php$errorPartphp php=php php'php&errorphp=php'php php.php urlencodephp(php$thisphp-php>php_paramsphp[php'errorphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$reCaptchaOptionsphp php=php php'php'php;

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php php$encodedphp php=php Zendphp_Jsonphp:php:encodephp(php$thisphp-php>php_optionsphp)php;
php php php php php php php php php php php php php$reCaptchaOptionsphp php=php <php<php<SCRIPT
php<scriptphp typephp=php"textphp/javascriptphp"php>
php php php php varphp RecaptchaOptionsphp php=php php{php$encodedphp}php;
<php/scriptphp>
SCRIPTphp;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php php$reCaptchaOptionsphp;
php php php php php php php php php$returnphp php.php=php <php<php<HTML
php<scriptphp typephp=php"textphp/javascriptphp"
php php php srcphp=php"php{php$hostphp}php/challengephp?kphp=php{php$thisphp-php>php_publicKeyphp}php{php$errorPartphp}php"php>
<php/scriptphp>
HTMLphp;
php php php php php php php php php$returnphp php.php=php <php<php<HTML
php<noscriptphp>
php php php php<iframephp srcphp=php"php{php$hostphp}php/noscriptphp?kphp=php{php$thisphp-php>php_publicKeyphp}php{php$errorPartphp}php"
php php php php php php php heightphp=php"php3php0php0php"php widthphp=php"php5php0php0php"php frameborderphp=php"php0php"php><php/iframephp>php{php$htmlBreakphp}
php php php php<textareaphp namephp=php"recaptchaphp_challengephp_fieldphp"php rowsphp=php"php3php"php colsphp=php"php4php0php"php>
php php php <php/textareaphp>
php php php php<inputphp typephp=php"hiddenphp"php namephp=php"recaptchaphp_responsephp_fieldphp"
php php php php php php php valuephp=php"manualphp_challengephp"php{php$htmlInputClosingphp}
<php/noscriptphp>
HTMLphp;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Postphp aphp solutionphp tophp thephp verifyphp server
php php php php php php*
php php php php php php*php php@paramphp stringphp php$challengeField
php php php php php php*php php@paramphp stringphp php$responseField
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php php@throwsphp Zendphp_Servicephp_ReCaptchaphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_postphp(php$challengeFieldphp,php php$responseFieldphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_privateKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp(php'Missingphp privatephp keyphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_ipphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp(php'Missingphp ipphp addressphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$challengeFieldphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp(php'Missingphp challengephp fieldphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$responseFieldphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp/Exceptionphp.phpphp'php;

php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_ReCaptchaphp_Exceptionphp(php'Missingphp responsephp fieldphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php Fetchphp anphp instancephp ofphp thephp httpphp clientphp php*php/
php php php php php php php php php$httpClientphp php=php selfphp:php:getHttpClientphp(php)php;

php php php php php php php php php$postParamsphp php=php arrayphp(php'privatekeyphp'php php=php>php php$thisphp-php>php_privateKeyphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'remoteipphp'php php php php=php>php php$thisphp-php>php_ipphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'challengephp'php php php=php>php php$challengeFieldphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'responsephp'php php php php=php>php php$responseFieldphp)php;

php php php php php php php php php/php*php Makephp thephp POSTphp andphp returnphp thephp responsephp php*php/
php php php php php php php php returnphp php$httpClientphp-php>setUriphp(selfphp:php:VERIFYphp_SERVERphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php-php>setParameterPostphp(php$postParamsphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php-php>requestphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifyphp thephp userphp input
php php php php php php*
php php php php php php*php Thisphp methodphp callsphp upphp thephp postphp methodphp andphp returnsphp a
php php php php php php*php Zendphp_Servicephp_ReCaptchaphp_Responsephp objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$challengeField
php php php php php php*php php@paramphp stringphp php$responseField
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptchaphp_Response
php php php php php php*php/
php php php php publicphp functionphp verifyphp(php$challengeFieldphp,php php$responseFieldphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_postphp(php$challengeFieldphp,php php$responseFieldphp)php;

php php php php php php php php returnphp newphp Zendphp_Servicephp_ReCaptchaphp_Responsephp(nullphp,php nullphp,php php$responsephp)php;
php php php php php}
php}
