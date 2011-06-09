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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php2php4php7php2php php2php0php1php0php-php0php6php-php2php0php php0php7php:php3php6php:php1php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Validatephp_Abstractphp implementsphp Zendphp_Validatephp_Interface
php{
php php php php php/php*php*
php php php php php php*php Thephp valuephp tophp bephp validated
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_valuephp;

php php php php php/php*php*
php php php php php php*php Additionalphp variablesphp availablephp forphp validationphp failurephp messages
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp validationphp failurephp messages
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messagesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Flagphp indidcatingphp whetherphp orphp notphp valuephp shouldphp bephp obfuscatedphp inphp error
php php php php php php*php messages
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_obscureValuephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp validationphp failurephp messagephp codes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php php@deprecatedphp Sincephp php1php.php5php.php0
php php php php php php*php/
php php php php protectedphp php$php_errorsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Translationphp object
php php php php php php*php php@varphp Zendphp_Translate
php php php php php php*php/
php php php php protectedphp php$php_translatorphp;

php php php php php/php*php*
php php php php php php*php Defaultphp translationphp objectphp forphp allphp validatephp objects
php php php php php php*php php@varphp Zendphp_Translate
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultTranslatorphp;

php php php php php/php*php*
php php php php php php*php Isphp translationphp disabledphp?
php php php php php php*php php@varphp Boolean
php php php php php php*php/
php php php php protectedphp php$php_translatorDisabledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Limitsphp thephp maximumphp returnedphp lengthphp ofphp aphp errorphp message
php php php php php php*
php php php php php php*php php@varphp Integer
php php php php php php*php/
php php php php protectedphp staticphp php$php_messageLengthphp php=php php-php1php;

php php php php php/php*php*
php php php php php php*php Returnsphp arrayphp ofphp validationphp failurephp messages
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessagesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp thephp namesphp ofphp variablesphp thatphp arephp usedphp inphp constructingphp validationphp failurephp messages
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessageVariablesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_messageVariablesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp messagephp templatesphp fromphp thephp validator
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessageTemplatesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messageTemplatesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp validationphp failurephp messagephp templatephp forphp aphp particularphp key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$messageString
php php php php php php*php php@paramphp php stringphp php$messageKeyphp php php php php OPTIONAL
php php php php php php*php php@returnphp Zendphp_Validatephp_Abstractphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setMessagephp(php$messageStringphp,php php$messageKeyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$messageKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$keysphp php=php arrayphp_keysphp(php$thisphp-php>php_messageTemplatesphp)php;
php php php php php php php php php php php php foreachphp(php$keysphp asphp php$keyphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMessagephp(php$messageStringphp,php php$keyphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_messageTemplatesphp[php$messageKeyphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Nophp messagephp templatephp existsphp forphp keyphp php'php$messageKeyphp'php"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_messageTemplatesphp[php$messageKeyphp]php php=php php$messageStringphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp validationphp failurephp messagephp templatesphp givenphp asphp anphp arrayphp,php wherephp thephp arrayphp keysphp arephp thephp messagephp keysphp,
php php php php php php*php andphp thephp arrayphp valuesphp arephp thephp messagephp templatephp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$messages
php php php php php php*php php@returnphp Zendphp_Validatephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setMessagesphp(arrayphp php$messagesphp)
php php php php php{
php php php php php php php php foreachphp php(php$messagesphp asphp php$keyphp php=php>php php$messagephp)php php{
php php php php php php php php php php php php php$thisphp-php>setMessagephp(php$messagephp,php php$keyphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp functionphp returnsphp thephp valuephp ofphp thephp requestedphp propertyphp,php ifphp andphp onlyphp ifphp itphp isphp thephp valuephp orphp a
php php php php php php*php messagephp variablephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$property
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)
php php php php php{
php php php php php php php php ifphp php(php$propertyphp php=php=php php'valuephp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$propertyphp,php php$thisphp-php>php_messageVariablesphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php{php$thisphp-php>php_messageVariablesphp[php$propertyphp]php}php;
php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Nophp propertyphp existsphp byphp thephp namephp php'php$propertyphp'php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructsphp andphp returnsphp aphp validationphp failurephp messagephp withphp thephp givenphp messagephp keyphp andphp valuephp.
php php php php php php*
php php php php php php*php Returnsphp nullphp ifphp andphp onlyphp ifphp php$messageKeyphp doesphp notphp correspondphp tophp anphp existingphp templatephp.
php php php php php php*
php php php php php php*php Ifphp aphp translatorphp isphp availablephp andphp aphp translationphp existsphp forphp php$messageKeyphp,
php php php php php php*php thephp translationphp willphp bephp usedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$messageKey
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_createMessagephp(php$messageKeyphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_messageTemplatesphp[php$messageKeyphp]php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$messagephp php=php php$thisphp-php>php_messageTemplatesphp[php$messageKeyphp]php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php)php)php php{
php php php php php php php php php php php php ifphp php(php$translatorphp-php>isTranslatedphp(php$messageKeyphp)php)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$translatorphp-php>translatephp(php$messageKeyphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$translatorphp-php>translatephp(php$messagephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_objectphp(php$valuephp)php)php php{
php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php'php_php_toStringphp'php,php getphp_classphp_methodsphp(php$valuephp)php)php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php getphp_classphp(php$valuephp)php php.php php'php objectphp'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$valuephp php=php php$valuephp-php>php_php_toStringphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$valuephp php=php php(stringphp)php$valuephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getObscureValuephp(php)php)php php{
php php php php php php php php php php php php php$valuephp php=php strphp_repeatphp(php'php*php'php,php strlenphp(php$valuephp)php)php;
php php php php php php php php php}

php php php php php php php php php$messagephp php=php strphp_replacephp(php'php%valuephp%php'php,php php(stringphp)php php$valuephp,php php$messagephp)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_messageVariablesphp asphp php$identphp php=php>php php$propertyphp)php php{
php php php php php php php php php php php php php$messagephp php=php strphp_replacephp(php"php%php$identphp%php"php,php php(stringphp)php php$thisphp-php>php$propertyphp,php php$messagephp)php;
php php php php php php php php php}

php php php php php php php php php$lengthphp php=php selfphp:php:getMessageLengthphp(php)php;
php php php php php php php php ifphp php(php(php$lengthphp php>php php-php1php)php php&php&php php(strlenphp(php$messagephp)php php>php php$lengthphp)php)php php{
php php php php php php php php php php php php php$messagephp php=php substrphp(php$messagephp,php php0php,php php(selfphp:php:getMessageLengthphp(php)php php-php php3php)php)php php.php php'php.php.php.php'php;
php php php php php php php php php}

php php php php php php php php returnphp php$messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$messageKey
php php php php php php*php php@paramphp php stringphp php$valuephp php php php php php OPTIONAL
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_errorphp(php$messageKeyphp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$messageKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$keysphp php=php arrayphp_keysphp(php$thisphp-php>php_messageTemplatesphp)php;
php php php php php php php php php php php php php$messageKeyphp php=php currentphp(php$keysphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_valuephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_errorsphp[php]php php php php php php php php php php php php php php php=php php$messageKeyphp;
php php php php php php php php php$thisphp-php>php_messagesphp[php$messageKeyphp]php php=php php$thisphp-php>php_createMessagephp(php$messageKeyphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp valuephp tophp bephp validatedphp andphp clearsphp thephp messagesphp andphp errorsphp arrays
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php php php php=php php$valuephp;
php php php php php php php php php$thisphp-php>php_messagesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_errorsphp php php php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp arrayphp ofphp validationphp failurephp messagephp codes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@deprecatedphp Sincephp php1php.php5php.php0
php php php php php php*php/
php php php php publicphp functionphp getErrorsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_errorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp valuephp shouldphp bephp obfuscatedphp inphp messages
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Validatephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setObscureValuephp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_obscureValuephp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp flagphp indicatingphp whetherphp orphp notphp valuephp shouldphp bephp obfuscatedphp in
php php php php php php*php messages
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getObscureValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_obscureValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp translationphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Translatephp|Zendphp_Translatephp_Adapterphp|nullphp php$translator
php php php php php php*php php@returnphp Zendphp_Validatephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setTranslatorphp(php$translatorphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$translatorphp)php php|php|php php(php$translatorphp instanceofphp Zendphp_Translatephp_Adapterphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatorphp;
php php php php php php php php php}php elseifphp php(php$translatorphp instanceofphp Zendphp_Translatephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatorphp-php>getAdapterphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp translatorphp specifiedphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp translationphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp|null
php php php php php php*php/
php php php php publicphp functionphp getTranslatorphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>translatorIsDisabledphp(php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_translatorphp)php php{
php php php php php php php php php php php php returnphp selfphp:php:getDefaultTranslatorphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thisphp validatorphp havephp itsphp ownphp specificphp translatorphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasTranslatorphp(php)
php php php php php{
php php php php php php php php returnphp php(boolphp)php$thisphp-php>php_translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp defaultphp translationphp objectphp forphp allphp validatephp objects
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Translatephp|Zendphp_Translatephp_Adapterphp|nullphp php$translator
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultTranslatorphp(php$translatorphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$translatorphp)php php|php|php php(php$translatorphp instanceofphp Zendphp_Translatephp_Adapterphp)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_defaultTranslatorphp php=php php$translatorphp;
php php php php php php php php php}php elseifphp php(php$translatorphp instanceofphp Zendphp_Translatephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_defaultTranslatorphp php=php php$translatorphp-php>getAdapterphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp translatorphp specifiedphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp defaultphp translationphp objectphp forphp allphp validatephp objects
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp|null
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultTranslatorphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_defaultTranslatorphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Translatephp'php)php)php php{
php php php php php php php php php php php php php php php php php$translatorphp php=php Zendphp_Registryphp:php:getphp(php'Zendphp_Translatephp'php)php;
php php php php php php php php php php php php php php php php ifphp php(php$translatorphp instanceofphp Zendphp_Translatephp_Adapterphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$translatorphp;
php php php php php php php php php php php php php php php php php}php elseifphp php(php$translatorphp instanceofphp Zendphp_Translatephp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$translatorphp-php>getAdapterphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_defaultTranslatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp therephp aphp defaultphp translationphp objectphp setphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp hasDefaultTranslatorphp(php)
php php php php php{
php php php php php php php php returnphp php(boolphp)selfphp:php:php$php_defaultTranslatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatephp whetherphp orphp notphp translationphp shouldphp bephp disabled
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Validatephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setDisableTranslatorphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_translatorDisabledphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp translationphp disabledphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp translatorIsDisabledphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_translatorDisabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp maximumphp allowedphp messagephp length
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp staticphp functionphp getMessageLengthphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_messageLengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maximumphp allowedphp messagephp length
php php php php php php*
php php php php php php*php php@paramphp integerphp php$length
php php php php php php*php/
php php php php publicphp staticphp functionphp setMessageLengthphp(php$lengthphp php=php php-php1php)
php php php php php{
php php php php php php php php selfphp:php:php$php_messageLengthphp php=php php$lengthphp;
php php php php php}
php}
