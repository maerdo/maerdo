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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Classphp forphp Databasephp recordphp validation
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@usesphp php php php php php php Zendphp_Validatephp_Abstract
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Validatephp_Dbphp_Abstractphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Errorphp constants
php php php php php php*php/
php php php php constphp ERRORphp_NOphp_RECORDphp_FOUNDphp php=php php'noRecordFoundphp'php;
php php php php constphp ERRORphp_RECORDphp_FOUNDphp php php php php=php php'recordFoundphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:ERRORphp_NOphp_RECORDphp_FOUNDphp php=php>php php"Nophp recordphp matchingphp php'php%valuephp%php'php wasphp foundphp"php,
php php php php php php php php selfphp:php:ERRORphp_RECORDphp_FOUNDphp php php php php=php>php php"Aphp recordphp matchingphp php'php%valuephp%php'php wasphp foundphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_schemaphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tablephp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_fieldphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_excludephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Databasephp adapterphp tophp usephp.php Ifphp nullphp isValidphp(php)php willphp usephp Zendphp_Dbphp:php:getInstancephp instead
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_adapterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Selectphp objectphp tophp usephp.php canphp bephp setphp,php orphp willphp bephp autophp-generated
php php php php php php*php php@varphp Zendphp_Dbphp_Select
php php php php php php*php/
php php php php protectedphp php$php_selectphp;

