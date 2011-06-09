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
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Samlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Element
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Elementphp.phpphp'php;

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Assertionphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Assertionphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Aphp Xmlphp Assertionphp Documentphp inphp SAMLphp Tokenphp format
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_Assertionphp_Saml
php php php php extendsphp Zendphp_InfoCardphp_Xmlphp_Element
php php php php implementsphp Zendphp_InfoCardphp_Xmlphp_Assertionphp_Interface
php{

php php php php php/php*php*
php php php php php php*php Audiencephp Restrictionphp Condition
php php php php php php*php/
php php php php constphp CONDITIONphp_AUDIENCEphp php=php php'AudienceRestrictionConditionphp'php;

php php php php php/php*php*
php php php php php php*php Thephp URIphp forphp aphp php'bearerphp'php confirmation
php php php php php php*php/
php php php php constphp CONFIRMATIONphp_BEARERphp php=php php'urnphp:oasisphp:namesphp:tcphp:SAMLphp:php1php.php0php:cmphp:bearerphp'php;

php php php php php/php*php*
php php php php php php*php Thephp amountphp ofphp timephp inphp secondsphp tophp bufferphp whenphp checkingphp conditionsphp tophp ensure
php php php php php php*php thatphp differencesphp betweenphp clientphp/serverphp clocksphp donphp'tphp interferphp toophp much
php php php php php php*php/
php php php php constphp CONDITIONphp_TIMEphp_ADJphp php=php php3php6php0php0php;php php/php/php php+php-php php5php minutes

php php php php protectedphp functionphp php_getServerNamephp(php)php php{
php php php php php php php php returnphp php$php_SERVERphp[php'SERVERphp_NAMEphp'php]php;
php php php php php}

php php php php protectedphp functionphp php_getServerPortphp(php)php php{
php php php php php php php php returnphp php$php_SERVERphp[php'SERVERphp_PORTphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp thephp conditionsphp arrayphp returnedphp fromphp thephp getConditionsphp(php)php call
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$conditionsphp Anphp arrayphp ofphp condtionsphp forphp thephp assertionphp takenphp fromphp getConditionsphp(php)
php php php php php php*php php@returnphp mixedphp Booleanphp truephp onphp successphp,php anphp arrayphp ofphp conditionphp,php errorphp messagephp onphp failure
php php php php php php*php/
php php php php publicphp functionphp validateConditionsphp(Arrayphp php$conditionsphp)
php php php php php{

php php php php php php php php php$currentTimephp php=php timephp(php)php;

php php php php php php php php ifphp(php!emptyphp(php$conditionsphp)php)php php{

php php php php php php php php php php php php foreachphp(php$conditionsphp asphp php$conditionphp php=php>php php$conditionValuephp)php php{
php php php php php php php php php php php php php php php php switchphp(strtolowerphp(php$conditionphp)php)php php{
php php php php php php php php php php php php php php php php php php php php casephp php'audiencerestrictionconditionphp'php:

php php php php php php php php php php php php php php php php php php php php php php php php php$serverNamephp php=php php$thisphp-php>php_getServerNamephp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$serverPortphp php=php php$thisphp-php>php_getServerPortphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$selfphp_aliasesphp[php]php php=php php$serverNamephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$selfphp_aliasesphp[php]php php=php php"php{php{php$serverNamephp}php:php{php$serverPortphp}php"php;

php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp(isphp_arrayphp(php$conditionValuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp(php$conditionValuephp asphp php$audiencephp)php php{

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php listphp(php,php,php$audiencephp)php php=php explodephp(php'php/php'php,php php$audiencephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp(inphp_arrayphp(php$audiencephp,php php$selfphp_aliasesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php!php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php$conditionphp,php php'Couldphp notphp findphp selfphp inphp allowedphp audiencephp listphp'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'notbeforephp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$notbeforetimephp php=php strtotimephp(php$conditionValuephp)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php$currentTimephp <php php$notbeforetimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php$currentTimephp php+php selfphp:php:CONDITIONphp_TIMEphp_ADJphp <php php$notbeforetimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php$conditionphp,php php'Currentphp timephp isphp beforephp specifiedphp windowphp'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'notonorafterphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$notonoraftertimephp php=php strtotimephp(php$conditionValuephp)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php$currentTimephp php>php=php php$notonoraftertimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php$currentTimephp php-php selfphp:php:CONDITIONphp_TIMEphp_ADJphp php>php=php php$notonoraftertimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp arrayphp(php$conditionphp,php php'Currentphp timephp isphp afterphp specifiedphp windowphp'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Assertionphp URIphp forphp thisphp typephp ofphp Assertion
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp Assertionphp URI
php php php php php php*php/
php php php php publicphp functionphp getAssertionURIphp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_InfoCardphp_Xmlphp_Assertionphp:php:TYPEphp_SAMLphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Majorphp Versionphp ofphp thephp SAMLphp Assertion
php php php php php php*
php php php php php php*php php@returnphp integerphp Thephp majorphp versionphp number
php php php php php php*php/
php php php php publicphp functionphp getMajorVersionphp(php)
php php php php php{
php php php php php php php php returnphp php(intphp)php(stringphp)php$thisphp[php'MajorVersionphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Thephp Minorphp Versionphp ofphp thephp SAMLphp Assertion
php php php php php php*
php php php php php php*php php@returnphp integerphp Thephp minorphp versionphp number
php php php php php php*php/
php php php php publicphp functionphp getMinorVersionphp(php)
php php php php php{
php php php php php php php php returnphp php(intphp)php(stringphp)php$thisphp[php'MinorVersionphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Assertionphp IDphp ofphp thephp assertion
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp Assertionphp ID
php php php php php php*php/
php php php php publicphp functionphp getAssertionIDphp(php)
php php php php php{
php php php php php php php php returnphp php(stringphp)php$thisphp[php'AssertionIDphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Issuerphp URIphp ofphp thephp assertion
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp URIphp ofphp thephp assertionphp Issuer
php php php php php php*php/
php php php php publicphp functionphp getIssuerphp(php)
php php php php php{
php php php php php php php php returnphp php(stringphp)php$thisphp[php'Issuerphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Timestampphp ofphp whenphp thephp assertionphp wasphp issued
php php php php php php*
php php php php php php*php php@returnphp integerphp aphp UNIXphp timestampphp representingphp whenphp thephp assertionphp wasphp issued
php php php php php php*php/
php php php php publicphp functionphp getIssuedTimestampphp(php)
php php php php php{
php php php php php php php php returnphp strtotimephp(php(stringphp)php$thisphp[php'IssueInstantphp'php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp conditionsphp whichphp thephp assertionsphp arephp predicatedphp on
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@returnphp arrayphp anphp arrayphp ofphp conditions
php php php php php php*php/
php php php php publicphp functionphp getConditionsphp(php)
php php php php php{

php php php php php php php php listphp(php$conditionsphp)php php=php php$thisphp-php>xpathphp(php"php/php/samlphp:Conditionsphp"php)php;

php php php php php php php php ifphp(php!php(php$conditionsphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp findphp thephp samlphp:Conditionsphp blockphp"php)php;
php php php php php php php php php}

php php php php php php php php php$retvalphp php=php arrayphp(php)php;

php php php php php php php php foreachphp(php$conditionsphp-php>childrenphp(php'urnphp:oasisphp:namesphp:tcphp:SAMLphp:php1php.php0php:assertionphp'php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp(php$keyphp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:CONDITIONphp_AUDIENCEphp:
php php php php php php php php php php php php php php php php php php php php foreachphp(php$valuephp-php>childrenphp(php'urnphp:oasisphp:namesphp:tcphp:SAMLphp:php1php.php0php:assertionphp'php)php asphp php$audiencephp_keyphp php=php>php php$audiencephp_valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php$audiencephp_keyphp php=php=php php'Audiencephp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$retvalphp[php$keyphp]php[php]php php=php php(stringphp)php$audiencephp_valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$retvalphp[php'NotBeforephp'php]php php=php php(stringphp)php$conditionsphp[php'NotBeforephp'php]php;
php php php php php php php php php$retvalphp[php'NotOnOrAfterphp'php]php php=php php(stringphp)php$conditionsphp[php'NotOnOrAfterphp'php]php;

php php php php php php php php returnphp php$retvalphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp theyphp KeyInfophp elementphp forphp thephp Subjectphp KeyInfophp block
php php php php php php*
php php php php php php*php php@todophp Notphp Yetphp Implemented
php php php php php php*php php@ignore
php php php php php php*php/
php php php php publicphp functionphp getSubjectKeyInfophp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp Notphp surephp ifphp thisphp isphp partphp ofphp thephp scopephp forphp nowphp.php.
php php php php php php php php php php*php/

php php php php php php php php ifphp(php$thisphp-php>getConfirmationMethodphp(php)php php=php=php selfphp:php:CONFIRMATIONphp_BEARERphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Cannotphp getphp Subjectphp Keyphp Infophp whenphp Confirmationphp Methodphp wasphp Bearerphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp Confirmationphp Methodphp URIphp usedphp inphp thephp Assertion
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp confirmationphp methodphp URI
php php php php php php*php/
php php php php publicphp functionphp getConfirmationMethodphp(php)
php php php php php{
php php php php php php php php listphp(php$confirmationphp)php php=php php$thisphp-php>xPathphp(php"php/php/samlphp:ConfirmationMethodphp"php)php;
php php php php php php php php returnphp php(stringphp)php$confirmationphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp attributesphp php(claimsphp)php containedphp withinphp thephp assertion
php php php php php php*
php php php php php php*php php@returnphp arrayphp Anphp arrayphp ofphp attributesphp php/php claimsphp withinphp thephp assertion
php php php php php php*php/
php php php php publicphp functionphp getAttributesphp(php)
php php php php php{
php php php php php php php php php$attributesphp php=php php$thisphp-php>xPathphp(php'php/php/samlphp:Attributephp'php)php;

php php php php php php php php php$retvalphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$attributesphp asphp php$keyphp php=php>php php$valuephp)php php{

php php php php php php php php php php php php php$retkeyphp php=php php(stringphp)php$valuephp[php'AttributeNamespacephp'php]php.php'php/php'php.php(stringphp)php$valuephp[php'AttributeNamephp'php]php;

php php php php php php php php php php php php php$retvalphp[php$retkeyphp]php[php'namephp'php]php php=php php(stringphp)php$valuephp[php'AttributeNamephp'php]php;
php php php php php php php php php php php php php$retvalphp[php$retkeyphp]php[php'namespacephp'php]php php=php php(stringphp)php$valuephp[php'AttributeNamespacephp'php]php;

php php php php php php php php php php php php listphp(php$aValuephp)php php=php php$valuephp-php>childrenphp(php'urnphp:oasisphp:namesphp:tcphp:SAMLphp:php1php.php0php:assertionphp'php)php;
php php php php php php php php php php php php php$retvalphp[php$retkeyphp]php[php'valuephp'php]php php=php php(stringphp)php$aValuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$retvalphp;
php php php php php}
php}
