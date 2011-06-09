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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ServerIntrospectionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Wrapsphp thephp XMLphp-RPCphp systemphp.php*php introspectionphp methods
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Clientphp_ServerIntrospection
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_XmlRpcphp_Clientphp_ServerProxy
php php php php php php*php/
php php php php privatephp php$php_systemphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php php@paramphp Zendphp_XmlRpcphp_Clientphp php$client
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_XmlRpcphp_Clientphp php$clientphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_systemphp php=php php$clientphp-php>getProxyphp(php'systemphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp signaturephp forphp eachphp methodphp onphp thephp serverphp,
php php php php php php*php autodetectingphp whetherphp systemphp.multicallphp(php)php isphp supportedphp and
php php php php php php*php usingphp itphp ifphp sophp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getSignatureForEachMethodphp(php)
php php php php php{
php php php php php php php php php$methodsphp php=php php$thisphp-php>listMethodsphp(php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Clientphp/FaultExceptionphp.phpphp'php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$signaturesphp php=php php$thisphp-php>getSignatureForEachMethodByMulticallphp(php$methodsphp)php;
php php php php php php php php php}php catchphp php(Zendphp_XmlRpcphp_Clientphp_FaultExceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php degradephp tophp looping
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$signaturesphp)php)php php{
php php php php php php php php php php php php php$signaturesphp php=php php$thisphp-php>getSignatureForEachMethodByLoopingphp(php$methodsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$signaturesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp getphp thephp methodphp signaturesphp inphp onephp requestphp viaphp systemphp.multicallphp(php)php.
php php php php php php*php Thisphp isphp aphp boxcarphp featurephp ofphp XMLphp-RPCphp andphp isphp foundphp onphp fewerphp serversphp.php php Howeverphp,
php php php php php php*php canphp significantlyphp improvephp performancephp ifphp presentphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$methods
php php php php php php*php php@returnphp arrayphp arrayphp(arrayphp(returnphp,php paramphp,php paramphp,php paramphp.php.php.php)php)
php php php php php php*php/
php php php php publicphp functionphp getSignatureForEachMethodByMulticallphp(php$methodsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$methodsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$methodsphp php=php php$thisphp-php>listMethodsphp(php)php;
php php php php php php php php php}

php php php php php php php php php$multicallParamsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$methodsphp asphp php$methodphp)php php{
php php php php php php php php php php php php php$multicallParamsphp[php]php php=php arrayphp(php'methodNamephp'php php=php>php php'systemphp.methodSignaturephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'paramsphp'php php php php php php=php>php arrayphp(php$methodphp)php)php;
php php php php php php php php php}

php php php php php php php php php$serverSignaturesphp php=php php$thisphp-php>php_systemphp-php>multicallphp(php$multicallParamsphp)php;

php php php php php php php php ifphp php(php!php isphp_arrayphp(php$serverSignaturesphp)php)php php{
php php php php php php php php php php php php php$typephp php=php gettypephp(php$serverSignaturesphp)php;
php php php php php php php php php php php php php$errorphp php=php php"Multicallphp returnphp isphp malformedphp.php php Expectedphp arrayphp,php gotphp php$typephp"php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Clientphp/IntrospectExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Clientphp_IntrospectExceptionphp(php$errorphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$serverSignaturesphp)php php!php=php countphp(php$methodsphp)php)php php{
php php php php php php php php php php php php php$errorphp php=php php'Badphp numberphp ofphp signaturesphp receivedphp fromphp multicallphp'php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Clientphp/IntrospectExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Clientphp_IntrospectExceptionphp(php$errorphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Createphp aphp newphp signaturesphp arrayphp withphp thephp methodsphp namephp asphp keysphp andphp thephp signaturephp asphp value
php php php php php php php php php$signaturesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$serverSignaturesphp asphp php$iphp php=php>php php$signaturephp)php php{
php php php php php php php php php php php php php$signaturesphp[php$methodsphp[php$iphp]php]php php=php php$signaturephp;
php php php php php php php php php}

php php php php php php php php returnphp php$signaturesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp methodphp signaturesphp forphp everyphp methodphp by
php php php php php php*php successivelyphp callingphp systemphp.methodSignature
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$methods
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getSignatureForEachMethodByLoopingphp(php$methodsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$methodsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$methodsphp php=php php$thisphp-php>listMethodsphp(php)php;
php php php php php php php php php}

php php php php php php php php php$signaturesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$methodsphp asphp php$methodphp)php php{
php php php php php php php php php php php php php$signaturesphp[php$methodphp]php php=php php$thisphp-php>getMethodSignaturephp(php$methodphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$signaturesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callphp systemphp.methodSignaturephp(php)php forphp thephp givenphp method
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$method
php php php php php php*php php@returnphp arrayphp php arrayphp(arrayphp(returnphp,php paramphp,php paramphp,php paramphp.php.php.php)php)
php php php php php php*php/
php php php php publicphp functionphp getMethodSignaturephp(php$methodphp)
php php php php php{
php php php php php php php php php$signaturephp php=php php$thisphp-php>php_systemphp-php>methodSignaturephp(php$methodphp)php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$signaturephp)php)php php{
php php php php php php php php php php php php php$errorphp php=php php'Invalidphp signaturephp forphp methodphp php"php'php php.php php$methodphp php.php php'php"php'php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/XmlRpcphp/Clientphp/IntrospectExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_XmlRpcphp_Clientphp_IntrospectExceptionphp(php$errorphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$signaturephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callphp systemphp.listMethodsphp(php)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$method
php php php php php php*php php@returnphp arrayphp php arrayphp(methodphp,php methodphp,php methodphp.php.php.php)
php php php php php php*php/
php php php php publicphp functionphp listMethodsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_systemphp-php>listMethodsphp(php)php;
php php php php php}

php}
