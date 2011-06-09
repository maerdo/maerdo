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
php php*php XmlRpcphp Response
php php*
php php*php Containerphp forphp accessingphp anphp XMLRPCphp returnphp valuephp andphp creatingphp thephp XMLphp responsephp.
php php*
php php*php php@categoryphp Zend
php php*php php@packagephp php Zendphp_XmlRpc
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php$Idphp:php Responsephp.phpphp php2php1php3php5php9php php2php0php1php0php-php0php3php-php0php7php php0php0php:php5php4php:php0php2Zphp larsphp php$
php php*php/
classphp Zendphp_XmlRpcphp_Response
php{
php php php php php/php*php*
php php php php php php*php Returnphp value
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_returnphp;

php php php php php/php*php*
php php php php php php*php Returnphp type
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp;

php php php php php/php*php*
php php php php php php*php Responsephp characterphp encoding
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Faultphp,php ifphp responsephp isphp aphp faultphp response
php php php php php php*php php@varphp nullphp|Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php protectedphp php$php_faultphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Canphp optionallyphp passphp inphp thephp returnphp valuephp andphp typephp hintingphp;php otherwisephp,php the
php php php php php php*php returnphp valuephp canphp bephp setphp viaphp php{php@linkphp setReturnValuephp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$return
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$returnphp php=php nullphp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setReturnValuephp(php$returnphp,php php$typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp encodingphp tophp usephp inphp response
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Response
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:setEncodingphp(php$encodingphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp responsephp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp returnphp value
php php php php php php*
php php php php php php*php Setsphp thephp returnphp valuephp,php withphp optionalphp typephp hintingphp ifphp providedphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setReturnValuephp(php$valuephp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_returnphp php=php php$valuephp;
php php php php php php php php php$thisphp-php>php_typephp php=php php(stringphp)php php$typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp returnphp value
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getReturnValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp XMLRPCphp valuephp forphp thephp returnphp value
php php php php php php*
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Value
php php php php php php*php/
php php php php protectedphp functionphp php_getXmlRpcReturnphp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$thisphp-php>php_returnphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp responsephp aphp faultphp responsephp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isFaultphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_faultphp instanceofphp Zendphp_XmlRpcphp_Faultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp faultphp,php ifphp anyphp.
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php publicphp functionphp getFaultphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_faultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp aphp responsephp fromphp anphp XMLphp response
php php php php php php*
php php php php php php*php Attemptsphp tophp loadphp aphp responsephp fromphp anphp XMLRPCphp responsephp,php autodetectingphp ifphp it
php php php php php php*php isphp aphp faultphp responsephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$response
php php php php php php*php php@returnphp booleanphp Truephp ifphp aphp validphp XMLRPCphp responsephp,php falsephp ifphp aphp fault
php php php php php php*php responsephp orphp invalidphp input
php php php php php php*php/
php php php php publicphp functionphp loadXmlphp(php$responsephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$responsephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php5php0php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$useInternalXmlErrorsphp php=php libxmlphp_usephp_internalphp_errorsphp(truephp)php;
php php php php php php php php php php php php php$xmlphp php=php newphp SimpleXMLElementphp(php$responsephp)php;
php php php php php php php php php php php php libxmlphp_usephp_internalphp_errorsphp(php$useInternalXmlErrorsphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php libxmlphp_usephp_internalphp_errorsphp(php$useInternalXmlErrorsphp)php;
php php php php php php php php php php php php php/php/php Notphp validphp XML
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php5php1php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$xmlphp-php>faultphp)php)php php{
php php php php php php php php php php php php php/php/php faultphp response
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>loadXmlphp(php$responsephp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$xmlphp-php>paramsphp)php)php php{
php php php php php php php php php php php php php/php/php Invalidphp response
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php5php2php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$xmlphp-php>paramsphp)php php|php|php php!issetphp(php$xmlphp-php>paramsphp-php>paramphp)php php|php|php php!issetphp(php$xmlphp-php>paramsphp-php>paramphp-php>valuephp)php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Valuephp_Exceptionphp(php'Missingphp XMLphp-RPCphp valuephp inphp XMLphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$valueXmlphp php=php php$xmlphp-php>paramsphp-php>paramphp-php>valuephp-php>asXMLphp(php)php;
php php php php php php php php php php php php php$valuephp php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$valueXmlphp,php Zendphp_XmlRpcphp_Valuephp:php:XMLphp_STRINGphp)php;
php php php php php php php php php}php catchphp php(Zendphp_XmlRpcphp_Valuephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_faultphp php=php newphp Zendphp_XmlRpcphp_Faultphp(php6php5php3php)php;
php php php php php php php php php php php php php$thisphp-php>php_faultphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setReturnValuephp(php$valuephp-php>getValuephp(php)php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp responsephp asphp XML
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php php$valuephp php=php php$thisphp-php>php_getXmlRpcReturnphp(php)php;
php php php php php php php php php$generatorphp php=php Zendphp_XmlRpcphp_Valuephp:php:getGeneratorphp(php)php;
php php php php php php php php php$generatorphp-php>openElementphp(php'methodResponsephp'php)
php php php php php php php php php php php php php php php php php php php-php>openElementphp(php'paramsphp'php)
php php php php php php php php php php php php php php php php php php php-php>openElementphp(php'paramphp'php)php;
php php php php php php php php php$valuephp-php>generateXmlphp(php)php;
php php php php php php php php php$generatorphp-php>closeElementphp(php'paramphp'php)
php php php php php php php php php php php php php php php php php php php-php>closeElementphp(php'paramsphp'php)
php php php php php php php php php php php php php php php php php php php-php>closeElementphp(php'methodResponsephp'php)php;

php php php php php php php php returnphp php$generatorphp-php>flushphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp XMLphp response
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>saveXMLphp(php)php;
php php php php php}
php}
