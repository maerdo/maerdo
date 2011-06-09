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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FSMphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_FSMActionphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/FSMActionphp.phpphp'php;

php/php*php*
php php*php Abstractphp Finitephp Statephp Machine
php php*
php php*php Takephp aphp lookphp onphp Wikipediaphp statephp machinephp descriptionphp:php httpphp:php/php/enphp.wikipediaphp.orgphp/wikiphp/Finitephp_statephp_machine
php php*
php php*php Anyphp typephp ofphp Transducersphp php(Moorephp machinephp orphp Mealyphp machinephp)php alsophp mayphp bephp implementedphp byphp usingphp thisphp abstractphp FSMphp.
php php*php processphp(php)php methodsphp invokesphp aphp specifiedphp actionsphp whichphp mayphp constructphp FSMphp outputphp.
php php*php Actionsphp mayphp bephp alsophp usedphp tophp signalphp,php thatphp wephp havephp reachedphp Acceptphp State
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Searchphp_Lucenephp_FSM
php{
php php php php php/php*php*
php php php php php php*php Machinephp Statesphp alphabet
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_statesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Currentphp state
php php php php php php*
php php php php php php*php php@varphp integerphp|string
php php php php php php*php/
php php php php privatephp php$php_currentStatephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Inputphp alphabet
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_inputAphabetphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Statephp transitionphp table
php php php php php php*
php php php php php php*php php[sourceStatephp]php[inputphp]php php=php>php targetState
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_rulesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp entryphp actions
php php php php php php*php Eachphp actionphp executesphp whenphp enteringphp thephp state
php php php php php php*
php php php php php php*php php[statephp]php php=php>php action
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_entryActionsphp php=php php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp exitphp actions
php php php php php php*php Eachphp actionphp executesphp whenphp exitingphp thephp state
php php php php php php*
php php php php php php*php php[statephp]php php=php>php action
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_exitActionsphp php=php php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp inputphp actions
php php php php php php*php Eachphp actionphp executesphp whenphp enteringphp thephp state
php php php php php php*
php php php php php php*php php[statephp]php[inputphp]php php=php>php action
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_inputActionsphp php=php php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp inputphp actions
php php php php php php*php Eachphp actionphp executesphp whenphp enteringphp thephp state
php php php php php php*
php php php php php php*php php[statephp1php]php[statephp2php]php php=php>php action
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_transitionActionsphp php=php php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Finitephp Statephp machinephp constructor
php php php php php php*
php php php php php php*php php$statesphp isphp anphp arrayphp ofphp integersphp orphp stringsphp withphp aphp listphp ofphp possiblephp machinephp states
php php php php php php*php constructorphp treatsphp fistphp listphp elementphp asphp aphp sturtphp statephp php(assignesphp itphp tophp php$php_currentphp statephp)php.
php php php php php php*php Itphp mayphp bephp reassignedphp byphp setStatephp(php)php callphp.
php php php php php php*php Statesphp listphp mayphp bephp emptyphp andphp canphp bephp extendedphp laterphp byphp addStatephp(php)php orphp addStatesphp(php)php callsphp.
php php php php php php*
php php php php php php*php php$inputAphabetphp isphp thephp samephp asphp php$statesphp,php butphp representsphp inputphp alphabet
php php php php php php*php itphp alsophp mayphp bephp extendedphp laterphp byphp addInputSymbolsphp(php)php orphp addInputSymbolphp(php)php callsphp.
php php php php php php*
php php php php php php*php php$rulesphp parameterphp describesphp FSMphp transitionsphp andphp hasphp aphp structurephp:
php php php php php php*php arrayphp(php arrayphp(sourseStatephp,php inputphp,php targetStatephp[php,php inputActionphp]php)php,
php php php php php php*php php php php php php php php arrayphp(sourseStatephp,php inputphp,php targetStatephp[php,php inputActionphp]php)php,
php php php php php php*php php php php php php php php arrayphp(sourseStatephp,php inputphp,php targetStatephp[php,php inputActionphp]php)php,
php php php php php php*php php php php php php php php php.php.php.
php php php php php php*php php php php php php php)
php php php php php php*php Rulesphp alsophp canphp bephp addedphp laterphp byphp addRulesphp(php)php andphp addRulephp(php)php callsphp.
php php php php php php*
php php php php php php*php FSMphp actionsphp arephp veryphp flexiblephp andphp mayphp bephp definedphp byphp addEntryActionphp(php)php,php addExitActionphp(php)php,
php php php php php php*php addInputActionphp(php)php andphp addTransitionActionphp(php)php callsphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$states
php php php php php php*php php@paramphp arrayphp php$inputAphabet
php php php php php php*php php@paramphp arrayphp php$rules
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$statesphp php=php arrayphp(php)php,php php$inputAphabetphp php=php arrayphp(php)php,php php$rulesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>addStatesphp(php$statesphp)php;
php php php php php php php php php$thisphp-php>addInputSymbolsphp(php$inputAphabetphp)php;
php php php php php php php php php$thisphp-php>addRulesphp(php$rulesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp statesphp tophp thephp statephp machine
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$states
php php php php php php*php/
php php php php publicphp functionphp addStatesphp(php$statesphp)
php php php php php{
php php php php php php php php foreachphp php(php$statesphp asphp php$statephp)php php{
php php php php php php php php php php php php php$thisphp-php>addStatephp(php$statephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp statephp tophp thephp statephp machine
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$state
php php php php php php*php/
php php php php publicphp functionphp addStatephp(php$statephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_statesphp[php$statephp]php php=php php$statephp;

php php php php php php php php ifphp php(php$thisphp-php>php_currentStatephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentStatephp php=php php$statephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp FSMphp statephp.
php php php php php php*php Nophp anyphp actionphp isphp invoked
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$state
php php php php php php*php php@throwsphp Zendphp_Searchphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setStatephp(php$statephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_statesphp[php$statephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Statephp php\php'php'php php.php php$statephp php.php php'php\php'php isphp notphp onphp ofphp thephp possiblephp FSMphp statesphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_currentStatephp php=php php$statephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp FSMphp statephp.
php php php php php php*
php php php php php php*php php@returnphp integerphp|stringphp php$statephp|null
php php php php php php*php/
php php php php publicphp functionphp getStatephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentStatephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp symbolsphp tophp thephp inputphp alphabet
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$inputAphabet
php php php php php php*php/
php php php php publicphp functionphp addInputSymbolsphp(php$inputAphabetphp)
php php php php php{
php php php php php php php php foreachphp php(php$inputAphabetphp asphp php$inputSymbolphp)php php{
php php php php php php php php php php php php php$thisphp-php>addInputSymbolphp(php$inputSymbolphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp symbolphp tophp thephp inputphp alphabet
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$inputSymbol
php php php php php php*php/
php php php php publicphp functionphp addInputSymbolphp(php$inputSymbolphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_inputAphabetphp[php$inputSymbolphp]php php=php php$inputSymbolphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp transitionphp rules
php php php php php php*
php php php php php php*php arrayphp structurephp:
php php php php php php*php arrayphp(php arrayphp(sourseStatephp,php inputphp,php targetStatephp[php,php inputActionphp]php)php,
php php php php php php*php php php php php php php php arrayphp(sourseStatephp,php inputphp,php targetStatephp[php,php inputActionphp]php)php,
php php php php php php*php php php php php php php php arrayphp(sourseStatephp,php inputphp,php targetStatephp[php,php inputActionphp]php)php,
php php php php php php*php php php php php php php php php.php.php.
php php php php php php*php php php php php php php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$rules
php php php php php php*php/
php php php php publicphp functionphp addRulesphp(php$rulesphp)
php php php php php{
php php php php php php php php foreachphp php(php$rulesphp asphp php$rulephp)php php{
php php php php php php php php php php php php php$thisphp-php>addrulephp(php$rulephp[php0php]php,php php$rulephp[php1php]php,php php$rulephp[php2php]php,php issetphp(php$rulephp[php3php]php)php?php$rulephp[php3php]php:nullphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp symbolphp tophp thephp inputphp alphabet
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$sourceState
php php php php php php*php php@paramphp integerphp|stringphp php$input
php php php php php php*php php@paramphp integerphp|stringphp php$targetState
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_FSMActionphp|nullphp php$inputAction
php php php php php php*php php@throwsphp Zendphp_Searchphp_Exception
php php php php php php*php/
php php php php publicphp functionphp addRulephp(php$sourceStatephp,php php$inputphp,php php$targetStatephp,php php$inputActionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_statesphp[php$sourceStatephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp sourcephp statephp php(php'php php.php php$sourceStatephp php.php php'php)php.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_statesphp[php$targetStatephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp targetphp statephp php(php'php php.php php$targetStatephp php.php php'php)php.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_inputAphabetphp[php$inputphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp inputphp symbolphp php(php'php php.php php$inputphp php.php php'php)php.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_rulesphp[php$sourceStatephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_rulesphp[php$sourceStatephp]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_rulesphp[php$sourceStatephp]php[php$inputphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Rulephp forphp php{statephp,inputphp}php pairphp php(php'php php.php php$sourceStatephp php.php php'php,php php'php.php php$inputphp php.php php'php)php isphp alreadyphp definedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_rulesphp[php$sourceStatephp]php[php$inputphp]php php=php php$targetStatephp;


php php php php php php php php ifphp php(php$inputActionphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>addInputActionphp(php$sourceStatephp,php php$inputphp,php php$inputActionphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp statephp entryphp actionphp.
php php php php php php*php Severalphp entryphp actionsphp arephp allowedphp.
php php php php php php*php Actionphp executionphp orderphp isphp definedphp byphp addEntryActionphp(php)php calls
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$state
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_FSMActionphp php$action
php php php php php php*php/
php php php php publicphp functionphp addEntryActionphp(php$statephp,php Zendphp_Searchphp_Lucenephp_FSMActionphp php$actionphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_statesphp[php$statephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp statephp php(php'php php.php php$statephp.php php'php)php.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_entryActionsphp[php$statephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_entryActionsphp[php$statephp]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_entryActionsphp[php$statephp]php[php]php php=php php$actionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp statephp exitphp actionphp.
php php php php php php*php Severalphp exitphp actionsphp arephp allowedphp.
php php php php php php*php Actionphp executionphp orderphp isphp definedphp byphp addEntryActionphp(php)php calls
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$state
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_FSMActionphp php$action
php php php php php php*php/
php php php php publicphp functionphp addExitActionphp(php$statephp,php Zendphp_Searchphp_Lucenephp_FSMActionphp php$actionphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_statesphp[php$statephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp statephp php(php'php php.php php$statephp.php php'php)php.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_exitActionsphp[php$statephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_exitActionsphp[php$statephp]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_exitActionsphp[php$statephp]php[php]php php=php php$actionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp inputphp actionphp php(definedphp byphp php{statephp,php inputphp}php pairphp)php.
php php php php php php*php Severalphp inputphp actionsphp arephp allowedphp.
php php php php php php*php Actionphp executionphp orderphp isphp definedphp byphp addInputActionphp(php)php calls
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$state
php php php php php php*php php@paramphp integerphp|stringphp php$input
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_FSMActionphp php$action
php php php php php php*php/
php php php php publicphp functionphp addInputActionphp(php$statephp,php php$inputSymbolphp,php Zendphp_Searchphp_Lucenephp_FSMActionphp php$actionphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_statesphp[php$statephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp statephp php(php'php php.php php$statephp.php php'php)php.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_inputAphabetphp[php$inputSymbolphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp inputphp symbolphp php(php'php php.php php$inputSymbolphp.php php'php)php.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_inputActionsphp[php$statephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_inputActionsphp[php$statephp]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_inputActionsphp[php$statephp]php[php$inputSymbolphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_inputActionsphp[php$statephp]php[php$inputSymbolphp]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_inputActionsphp[php$statephp]php[php$inputSymbolphp]php[php]php php=php php$actionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp transitionphp actionphp php(definedphp byphp php{statephp,php inputphp}php pairphp)php.
php php php php php php*php Severalphp transitionphp actionsphp arephp allowedphp.
php php php php php php*php Actionphp executionphp orderphp isphp definedphp byphp addTransitionActionphp(php)php calls
php php php php php php*
php php php php php php*php php@paramphp integerphp|stringphp php$sourceState
php php php php php php*php php@paramphp integerphp|stringphp php$targetState
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_FSMActionphp php$action
php php php php php php*php/
php php php php publicphp functionphp addTransitionActionphp(php$sourceStatephp,php php$targetStatephp,php Zendphp_Searchphp_Lucenephp_FSMActionphp php$actionphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_statesphp[php$sourceStatephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp sourcephp statephp php(php'php php.php php$sourceStatephp.php php'php)php.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_statesphp[php$targetStatephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Undefinedphp sourcephp statephp php(php'php php.php php$targetStatephp.php php'php)php.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_transitionActionsphp[php$sourceStatephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_transitionActionsphp[php$sourceStatephp]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_transitionActionsphp[php$sourceStatephp]php[php$targetStatephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_transitionActionsphp[php$sourceStatephp]php[php$targetStatephp]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_transitionActionsphp[php$sourceStatephp]php[php$targetStatephp]php[php]php php=php php$actionphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Processphp anphp input
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$input
php php php php php php*php php@throwsphp Zendphp_Searchphp_Exception
php php php php php php*php/
php php php php publicphp functionphp processphp(php$inputphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_rulesphp[php$thisphp-php>php_currentStatephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Therephp isphp nophp anyphp rulephp forphp currentphp statephp php(php'php php.php php$thisphp-php>php_currentStatephp php.php php'php)php.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_rulesphp[php$thisphp-php>php_currentStatephp]php[php$inputphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Therephp isphp nophp anyphp rulephp forphp php{currentphp statephp,php inputphp}php pairphp php(php'php php.php php$thisphp-php>php_currentStatephp php.php php'php,php php'php php.php php$inputphp php.php php'php)php.php'php)php;
php php php php php php php php php}

php php php php php php php php php$sourceStatephp php=php php$thisphp-php>php_currentStatephp;
php php php php php php php php php$targetStatephp php=php php$thisphp-php>php_rulesphp[php$thisphp-php>php_currentStatephp]php[php$inputphp]php;

php php php php php php php php ifphp php(php$sourceStatephp php!php=php php$targetStatephp php php&php&php php issetphp(php$thisphp-php>php_exitActionsphp[php$sourceStatephp]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_exitActionsphp[php$sourceStatephp]php asphp php$actionphp)php php{
php php php php php php php php php php php php php php php php php$actionphp-php>doActionphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_inputActionsphp[php$sourceStatephp]php)php php&php&
php php php php php php php php php php php php issetphp(php$thisphp-php>php_inputActionsphp[php$sourceStatephp]php[php$inputphp]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_inputActionsphp[php$sourceStatephp]php[php$inputphp]php asphp php$actionphp)php php{
php php php php php php php php php php php php php php php php php$actionphp-php>doActionphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}


php php php php php php php php php$thisphp-php>php_currentStatephp php=php php$targetStatephp;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_transitionActionsphp[php$sourceStatephp]php)php php&php&
php php php php php php php php php php php php issetphp(php$thisphp-php>php_transitionActionsphp[php$sourceStatephp]php[php$targetStatephp]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_transitionActionsphp[php$sourceStatephp]php[php$targetStatephp]php asphp php$actionphp)php php{
php php php php php php php php php php php php php php php php php$actionphp-php>doActionphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$sourceStatephp php!php=php php$targetStatephp php php&php&php php issetphp(php$thisphp-php>php_entryActionsphp[php$targetStatephp]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_entryActionsphp[php$targetStatephp]php asphp php$actionphp)php php{
php php php php php php php php php php php php php php php php php$actionphp-php>doActionphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp resetphp(php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_statesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Exceptionphp(php'Therephp isphp nophp anyphp statephp definedphp forphp FSMphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_currentStatephp php=php php$thisphp-php>php_statesphp[php0php]php;
php php php php php}
php}

