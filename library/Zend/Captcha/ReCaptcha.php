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
php php*php php@packagephp php php php Zendphp_Captcha
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php php@seephp Zendphp_Captchaphp_Basephp php*php/
requirephp_oncephp php'Zendphp/Captchaphp/Basephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Servicephp_ReCaptchaphp php*php/
requirephp_oncephp php'Zendphp/Servicephp/ReCaptchaphp.phpphp'php;

php/php*php*
php php*php ReCaptchaphp adapter
php php*
php php*php Allowsphp tophp insertphp captchasphp drivenphp byphp ReCaptchaphp service
php php*
php php*php php@seephp httpphp:php/php/recaptchaphp.netphp/apidocsphp/captchaphp/
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Captcha
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ReCaptchaphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Captchaphp_ReCaptchaphp extendsphp Zendphp_Captchaphp_Base
php{
php php php php php/php*php*php@php+
php php php php php php*php ReCaptchaphp Fieldphp names
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_CHALLENGEphp php=php php'recaptchaphp_challengephp_fieldphp'php;
php php php php protectedphp php$php_RESPONSEphp php php=php php'recaptchaphp_responsephp_fieldphp'php;
php php php php php/php*php*php@php-php*php/

php php php php php/php*php*
php php php php php php*php Recaptchaphp servicephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_Recaptcha
php php php php php php*php/
php php php php protectedphp php$php_servicephp;

php php php php php/php*php*
php php php php php php*php Parametersphp definedphp byphp thephp service
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_serviceParamsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Optionsphp definedphp byphp thephp service
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_serviceOptionsphp php=php arrayphp(php)php;

php php php php php/php*php*php#php@php+
php php php php php php*php Errorphp codes
php php php php php php*php/
php php php php constphp MISSINGphp_VALUEphp php=php php'missingValuephp'php;
php php php php constphp ERRphp_CAPTCHAphp php php php=php php'errCaptchaphp'php;
php php php php constphp BADphp_CAPTCHAphp php php php=php php'badCaptchaphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Errorphp messages
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:MISSINGphp_VALUEphp php=php>php php'Missingphp captchaphp fieldsphp'php,
php php php php php php php php selfphp:php:ERRphp_CAPTCHAphp php php php=php>php php'Failedphp tophp validatephp captchaphp'php,
php php php php php php php php selfphp:php:BADphp_CAPTCHAphp php php php=php>php php'Captchaphp valuephp isphp wrongphp:php php%valuephp%php'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Retrievephp ReCaptchaphp Privatephp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPrivkeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getServicephp(php)php-php>getPrivateKeyphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp ReCaptchaphp Publicphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPubkeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getServicephp(php)php-php>getPublicKeyphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp ReCaptchaphp Privatephp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$privkey
php php php php php php*php php@returnphp Zendphp_Captchaphp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setPrivkeyphp(php$privkeyphp)
php php php php php{
php php php php php php php php php$thisphp-php>getServicephp(php)php-php>setPrivateKeyphp(php$privkeyphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp ReCaptchaphp publicphp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$pubkey
php php php php php php*php php@returnphp Zendphp_Captchaphp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setPubkeyphp(php$pubkeyphp)
php php php php php{
php php php php php php php php php$thisphp-php>getServicephp(php)php-php>setPublicKeyphp(php$pubkeyphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setServicephp(newphp Zendphp_Servicephp_ReCaptchaphp(php)php)php;
php php php php php php php php php$thisphp-php>php_serviceParamsphp php=php php$thisphp-php>getServicephp(php)php-php>getParamsphp(php)php;
php php php php php php php php php$thisphp-php>php_serviceOptionsphp php=php php$thisphp-php>getServicephp(php)php-php>getOptionsphp(php)php;

php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;

php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp servicephp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Servicephp_ReCaptchaphp php$service
php php php php php php*php php@returnphp Zendphp_Captchaphp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setServicephp(Zendphp_Servicephp_ReCaptchaphp php$servicephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_servicephp php=php php$servicephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp ReCaptchaphp servicephp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp getServicephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_servicephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp option
php php php php php php*
php php php php php php*php Ifphp optionphp isphp aphp servicephp parameterphp,php proxiesphp tophp thephp servicephp.php Thephp same
php php php php php php*php goesphp forphp anyphp servicephp optionsphp php(distinctphp fromphp servicephp paramsphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Captchaphp_ReCaptcha
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$servicephp php=php php$thisphp-php>getServicephp(php)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_serviceParamsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php$servicephp-php>setParamphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_serviceOptionsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php$servicephp-php>setOptionphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:setOptionphp(php$keyphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp captcha
php php php php php php*
php php php php php php*php php@seephp Zendphp_Formphp_Captchaphp_Adapterphp:php:generatephp(php)
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generatephp(php)
php php php php php{
php php php php php php php php returnphp php"php"php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp captcha
php php php php php php*
php php php php php php*php php@seephp php php php Zendphp_Validatephp_Interfacephp:php:isValidphp(php)
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$contextphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php php&php&php php!isphp_arrayphp(php$contextphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:MISSINGphp_VALUEphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php php&php&php isphp_arrayphp(php$contextphp)php)php php{
php php php php php php php php php php php php php$valuephp php=php php$contextphp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$valuephp[php$thisphp-php>php_CHALLENGEphp]php)php php|php|php emptyphp(php$valuephp[php$thisphp-php>php_RESPONSEphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:MISSINGphp_VALUEphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$servicephp php=php php$thisphp-php>getServicephp(php)php;

php php php php php php php php php$resphp php=php php$servicephp-php>verifyphp(php$valuephp[php$thisphp-php>php_CHALLENGEphp]php,php php$valuephp[php$thisphp-php>php_RESPONSEphp]php)php;

php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:ERRphp_CAPTCHAphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$resphp-php>isValidphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:BADphp_CAPTCHAphp,php php$resphp-php>getErrorCodephp(php)php)php;
php php php php php php php php php php php php php$servicephp-php>setParamphp(php'errorphp'php,php php$resphp-php>getErrorCodephp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp captcha
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@paramphp php mixedphp php$element
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp,php php$elementphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getServicephp(php)php-php>getHTMLphp(php)php;
php php php php php}
php}
