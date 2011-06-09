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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Actions
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Actionphp.phpphp php2php2php4php3php7php php2php0php1php0php-php0php6php-php1php5php php1php6php:php1php3php:php4php6Zphp alexanderphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Targetphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Targetphp.phpphp'php;


php/php*php*
php php*php Abstractphp PDFphp actionphp representationphp class
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Actions
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Actionphp extendsphp Zendphp_Pdfphp_Targetphp implementsphp RecursiveIteratorphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php Actionphp dictionary
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Dictionaryphp|Zendphp_Pdfphp_Elementphp_Objectphp|Zendphp_Pdfphp_Elementphp_Reference
php php php php php php*php/
php php php php protectedphp php$php_actionDictionaryphp;


php php php php php/php*php*
php php php php php php*php Anphp originalphp listphp ofphp chainedphp actions
php php php php php php*
php php php php php php*php php@varphp arrayphp php Arrayphp ofphp Zendphp_Pdfphp_Actionphp objects
php php php php php php*php/
php php php php protectedphp php$php_originalNextListphp;

php php php php php/php*php*
php php php php php php*php Aphp listphp ofphp nextphp actionsphp inphp actionsphp treephp php(usedphp forphp actionsphp chainingphp)
php php php php php php*
php php php php php php*php php@varphp arrayphp php Arrayphp ofphp Zendphp_Pdfphp_Actionphp objects
php php php php php php*php/
php php php php publicphp php$nextphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Dictionaryphp php$dictionary
php php php php php php*php php@paramphp SplObjectStoragephp php php php php php php php php php php php php$processedActionsphp php listphp ofphp alreadyphp processedphp actionphp dictionariesphp,php usedphp tophp avoidphp cyclicphp references
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$dictionaryphp,php SplObjectStoragephp php$processedActionsphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
php php php php php php php php ifphp php(php$dictionaryphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_DICTIONARYphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'php$dictionaryphp mastphp bephp aphp directphp orphp anphp indirectphp dictionaryphp objectphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_actionDictionaryphp php=php php$dictionaryphp;

php php php php php php php php ifphp php(php$dictionaryphp-php>Nextphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$dictionaryphp-php>Nextphp instanceofphp Zendphp_Pdfphp_Elementphp_Dictionaryphp)php php{
php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp dictionaryphp objectphp isphp notphp alreadyphp processed
php php php php php php php php php php php php php php php php ifphp php(php!php$processedActionsphp-php>containsphp(php$dictionaryphp-php>Nextphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$processedActionsphp-php>attachphp(php$dictionaryphp-php>Nextphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>nextphp[php]php php=php Zendphp_Pdfphp_Actionphp:php:loadphp(php$dictionaryphp-php>Nextphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php$dictionaryphp-php>Nextphp instanceofphp Zendphp_Pdfphp_Elementphp_Arrayphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$dictionaryphp-php>Nextphp-php>itemsphp asphp php$chainedActionDictionaryphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp dictionaryphp objectphp isphp notphp alreadyphp processed
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$processedActionsphp-php>containsphp(php$chainedActionDictionaryphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$processedActionsphp-php>attachphp(php$chainedActionDictionaryphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>nextphp[php]php php=php Zendphp_Pdfphp_Actionphp:php:loadphp(php$chainedActionDictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'PDFphp Actionphp dictionaryphp Nextphp entryphp mustphp bephp aphp dictionaryphp orphp anphp arrayphp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_originalNextListphp php=php php$thisphp-php>nextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp PDFphp actionphp objectphp usingphp specifiedphp dictionary
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp php$dictionaryphp php(Itphp'sphp actuallyphp Dictionaryphp orphp Dictionaryphp Objectphp orphp Referencephp tophp aphp Dictionaryphp Objectphp)
php php php php php php*php php@paramphp SplObjectStoragephp php$processedActionsphp php listphp ofphp alreadyphp processedphp actionphp dictionariesphp,php usedphp tophp avoidphp cyclicphp references
php php php php php php*php php@returnphp Zendphp_Pdfphp_Action
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp loadphp(Zendphp_Pdfphp_Elementphp php$dictionaryphp,php SplObjectStoragephp php$processedActionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$processedActionsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$processedActionsphp php=php newphp SplObjectStoragephp(php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp.phpphp'php;
php php php php php php php php ifphp php(php$dictionaryphp-php>getTypephp(php)php php!php=php Zendphp_Pdfphp_Elementphp:php:TYPEphp_DICTIONARYphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'php$dictionaryphp mastphp bephp aphp directphp orphp anphp indirectphp dictionaryphp objectphp.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dictionaryphp-php>Typephp)php php php&php&php php php$dictionaryphp-php>Typephp-php>valuephp php!php=php php'Actionphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Actionphp dictionaryphp Typephp entryphp mustphp bephp setphp tophp php\php'Actionphp\php'php.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$dictionaryphp-php>Sphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Actionphp dictionaryphp mustphp containphp Sphp entryphp'php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$dictionaryphp-php>Sphp-php>valuephp)php php{
php php php php php php php php php php php php casephp php'GoTophp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/GoTophp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_GoTophp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'GoToRphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/GoToRphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_GoToRphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'GoToEphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/GoToEphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_GoToEphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Launchphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Launchphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Launchphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Threadphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Threadphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Threadphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'URIphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/URIphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_URIphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Soundphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Soundphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Soundphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Moviephp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Moviephp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Moviephp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Hidephp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Hidephp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Hidephp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Namedphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Namedphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Namedphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'SubmitFormphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/SubmitFormphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_SubmitFormphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'ResetFormphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/ResetFormphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_ResetFormphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'ImportDataphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/ImportDataphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_ImportDataphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'JavaScriptphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/JavaScriptphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_JavaScriptphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'SetOCGStatephp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/SetOCGStatephp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_SetOCGStatephp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Renditionphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Renditionphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Renditionphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Transphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Transphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Transphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'GoTophp3DViewphp'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/GoTophp3DViewphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_GoTophp3DViewphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Actionphp/Unknownphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_Unknownphp(php$dictionaryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp resource
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@returnphp Zendphp_Pdfphp_Element
php php php php php php*php/
php php php php publicphp functionphp getResourcephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionDictionaryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dumpphp Actionphp andphp itsphp childphp actionsphp intophp PDFphp structures
php php php php php php*
php php php php php php*php Returnsphp dictionaryphp indirectphp objectphp orphp reference
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp Zendphp_Pdfphp_ElementFactoryphp php$factoryphp php php Objectphp factoryphp forphp newlyphp createdphp indirectphp objects
php php php php php php*php php@paramphp SplObjectStoragephp php$processedActionsphp php listphp ofphp alreadyphp processedphp actionsphp php(usedphp tophp preventphp infinityphp loopphp causedphp byphp cyclicphp referencesphp)
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Objectphp|Zendphp_Pdfphp_Elementphp_Referencephp php php Dictionaryphp indirectphp object
php php php php php php*php/
php php php php publicphp functionphp dumpActionphp(Zendphp_Pdfphp_ElementFactoryphp_Interfacephp php$factoryphp,php SplObjectStoragephp php$processedActionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$processedActionsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$processedActionsphp php=php newphp SplObjectStoragephp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$processedActionsphp-php>containsphp(php$thisphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Actionphp chainphp cyclycphp referencephp isphp detectedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$processedActionsphp-php>attachphp(php$thisphp)php;

php php php php php php php php php$childListUpdatedphp php=php falsephp;
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_originalNextListphp)php php!php=php countphp(php$thisphp-php>nextphp)php)php php{
php php php php php php php php php php php php php/php/php Ifphp originalphp andphp currentphp childrenphp arraysphp havephp differentphp sizephp thenphp childrenphp listphp wasphp updated
php php php php php php php php php php php php php$childListUpdatedphp php=php truephp;
php php php php php php php php php}php elsephp ifphp php(php php!php(arrayphp_keysphp(php$thisphp-php>php_originalNextListphp)php php=php=php=php arrayphp_keysphp(php$thisphp-php>nextphp)php)php php)php php{
php php php php php php php php php php php php php/php/php Ifphp originalphp andphp currentphp childrenphp arraysphp havephp differentphp keysphp php(withphp aphp glancephp tophp anphp orderphp)php thenphp childrenphp listphp wasphp updated
php php php php php php php php php php php php php$childListUpdatedphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>nextphp asphp php$keyphp php=php>php php$childActionphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_originalNextListphp[php$keyphp]php php!php=php=php php$childActionphp)php php{
php php php php php php php php php php php php php php php php php php php php php$childListUpdatedphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$childListUpdatedphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>touchphp(php)php;
php php php php php php php php php php php php switchphp php(countphp(php$thisphp-php>nextphp)php)php php{
php php php php php php php php php php php php php php php php casephp php0php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>Nextphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php php php php php$childphp php=php resetphp(php$thisphp-php>nextphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>Nextphp php=php php$childphp-php>dumpActionphp(php$factoryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Arrayphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php$pdfChildArrayphp php=php newphp Zendphp_Pdfphp_Elementphp_Arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>nextphp asphp php$childphp)php php{

php php php php php php php php php php php php php php php php php php php php php php php php php$pdfChildArrayphp-php>itemsphp[php]php php=php php$childphp-php>dumpActionphp(php$factoryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>Nextphp php=php php$pdfChildArrayphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>nextphp asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php$childphp-php>dumpActionphp(php$factoryphp,php php$processedActionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_actionDictionaryphp instanceofphp Zendphp_Pdfphp_Elementphp_Dictionaryphp)php php{
php php php php php php php php php php php php php/php/php Itphp'sphp aphp newlyphp createdphp actionphp.php Registerphp itphp withinphp objectphp factoryphp andphp returnphp indirectphp object
php php php php php php php php php php php php returnphp php$factoryphp-php>newObjectphp(php$thisphp-php>php_actionDictionaryphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Itphp'sphp aphp loadedphp object
php php php php php php php php php php php php returnphp php$thisphp-php>php_actionDictionaryphp;
php php php php php php php php php}
php php php php php}


php php php php php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/
php php php php php/php/php php RecursiveIteratorphp interfacephp methods
php php php php php/php/php/php/php/php/php/php/php/php/php/php/php/php/

php php php php php/php*php*
php php php php php php*php Returnsphp currentphp childphp actionphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Action
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>nextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp currentphp iteratorphp key
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>nextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Gophp tophp nextphp child
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php returnphp nextphp(php$thisphp-php>nextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp children
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php returnphp resetphp(php$thisphp-php>nextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp currentphp positionphp isphp valid
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>nextphp)php php!php=php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp childphp actionphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Actionphp|null
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>nextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp RecursiveIteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp boolphp php whetherphp containerphp hasphp anyphp pages
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>nextphp)php php>php php0php;
php php php php php}


php php php php php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/php/
php php php php php/php/php php Countablephp interfacephp methods
php php php php php/php/php/php/php/php/php/php/php/php/php/php/php/php/

php php php php php/php*php*
php php php php php php*php countphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>childOutlinesphp)php;
php php php php php}
php}
