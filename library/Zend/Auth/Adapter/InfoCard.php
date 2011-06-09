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
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Zendphp_Authphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php InfoCardphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Authphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Authphp_Result
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Resultphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_InfoCard
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp.phpphp'php;

php/php*php*
php php*php Aphp Zendphp_Authphp Authenticationphp Adapterphp allowingphp thephp usephp ofphp Informationphp Cardsphp asphp an
php php*php authenticationphp mechanism
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Zendphp_Authphp_Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Authphp_Adapterphp_InfoCardphp implementsphp Zendphp_Authphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Thephp XMLphp Tokenphp beingphp authenticated
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_xmlTokenphp;

php php php php php/php*php*
php php php php php php*php Thephp instancephp ofphp Zendphp_InfoCard
php php php php php php*
php php php php php php*php php@varphp Zendphp_InfoCard
php php php php php php*php/
php php php php protectedphp php$php_infoCardphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$strXmlDocumentphp Thephp XMLphp Tokenphp providedphp byphp thephp client
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$strXmlDocumentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xmlTokenphp php=php php$strXmlDocumentphp;
php php php php php php php php php$thisphp-php>php_infoCardphp php=php newphp Zendphp_InfoCardphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp InfoCardphp componentphp Adapterphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_InfoCardphp_Adapterphp_Interfacephp php$a
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_InfoCardphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(Zendphp_InfoCardphp_Adapterphp_Interfacephp php$aphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_infoCardphp-php>setAdapterphp(php$aphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp InfoCardphp componentphp adapterphp beingphp used
php php php php php php*
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Adapterphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_infoCardphp-php>getAdapterphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp InfoCardphp publicphp keyphp cipherphp objectphp beingphp used
php php php php php php*
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Cipherphp_PKIphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getPKCipherObjectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_infoCardphp-php>getPKCipherObjectphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp InfoCardphp publicphp keyphp cipherphp objectphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_InfoCardphp_Cipherphp_PKIphp_Interfacephp php$cipherObj
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_InfoCardphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setPKICipherObjectphp(Zendphp_InfoCardphp_Cipherphp_PKIphp_Interfacephp php$cipherObjphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_infoCardphp-php>setPKICipherObjectphp(php$cipherObjphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp Symmetricphp cipherphp objectphp beingphp used
php php php php php php*
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getSymCipherObjectphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_infoCardphp-php>getSymCipherObjectphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp InfoCardphp symmetricphp cipherphp objectphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Interfacephp php$cipherObj
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_InfoCardphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setSymCipherObjectphp(Zendphp_InfoCardphp_Cipherphp_Symmetricphp_Interfacephp php$cipherObjphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_infoCardphp-php>setSymCipherObjectphp(php$cipherObjphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp Certificatephp Pairphp byphp Keyphp IDphp fromphp thephp searchphp list
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$keyphp_idphp Thephp Certificatephp Keyphp IDphp returnedphp fromphp addingphp thephp certificatephp pair
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_InfoCardphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removeCertificatePairphp(php$keyphp_idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_infoCardphp-php>removeCertificatePairphp(php$keyphp_idphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp Certificatephp Pairphp tophp thephp listphp ofphp certificatesphp searchedphp byphp thephp component
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$privatephp_keyphp_filephp php php php Thephp pathphp tophp thephp privatephp keyphp filephp forphp thephp pair
php php php php php php*php php@paramphp php stringphp php$publicphp_keyphp_filephp php php php php Thephp pathphp tophp thephp certificatephp php/php publicphp keyphp forphp thephp pair
php php php php php php*php php@paramphp php stringphp php$typephp php php php php php php php php php php php php php php php php(optionalphp)php Thephp URIphp forphp thephp typephp ofphp keyphp pairphp thisphp isphp php(defaultphp RSAphp withphp OAEPphp paddingphp)
php php php php php php*php php@paramphp php stringphp php$passwordphp php php php php php php php php php php php php(optionalphp)php Thephp passwordphp forphp thephp privatephp keyphp filephp ifphp necessary
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php php@returnphp stringphp Aphp keyphp IDphp representingphp thisphp keyphp pairphp inphp thephp component
php php php php php php*php/
php php php php publicphp functionphp addCertificatePairphp(php$privatephp_keyphp_filephp,php php$publicphp_keyphp_filephp,php php$typephp php=php Zendphp_InfoCardphp_Cipherphp:php:ENCphp_RSAphp_OAEPphp_MGFphp1Pphp,php php$passwordphp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_infoCardphp-php>addCertificatePairphp(php$privatephp_keyphp_filephp,php php$publicphp_keyphp_filephp,php php$typephp,php php$passwordphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp Certificatephp Pairphp fromphp aphp keyphp ID
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$keyphp_idphp Thephp Keyphp IDphp ofphp thephp certificatephp pairphp inphp thephp component
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Exception
php php php php php php*php php@returnphp arrayphp Anphp arrayphp containingphp thephp pathphp tophp thephp privatephp/publicphp keyphp filesphp,
php php php php php php*php php php php php php php php php php php php php php php thephp typephp URIphp andphp thephp passwordphp ifphp provided
php php php php php php*php/
php php php php publicphp functionphp getCertificatePairphp(php$keyphp_idphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_infoCardphp-php>getCertificatePairphp(php$keyphp_idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp XMLphp Tokenphp tophp bephp processed
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$strXmlTokenphp Thephp XMLphp tokenphp tophp process
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_InfoCardphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setXmlTokenphp(php$strXmlTokenphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_xmlTokenphp php=php php$strXmlTokenphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp XMLphp Tokenphp beingphp processed
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp XMLphp tokenphp tophp bephp processed
php php php php php php*php/
php php php php publicphp functionphp getXmlTokenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_xmlTokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Authenticatesphp thephp XMLphp token
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Authphp_Resultphp Thephp resultphp ofphp thephp authentication
php php php php php php*php/
php php php php publicphp functionphp authenticatephp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$claimsphp php=php php$thisphp-php>php_infoCardphp-php>processphp(php$thisphp-php>getXmlTokenphp(php)php)php;
php php php php php php php php php}php catchphp(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(Zendphp_Authphp_Resultphp:php:FAILUREphp php,php nullphp,php arrayphp(php'Exceptionphp Thrownphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$ephp-php>getMessagephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$ephp-php>getTraceAsStringphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php serializephp(php$ephp)php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp(php!php$claimsphp-php>isValidphp(php)php)php php{
php php php php php php php php php php php php switchphp(php$claimsphp-php>getCodephp(php)php)php php{
php php php php php php php php php php php php php php php php casephp Zendphp_infoCardphp_Claimsphp:php:RESULTphp_PROCESSINGphp_FAILUREphp:
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$claimsphp,
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Processingphp Failurephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$claimsphp-php>getErrorMsgphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_InfoCardphp_Claimsphp:php:RESULTphp_VALIDATIONphp_FAILUREphp:
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp_CREDENTIALphp_INVALIDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$claimsphp,
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Validationphp Failurephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$claimsphp-php>getErrorMsgphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:FAILUREphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$claimsphp,
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Unknownphp Failurephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$claimsphp-php>getErrorMsgphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(
php php php php php php php php php php php php Zendphp_Authphp_Resultphp:php:SUCCESSphp,
php php php php php php php php php php php php php$claims
php php php php php php php php php)php;
php php php php php}
php}
