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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Faultphp.phpphp php2php0php2php0php8php php2php0php1php0php-php0php1php-php1php1php php2php2php:php3php7php:php3php7Zphp larsphp php$
php php*php/

php/php*php*
php php*php Zendphp_XmlRpcphp_Value
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Valuephp.phpphp'php;

php/php*php*
php php*php XMLRPCphp Faults
php php*
php php*php Containerphp forphp XMLRPCphp faultsphp,php containingphp bothphp aphp codephp andphp aphp messagephp;
php php*php additionallyphp,php hasphp methodsphp forphp determiningphp ifphp anphp XMLphp responsephp isphp anphp XMLRPC
php php*php faultphp,php asphp wellphp asphp generatingphp thephp XMLphp forphp anphp XMLRPCphp faultphp responsephp.
php php*
php php*php Tophp allowphp methodphp chainingphp,php youphp mayphp onlyphp usephp thephp php{php@linkphp getInstancephp(php)php}php factory
php php*php tophp instantiatephp aphp Zendphp_XmlRpcphp_Serverphp_Faultphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Fault
php{
php php php php php/php*php*
php php php php php php*php Faultphp code
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_codephp;

php php php php php/php*php*
php php php php php php*php Faultphp characterphp encoding
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Faultphp message
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_messagephp;

php php php php php/php*php*
php php php php php php*php Internalphp faultphp codesphp php=php>php messages
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_internalphp php=php arrayphp(
php php php php php php php php php4php0php4php php=php>php php'Unknownphp Errorphp'php,

php php php php php php php php php/php/php php6php1php0php php-php php6php1php9php reflectionphp errors
php php php php php php php php php6php1php0php php=php>php php'Invalidphp methodphp classphp'php,
php php php php php php php php php6php1php1php php=php>php php'Unablephp tophp attachphp functionphp orphp callbackphp;php notphp callablephp'php,
php php php php php php php php php6php1php2php php=php>php php'Unablephp tophp loadphp arrayphp;php notphp anphp arrayphp'php,
php php php php php php php php php6php1php3php php=php>php php'Onephp orphp morephp methodphp recordsphp arephp corruptphp orphp otherwisephp unusablephp'php,

php php php php php php php php php/php/php php6php2php0php php-php php6php2php9php dispatchphp errors
php php php php php php php php php6php2php0php php=php>php php'Methodphp doesphp notphp existphp'php,
php php php php php php php php php6php2php1php php=php>php php'Errorphp instantiatingphp classphp tophp invokephp methodphp'php,
php php php php php php php php php6php2php2php php=php>php php'Methodphp missingphp implementationphp'php,
php php php php php php php php php6php2php3php php=php>php php'Callingphp parametersphp dophp notphp matchphp signaturephp'php,

php php php php php php php php php/php/php php6php3php0php php-php php6php3php9php requestphp errors
php php php php php php php php php6php3php0php php=php>php php'Unablephp tophp readphp requestphp'php,
php php php php php php php php php6php3php1php php=php>php php'Failedphp tophp parsephp requestphp'php,
php php php php php php php php php6php3php2php php=php>php php'Invalidphp requestphp,php nophp methodphp passedphp;php requestphp mustphp containphp aphp php\php'methodNamephp\php'php tagphp'php,
php php php php php php php php php6php3php3php php=php>php php'Paramphp mustphp containphp aphp valuephp'php,
php php php php php php php php php6php3php4php php=php>php php'Invalidphp methodphp namephp'php,
php php php php php php php php php6php3php5php php=php>php php'Invalidphp XMLphp providedphp tophp requestphp'php,
php php php php php php php php php6php3php6php php=php>php php'Errorphp creatingphp xmlrpcphp valuephp'php,

php php php php php php php php php/php/php php6php4php0php php-php php6php4php9php systemphp.php*php errors
php php php php php php php php php6php4php0php php=php>php php'Methodphp doesphp notphp existphp'php,

php php php php php php php php php/php/php php6php5php0php php-php php6php5php9php responsephp errors
php php php php php php php php php6php5php0php php=php>php php'Invalidphp XMLphp providedphp forphp responsephp'php,
php php php php php php php php php6php5php1php php=php>php php'Failedphp tophp parsephp responsephp'php,
php php php php php php php php php6php5php2php php=php>php php'Invalidphp responsephp'php,
php php php php php php php php php6php5php3php php=php>php php'Invalidphp XMLRPCphp valuephp inphp responsephp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$codephp php=php php4php0php4php,php php$messagephp php=php php'php'php)
php php php php php{
php php php php php php php php php$thisphp-php>setCodephp(php$codephp)php;
php php php php php php php php php$codephp php=php php$thisphp-php>getCodephp(php)php;

php php php php php php php php ifphp php(emptyphp(php$messagephp)php php&php&php issetphp(php$thisphp-php>php_internalphp[php$codephp]php)php)php php{
php php php php php php php php php php php php php$messagephp php=php php$thisphp-php>php_internalphp[php$codephp]php;
php php php php php php php php php}php elseifphp php(emptyphp(php$messagephp)php)php php{
php php php php php php php php php php php php php$messagephp php=php php'Unknownphp errorphp'php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setMessagephp(php$messagephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp faultphp code
php php php php php php*
php php php php php php*php php@paramphp intphp php$code
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php publicphp functionphp setCodephp(php$codephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_codephp php=php php(intphp)php php$codephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp faultphp code
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getCodephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_codephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp faultphp message
php php php php php php*
php php php php php php*php php@paramphp string
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php publicphp functionphp setMessagephp(php$messagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_messagephp php=php php(stringphp)php php$messagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp faultphp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMessagephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp encodingphp tophp usephp inphp faultphp response
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Fault
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php Zendphp_XmlRpcphp_Valuephp:php:setEncodingphp(php$encodingphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp faultphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp anphp XMLRPCphp faultphp fromphp XML
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fault
php php php php php php*php php@returnphp booleanphp Returnsphp truephp ifphp successfullyphp loadedphp faultphp responsephp,php false
php php php php php php*php ifphp responsephp wasphp notphp aphp faultphp response
php php php php php php*php php@throwsphp Zendphp_XmlRpcphp_Exceptionphp ifphp nophp orphp faultyphp XMLphp providedphp,php orphp ifphp fault
php php php php php php*php responsephp doesphp notphp containphp eitherphp codephp orphp message
php php php php php php*php/
php php php php publicphp functionphp loadXmlphp(php$faultphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$faultphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Exceptionphp(php'Invalidphp XMLphp providedphp tophp faultphp'php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$xmlphp php=php php@newphp SimpleXMLElementphp(php$faultphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php Notphp validphp XML
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Exceptionphp(php'Failedphp tophp parsephp XMLphp faultphp:php php'php php.php php php$ephp-php>getMessagephp(php)php,php php5php0php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp fault
php php php php php php php php ifphp php(php!php$xmlphp-php>faultphp)php php{
php php php php php php php php php php php php php/php/php Notphp aphp fault
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$xmlphp-php>faultphp-php>valuephp-php>structphp)php php{
php php php php php php php php php php php php php/php/php notphp aphp properphp fault
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Exceptionphp(php'Invalidphp faultphp structurephp'php,php php5php0php0php)php;
php php php php php php php php php}

php php php php php php php php php$structXmlphp php=php php$xmlphp-php>faultphp-php>valuephp-php>asXMLphp(php)php;
php php php php php php php php php$structphp php php php php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$structXmlphp,php Zendphp_XmlRpcphp_Valuephp:php:XMLphp_STRINGphp)php;
php php php php php php php php php$structphp php php php php=php php$structphp-php>getValuephp(php)php;

php php php php php php php php ifphp php(issetphp(php$structphp[php'faultCodephp'php]php)php)php php{
php php php php php php php php php php php php php$codephp php=php php$structphp[php'faultCodephp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$structphp[php'faultStringphp'php]php)php)php php{
php php php php php php php php php php php php php$messagephp php=php php$structphp[php'faultStringphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$codephp)php php&php&php emptyphp(php$messagephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Exceptionphp(php'Faultphp codephp andphp stringphp requiredphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$codephp)php)php php{
php php php php php php php php php php php php php$codephp php=php php'php4php0php4php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$messagephp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_internalphp[php$codephp]php)php)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$thisphp-php>php_internalphp[php$codephp]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$messagephp php=php php'Unknownphp Errorphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setCodephp(php$codephp)php;
php php php php php php php php php$thisphp-php>setMessagephp(php$messagephp)php;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp anphp XMLphp responsephp isphp anphp XMLRPCphp fault
php php php php php php*
php php php php php php*php php@paramphp stringphp php$xml
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp isFaultphp(php$xmlphp)
php php php php php{
php php php php php php php php php$faultphp php=php newphp selfphp(php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Exceptionphp.phpphp'php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$isFaultphp php=php php$faultphp-php>loadXmlphp(php$xmlphp)php;
php php php php php php php php php}php catchphp php(Zendphp_XmlRpcphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$isFaultphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$isFaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp faultphp tophp XML
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php php/php/php Createphp faultphp value
php php php php php php php php php$faultStructphp php=php arrayphp(
php php php php php php php php php php php php php'faultCodephp'php php php php=php>php php$thisphp-php>getCodephp(php)php,
php php php php php php php php php php php php php'faultStringphp'php php=php>php php$thisphp-php>getMessagephp(php)
php php php php php php php php php)php;
php php php php php php php php php$valuephp php=php Zendphp_XmlRpcphp_Valuephp:php:getXmlRpcValuephp(php$faultStructphp)php;

php php php php php php php php php$generatorphp php=php Zendphp_XmlRpcphp_Valuephp:php:getGeneratorphp(php)php;
php php php php php php php php php$generatorphp-php>openElementphp(php'methodResponsephp'php)
php php php php php php php php php php php php php php php php php php php-php>openElementphp(php'faultphp'php)php;
php php php php php php php php php$valuephp-php>generateXmlphp(php)php;
php php php php php php php php php$generatorphp-php>closeElementphp(php'faultphp'php)
php php php php php php php php php php php php php php php php php php php-php>closeElementphp(php'methodResponsephp'php)php;

php php php php php php php php returnphp php$generatorphp-php>flushphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp XMLphp faultphp response
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>saveXMLphp(php)php;
php php php php php}
php}
