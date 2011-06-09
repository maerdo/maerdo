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
php php*php php@versionphp php php php php$Idphp:php Validatephp.phpphp php2php1php3php3php9php php2php0php1php0php-php0php3php-php0php5php php1php5php:php3php2php:php2php5Zphp thomasphp php$
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
classphp Zendphp_Validatephp implementsphp Zendphp_Validatephp_Interface
php{
php php php php php/php*php*
php php php php php php*php Validatorphp chain
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_validatorsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp validationphp failurephp messages
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messagesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Defaultphp Namespaces
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultNamespacesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp validationphp failurephp messagephp codes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php php@deprecatedphp Sincephp php1php.php5php.php0
php php php php php php*php/
php php php php protectedphp php$php_errorsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Addsphp aphp validatorphp tophp thephp endphp ofphp thephp chain
php php php php php php*
php php php php php php*php Ifphp php$breakChainOnFailurephp isphp truephp,php thenphp ifphp thephp validatorphp failsphp,php thephp nextphp validatorphp inphp thephp chainphp,
php php php php php php*php ifphp onephp existsphp,php willphp notphp bephp executedphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Validatephp_Interfacephp php$validator
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php php php php php$breakChainOnFailure
php php php php php php*php php@returnphp Zendphp_Validatephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addValidatorphp(Zendphp_Validatephp_Interfacephp php$validatorphp,php php$breakChainOnFailurephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_validatorsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php'instancephp'php php=php>php php$validatorphp,
php php php php php php php php php php php php php'breakChainOnFailurephp'php php=php>php php(booleanphp)php php$breakChainOnFailure
php php php php php php php php php php php php php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp passesphp allphp validationsphp inphp thephp chain
php php php php php php*
php php php php php php*php Validatorsphp arephp runphp inphp thephp orderphp inphp whichphp theyphp werephp addedphp tophp thephp chainphp php(FIFOphp)php.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_messagesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_errorsphp php php php=php arrayphp(php)php;
php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_validatorsphp asphp php$elementphp)php php{
php php php php php php php php php php php php php$validatorphp php=php php$elementphp[php'instancephp'php]php;
php php php php php php php php php php php php ifphp php(php$validatorphp-php>isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resultphp php=php falsephp;
php php php php php php php php php php php php php$messagesphp php=php php$validatorphp-php>getMessagesphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_messagesphp php=php arrayphp_mergephp(php$thisphp-php>php_messagesphp,php php$messagesphp)php;
php php php php php php php php php php php php php$thisphp-php>php_errorsphp php php php=php arrayphp_mergephp(php$thisphp-php>php_errorsphp,php php php arrayphp_keysphp(php$messagesphp)php)php;
php php php php php php php php php php php php ifphp php(php$elementphp[php'breakChainOnFailurephp'php]php)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp arrayphp ofphp validationphp failurephp messages
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessagesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_messagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
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
php php php php php php*php Returnsphp thephp setphp defaultphp namespaces
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultNamespacesphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultNamespacesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp newphp defaultphp namespaces
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$namespace
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultNamespacesphp(php$namespacephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$namespacephp php=php arrayphp(php(stringphp)php php$namespacephp)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_defaultNamespacesphp php=php php$namespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp newphp defaultphp namespace
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$namespace
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp addDefaultNamespacesphp(php$namespacephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$namespacephp php=php arrayphp(php(stringphp)php php$namespacephp)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_defaultNamespacesphp php=php arrayphp_uniquephp(arrayphp_mergephp(selfphp:php:php$php_defaultNamespacesphp,php php$namespacephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp whenphp defaultNamespacesphp arephp set
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp hasDefaultNamespacesphp(php)
php php php php php{
php php php php php php php php returnphp php(php!emptyphp(selfphp:php:php$php_defaultNamespacesphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php mixedphp php php php php$value
php php php php php php*php php@paramphp php stringphp php php php$classBaseName
php php php php php php*php php@paramphp php arrayphp php php php php$argsphp php php php php php php php php php OPTIONAL
php php php php php php*php php@paramphp php mixedphp php php php php$namespacesphp php php php OPTIONAL
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp isphp(php$valuephp,php php$classBaseNamephp,php arrayphp php$argsphp php=php arrayphp(php)php,php php$namespacesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$namespacesphp php=php arrayphp_mergephp(php(arrayphp)php php$namespacesphp,php selfphp:php:php$php_defaultNamespacesphp,php arrayphp(php'Zendphp_Validatephp'php)php)php;
php php php php php php php php php$classNamephp php php=php ucfirstphp(php$classBaseNamephp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$classNamephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php foreachphp(php$namespacesphp asphp php$namespacephp)php php{
php php php php php php php php php php php php php php php php php php php php php$classphp php=php php$namespacephp php.php php'php_php'php php.php php$classNamephp;
php php php php php php php php php php php php php php php php php php php php php$filephp php php=php strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$classphp)php php.php php'php.phpphp'php;
php php php php php php php php php php php php php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$classNamephp php=php php$classphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$classphp php=php newphp ReflectionClassphp(php$classNamephp)php;
php php php php php php php php php php php php ifphp php(php$classphp-php>implementsInterfacephp(php'Zendphp_Validatephp_Interfacephp'php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$classphp-php>hasMethodphp(php'php_php_constructphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$keysphp php php php php=php arrayphp_keysphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php php php php php$numericphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php foreachphp(php$keysphp asphp php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$numericphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$numericphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$objectphp php=php php$classphp-php>newInstanceArgsphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$objectphp php=php php$classphp-php>newInstancephp(php$argsphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$objectphp php=php php$classphp-php>newInstancephp(php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$objectphp-php>isValidphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Zendphp_Validatephp_Exceptionphp php$zephp)php php{
php php php php php php php php php php php php php/php/php ifphp therephp isphp anphp exceptionphp whilephp validatingphp throwphp it
php php php php php php php php php php php php throwphp php$zephp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php fallthroughphp andphp continuephp forphp missingphp validationphp classes
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Validatephp classphp notphp foundphp fromphp basenamephp php'php$classBaseNamephp'php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp maximumphp allowedphp messagephp length
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp staticphp functionphp getMessageLengthphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Validatephp_Abstractphp:php:getMessageLengthphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maximumphp allowedphp messagephp length
php php php php php php*
php php php php php php*php php@paramphp integerphp php$length
php php php php php php*php/
php php php php publicphp staticphp functionphp setMessageLengthphp(php$lengthphp php=php php-php1php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;
php php php php php php php php Zendphp_Validatephp_Abstractphp:php:setMessageLengthphp(php$lengthphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp defaultphp translationphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp|null
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultTranslatorphp(php$translatorphp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Validatephp_Abstractphp:php:getDefaultTranslatorphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp defaultphp translationphp objectphp forphp allphp validationphp objects
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Translatephp|Zendphp_Translatephp_Adapterphp|nullphp php$translator
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultTranslatorphp(php$translatorphp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;
php php php php php php php php Zendphp_Validatephp_Abstractphp:php:setDefaultTranslatorphp(php$translatorphp)php;
php php php php php}
php}
