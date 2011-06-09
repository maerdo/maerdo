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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Inputphp.phpphp php2php2php4php7php2php php2php0php1php0php-php0php6php-php2php0php php0php7php:php3php6php:php1php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Filter
php php*php/
requirephp_oncephp php'Zendphp/Filterphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Validate
php php*php/
requirephp_oncephp php'Zendphp/Validatephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Input
php{

php php php php constphp ALLOWphp_EMPTYphp php php php php php php php php php php php=php php'allowEmptyphp'php;
php php php php constphp BREAKphp_CHAINphp php php php php php php php php php php php=php php'breakChainOnFailurephp'php;
php php php php constphp DEFAULTphp_VALUEphp php php php php php php php php php=php php'defaultphp'php;
php php php php constphp MESSAGESphp php php php php php php php php php php php php php php=php php'messagesphp'php;
php php php php constphp ESCAPEphp_FILTERphp php php php php php php php php php=php php'escapeFilterphp'php;
php php php php constphp FIELDSphp php php php php php php php php php php php php php php php php=php php'fieldsphp'php;
php php php php constphp FILTERphp php php php php php php php php php php php php php php php php=php php'filterphp'php;
php php php php constphp FILTERphp_CHAINphp php php php php php php php php php php=php php'filterChainphp'php;
php php php php constphp MISSINGphp_MESSAGEphp php php php php php php php=php php'missingMessagephp'php;
php php php php constphp INPUTphp_NAMESPACEphp php php php php php php php=php php'inputNamespacephp'php;
php php php php constphp VALIDATORphp_NAMESPACEphp php php php=php php'validatorNamespacephp'php;
php php php php constphp FILTERphp_NAMESPACEphp php php php php php php=php php'filterNamespacephp'php;
php php php php constphp NOTphp_EMPTYphp_MESSAGEphp php php php php php=php php'notEmptyMessagephp'php;
php php php php constphp PRESENCEphp php php php php php php php php php php php php php php=php php'presencephp'php;
php php php php constphp PRESENCEphp_OPTIONALphp php php php php php=php php'optionalphp'php;
php php php php constphp PRESENCEphp_REQUIREDphp php php php php php=php php'requiredphp'php;
php php php php constphp RULEphp php php php php php php php php php php php php php php php php php php=php php'rulephp'php;
php php php php constphp RULEphp_WILDCARDphp php php php php php php php php php=php php'php*php'php;
php php php php constphp VALIDATEphp php php php php php php php php php php php php php php=php php'validatephp'php;
php php php php constphp VALIDATORphp php php php php php php php php php php php php php=php php'validatorphp'php;
php php php php constphp VALIDATORphp_CHAINphp php php php php php php php=php php'validatorChainphp'php;
php php php php constphp VALIDATORphp_CHAINphp_COUNTphp php=php php'validatorChainCountphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Inputphp dataphp,php beforephp processingphp.
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Associationphp ofphp rulesphp tophp filtersphp.
php php php php php php*php/
php php php php protectedphp php$php_filterRulesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Associationphp ofphp rulesphp tophp validatorsphp.
php php php php php php*php/
php php php php protectedphp php$php_validatorRulesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Afterphp processingphp dataphp,php thisphp containsphp mappingphp ofphp validphp fields
php php php php php php*php tophp fieldphp valuesphp.
php php php php php php*php/
php php php php protectedphp php$php_validFieldsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Afterphp processingphp dataphp,php thisphp containsphp mappingphp ofphp validation
php php php php php php*php rulesphp thatphp didphp notphp passphp validationphp tophp thephp arrayphp ofphp messagesphp returned
php php php php php php*php byphp thephp validatorphp chainphp.
php php php php php php*php/
php php php php protectedphp php$php_invalidMessagesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Afterphp processingphp dataphp,php thisphp containsphp mappingphp ofphp validation
php php php php php php*php rulesphp thatphp didphp notphp passphp validationphp tophp thephp arrayphp ofphp errorphp identifiers
php php php php php php*php returnedphp byphp thephp validatorphp chainphp.
php php php php php php*php/
php php php php protectedphp php$php_invalidErrorsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Afterphp processingphp dataphp,php thisphp containsphp mappingphp ofphp validation
php php php php php php*php rulesphp inphp whichphp somephp fieldsphp werephp missingphp tophp thephp arrayphp ofphp messages
php php php php php php*php indicatingphp whichphp fieldsphp werephp missingphp.
php php php php php php*php/
php php php php protectedphp php$php_missingFieldsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Afterphp processingphp,php thisphp containsphp aphp copyphp ofphp php$php_dataphp elements
php php php php php php*php thatphp werephp notphp mentionedphp inphp anyphp validationphp rulephp.
php php php php php php*php/
php php php php protectedphp php$php_unknownFieldsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Filterphp_Interfacephp Thephp filterphp objectphp thatphp isphp runphp onphp values
php php php php php php*php returnedphp byphp thephp getEscapedphp(php)php methodphp.
php php php php php php*php/
php php php php protectedphp php$php_defaultEscapeFilterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Pluginphp loaders
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_loadersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Defaultphp valuesphp tophp usephp whenphp processingphp filtersphp andphp validatorsphp.
php php php php php php*php/
php php php php protectedphp php$php_defaultsphp php=php arrayphp(
php php php php php php php php selfphp:php:ALLOWphp_EMPTYphp php php php php php php php php php=php>php falsephp,
php php php php php php php php selfphp:php:BREAKphp_CHAINphp php php php php php php php php php=php>php falsephp,
php php php php php php php php selfphp:php:ESCAPEphp_FILTERphp php php php php php php php=php>php php'HtmlEntitiesphp'php,
php php php php php php php php selfphp:php:MISSINGphp_MESSAGEphp php php php php php=php>php php"Fieldphp php'php%fieldphp%php'php isphp requiredphp byphp rulephp php'php%rulephp%php'php,php butphp thephp fieldphp isphp missingphp"php,
php php php php php php php php selfphp:php:NOTphp_EMPTYphp_MESSAGEphp php php php=php>php php"Youphp mustphp givephp aphp nonphp-emptyphp valuephp forphp fieldphp php'php%fieldphp%php'php"php,
php php php php php php php php selfphp:php:PRESENCEphp php php php php php php php php php php php php=php>php selfphp:php:PRESENCEphp_OPTIONAL
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp booleanphp Setphp tophp Falsephp initiallyphp,php thisphp isphp setphp tophp Truephp afterphp the
php php php php php php*php inputphp dataphp havephp beenphp processedphp.php php Resetphp tophp Falsephp inphp setDataphp(php)php methodphp.
php php php php php php*php/
php php php php protectedphp php$php_processedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Translationphp object
php php php php php php*php php@varphp Zendphp_Translate
php php php php php php*php/
php php php php protectedphp php$php_translatorphp;

php php php php php/php*php*
php php php php php php*php Isphp translationphp disabledphp?
php php php php php php*php php@varphp Boolean
php php php php php php*php/
php php php php protectedphp php$php_translatorDisabledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@paramphp arrayphp php$filterRules
php php php php php php*php php@paramphp arrayphp php$validatorRules
php php php php php php*php php@paramphp arrayphp php$dataphp php php php php php php OPTIONAL
php php php php php php*php php@paramphp arrayphp php$optionsphp php php php OPTIONAL
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$filterRulesphp,php php$validatorRulesphp,php arrayphp php$dataphp php=php nullphp,php arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_filterRulesphp php=php php(arrayphp)php php$filterRulesphp;
php php php php php php php php php$thisphp-php>php_validatorRulesphp php=php php(arrayphp)php php$validatorRulesphp;

php php php php php php php php ifphp php(php$dataphp)php php{
php php php php php php php php php php php php php$thisphp-php>setDataphp(php$dataphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp mixedphp php$namespaces
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
php php php php php php*php php@deprecatedphp sincephp php1php.php5php.php0RCphp1php php-php usephp addFilterPrefixPathphp(php)php orphp addValidatorPrefixPathphp insteadphp.
php php php php php php*php/
php php php php publicphp functionphp addNamespacephp(php$namespacesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$namespacesphp)php)php php{
php php php php php php php php php php php php php$namespacesphp php=php arrayphp(php$namespacesphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$namespacesphp asphp php$namespacephp)php php{
php php php php php php php php php php php php php$prefixphp php=php php$namespacephp;
php php php php php php php php php php php php php$pathphp php=php strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$prefixphp)php;
php php php php php php php php php php php php php$thisphp-php>addFilterPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php php php php php$thisphp-php>addValidatorPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp prefixphp pathphp forphp allphp elements
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
php php php php php php*php/
php php php php publicphp functionphp addFilterPrefixPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>getPluginLoaderphp(selfphp:php:FILTERphp)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp prefixphp pathphp forphp allphp elements
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
php php php php php php*php/
php php php php publicphp functionphp addValidatorPrefixPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>getPluginLoaderphp(selfphp:php:VALIDATEphp)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp pluginphp loadersphp forphp usephp withphp decoratorsphp andphp elements
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loader
php php php php php php*php php@paramphp php stringphp php$typephp php'filterphp'php orphp php'validatephp'
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exceptionphp onphp invalidphp type
php php php php php php*php/
php php php php publicphp functionphp setPluginLoaderphp(Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loaderphp,php php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtolowerphp(php$typephp)php;
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp selfphp:php:FILTERphp:
php php php php php php php php php php php php casephp selfphp:php:VALIDATEphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_loadersphp[php$typephp]php php=php php$loaderphp;
php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(sprintfphp(php'Invalidphp typephp php"php%sphp"php providedphp tophp setPluginLoaderphp(php)php'php,php php$typephp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp pluginphp loaderphp forphp givenphp type
php php php php php php*
php php php php php php*php php$typephp mayphp bephp onephp ofphp:
php php php php php php*php php-php filter
php php php php php php*php php-php validator
php php php php php php*
php php php php php php*php Ifphp aphp pluginphp loaderphp doesphp notphp existphp forphp thephp givenphp typephp,php defaultsphp are
php php php php php php*php createdphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp php'filterphp'php orphp php'validatephp'
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoaderphp_Interface
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exceptionphp onphp invalidphp type
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtolowerphp(php$typephp)php;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_loadersphp[php$typephp]php)php)php php{
php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:FILTERphp:
php php php php php php php php php php php php php php php php php php php php php$prefixSegmentphp php=php php'Zendphp_Filterphp_php'php;
php php php php php php php php php php php php php php php php php php php php php$pathSegmentphp php php php=php php'Zendphp/Filterphp/php'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:VALIDATEphp:
php php php php php php php php php php php php php php php php php php php php php$prefixSegmentphp php=php php'Zendphp_Validatephp_php'php;
php php php php php php php php php php php php php php php php php php php php php$pathSegmentphp php php php=php php'Zendphp/Validatephp/php'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(sprintfphp(php'Invalidphp typephp php"php%sphp"php providedphp tophp getPluginLoaderphp(php)php'php,php php$typephp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_loadersphp[php$typephp]php php=php newphp Zendphp_Loaderphp_PluginLoaderphp(
php php php php php php php php php php php php php php php php arrayphp(php$prefixSegmentphp php=php>php php$pathSegmentphp)
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_loadersphp[php$typephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessagesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp arrayphp_mergephp(php$thisphp-php>php_invalidMessagesphp,php php$thisphp-php>php_missingFieldsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getErrorsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_invalidErrorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getInvalidphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_invalidMessagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMissingphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_missingFieldsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getUnknownphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_unknownFieldsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$fieldNamephp OPTIONAL
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getEscapedphp(php$fieldNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php php$thisphp-php>php_getDefaultEscapeFilterphp(php)php;

php php php php php php php php ifphp php(php$fieldNamephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_escapeRecursivephp(php$thisphp-php>php_validFieldsphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$fieldNamephp,php php$thisphp-php>php_validFieldsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_escapeRecursivephp(php$thisphp-php>php_validFieldsphp[php$fieldNamephp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php protectedphp functionphp php_escapeRecursivephp(php$dataphp)
php php php php php{
php php php php php php php php ifphp(php$dataphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$dataphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_getDefaultEscapeFilterphp(php)php-php>filterphp(php$dataphp)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$dataphp asphp php&php$elementphp)php php{
php php php php php php php php php php php php php$elementphp php=php php$thisphp-php>php_escapeRecursivephp(php$elementphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$fieldNamephp OPTIONAL
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getUnescapedphp(php$fieldNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php ifphp php(php$fieldNamephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_validFieldsphp;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$fieldNamephp,php php$thisphp-php>php_validFieldsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_validFieldsphp[php$fieldNamephp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$fieldNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getEscapedphp(php$fieldNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasInvalidphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp php!php(emptyphp(php$thisphp-php>php_invalidMessagesphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasMissingphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp php!php(emptyphp(php$thisphp-php>php_missingFieldsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasUnknownphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp php!php(emptyphp(php$thisphp-php>php_unknownFieldsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasValidphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp php!php(emptyphp(php$thisphp-php>php_validFieldsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$fieldNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php ifphp php(php$fieldNamephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php!php(php$thisphp-php>hasMissingphp(php)php php|php|php php$thisphp-php>hasInvalidphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$fieldNamephp,php php$thisphp-php>php_validFieldsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$fieldName
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$fieldNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php returnphp issetphp(php$thisphp-php>php_validFieldsphp[php$fieldNamephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php/
php php php php publicphp functionphp processphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_processphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>hasInvalidphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Inputphp hasphp invalidphp fieldsphp"php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>hasMissingphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Inputphp hasphp missingphp fieldsphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp arrayphp php$data
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
php php php php php php*php/
php php php php publicphp functionphp setDataphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php php$dataphp;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Resetphp tophp initialphp state
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_validFieldsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_invalidMessagesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_invalidErrorsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_missingFieldsphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_unknownFieldsphp php=php arrayphp(php)php;

php php php php php php php php php$thisphp-php>php_processedphp php=php falsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp mixedphp php$escapeFilter
php php php php php php*php php@returnphp Zendphp_Filterphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setDefaultEscapeFilterphp(php$escapeFilterphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$escapeFilterphp)php php|php|php isphp_arrayphp(php$escapeFilterphp)php)php php{
php php php php php php php php php php php php php$escapeFilterphp php=php php$thisphp-php>php_getFilterphp(php$escapeFilterphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$escapeFilterphp instanceofphp Zendphp_Filterphp_Interfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Escapephp filterphp specifiedphp doesphp notphp implementphp Zendphp_Filterphp_Interfacephp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_defaultEscapeFilterphp php=php php$escapeFilterphp;
php php php php php php php php returnphp php$escapeFilterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exceptionphp ifphp anphp unknownphp optionphp isphp given
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(php$optionphp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:ESCAPEphp_FILTERphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setDefaultEscapeFilterphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:INPUTphp_NAMESPACEphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addNamespacephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:VALIDATORphp_NAMESPACEphp:
php php php php php php php php php php php php php php php php php php php php ifphp(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php foreachphp(php$valuephp ASphp php$prefixphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addValidatorPrefixPathphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$prefixphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$prefixphp)
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:FILTERphp_NAMESPACEphp:
php php php php php php php php php php php php php php php php php php php php ifphp(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php foreachphp(php$valuephp ASphp php$prefixphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addFilterPrefixPathphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$prefixphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$prefixphp)
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:ALLOWphp_EMPTYphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:BREAKphp_CHAINphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:MISSINGphp_MESSAGEphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:NOTphp_EMPTYphp_MESSAGEphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:PRESENCEphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_defaultsphp[php$optionphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Unknownphp optionphp php'php$optionphp'php"php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp translationphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Translatephp|Zendphp_Translatephp_Adapterphp|nullphp php$translator
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
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

php php php php php php php php ifphp php(php$thisphp-php>php_translatorphp php=php=php=php nullphp)php php{
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

php php php php php php php php returnphp php$thisphp-php>php_translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatephp whetherphp orphp notphp translationphp shouldphp bephp disabled
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Filterphp_Input
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

php php php php php/php*
php php php php php php*php Protectedphp methods
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_filterphp(php)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_filterRulesphp asphp php$ruleNamephp php=php>php php&php$filterRulephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Makephp surephp wephp havephp anphp arrayphp representingphp thisphp filterphp chainphp.
php php php php php php php php php php php php php php*php Donphp'tphp typecastphp tophp php(arrayphp)php becausephp itphp mightphp bephp aphp Zendphp_Filterphp object
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$filterRulephp)php)php php{
php php php php php php php php php php php php php php php php php$filterRulephp php=php arrayphp(php$filterRulephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Filtersphp arephp indexedphp byphp integerphp,php metacommandsphp arephp indexedphp byphp stringphp.
php php php php php php php php php php php php php php*php Pickphp outphp thephp filtersphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$filterListphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$filterRulephp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_intphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$filterListphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Usephp defaultsphp forphp filterphp metacommandsphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$filterRulephp[selfphp:php:RULEphp]php php=php php$ruleNamephp;
php php php php php php php php php php php php ifphp php(php!issetphp(php$filterRulephp[selfphp:php:FIELDSphp]php)php)php php{
php php php php php php php php php php php php php php php php php$filterRulephp[selfphp:php:FIELDSphp]php php=php php$ruleNamephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Loadphp allphp thephp filterphp classesphp andphp addphp themphp tophp thephp chainphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php!issetphp(php$filterRulephp[selfphp:php:FILTERphp_CHAINphp]php)php)php php{
php php php php php php php php php php php php php php php php php$filterRulephp[selfphp:php:FILTERphp_CHAINphp]php php=php newphp Zendphp_Filterphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$filterListphp asphp php$filterphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$filterphp)php php|php|php isphp_arrayphp(php$filterphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filterphp php=php php$thisphp-php>php_getFilterphp(php$filterphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$filterRulephp[selfphp:php:FILTERphp_CHAINphp]php-php>addFilterphp(php$filterphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Ifphp thephp ruleNamephp isphp thephp specialphp wildcardphp rulephp,
php php php php php php php php php php php php php php*php thenphp applyphp thephp filterphp chainphp tophp allphp inputphp dataphp.
php php php php php php php php php php php php php php*php Elsephp justphp processphp thephp fieldphp namedphp byphp thephp rulephp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php$ruleNamephp php=php=php selfphp:php:RULEphp_WILDCARDphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(arrayphp_keysphp(php$thisphp-php>php_dataphp)php asphp php$fieldphp)php php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filterRulephp(arrayphp_mergephp(php$filterRulephp,php arrayphp(selfphp:php:FIELDSphp php=php>php php$fieldphp)php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_filterRulephp(php$filterRulephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp arrayphp php$filterRule
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_filterRulephp(arrayphp php$filterRulephp)
php php php php php{
php php php php php php php php php$fieldphp php=php php$filterRulephp[selfphp:php:FIELDSphp]php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$fieldphp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_dataphp[php$fieldphp]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_dataphp[php$fieldphp]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$fieldphp]php[php$keyphp]php php=php php$filterRulephp[selfphp:php:FILTERphp_CHAINphp]php-php>filterphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$fieldphp]php php=
php php php php php php php php php php php php php php php php php$filterRulephp[selfphp:php:FILTERphp_CHAINphp]php-php>filterphp(php$thisphp-php>php_dataphp[php$fieldphp]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Filterphp_Interface
php php php php php php*php/
php php php php protectedphp functionphp php_getDefaultEscapeFilterphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_defaultEscapeFilterphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_defaultEscapeFilterphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>setDefaultEscapeFilterphp(php$thisphp-php>php_defaultsphp[selfphp:php:ESCAPEphp_FILTERphp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$rule
php php php php php php*php php@paramphp stringphp php$field
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getMissingMessagephp(php$rulephp,php php$fieldphp)
php php php php php{
php php php php php php php php php$messagephp php=php php$thisphp-php>php_defaultsphp[selfphp:php:MISSINGphp_MESSAGEphp]php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php)php)php php{
php php php php php php php php php php php php ifphp php(php$translatorphp-php>isTranslatedphp(selfphp:php:MISSINGphp_MESSAGEphp)php)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$translatorphp-php>translatephp(selfphp:php:MISSINGphp_MESSAGEphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$translatorphp-php>translatephp(php$messagephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$messagephp php=php strphp_replacephp(php'php%rulephp%php'php,php php$rulephp,php php$messagephp)php;
php php php php php php php php php$messagephp php=php strphp_replacephp(php'php%fieldphp%php'php,php php$fieldphp,php php$messagephp)php;
php php php php php php php php returnphp php$messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getNotEmptyMessagephp(php$rulephp,php php$fieldphp)
php php php php php{
php php php php php php php php php$messagephp php=php php$thisphp-php>php_defaultsphp[selfphp:php:NOTphp_EMPTYphp_MESSAGEphp]php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php)php)php php{
php php php php php php php php php php php php ifphp php(php$translatorphp-php>isTranslatedphp(selfphp:php:NOTphp_EMPTYphp_MESSAGEphp)php)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$translatorphp-php>translatephp(selfphp:php:NOTphp_EMPTYphp_MESSAGEphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$messagephp php=php php$translatorphp-php>translatephp(php$messagephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$messagephp php=php strphp_replacephp(php'php%rulephp%php'php,php php$rulephp,php php$messagephp)php;
php php php php php php php php php$messagephp php=php strphp_replacephp(php'php%fieldphp%php'php,php php$fieldphp,php php$messagephp)php;
php php php php php php php php returnphp php$messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_processphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_processedphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_filterphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_validatephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_processedphp php=php truephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_validatephp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Specialphp casephp:php ifphp therephp arephp nophp validatorsphp,php treatphp allphp fieldsphp asphp validphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!php$thisphp-php>php_validatorRulesphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_validFieldsphp php=php php$thisphp-php>php_dataphp;
php php php php php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_validatorRulesphp asphp php$ruleNamephp php=php>php php&php$validatorRulephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Makephp surephp wephp havephp anphp arrayphp representingphp thisphp validatorphp chainphp.
php php php php php php php php php php php php php php*php Donphp'tphp typecastphp tophp php(arrayphp)php becausephp itphp mightphp bephp aphp Zendphp_Validatephp object
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$validatorRulephp)php)php php{
php php php php php php php php php php php php php php php php php$validatorRulephp php=php arrayphp(php$validatorRulephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Validatorsphp arephp indexedphp byphp integerphp,php metacommandsphp arephp indexedphp byphp stringphp.
php php php php php php php php php php php php php php*php Pickphp outphp thephp validatorsphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$validatorListphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$validatorRulephp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_intphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$validatorListphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Usephp defaultsphp forphp validationphp metacommandsphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$validatorRulephp[selfphp:php:RULEphp]php php=php php$ruleNamephp;
php php php php php php php php php php php php ifphp php(php!issetphp(php$validatorRulephp[selfphp:php:FIELDSphp]php)php)php php{
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:FIELDSphp]php php=php php$ruleNamephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!issetphp(php$validatorRulephp[selfphp:php:BREAKphp_CHAINphp]php)php)php php{
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:BREAKphp_CHAINphp]php php=php php$thisphp-php>php_defaultsphp[selfphp:php:BREAKphp_CHAINphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!issetphp(php$validatorRulephp[selfphp:php:PRESENCEphp]php)php)php php{
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:PRESENCEphp]php php=php php$thisphp-php>php_defaultsphp[selfphp:php:PRESENCEphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!issetphp(php$validatorRulephp[selfphp:php:ALLOWphp_EMPTYphp]php)php)php php{
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:ALLOWphp_EMPTYphp]php php=php php$thisphp-php>php_defaultsphp[selfphp:php:ALLOWphp_EMPTYphp]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!issetphp(php$validatorRulephp[selfphp:php:MESSAGESphp]php)php)php php{
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:MESSAGESphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$validatorRulephp[selfphp:php:MESSAGESphp]php)php)php php{
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:MESSAGESphp]php php=php arrayphp(php$validatorRulephp[selfphp:php:MESSAGESphp]php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(arrayphp_intersectphp_keyphp(php$validatorListphp,php php$validatorRulephp[selfphp:php:MESSAGESphp]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Therephp arephp nowphp correspondingphp numericphp keysphp inphp thephp validationphp rulephp messagesphp array
php php php php php php php php php php php php php php php php php/php/php Treatphp itphp asphp aphp namedphp messagesphp listphp forphp allphp rulephp validators
php php php php php php php php php php php php php php php php php$unifiedMessagesphp php=php php$validatorRulephp[selfphp:php:MESSAGESphp]php;
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:MESSAGESphp]php php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$validatorListphp asphp php$keyphp php=php>php php$validatorphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$unifiedMessagesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:MESSAGESphp]php[php$keyphp]php php=php php$unifiedMessagesphp[php$keyphp]php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Loadphp allphp thephp validatorphp classesphp andphp addphp themphp tophp thephp chainphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php!issetphp(php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp]php)php)php php{
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp]php php=php newphp Zendphp_Validatephp(php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$validatorListphp asphp php$keyphp php=php>php php$validatorphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$validatorphp)php php|php|php isphp_arrayphp(php$validatorphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$validatorphp php=php php$thisphp-php>php_getValidatorphp(php$validatorphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$validatorRulephp[selfphp:php:MESSAGESphp]php[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php php$validatorRulephp[selfphp:php:MESSAGESphp]php[php$keyphp]php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$validatorphp-php>setMessagesphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$validatorphp-php>setMessagephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$validatorphp instanceofphp Zendphp_Validatephp_NotEmptyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_defaultsphp[selfphp:php:NOTphp_EMPTYphp_MESSAGEphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp]php-php>addValidatorphp(php$validatorphp,php php$validatorRulephp[selfphp:php:BREAKphp_CHAINphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp_COUNTphp]php php=php countphp(php$validatorListphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Ifphp thephp ruleNamephp isphp thephp specialphp wildcardphp rulephp,
php php php php php php php php php php php php php php*php thenphp applyphp thephp validatorphp chainphp tophp allphp inputphp dataphp.
php php php php php php php php php php php php php php*php Elsephp justphp processphp thephp fieldphp namedphp byphp thephp rulephp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(php$ruleNamephp php=php=php selfphp:php:RULEphp_WILDCARDphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(arrayphp_keysphp(php$thisphp-php>php_dataphp)php asphp php$fieldphp)php php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_validateRulephp(arrayphp_mergephp(php$validatorRulephp,php arrayphp(selfphp:php:FIELDSphp php=php>php php$fieldphp)php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_validateRulephp(php$validatorRulephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Unsetphp fieldsphp inphp php$php_dataphp thatphp havephp beenphp addedphp tophp otherphp arraysphp.
php php php php php php php php php php*php Wephp havephp tophp waitphp untilphp allphp rulesphp havephp beenphp processedphp because
php php php php php php php php php php*php aphp givenphp fieldphp mayphp bephp referencedphp byphp multiplephp rulesphp.
php php php php php php php php php php*php/
php php php php php php php php foreachphp php(arrayphp_mergephp(arrayphp_keysphp(php$thisphp-php>php_missingFieldsphp)php,php arrayphp_keysphp(php$thisphp-php>php_invalidMessagesphp)php)php asphp php$rulephp)php php{
php php php php php php php php php php php php foreachphp php(php(arrayphp)php php$thisphp-php>php_validatorRulesphp[php$rulephp]php[selfphp:php:FIELDSphp]php asphp php$fieldphp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_dataphp[php$fieldphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_validFieldsphp asphp php$fieldphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_dataphp[php$fieldphp]php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Anythingphp leftphp overphp inphp php$php_dataphp isphp anphp unknownphp fieldphp.
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_unknownFieldsphp php=php php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp arrayphp php$validatorRule
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_validateRulephp(arrayphp php$validatorRulephp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Getphp onephp orphp morephp dataphp valuesphp fromphp inputphp,php andphp checkphp forphp missingphp fieldsphp.
php php php php php php php php php php*php Applyphp defaultsphp ifphp fieldsphp arephp missingphp.
php php php php php php php php php php*php/
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php(arrayphp)php php$validatorRulephp[selfphp:php:FIELDSphp]php asphp php$keyphp php=php>php php$fieldphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$fieldphp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php php php php php php$dataphp[php$fieldphp]php php=php php$thisphp-php>php_dataphp[php$fieldphp]php;
php php php php php php php php php php php php php}php elsephp ifphp php(issetphp(php$validatorRulephp[selfphp:php:DEFAULTphp_VALUEphp]php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@todophp accordingphp tophp thisphp codephp defaultphp valuephp canphp'tphp bephp anphp arrayphp.php Itphp hasphp tophp bephp reviewedphp php*php/
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$validatorRulephp[selfphp:php:DEFAULTphp_VALUEphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Defaultphp valuephp isphp aphp scalar
php php php php php php php php php php php php php php php php php php php php php$dataphp[php$fieldphp]php php=php php$validatorRulephp[selfphp:php:DEFAULTphp_VALUEphp]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php Defaultphp valuephp isphp anphp arrayphp.php Searchphp forphp correspondingphp key
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$validatorRulephp[selfphp:php:DEFAULTphp_VALUEphp]php[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp[php$fieldphp]php php=php php$validatorRulephp[selfphp:php:DEFAULTphp_VALUEphp]php[php$keyphp]php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$validatorRulephp[selfphp:php:PRESENCEphp]php php=php=php selfphp:php:PRESENCEphp_REQUIREDphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Defaultphp valuephp arrayphp isphp providedphp,php butphp itphp doesnphp'tphp havephp anphp entryphp forphp currentphp field
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php andphp presencephp isphp required
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_missingFieldsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php[php]php php=
php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getMissingMessagephp(php$validatorRulephp[selfphp:php:RULEphp]php,php php$fieldphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php$validatorRulephp[selfphp:php:PRESENCEphp]php php=php=php selfphp:php:PRESENCEphp_REQUIREDphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_missingFieldsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php[php]php php=
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_getMissingMessagephp(php$validatorRulephp[selfphp:php:RULEphp]php,php php$fieldphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Ifphp anyphp requiredphp fieldsphp arephp missingphp,php breakphp thephp loopphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_missingFieldsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php)php php&php&php countphp(php$thisphp-php>php_missingFieldsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php)php php>php php0php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Evaluatephp thephp inputsphp againstphp thephp validatorphp chainphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(countphp(php(arrayphp)php php$validatorRulephp[selfphp:php:FIELDSphp]php)php php>php php1php)php php{
php php php php php php php php php php php php ifphp php(php!php$validatorRulephp[selfphp:php:ALLOWphp_EMPTYphp]php)php php{
php php php php php php php php php php php php php php php php php$emptyFieldsFoundphp php=php falsephp;
php php php php php php php php php php php php php php php php php$errorsListphp php php php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$messagesphp php php php php php php php php php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$dataphp asphp php$fieldKeyphp php=php>php php$fieldphp)php php{
php php php php php php php php php php php php php php php php php php php php php$notEmptyValidatorphp php=php php$thisphp-php>php_getValidatorphp(php'NotEmptyphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$notEmptyValidatorphp-php>setMessagephp(php$thisphp-php>php_getNotEmptyMessagephp(php$validatorRulephp[selfphp:php:RULEphp]php,php php$fieldKeyphp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$notEmptyValidatorphp-php>isValidphp(php$fieldphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$notEmptyValidatorphp-php>getMessagesphp(php)php asphp php$messageKeyphp php=php>php php$messagephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$messagesphp[php$messageKeyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$messagesphp[php$messageKeyphp]php php=php php$messagephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$messagesphp[php]php php=php php$messagephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$errorsListphp[php]php php=php php$notEmptyValidatorphp-php>getErrorsphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$emptyFieldsFoundphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$emptyFieldsFoundphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_invalidMessagesphp[php$validatorRulephp[selfphp:php:RULEphp]php]php php=php php$messagesphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_invalidErrorsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php php php php=php arrayphp_uniquephp(callphp_userphp_funcphp_arrayphp(php'arrayphp_mergephp'php,php php$errorsListphp)php)php;
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp]php-php>isValidphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_invalidMessagesphp[php$validatorRulephp[selfphp:php:RULEphp]php]php php=php php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp]php-php>getMessagesphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_invalidErrorsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php php=php php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp]php-php>getErrorsphp(php)php;
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(countphp(php$dataphp)php php>php php0php)php php{
php php php php php php php php php php php php php/php/php php$dataphp isphp actuallyphp aphp onephp elementphp array
php php php php php php php php php php php php php$fieldNamesphp php=php arrayphp_keysphp(php$dataphp)php;
php php php php php php php php php php php php php$fieldNamephp php=php resetphp(php$fieldNamesphp)php;
php php php php php php php php php php php php php$fieldphp php php php php php=php resetphp(php$dataphp)php;

php php php php php php php php php php php php php$failedphp php=php falsephp;
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$fieldphp)php)php php{
php php php php php php php php php php php php php php php php php$fieldphp php=php arrayphp(php$fieldphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$notEmptyValidatorphp php=php php$thisphp-php>php_getValidatorphp(php'NotEmptyphp'php)php;
php php php php php php php php php php php php php$notEmptyValidatorphp-php>setMessagephp(php$thisphp-php>php_getNotEmptyMessagephp(php$validatorRulephp[selfphp:php:RULEphp]php,php php$fieldNamephp)php)php;
php php php php php php php php php php php php ifphp php(php$validatorRulephp[selfphp:php:ALLOWphp_EMPTYphp]php)php php{
php php php php php php php php php php php php php php php php php$validatorChainphp php=php php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$validatorChainphp php=php newphp Zendphp_Validatephp(php)php;
php php php php php php php php php php php php php php php php php$validatorChainphp-php>addValidatorphp(php$notEmptyValidatorphp,php truephp php/php*php Alwaysphp breakphp onphp failurephp php*php/php)php;
php php php php php php php php php php php php php php php php php$validatorChainphp-php>addValidatorphp(php$validatorRulephp[selfphp:php:VALIDATORphp_CHAINphp]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$fieldphp asphp php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$validatorRulephp[selfphp:php:ALLOWphp_EMPTYphp]php php php&php&php php php!php$notEmptyValidatorphp-php>isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Fieldphp isphp emptyphp ANDphp itphp'sphp allowedphp.php Dophp nothingphp.
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!php$validatorChainphp-php>isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_invalidMessagesphp[php$validatorRulephp[selfphp:php:RULEphp]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$collectedMessagesphp php=php php$thisphp-php>php_invalidMessagesphp[php$validatorRulephp[selfphp:php:RULEphp]php]php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$collectedMessagesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php foreachphp php(php$validatorChainphp-php>getMessagesphp(php)php asphp php$messageKeyphp php=php>php php$messagephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$collectedMessagesphp[php$messageKeyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$collectedMessagesphp[php$messageKeyphp]php php=php php$messagephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$collectedMessagesphp[php]php php=php php$messagephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_invalidMessagesphp[php$validatorRulephp[selfphp:php:RULEphp]php]php php=php php$collectedMessagesphp;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_invalidErrorsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_invalidErrorsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php php=php arrayphp_mergephp(php$thisphp-php>php_invalidErrorsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$validatorChainphp-php>getErrorsphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_invalidErrorsphp[php$validatorRulephp[selfphp:php:RULEphp]php]php php=php php$validatorChainphp-php>getErrorsphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_validFieldsphp[php$fieldNamephp]php)php;
php php php php php php php php php php php php php php php php php php php php php$failedphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$validatorRulephp[selfphp:php:BREAKphp_CHAINphp]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$failedphp)php php{
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Ifphp wephp gotphp thisphp farphp,php thephp inputsphp forphp thisphp rulephp passphp validationphp.
php php php php php php php php php php*php/
php php php php php php php php foreachphp php(php(arrayphp)php php$validatorRulephp[selfphp:php:FIELDSphp]php asphp php$fieldphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$fieldphp,php php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_validFieldsphp[php$fieldphp]php php=php php$dataphp[php$fieldphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp mixedphp php$classBaseName
php php php php php php*php php@returnphp Zendphp_Filterphp_Interface
php php php php php php*php/
php php php php protectedphp functionphp php_getFilterphp(php$classBaseNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getFilterOrValidatorphp(selfphp:php:FILTERphp,php php$classBaseNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp mixedphp php$classBaseName
php php php php php php*php php@returnphp Zendphp_Validatephp_Interface
php php php php php php*php/
php php php php protectedphp functionphp php_getValidatorphp(php$classBaseNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getFilterOrValidatorphp(selfphp:php:VALIDATEphp,php php$classBaseNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@paramphp mixedphp php$classBaseName
php php php php php php*php php@returnphp Zendphp_Filterphp_Interfacephp|Zendphp_Validatephp_Interface
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_getFilterOrValidatorphp(php$typephp,php php$classBaseNamephp)
php php php php php{
php php php php php php php php php$argsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$classBaseNamephp)php)php php{
php php php php php php php php php php php php php$argsphp php=php php$classBaseNamephp;
php php php php php php php php php php php php php$classBaseNamephp php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php}

php php php php php php php php php$interfaceNamephp php=php php'Zendphp_php'php php.php ucfirstphp(php$typephp)php php.php php'php_Interfacephp'php;
php php php php php php php php php$classNamephp php=php php$thisphp-php>getPluginLoaderphp(php$typephp)php-php>loadphp(ucfirstphp(php$classBaseNamephp)php)php;

php php php php php php php php php$classphp php=php newphp ReflectionClassphp(php$classNamephp)php;

php php php php php php php php ifphp php(php!php$classphp-php>implementsInterfacephp(php$interfaceNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Classphp php'php$classNamephp'php basedphp onphp basenamephp php'php$classBaseNamephp'php mustphp implementphp thephp php'php$interfaceNamephp'php interfacephp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$classphp-php>hasMethodphp(php'php_php_constructphp'php)php)php php{
php php php php php php php php php php php php php$objectphp php=php php$classphp-php>newInstanceArgsphp(php$argsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$objectphp php=php php$classphp-php>newInstancephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$objectphp;
php php php php php}

php}
