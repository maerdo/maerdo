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
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Digestphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Authphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Authphp_Adapterphp_Digestphp implementsphp Zendphp_Authphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Filenamephp againstphp whichphp authenticationphp queriesphp arephp performed
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filenamephp;

php php php php php/php*php*
php php php php php php*php Digestphp authenticationphp realm
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_realmphp;

php php php php php/php*php*
php php php php php php*php Digestphp authenticationphp user
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_usernamephp;

php php php php php/php*php*
php php php php php php*php Passwordphp forphp thephp userphp ofphp thephp realm
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_passwordphp;

php php php php php/php*php*
php php php php php php*php Setsphp adapterphp options
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$filename
php php php php php php*php php@paramphp php mixedphp php$realm
php php php php php php*php php@paramphp php mixedphp php$username
php php php php php php*php php@paramphp php mixedphp php$password
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$filenamephp php=php nullphp,php php$realmphp php=php nullphp,php php$usernamephp php=php nullphp,php php$passwordphp php=php nullphp)
php php php php php{
php php php php php php php php php$optionsphp php=php arrayphp(php'filenamephp'php,php php'realmphp'php,php php'usernamephp'php,php php'passwordphp'php)php;
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$php$optionphp)php php{
php php php php php php php php php php php php php php php php php$methodNamephp php=php php'setphp'php php.php ucfirstphp(php$optionphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodNamephp(php$php$optionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp filenamephp optionphp valuephp orphp nullphp ifphp itphp hasphp notphp yetphp beenphp set
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFilenamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filenamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp filenamephp optionphp value
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$filename
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Digestphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFilenamephp(php$filenamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filenamephp php=php php(stringphp)php php$filenamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp realmphp optionphp valuephp orphp nullphp ifphp itphp hasphp notphp yetphp beenphp set
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getRealmphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_realmphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp realmphp optionphp value
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$realm
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Digestphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setRealmphp(php$realmphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_realmphp php=php php(stringphp)php php$realmphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp usernamephp optionphp valuephp orphp nullphp ifphp itphp hasphp notphp yetphp beenphp set
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getUsernamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_usernamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp usernamephp optionphp value
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$username
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Digestphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setUsernamephp(php$usernamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_usernamephp php=php php(stringphp)php php$usernamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp passwordphp optionphp valuephp orphp nullphp ifphp itphp hasphp notphp yetphp beenphp set
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getPasswordphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_passwordphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp passwordphp optionphp value
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$password
php php php php php php*php php@returnphp Zendphp_Authphp_Adapterphp_Digestphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setPasswordphp(php$passwordphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_passwordphp php=php php(stringphp)php php$passwordphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Authphp_Adapterphp_Interface
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Authphp_Adapterphp_Exception
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php publicphp functionphp authenticatephp(php)
php php php php php{
php php php php php php php php php$optionsRequiredphp php=php arrayphp(php'filenamephp'php,php php'realmphp'php,php php'usernamephp'php,php php'passwordphp'php)php;
php php php php php php php php foreachphp php(php$optionsRequiredphp asphp php$optionRequiredphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php{php"php_php$optionRequiredphp"php}php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php"Optionphp php'php$optionRequiredphp'php mustphp bephp setphp beforephp authenticationphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(falsephp php=php=php=php php(php$fileHandlephp php=php php@fopenphp(php$thisphp-php>php_filenamephp,php php'rphp'php)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Adapterphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Authphp_Adapterphp_Exceptionphp(php"Cannotphp openphp php'php$thisphp-php>php_filenamephp'php forphp readingphp"php)php;
php php php php php php php php php}

php php php php php php php php php$idphp php php php php php php php=php php"php$thisphp-php>php_usernamephp:php$thisphp-php>php_realmphp"php;
php php php php php php php php php$idLengthphp php=php strlenphp(php$idphp)php;

php php php php php php php php php$resultphp php=php arrayphp(
php php php php php php php php php php php php php'codephp'php php php=php>php Zendphp_Authphp_Resultphp:php:FAILUREphp,
php php php php php php php php php php php php php'identityphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'realmphp'php php php php php=php>php php$thisphp-php>php_realmphp,
php php php php php php php php php php php php php php php php php'usernamephp'php php=php>php php$thisphp-php>php_usernamephp,
php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'messagesphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php whilephp php(php$linephp php=php trimphp(fgetsphp(php$fileHandlephp)php)php)php php{
php php php php php php php php php php php php ifphp php(substrphp(php$linephp,php php0php,php php$idLengthphp)php php=php=php=php php$idphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_secureStringComparephp(substrphp(php$linephp,php php-php3php2php)php,php mdphp5php(php"php$thisphp-php>php_usernamephp:php$thisphp-php>php_realmphp:php$thisphp-php>php_passwordphp"php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'codephp'php]php php=php Zendphp_Authphp_Resultphp:php:SUCCESSphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'codephp'php]php php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_CREDENTIALphp_INVALIDphp;
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'messagesphp'php]php[php]php php=php php'Passwordphp incorrectphp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(php$resultphp[php'codephp'php]php,php php$resultphp[php'identityphp'php]php,php php$resultphp[php'messagesphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$resultphp[php'codephp'php]php php=php Zendphp_Authphp_Resultphp:php:FAILUREphp_IDENTITYphp_NOTphp_FOUNDphp;
php php php php php php php php php$resultphp[php'messagesphp'php]php[php]php php=php php"Usernamephp php'php$thisphp-php>php_usernamephp'php andphp realmphp php'php$thisphp-php>php_realmphp'php combinationphp notphp foundphp"php;
php php php php php php php php returnphp newphp Zendphp_Authphp_Resultphp(php$resultphp[php'codephp'php]php,php php$resultphp[php'identityphp'php]php,php php$resultphp[php'messagesphp'php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Securelyphp comparephp twophp stringsphp forphp equalityphp whilephp avoidedphp Cphp levelphp memcmpphp(php)
php php php php php php*php optimisationsphp capablephp ofphp leakingphp timingphp informationphp usefulphp tophp anphp attacker
php php php php php php*php attemptingphp tophp iterativelyphp guessphp thephp unknownphp stringphp php(ephp.gphp.php passwordphp)php being
php php php php php php*php comparedphp againstphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$a
php php php php php php*php php@paramphp stringphp php$b
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_secureStringComparephp(php$aphp,php php$bphp)
php php php php php{
php php php php php php php php ifphp php(strlenphp(php$aphp)php php!php=php=php strlenphp(php$bphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php php0php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php strlenphp(php$aphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$resultphp php|php=php ordphp(php$aphp[php$iphp]php)php php^php ordphp(php$bphp[php$iphp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp php=php=php php0php;
php php php php php}
php}