php php php php php/php*php*
php php php php php php*php Providesphp basicphp configurationphp forphp usephp withphp Zendphp_Validatephp_Dbphp Validators
php php php php php php*php Settingphp php$excludephp allowsphp aphp singlephp recordphp tophp bephp excludedphp fromphp matchingphp.
php php php php php php*php Excludephp canphp eitherphp bephp aphp Stringphp containingphp aphp wherephp clausephp,php orphp anphp arrayphp withphp php`fieldphp`php andphp php`valuephp`php keys
php php php php php php*php tophp definephp thephp wherephp clausephp addedphp tophp thephp sqlphp.
php php php php php php*php Aphp databasephp adapterphp mayphp optionallyphp bephp suppliedphp tophp avoidphp usingphp thephp registeredphp defaultphp adapterphp.
php php php php php php*
php php php php php php*php Thephp followingphp optionphp keysphp arephp supportedphp:
php php php php php php*php php'tablephp'php php php php=php>php Thephp databasephp tablephp tophp validatephp against
php php php php php php*php php'schemaphp'php php php=php>php Thephp schemaphp keys
php php php php php php*php php'fieldphp'php php php php=php>php Thephp fieldphp tophp checkphp forphp aphp match
php php php php php php*php php'excludephp'php php=php>php Anphp optionalphp wherephp clausephp orphp fieldphp/valuephp pairphp tophp excludephp fromphp thephp query
php php php php php php*php php'adapterphp'php php=php>php Anphp optionalphp databasephp adapterphp tophp use
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$optionsphp Optionsphp tophp usephp forphp thisphp validator
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php php$thisphp-php>setSelectphp(php$optionsphp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(funcphp_numphp_argsphp(php)php php>php php1php)php php{
php php php php php php php php php php php php php$optionsphp php php php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'tablephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php$tempphp[php'fieldphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'excludephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'adapterphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'tablephp'php,php php$optionsphp)php php&php&php php!arrayphp_keyphp_existsphp(php'schemaphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Tablephp orphp Schemaphp optionphp missingphp!php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'fieldphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Fieldphp optionphp missingphp!php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'adapterphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAdapterphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'excludephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setExcludephp(php$optionsphp[php'excludephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setFieldphp(php$optionsphp[php'fieldphp'php]php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'tablephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setTablephp(php$optionsphp[php'tablephp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'schemaphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setSchemaphp(php$optionsphp[php'schemaphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Adapter
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Checkphp forphp anphp adapterphp beingphp definedphp.php ifphp notphp,php fetchphp thephp defaultphp adapterphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>php_adapterphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_adapterphp php=php Zendphp_Dbphp_Tablephp_Abstractphp:php:getDefaultAdapterphp(php)php;
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_adapterphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Nophp databasephp adapterphp presentphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp databasephp adapter
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Dbphp_Adapterphp_Abstractphp php$adapter
php php php php php php*php php@returnphp Zendphp_Validatephp_Dbphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(php$adapterphp)
php php php php php{
php php php php php php php php ifphp php(php!php(php$adapterphp instanceofphp Zendphp_Dbphp_Adapterphp_Abstractphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Adapterphp optionphp mustphp bephp aphp databasephp adapterphp!php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp excludephp clause
php php php php php php*
php php php php php php*php php@returnphp stringphp|array
php php php php php php*php/
php php php php publicphp functionphp getExcludephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_excludephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp excludephp clause
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$exclude
php php php php php php*php php@returnphp Zendphp_Validatephp_Dbphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setExcludephp(php$excludephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_excludephp php=php php$excludephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp field
php php php php php php*
php php php php php php*php php@returnphp stringphp|array
php php php php php php*php/
php php php php publicphp functionphp getFieldphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fieldphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp field
php php php php php php*
php php php php php php*php php@paramphp stringphp php$field
php php php php php php*php php@returnphp Zendphp_Validatephp_Dbphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setFieldphp(php$fieldphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fieldphp php=php php(stringphp)php php$fieldphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp table
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTablephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp table
php php php php php php*
php php php php php php*php php@paramphp stringphp php$table
php php php php php php*php php@returnphp Zendphp_Validatephp_Dbphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setTablephp(php$tablephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tablephp php=php php(stringphp)php php$tablephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp schema
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSchemaphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_schemaphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp schema
php php php php php php*
php php php php php php*php php@paramphp stringphp php$schema
php php php php php php*php php@returnphp Zendphp_Validatephp_Dbphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setSchemaphp(php$schemaphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_schemaphp php=php php$schemaphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp selectphp objectphp tophp bephp usedphp byphp thephp validator
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Dbphp_Selectphp php$select
php php php php php php*php php@returnphp Zendphp_Validatephp_Dbphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setSelectphp(php$selectphp)
php php php php php{
php php php php php php php php ifphp php(php!php$selectphp instanceofphp Zendphp_Dbphp_Selectphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Selectphp optionphp mustphp bephp aphp validphp php'php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Zendphp_Dbphp_Selectphp objectphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_selectphp php=php php$selectphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp selectphp objectphp tophp bephp usedphp byphp thephp validatorphp.
php php php php php php*php Ifphp nophp selectphp objectphp wasphp suppliedphp tophp thephp constructorphp,
php php php php php php*php thenphp itphp willphp autophp-generatephp onephp fromphp thephp givenphp tablephp,
php php php php php php*php schemaphp,php fieldphp,php andphp adapterphp optionsphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dbphp_Selectphp Thephp Selectphp objectphp whichphp willphp bephp used
php php php php php php*php/
php php php php publicphp functionphp getSelectphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_selectphp)php php{
php php php php php php php php php php php php php$dbphp php=php php$thisphp-php>getAdapterphp(php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Buildphp selectphp object
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$selectphp php=php newphp Zendphp_Dbphp_Selectphp(php$dbphp)php;
php php php php php php php php php php php php php$selectphp-php>fromphp(php$thisphp-php>php_tablephp,php arrayphp(php$thisphp-php>php_fieldphp)php,php php$thisphp-php>php_schemaphp)php;
php php php php php php php php php php php php ifphp php(php$dbphp-php>supportsParametersphp(php'namedphp'php)php)php php{
php php php php php php php php php php php php php php php php php$selectphp-php>wherephp(php$dbphp-php>quoteIdentifierphp(php$thisphp-php>php_fieldphp,php truephp)php.php'php php=php php:valuephp'php)php;php php/php/php named
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$selectphp-php>wherephp(php$dbphp-php>quoteIdentifierphp(php$thisphp-php>php_fieldphp,php truephp)php.php'php php=php php?php'php)php;php php/php/php positional
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_excludephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_excludephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$selectphp-php>wherephp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php$dbphp-php>quoteIdentifierphp(php$thisphp-php>php_excludephp[php'fieldphp'php]php,php truephp)php php.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php php!php=php php?php'php,php php$thisphp-php>php_excludephp[php'valuephp'php]
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$selectphp-php>wherephp(php$thisphp-php>php_excludephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$selectphp-php>limitphp(php1php)php;
php php php php php php php php php php php php php$thisphp-php>php_selectphp php=php php$selectphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_selectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Runphp queryphp andphp returnsphp matchesphp,php orphp nullphp ifphp nophp matchesphp arephp foundphp.
php php php php php php*
php php php php php php*php php@paramphp php Stringphp php$value
php php php php php php*php php@returnphp Arrayphp whenphp matchesphp arephp foundphp.
php php php php php php*php/
php php php php protectedphp functionphp php_queryphp(php$valuephp)
php php php php php{
php php php php php php php php php$selectphp php=php php$thisphp-php>getSelectphp(php)php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php Runphp query
php php php php php php php php php php*php/
php php php php php php php php php$resultphp php=php php$selectphp-php>getAdapterphp(php)php-php>fetchRowphp(
php php php php php php php php php php php php php$selectphp,
php php php php php php php php php php php php arrayphp(php'valuephp'php php=php>php php$valuephp)php,php php/php/php thisphp shouldphp workphp whetherphp dbphp supportsphp positionalphp orphp namedphp params
php php php php php php php php php php php php Zendphp_Dbphp:php:FETCHphp_ASSOC
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp php$resultphp;
php php php php php}
php}
