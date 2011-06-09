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
php php*php php@versionphp php php php php$Idphp:php EmailAddressphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Hostname
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Hostnamephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_EmailAddressphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp INVALIDphp php php php php php php php php php php php php=php php'emailAddressInvalidphp'php;
php php php php constphp INVALIDphp_FORMATphp php php php php php=php php'emailAddressInvalidFormatphp'php;
php php php php constphp INVALIDphp_HOSTNAMEphp php php php=php php'emailAddressInvalidHostnamephp'php;
php php php php constphp INVALIDphp_MXphp_RECORDphp php php=php php'emailAddressInvalidMxRecordphp'php;
php php php php constphp INVALIDphp_SEGMENTphp php php php php=php php'emailAddressInvalidSegmentphp'php;
php php php php constphp DOTphp_ATOMphp php php php php php php php php php php php=php php'emailAddressDotAtomphp'php;
php php php php constphp QUOTEDphp_STRINGphp php php php php php php=php php'emailAddressQuotedStringphp'php;
php php php php constphp INVALIDphp_LOCALphp_PARTphp php=php php'emailAddressInvalidLocalPartphp'php;
php php php php constphp LENGTHphp_EXCEEDEDphp php php php php=php php'emailAddressLengthExceededphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp php php php php php php php php php php php php=php>php php"Invalidphp typephp givenphp.php Stringphp expectedphp"php,
php php php php php php php php selfphp:php:INVALIDphp_FORMATphp php php php php php=php>php php"php'php%valuephp%php'php isphp nophp validphp emailphp addressphp inphp thephp basicphp formatphp localphp-partphp@hostnamephp"php,
php php php php php php php php selfphp:php:INVALIDphp_HOSTNAMEphp php php php=php>php php"php'php%hostnamephp%php'php isphp nophp validphp hostnamephp forphp emailphp addressphp php'php%valuephp%php'php"php,
php php php php php php php php selfphp:php:INVALIDphp_MXphp_RECORDphp php php=php>php php"php'php%hostnamephp%php'php doesphp notphp appearphp tophp havephp aphp validphp MXphp recordphp forphp thephp emailphp addressphp php'php%valuephp%php'php"php,
php php php php php php php php selfphp:php:INVALIDphp_SEGMENTphp php php php php=php>php php"php'php%hostnamephp%php'php isphp notphp inphp aphp routablephp networkphp segmentphp.php Thephp emailphp addressphp php'php%valuephp%php'php shouldphp notphp bephp resolvedphp fromphp publicphp networkphp"php,
php php php php php php php php selfphp:php:DOTphp_ATOMphp php php php php php php php php php php php=php>php php"php'php%localPartphp%php'php canphp notphp bephp matchedphp againstphp dotphp-atomphp formatphp"php,
php php php php php php php php selfphp:php:QUOTEDphp_STRINGphp php php php php php php=php>php php"php'php%localPartphp%php'php canphp notphp bephp matchedphp againstphp quotedphp-stringphp formatphp"php,
php php php php php php php php selfphp:php:INVALIDphp_LOCALphp_PARTphp php=php>php php"php'php%localPartphp%php'php isphp nophp validphp localphp partphp forphp emailphp addressphp php'php%valuephp%php'php"php,
php php php php php php php php selfphp:php:LENGTHphp_EXCEEDEDphp php php php php=php>php php"php'php%valuephp%php'php exceedsphp thephp allowedphp lengthphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@seephp httpphp:php/php/enphp.wikipediaphp.orgphp/wikiphp/IPvphp4
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_invalidIpphp php=php arrayphp(
php php php php php php php php php'php0php'php php php php=php>php php'php0php.php0php.php0php.php0php/php8php'php,
php php php php php php php php php'php1php0php'php php php=php>php php'php1php0php.php0php.php0php.php0php/php8php'php,
php php php php php php php php php'php1php2php7php'php php=php>php php'php1php2php7php.php0php.php0php.php0php/php8php'php,
php php php php php php php php php'php1php2php8php'php php=php>php php'php1php2php8php.php0php.php0php.php0php/php1php6php'php,
php php php php php php php php php'php1php6php9php'php php=php>php php'php1php6php9php.php2php5php4php.php0php.php0php/php1php6php'php,
php php php php php php php php php'php1php7php2php'php php=php>php php'php1php7php2php.php1php6php.php0php.php0php/php1php2php'php,
php php php php php php php php php'php1php9php1php'php php=php>php php'php1php9php1php.php2php5php5php.php0php.php0php/php1php6php'php,
php php php php php php php php php'php1php9php2php'php php=php>php arrayphp(
php php php php php php php php php php php php php'php1php9php2php.php0php.php0php.php0php/php2php4php'php,
php php php php php php php php php php php php php'php1php9php2php.php0php.php2php.php0php/php2php4php'php,
php php php php php php php php php php php php php'php1php9php2php.php8php8php.php9php9php.php0php/php2php4php'php,
php php php php php php php php php php php php php'php1php9php2php.php1php6php8php.php0php.php0php/php1php6php'
php php php php php php php php php)php,
php php php php php php php php php'php1php9php8php'php php=php>php php'php1php9php8php.php1php8php.php0php.php0php/php1php5php'php,
php php php php php php php php php'php2php2php3php'php php=php>php php'php2php2php3php.php2php5php5php.php2php5php5php.php0php/php2php4php'php,
php php php php php php php php php'php2php2php4php'php php=php>php php'php2php2php4php.php0php.php0php.php0php/php4php'php,
php php php php php php php php php'php2php4php0php'php php=php>php php'php2php4php0php.php0php.php0php.php0php/php4php'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'hostnamephp'php php php=php>php php'php_hostnamephp'php,
php php php php php php php php php'localPartphp'php php=php>php php'php_localPartphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hostnamephp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_localPartphp;

php php php php php/php*php*
php php php php php php*php Internalphp optionsphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'mxphp'php php php php php php php php=php>php falsephp,
php php php php php php php php php'deepphp'php php php php php php=php>php falsephp,
php php php php php php php php php'domainphp'php php php php=php>php truephp,
php php php php php php php php php'allowphp'php php php php php=php>php Zendphp_Validatephp_Hostnamephp:php:ALLOWphp_DNSphp,
php php php php php php php php php'hostnamephp'php php=php>php null
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Instantiatesphp hostnamephp validatorphp forphp localphp use
php php php php php php*
php php php php php php*php Thephp followingphp optionphp keysphp arephp supportedphp:
php php php php php php*php php'hostnamephp'php php=php>php Aphp hostnamephp validatorphp,php seephp Zendphp_Validatephp_Hostname
php php php php php php*php php'allowphp'php php php php php=php>php Optionsphp forphp thephp hostnamephp validatorphp,php seephp Zendphp_Validatephp_Hostnamephp:php:ALLOWphp_php*
php php php php php php*php php'mxphp'php php php php php php php php=php>php Ifphp MXphp checkphp shouldphp bephp enabledphp,php boolean
php php php php php php*php php'deepphp'php php php php php php=php>php Ifphp aphp deepphp MXphp checkphp shouldphp bephp donephp,php boolean
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$optionsphp OPTIONAL
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'allowphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'mxphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'hostnamephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php php$optionsphp php+php=php php$thisphp-php>php_optionsphp;
php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp setphp Options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp forphp thephp emailphp validator
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Validatephp_EmailAddressphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'messagesphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMessagesphp(php$optionsphp[php'messagesphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'hostnamephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'allowphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setHostnameValidatorphp(php$optionsphp[php'hostnamephp'php]php,php php$optionsphp[php'allowphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setHostnameValidatorphp(php$optionsphp[php'hostnamephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'mxphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setValidateMxphp(php$optionsphp[php'mxphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'deepphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setDeepMxCheckphp(php$optionsphp[php'deepphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'domainphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setDomainCheckphp(php$optionsphp[php'domainphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp validationphp failurephp messagephp templatephp forphp aphp particularphp key
php php php php php php*php Addsphp thephp abilityphp tophp setphp messagesphp tophp thephp attachedphp hostnamephp validator
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$messageString
php php php php php php*php php@paramphp php stringphp php$messageKeyphp php php php php OPTIONAL
php php php php php php*php php@returnphp Zendphp_Validatephp_Abstractphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setMessagephp(php$messageStringphp,php php$messageKeyphp php=php nullphp)
php php php php php{
php php php php php php php php php$messageKeysphp php=php php$messageKeyphp;
php php php php php php php php ifphp php(php$messageKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$keysphp php=php arrayphp_keysphp(php$thisphp-php>php_messageTemplatesphp)php;
php php php php php php php php php php php php php$messageKeysphp php=php currentphp(php$keysphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_messageTemplatesphp[php$messageKeysphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'hostnamephp'php]php-php>setMessagephp(php$messageStringphp,php php$messageKeyphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_messageTemplatesphp[php$messageKeysphp]php php=php php$messageStringphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp hostnamephp validator
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Validatephp_Hostname
php php php php php php*php/
php php php php publicphp functionphp getHostnameValidatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'hostnamephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp Zendphp_Validatephp_Hostnamephp php$hostnameValidatorphp OPTIONAL
php php php php php php*php php@paramphp intphp php php php php php php php php php php php php php php php php php php php php$allowphp php php php php php php php php php php php php OPTIONAL
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setHostnameValidatorphp(Zendphp_Validatephp_Hostnamephp php$hostnameValidatorphp php=php nullphp,php php$allowphp php=php Zendphp_Validatephp_Hostnamephp:php:ALLOWphp_DNSphp)
php php php php php{
php php php php php php php php ifphp php(php!php$hostnameValidatorphp)php php{
php php php php php php php php php php php php php$hostnameValidatorphp php=php newphp Zendphp_Validatephp_Hostnamephp(php$allowphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp[php'hostnamephp'php]php php=php php$hostnameValidatorphp;
php php php php php php php php php$thisphp-php>php_optionsphp[php'allowphp'php]php php php php php=php php$allowphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp MXphp checkingphp viaphp getmxrrphp isphp supportedphp orphp not
php php php php php php*
php php php php php php*php Thisphp currentlyphp onlyphp worksphp onphp UNIXphp systems
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validateMxSupportedphp(php)
php php php php php{
php php php php php php php php returnphp functionphp_existsphp(php'getmxrrphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp validateMxphp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getValidateMxphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'mxphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp wephp checkphp forphp aphp validphp MXphp recordphp viaphp DNS
php php php php php php*
php php php php php php*php Thisphp onlyphp appliesphp whenphp DNSphp hostnamesphp arephp validated
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$mxphp Setphp allowedphp tophp truephp tophp validatephp forphp MXphp recordsphp,php andphp falsephp tophp notphp validatephp them
php php php php php php*php php@returnphp Zendphp_Validatephp_EmailAddressphp Fluidphp Interface
php php php php php php*php/
php php php php publicphp functionphp setValidateMxphp(php$mxphp)
php php php php php{
php php php php php php php php ifphp php(php(boolphp)php php$mxphp php&php&php php!php$thisphp-php>validateMxSupportedphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'MXphp checkingphp notphp availablephp onphp thisphp systemphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp[php'mxphp'php]php php=php php(boolphp)php php$mxphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp deepMxCheckphp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getDeepMxCheckphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'deepphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp wephp checkphp MXphp recordphp shouldphp bephp aphp deepphp validation
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$deepphp Setphp deepphp tophp truephp tophp performphp aphp deepphp validationphp processphp forphp MXphp records
php php php php php php*php php@returnphp Zendphp_Validatephp_EmailAddressphp Fluidphp Interface
php php php php php php*php/
php php php php publicphp functionphp setDeepMxCheckphp(php$deepphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'deepphp'php]php php=php php(boolphp)php php$deepphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp domainCheckphp option
php php php php php php*
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp getDomainCheckphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'domainphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp ifphp thephp domainphp shouldphp alsophp bephp checked
php php php php php php*php orphp onlyphp thephp localphp partphp ofphp thephp emailphp address
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$domain
php php php php php php*php php@returnphp Zendphp_Validatephp_EmailAddressphp Fluidphp Interface
php php php php php php*php/
php php php php publicphp functionphp setDomainCheckphp(php$domainphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'domainphp'php]php php=php php(booleanphp)php php$domainphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp givenphp hostphp isphp reserved
php php php php php php*
php php php php php php*php php@paramphp stringphp php$host
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php privatephp functionphp php_isReservedphp(php$hostphp)php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php(php[php0php-php9php]php{php1php,php3php}php\php.php)php{php3php}php[php0php-php9php]php{php1php,php3php}php$php/php'php,php php$hostphp)php)php php{
php php php php php php php php php php php php php$hostphp php=php gethostbynamephp(php$hostphp)php;
php php php php php php php php php}

php php php php php php php php php$octetphp php=php explodephp(php'php.php'php,php$hostphp)php;
php php php php php php php php ifphp php(php(intphp)php$octetphp[php0php]php php>php=php php2php2php4php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp ifphp php(arrayphp_keyphp_existsphp(php$octetphp[php0php]php,php php$thisphp-php>php_invalidIpphp)php)php php{
php php php php php php php php php php php php foreachphp php(php(arrayphp)php$thisphp-php>php_invalidIpphp[php$octetphp[php0php]php]php asphp php$subnetDataphp)php php{
php php php php php php php php php php php php php php php php php/php/php wephp skipphp thephp firstphp loopphp asphp wephp alreadyphp knowphp thatphp octetphp matches
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php1php;php php$iphp <php php4php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$subnetDataphp,php php$octetphp[php$iphp]php)php php!php=php=php php$iphp php*php php4php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$hostphp php php php php php php php=php explodephp(php"php/php"php,php php$subnetDataphp)php;
php php php php php php php php php php php php php php php php php$binaryHostphp php=php php"php"php;
php php php php php php php php php php php php php php php php php$tmpphp php php php php php php php php=php explodephp(php"php.php"php,php php$hostphp[php0php]php)php;
php php php php php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php4php php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php$binaryHostphp php.php=php strphp_padphp(decbinphp(php$tmpphp[php$iphp]php)php,php php8php,php php"php0php"php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$segmentDataphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'networkphp'php php php php=php>php php(intphp)php$thisphp-php>php_toIpphp(strphp_padphp(substrphp(php$binaryHostphp,php php0php,php php$hostphp[php1php]php)php,php php3php2php,php php0php)php)php,
php php php php php php php php php php php php php php php php php php php php php'broadcastphp'php php=php>php php(intphp)php$thisphp-php>php_toIpphp(strphp_padphp(substrphp(php$binaryHostphp,php php0php,php php$hostphp[php1php]php)php,php php3php2php,php php1php)php)
php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php forphp php(php$jphp php=php php$iphp;php php$jphp <php php4php;php php$jphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php(intphp)php$octetphp[php$jphp]php <php php$segmentDataphp[php'networkphp'php]php[php$jphp]php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php php(intphp)php$octetphp[php$jphp]php php>php php$segmentDataphp[php'broadcastphp'php]php[php$jphp]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp aphp binaryphp stringphp tophp anphp IPphp address
php php php php php php*
php php php php php php*php php@paramphp stringphp php$binary
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php privatephp functionphp php_toIpphp(php$binaryphp)
php php php php php{
php php php php php php php php php$ipphp php php=php arrayphp(php)php;
php php php php php php php php php$tmpphp php=php explodephp(php"php.php"php,php chunkphp_splitphp(php$binaryphp,php php8php,php php"php.php"php)php)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php4php php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$ipphp[php$iphp]php php=php bindecphp(php$tmpphp[php$iphp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$ipphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp tophp validatephp thephp localphp partphp ofphp thephp emailphp address
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php privatephp functionphp php_validateLocalPartphp(php)
php php php php php{
php php php php php php php php php/php/php Firstphp tryphp tophp matchphp thephp localphp partphp onphp thephp commonphp dotphp-atomphp format
php php php php php php php php php$resultphp php=php falsephp;

php php php php php php php php php/php/php Dotphp-atomphp charactersphp arephp:php php1php*atextphp php*php(php"php.php"php php1php*atextphp)
php php php php php php php php php/php/php atextphp:php ALPHAphp php/php DIGITphp php/php andphp php"php!php"php,php php"php#php"php,php php"php$php"php,php php"php%php"php,php php"php&php"php,php php"php'php"php,php php"php*php"php,
php php php php php php php php php/php/php php php php php php php php php"php+php"php,php php"php-php"php,php php"php/php"php,php php"php=php"php,php php"php?php"php,php php"php^php"php,php php"php_php"php,php php"php`php"php,php php"php{php"php,php php"php|php"php,php php"php}php"php,php php"php~php"
php php php php php php php php php$atextphp php=php php'aphp-zAphp-Zphp0php-php9php\xphp2php1php\xphp2php3php\xphp2php4php\xphp2php5php\xphp2php6php\xphp2php7php\xphp2aphp\xphp2bphp\xphp2dphp\xphp2fphp\xphp3dphp\xphp3fphp\xphp5ephp\xphp5fphp\xphp6php0php\xphp7bphp\xphp7cphp\xphp7dphp\xphp7ephp'php;
php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php[php'php php.php php$atextphp php.php php'php]php+php(php\xphp2ephp+php[php'php php.php php$atextphp php.php php'php]php+php)php*php$php/php'php,php php$thisphp-php>php_localPartphp)php)php php{
php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Tryphp quotedphp stringphp format

php php php php php php php php php php php php php/php/php Quotedphp-stringphp charactersphp arephp:php DQUOTEphp php*php(php[FWSphp]php qtextphp/quotedphp-pairphp)php php[FWSphp]php DQUOTE
php php php php php php php php php php php php php/php/php qtextphp:php Nonphp whitephp spacephp controlsphp,php andphp thephp restphp ofphp thephp USphp-ASCIIphp charactersphp not
php php php php php php php php php php php php php/php/php php php includingphp php"php\php"php orphp thephp quotephp character
php php php php php php php php php php php php php$noWsCtlphp php=php php'php\xphp0php1php-php\xphp0php8php\xphp0bphp\xphp0cphp\xphp0ephp-php\xphp1fphp\xphp7fphp'php;
php php php php php php php php php php php php php$qtextphp php php php=php php$noWsCtlphp php.php php'php\xphp2php1php\xphp2php3php-php\xphp5bphp\xphp5dphp-php\xphp7ephp'php;
php php php php php php php php php php php php php$wsphp php php php php php php=php php'php\xphp2php0php\xphp0php9php'php;
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php\xphp2php2php(php[php'php php.php php$wsphp php.php php$qtextphp php.php php'php]php)php*php[php$wsphp]php?php\xphp2php2php$php/php'php,php php$thisphp-php>php_localPartphp)php)php php{
php php php php php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:DOTphp_ATOMphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:QUOTEDphp_STRINGphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_LOCALphp_PARTphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp tophp validatephp thephp serversphp MXphp records
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php privatephp functionphp php_validateMXRecordsphp(php)
php php php php php{
php php php php php php php php php$mxHostsphp php=php arrayphp(php)php;
php php php php php php php php php$resultphp php=php getmxrrphp(php$thisphp-php>php_hostnamephp,php php$mxHostsphp)php;
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_MXphp_RECORDphp)php;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_optionsphp[php'deepphp'php]php php&php&php functionphp_existsphp(php'checkdnsrrphp'php)php)php php{
php php php php php php php php php php php php php$validAddressphp php=php falsephp;
php php php php php php php php php php php php php$reservedphp php php php php php=php truephp;
php php php php php php php php php php php php foreachphp php(php$mxHostsphp asphp php$hostnamephp)php php{
php php php php php php php php php php php php php php php php php$resphp php=php php$thisphp-php>php_isReservedphp(php$hostnamephp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php php php php php php php php php$reservedphp php=php falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!php$res
php php php php php php php php php php php php php php php php php php php php php&php&php php(checkdnsrrphp(php$hostnamephp,php php"Aphp"php)
php php php php php php php php php php php php php php php php php php php php php|php|php checkdnsrrphp(php$hostnamephp,php php"AAAAphp"php)
php php php php php php php php php php php php php php php php php php php php php|php|php checkdnsrrphp(php$hostnamephp,php php"Aphp6php"php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$validAddressphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$validAddressphp)php php{
php php php php php php php php php php php php php php php php php$resultphp php=php falsephp;
php php php php php php php php php php php php php php php php ifphp php(php$reservedphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_SEGMENTphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_MXphp_RECORDphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp tophp validatephp thephp hostnamephp partphp ofphp thephp emailphp address
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php privatephp functionphp php_validateHostnamePartphp(php)
php php php php php{
php php php php php php php php php$hostnamephp php=php php$thisphp-php>php_optionsphp[php'hostnamephp'php]php-php>setTranslatorphp(php$thisphp-php>getTranslatorphp(php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php-php>isValidphp(php$thisphp-php>php_hostnamephp)php;
php php php php php php php php ifphp php(php!php$hostnamephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_HOSTNAMEphp)php;

php php php php php php php php php php php php php/php/php Getphp messagesphp andphp errorsphp fromphp hostnameValidator
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_optionsphp[php'hostnamephp'php]php-php>getMessagesphp(php)php asphp php$codephp php=php>php php$messagephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_messagesphp[php$codephp]php php=php php$messagephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_optionsphp[php'hostnamephp'php]php-php>getErrorsphp(php)php asphp php$errorphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorsphp[php]php php=php php$errorphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_optionsphp[php'mxphp'php]php)php php{
php php php php php php php php php php php php php/php/php MXphp checkphp onphp hostname
php php php php php php php php php php php php php$hostnamephp php=php php$thisphp-php>php_validateMXRecordsphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$hostnamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp isphp aphp validphp emailphp address
php php php php php php*php accordingphp tophp RFCphp2php8php2php2
php php php php php php*
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.ietfphp.orgphp/rfcphp/rfcphp2php8php2php2php.txtphp RFCphp2php8php2php2
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.columbiaphp.eduphp/kermitphp/asciiphp.htmlphp USphp-ASCIIphp characters
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$matchesphp php=php arrayphp(php)php;
php php php php php php php php php$lengthphp php php=php truephp;
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php php/php/php Splitphp emailphp addressphp upphp andphp disallowphp php'php.php.php'
php php php php php php php php ifphp php(php(strposphp(php$valuephp,php php'php.php.php'php)php php!php=php=php falsephp)php or
php php php php php php php php php php php php php(php!pregphp_matchphp(php'php/php^php(php.php+php)php@php(php[php^php@php]php+php)php$php/php'php,php php$valuephp,php php$matchesphp)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_FORMATphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_localPartphp php=php php$matchesphp[php1php]php;
php php php php php php php php php$thisphp-php>php_hostnamephp php php=php php$matchesphp[php2php]php;

php php php php php php php php ifphp php(php(strlenphp(php$thisphp-php>php_localPartphp)php php>php php6php4php)php php|php|php php(strlenphp(php$thisphp-php>php_hostnamephp)php php>php php2php5php5php)php)php php{
php php php php php php php php php php php php php$lengthphp php=php falsephp;
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:LENGTHphp_EXCEEDEDphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Matchphp hostnamephp part
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'domainphp'php]php)php php{
php php php php php php php php php php php php php$hostnamephp php=php php$thisphp-php>php_validateHostnamePartphp(php)php;
php php php php php php php php php}

php php php php php php php php php$localphp php=php php$thisphp-php>php_validateLocalPartphp(php)php;

php php php php php php php php php/php/php Ifphp bothphp partsphp validphp,php returnphp true
php php php php php php php php ifphp php(php$localphp php&php&php php$lengthphp)php php{
php php php php php php php php php php php php ifphp php(php(php$thisphp-php>php_optionsphp[php'domainphp'php]php php&php&php php$hostnamephp)php php|php|php php!php$thisphp-php>php_optionsphp[php'domainphp'php]php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}
php}
