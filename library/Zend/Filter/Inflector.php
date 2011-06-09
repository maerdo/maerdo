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
php php*php php@versionphp php php php php$Idphp:php Inflectorphp.phpphp php2php1php3php7php1php php2php0php1php0php-php0php3php-php0php7php php1php9php:php5php6php:php0php1Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filter
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Loaderphp_PluginLoader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;

php/php*php*
php php*php Filterphp chainphp forphp stringphp inflection
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Inflectorphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoaderphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_pluginLoaderphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_targetphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_throwTargetExceptionsOnphp php=php truephp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_targetReplacementIdentifierphp php=php php'php:php'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_rulesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$optionsphp Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp php php php php=php arrayphp(php)php;

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'targetphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'rulesphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'throwTargetExceptionsOnphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'targetReplacementIdentifierphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retreivephp PluginLoader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoaderphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_pluginLoaderphp instanceofphp Zendphp_Loaderphp_PluginLoaderphp_Interfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_pluginLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(php'Zendphp_Filterphp_php'php php=php>php php'Zendphp/Filterphp/php'php)php,php php_php_CLASSphp_php_php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_pluginLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp PluginLoader
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$pluginLoader
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setPluginLoaderphp(Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$pluginLoaderphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pluginLoaderphp php=php php$pluginLoaderphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Usephp Zendphp_Configphp objectphp tophp setphp objectphp state
php php php php php php*
php php php php php php*php php@deprecatedphp Usephp setOptionsphp(php)php instead
php php php php php php*php php@paramphp php Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setOptionsphp(php$configphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp Präfixphp Path
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'filterPrefixPathphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_scalarphp(php$optionsphp[php'filterPrefixPathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$optionsphp[php'filterPrefixPathphp'php]php asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addFilterPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'throwTargetExceptionsOnphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setThrowTargetExceptionsOnphp(php$optionsphp[php'throwTargetExceptionsOnphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'targetReplacementIdentifierphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setTargetReplacementIdentifierphp(php$optionsphp[php'targetReplacementIdentifierphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'targetphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setTargetphp(php$optionsphp[php'targetphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'rulesphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addRulesphp(php$optionsphp[php'rulesphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convienencephp methodphp tophp addphp prefixphp andphp pathphp tophp PluginLoader
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prefix
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp addFilterPrefixPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>getPluginLoaderphp(php)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Whetherphp orphp notphp thephp inflectorphp shouldphp throwphp anphp exceptionphp whenphp aphp replacement
php php php php php php*php identifierphp isphp stillphp foundphp withinphp anphp inflectedphp targetphp.
php php php php php php*
php php php php php php*php php@paramphp boolphp php$throwTargetExceptions
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setThrowTargetExceptionsOnphp(php$throwTargetExceptionsOnphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_throwTargetExceptionsOnphp php=php php(php$throwTargetExceptionsOnphp php=php=php truephp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Willphp exceptionsphp bephp thrownphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isThrowTargetExceptionsOnphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_throwTargetExceptionsOnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp Targetphp Replacementphp Identifierphp,php byphp defaultphp php'php:php'
php php php php php php*
php php php php php php*php php@paramphp stringphp php$targetReplacementIdentifier
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setTargetReplacementIdentifierphp(php$targetReplacementIdentifierphp)
php php php php php{
php php php php php php php php ifphp php(php$targetReplacementIdentifierphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_targetReplacementIdentifierphp php=php php(stringphp)php php$targetReplacementIdentifierphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Targetphp Replacementphp Identifier
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTargetReplacementIdentifierphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_targetReplacementIdentifierphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp Target
php php php php php php*php exphp:php php'scriptsphp/php:controllerphp/php:actionphp.php:suffixphp'
php php php php php php*
php php php php php php*php php@paramphp string
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setTargetphp(php$targetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_targetphp php=php php(stringphp)php php$targetphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp target
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTargetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_targetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Targetphp Reference
php php php php php php*
php php php php php php*php php@paramphp referencephp php$target
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setTargetReferencephp(php&php$targetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_targetphp php=php&php php$targetphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php SetRulesphp(php)php isphp thephp samephp asphp callingphp addRulesphp(php)php withphp thephp exceptionphp thatphp it
php php php php php php*php clearsphp thephp rulesphp beforephp addingphp themphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$rules
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setRulesphp(Arrayphp php$rulesphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearRulesphp(php)php;
php php php php php php php php php$thisphp-php>addRulesphp(php$rulesphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php AddRulesphp(php)php:php multiphp-callphp tophp settingphp filterphp rulesphp.
php php php php php php*
php php php php php php*php Ifphp prefixedphp withphp aphp php"php:php"php php(colonphp)php,php aphp filterphp rulephp willphp bephp addedphp.php php Ifphp not
php php php php php php*php prefixedphp,php aphp staticphp replacementphp willphp bephp addedphp.
php php php php php php*
php php php php php php*php exphp:
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'php:controllerphp'php php=php>php arrayphp(php'CamelCaseToUnderscorephp'php,php'StringToLowerphp'php)php,
php php php php php php*php php php php php php'php:actionphp'php php php php php php=php>php arrayphp(php'CamelCaseToUnderscorephp'php,php'StringToLowerphp'php)php,
php php php php php php*php php php php php php'suffixphp'php php php php php php php=php>php php'phtmlphp'
php php php php php php*php php php php php php)php;
php php php php php php*
php php php php php php*php php@paramphp array
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp addRulesphp(Arrayphp php$rulesphp)
php php php php php{
php php php php php php php php php$keysphp php=php arrayphp_keysphp(php$rulesphp)php;
php php php php php php php php foreachphp php(php$keysphp asphp php$specphp)php php{
php php php php php php php php php php php php ifphp php(php$specphp[php0php]php php=php=php php'php:php'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addFilterRulephp(php$specphp,php php$rulesphp[php$specphp]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setStaticRulephp(php$specphp,php php$rulesphp[php$specphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp rules
php php php php php php*
php php php php php php*php Byphp defaultphp,php returnsphp allphp rulesphp.php Ifphp aphp php$specphp isphp providedphp,php willphp returnphp those
php php php php php php*php rulesphp ifphp foundphp,php falsephp otherwisephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$spec
php php php php php php*php php@returnphp arrayphp|false
php php php php php php*php/
php php php php publicphp functionphp getRulesphp(php$specphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$specphp)php php{
php php php php php php php php php php php php php$specphp php=php php$thisphp-php>php_normalizeSpecphp(php$specphp)php;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_rulesphp[php$specphp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_rulesphp[php$specphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_rulesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getRulephp(php)php returnsphp aphp rulephp setphp byphp setFilterRulephp(php)php,php aphp numericphp indexphp mustphp bephp provided
php php php php php php*
php php php php php php*php php@paramphp stringphp php$spec
php php php php php php*php php@paramphp intphp php$index
php php php php php php*php php@returnphp Zendphp_Filterphp_Interfacephp|false
php php php php php php*php/
php php php php publicphp functionphp getRulephp(php$specphp,php php$indexphp)
php php php php php{
php php php php php php php php php$specphp php=php php$thisphp-php>php_normalizeSpecphp(php$specphp)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_rulesphp[php$specphp]php)php php&php&php isphp_arrayphp(php$thisphp-php>php_rulesphp[php$specphp]php)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_rulesphp[php$specphp]php[php$indexphp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_rulesphp[php$specphp]php[php$indexphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php ClearRulesphp(php)php clearsphp thephp rulesphp currentlyphp inphp thephp inflector
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp clearRulesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_rulesphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp filteringphp rulephp forphp aphp specphp.php php php$ruleSetphp canphp bephp aphp stringphp,php Filterphp object
php php php php php php*php orphp anphp arrayphp ofphp stringsphp orphp filterphp objectsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$spec
php php php php php php*php php@paramphp arrayphp|stringphp|Zendphp_Filterphp_Interfacephp php$ruleSet
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setFilterRulephp(php$specphp,php php$ruleSetphp)
php php php php php{
php php php php php php php php php$specphp php=php php$thisphp-php>php_normalizeSpecphp(php$specphp)php;
php php php php php php php php php$thisphp-php>php_rulesphp[php$specphp]php php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addFilterRulephp(php$specphp,php php$ruleSetphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp filterphp rulephp forphp aphp spec
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$spec
php php php php php php*php php@paramphp mixedphp php$ruleSet
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addFilterRulephp(php$specphp,php php$ruleSetphp)
php php php php php{
php php php php php php php php php$specphp php=php php$thisphp-php>php_normalizeSpecphp(php$specphp)php;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_rulesphp[php$specphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_rulesphp[php$specphp]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$ruleSetphp)php)php php{
php php php php php php php php php php php php php$ruleSetphp php=php arrayphp(php$ruleSetphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$thisphp-php>php_rulesphp[php$specphp]php)php)php php{
php php php php php php php php php php php php php$tempphp php=php php$thisphp-php>php_rulesphp[php$specphp]php;
php php php php php php php php php php php php php$thisphp-php>php_rulesphp[php$specphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_rulesphp[php$specphp]php[php]php php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$ruleSetphp asphp php$rulephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_rulesphp[php$specphp]php[php]php php=php php$thisphp-php>php_getRulephp(php$rulephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp staticphp rulephp forphp aphp specphp.php php Thisphp isphp aphp singlephp stringphp value
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setStaticRulephp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_normalizeSpecphp(php$namephp)php;
php php php php php php php php php$thisphp-php>php_rulesphp[php$namephp]php php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Staticphp Rulephp Referencephp.
php php php php php php*
php php php php php php*php Thisphp allowsphp aphp consumingphp classphp tophp passphp aphp propertyphp orphp variable
php php php php php php*php inphp tophp bephp referencedphp whenphp itsphp timephp tophp buildphp thephp outputphp stringphp fromphp the
php php php php php php*php targetphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$reference
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp setStaticRuleReferencephp(php$namephp,php php&php$referencephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_normalizeSpecphp(php$namephp)php;
php php php php php php php php php$thisphp-php>php_rulesphp[php$namephp]php php=php&php php$referencephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Inflect
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$source
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$sourcephp)
php php php php php{
php php php php php php php php php/php/php cleanphp source
php php php php php php php php foreachphp php(php php(arrayphp)php php$sourcephp asphp php$sourceNamephp php=php>php php$sourceValuephp)php php{
php php php php php php php php php php php php php$sourcephp[ltrimphp(php$sourceNamephp,php php'php:php'php)php]php php=php php$sourceValuephp;
php php php php php php php php php}

php php php php php php php php php$pregQuotedTargetReplacementIdentifierphp php=php pregphp_quotephp(php$thisphp-php>php_targetReplacementIdentifierphp,php php'php#php'php)php;
php php php php php php php php php$processedPartsphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_rulesphp asphp php$ruleNamephp php=php>php php$ruleValuephp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$sourcephp[php$ruleNamephp]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$ruleValuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php overridingphp thephp setphp rule
php php php php php php php php php php php php php php php php php php php php php$processedPartsphp[php'php#php'php.php$pregQuotedTargetReplacementIdentifierphp.php$ruleNamephp.php'php#php'php]php php=php strphp_replacephp(php'php\php\php'php,php php'php\php\php\php\php'php,php php$sourcephp[php$ruleNamephp]php)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$ruleValuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$processedPartphp php=php php$sourcephp[php$ruleNamephp]php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$ruleValuephp asphp php$ruleFilterphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$processedPartphp php=php php$ruleFilterphp-php>filterphp(php$processedPartphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$processedPartsphp[php'php#php'php.php$pregQuotedTargetReplacementIdentifierphp.php$ruleNamephp.php'php#php'php]php php=php strphp_replacephp(php'php\php\php'php,php php'php\php\php\php\php'php,php php$processedPartphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(isphp_stringphp(php$ruleValuephp)php)php php{
php php php php php php php php php php php php php php php php php$processedPartsphp[php'php#php'php.php$pregQuotedTargetReplacementIdentifierphp.php$ruleNamephp.php'php#php'php]php php=php strphp_replacephp(php'php\php\php'php,php php'php\php\php\php\php'php,php php$ruleValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php allphp ofphp thephp valuesphp ofphp processedPartsphp wouldphp havephp beenphp strphp_replacephp(php'php\php\php'php,php php'php\php\php\php\php'php,php php.php.php)php'dphp tophp disablephp pregphp_replacephp backreferences
php php php php php php php php php$inflectedTargetphp php=php pregphp_replacephp(arrayphp_keysphp(php$processedPartsphp)php,php arrayphp_valuesphp(php$processedPartsphp)php,php php$thisphp-php>php_targetphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_throwTargetExceptionsOnphp php&php&php php(pregphp_matchphp(php'php#php(php?php=php'php.php$pregQuotedTargetReplacementIdentifierphp.php'php[Aphp-Zaphp-zphp]php{php1php}php)php#php'php,php php$inflectedTargetphp)php php=php=php truephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Aphp replacementphp identifierphp php'php php.php php$thisphp-php>php_targetReplacementIdentifierphp php.php php'php wasphp foundphp insidephp thephp inflectedphp targetphp,php perhapsphp aphp rulephp wasphp notphp satisfiedphp withphp aphp targetphp sourcephp?php php Unsatisfiedphp inflectedphp targetphp:php php'php php.php php$inflectedTargetphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$inflectedTargetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp specphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$spec
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_normalizeSpecphp(php$specphp)
php php php php php{
php php php php php php php php returnphp ltrimphp(php(stringphp)php php$specphp,php php'php:php&php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resolvephp namedphp filtersphp andphp convertphp themphp tophp filterphp objectsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$rule
php php php php php php*php php@returnphp Zendphp_Filterphp_Interface
php php php php php php*php/
php php php php protectedphp functionphp php_getRulephp(php$rulephp)
php php php php php{
php php php php php php php php ifphp php(php$rulephp instanceofphp Zendphp_Filterphp_Interfacephp)php php{
php php php php php php php php php php php php returnphp php$rulephp;
php php php php php php php php php}

php php php php php php php php php$rulephp php=php php(stringphp)php php$rulephp;

php php php php php php php php php$classNamephp php php=php php$thisphp-php>getPluginLoaderphp(php)php-php>loadphp(php$rulephp)php;
php php php php php php php php php$ruleObjectphp php=php newphp php$classNamephp(php)php;
php php php php php php php php ifphp php(php!php$ruleObjectphp instanceofphp Zendphp_Filterphp_Interfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Nophp classphp namedphp php'php php.php php$rulephp php.php php'php implementingphp Zendphp_Filterphp_Interfacephp couldphp bephp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$ruleObjectphp;
php php php php php}
php}
