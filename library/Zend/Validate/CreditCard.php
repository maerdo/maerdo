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
php php*php php@versionphp php php php php$Idphp:php CreditCardphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_CreditCardphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Detectedphp CCIphp list
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp ALLphp php php php php php php php php php php php php php php=php php'Allphp'php;
php php php php constphp AMERICANphp_EXPRESSphp php=php php'Americanphp_Expressphp'php;
php php php php constphp UNIONPAYphp php php php php php php php php php=php php'Unionpayphp'php;
php php php php constphp DINERSphp_CLUBphp php php php php php php=php php'Dinersphp_Clubphp'php;
php php php php constphp DINERSphp_CLUBphp_USphp php php php=php php'Dinersphp_Clubphp_USphp'php;
php php php php constphp DISCOVERphp php php php php php php php php php=php php'Discoverphp'php;
php php php php constphp JCBphp php php php php php php php php php php php php php php=php php'JCBphp'php;
php php php php constphp LASERphp php php php php php php php php php php php php=php php'Laserphp'php;
php php php php constphp MAESTROphp php php php php php php php php php php=php php'Maestrophp'php;
php php php php constphp MASTERCARDphp php php php php php php php=php php'Mastercardphp'php;
php php php php constphp SOLOphp php php php php php php php php php php php php php=php php'Solophp'php;
php php php php constphp VISAphp php php php php php php php php php php php php php=php php'Visaphp'php;

php php php php constphp CHECKSUMphp php php php php php php php=php php'creditcardChecksumphp'php;
php php php php constphp CONTENTphp php php php php php php php php=php php'creditcardContentphp'php;
php php php php constphp INVALIDphp php php php php php php php php=php php'creditcardInvalidphp'php;
php php php php constphp LENGTHphp php php php php php php php php php=php php'creditcardLengthphp'php;
php php php php constphp PREFIXphp php php php php php php php php php=php php'creditcardPrefixphp'php;
php php php php constphp SERVICEphp php php php php php php php php=php php'creditcardServicephp'php;
php php php php constphp SERVICEFAILUREphp php=php php'creditcardServiceFailurephp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:CHECKSUMphp php php php php php php php=php>php php"php'php%valuephp%php'php seemsphp tophp containphp anphp invalidphp checksumphp"php,
php php php php php php php php selfphp:php:CONTENTphp php php php php php php php php=php>php php"php'php%valuephp%php'php mustphp containphp onlyphp digitsphp"php,
php php php php php php php php selfphp:php:INVALIDphp php php php php php php php php=php>php php"Invalidphp typephp givenphp.php Stringphp expectedphp"php,
php php php php php php php php selfphp:php:LENGTHphp php php php php php php php php php=php>php php"php'php%valuephp%php'php containsphp anphp invalidphp amountphp ofphp digitsphp"php,
php php php php php php php php selfphp:php:PREFIXphp php php php php php php php php php=php>php php"php'php%valuephp%php'php isphp notphp fromphp anphp allowedphp institutephp"php,
php php php php php php php php selfphp:php:SERVICEphp php php php php php php php php=php>php php"php'php%valuephp%php'php seemsphp tophp bephp anphp invalidphp creditcardphp numberphp"php,
php php php php php php php php selfphp:php:SERVICEFAILUREphp php=php>php php"Anphp exceptionphp hasphp beenphp raisedphp whilephp validatingphp php'php%valuephp%php'php"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp allowedphp CCVphp lengths
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_cardLengthphp php=php arrayphp(
php php php php php php php php selfphp:php:AMERICANphp_EXPRESSphp php=php>php arrayphp(php1php5php)php,
php php php php php php php php selfphp:php:DINERSphp_CLUBphp php php php php php php=php>php arrayphp(php1php4php)php,
php php php php php php php php selfphp:php:DINERSphp_CLUBphp_USphp php php php=php>php arrayphp(php1php6php)php,
php php php php php php php php selfphp:php:DISCOVERphp php php php php php php php php php=php>php arrayphp(php1php6php)php,
php php php php php php php php selfphp:php:JCBphp php php php php php php php php php php php php php php=php>php arrayphp(php1php6php)php,
php php php php php php php php selfphp:php:LASERphp php php php php php php php php php php php php=php>php arrayphp(php1php6php,php php1php7php,php php1php8php,php php1php9php)php,
php php php php php php php php selfphp:php:MAESTROphp php php php php php php php php php php=php>php arrayphp(php1php2php,php php1php3php,php php1php4php,php php1php5php,php php1php6php,php php1php7php,php php1php8php,php php1php9php)php,
php php php php php php php php selfphp:php:MASTERCARDphp php php php php php php php=php>php arrayphp(php1php6php)php,
php php php php php php php php selfphp:php:SOLOphp php php php php php php php php php php php php php=php>php arrayphp(php1php6php,php php1php8php,php php1php9php)php,
php php php php php php php php selfphp:php:UNIONPAYphp php php php php php php php php php=php>php arrayphp(php1php6php,php php1php7php,php php1php8php,php php1php9php)php,
php php php php php php php php selfphp:php:VISAphp php php php php php php php php php php php php php=php>php arrayphp(php1php6php)php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp acceptedphp CCVphp providerphp tags
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_cardTypephp php=php arrayphp(
php php php php php php php php selfphp:php:AMERICANphp_EXPRESSphp php=php>php arrayphp(php'php3php4php'php,php php'php3php7php'php)php,
php php php php php php php php selfphp:php:DINERSphp_CLUBphp php php php php php php=php>php arrayphp(php'php3php0php0php'php,php php'php3php0php1php'php,php php'php3php0php2php'php,php php'php3php0php3php'php,php php'php3php0php4php'php,php php'php3php0php5php'php,php php'php3php6php'php)php,
php php php php php php php php selfphp:php:DINERSphp_CLUBphp_USphp php php php=php>php arrayphp(php'php5php4php'php,php php'php5php5php'php)php,
php php php php php php php php selfphp:php:DISCOVERphp php php php php php php php php php=php>php arrayphp(php'php6php0php1php1php'php,php php'php6php2php2php1php2php6php'php,php php'php6php2php2php1php2php7php'php,php php'php6php2php2php1php2php8php'php,php php'php6php2php2php1php2php9php'php,php php'php6php2php2php1php3php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php6php2php2php1php4php'php,php php'php6php2php2php1php5php'php,php php'php6php2php2php1php6php'php,php php'php6php2php2php1php7php'php,php php'php6php2php2php1php8php'php,php php'php6php2php2php1php9php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php6php2php2php2php'php,php php'php6php2php2php3php'php,php php'php6php2php2php4php'php,php php'php6php2php2php5php'php,php php'php6php2php2php6php'php,php php'php6php2php2php7php'php,php php'php6php2php2php8php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php6php2php2php9php0php'php,php php'php6php2php2php9php1php'php,php php'php6php2php2php9php2php0php'php,php php'php6php2php2php9php2php1php'php,php php'php6php2php2php9php2php2php'php,php php'php6php2php2php9php2php3php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php6php2php2php9php2php4php'php,php php'php6php2php2php9php2php5php'php,php php'php6php4php4php'php,php php'php6php4php5php'php,php php'php6php4php6php'php,php php'php6php4php7php'php,php php'php6php4php8php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php6php4php9php'php,php php'php6php5php'php)php,
php php php php php php php php selfphp:php:JCBphp php php php php php php php php php php php php php php=php>php arrayphp(php'php3php5php2php8php'php,php php'php3php5php2php9php'php,php php'php3php5php3php'php,php php'php3php5php4php'php,php php'php3php5php5php'php,php php'php3php5php6php'php,php php'php3php5php7php'php,php php'php3php5php8php'php)php,
php php php php php php php php selfphp:php:LASERphp php php php php php php php php php php php php=php>php arrayphp(php'php6php3php0php4php'php,php php'php6php7php0php6php'php,php php'php6php7php7php1php'php,php php'php6php7php0php9php'php)php,
php php php php php php php php selfphp:php:MAESTROphp php php php php php php php php php php=php>php arrayphp(php'php5php0php1php8php'php,php php'php5php0php2php0php'php,php php'php5php0php3php8php'php,php php'php6php3php0php4php'php,php php'php6php7php5php9php'php,php php'php6php7php6php1php'php,php php'php6php7php6php3php'php)php,
php php php php php php php php selfphp:php:MASTERCARDphp php php php php php php php=php>php arrayphp(php'php5php1php'php,php php'php5php2php'php,php php'php5php3php'php,php php'php5php4php'php,php php'php5php5php'php)php,
php php php php php php php php selfphp:php:SOLOphp php php php php php php php php php php php php php=php>php arrayphp(php'php6php3php3php4php'php,php php'php6php7php6php7php'php)php,
php php php php php php php php selfphp:php:UNIONPAYphp php php php php php php php php php=php>php arrayphp(php'php6php2php2php1php2php6php'php,php php'php6php2php2php1php2php7php'php,php php'php6php2php2php1php2php8php'php,php php'php6php2php2php1php2php9php'php,php php'php6php2php2php1php3php'php,php php'php6php2php2php1php4php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php6php2php2php1php5php'php,php php'php6php2php2php1php6php'php,php php'php6php2php2php1php7php'php,php php'php6php2php2php1php8php'php,php php'php6php2php2php1php9php'php,php php'php6php2php2php2php'php,php php'php6php2php2php3php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php6php2php2php4php'php,php php'php6php2php2php5php'php,php php'php6php2php2php6php'php,php php'php6php2php2php7php'php,php php'php6php2php2php8php'php,php php'php6php2php2php9php0php'php,php php'php6php2php2php9php1php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php6php2php2php9php2php0php'php,php php'php6php2php2php9php2php1php'php,php php'php6php2php2php9php2php2php'php,php php'php6php2php2php9php2php3php'php,php php'php6php2php2php9php2php4php'php,php php'php6php2php2php9php2php5php'php)php,
php php php php php php php php selfphp:php:VISAphp php php php php php php php php php php php php php=php>php arrayphp(php'php4php'php)php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php CCIsphp whichphp arephp acceptedphp byphp validation
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Servicephp callbackphp forphp additionalphp validation
php php php php php php*
php php php php php php*php php@varphp callback
php php php php php php*php/
php php php php protectedphp php$php_servicephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$typephp OPTIONALphp Typephp ofphp CCIphp tophp allow
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'typephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'servicephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'typephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'typephp'php]php php=php selfphp:php:ALLphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setTypephp(php$optionsphp[php'typephp'php]php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'servicephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setServicephp(php$optionsphp[php'servicephp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp acceptedphp CCIs
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp CCIsphp whichphp arephp acceptedphp byphp validation
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$typephp Typephp tophp allowphp forphp validation
php php php php php php*php php@returnphp Zendphp_Validatephp_CreditCardphp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addTypephp(php$typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp CCIphp tophp bephp acceptedphp byphp validation
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$typephp Typephp tophp allowphp forphp validation
php php php php php php*php php@returnphp Zendphp_Validatephp_CreditCardphp Providesphp aphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp addTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$typephp)php)php php{
php php php php php php php php php php php php php$typephp php=php arrayphp(php$typephp)php;
php php php php php php php php php}

php php php php php php php php foreachphp(php$typephp asphp php$typphp)php php{
php php php php php php php php php php php php ifphp php(definedphp(php'selfphp:php:php'php php.php strtoupperphp(php$typphp)php)php php&php&php php!inphp_arrayphp(php$typphp,php php$thisphp-php>php_typephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_typephp[php]php php=php php$typphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php(php$typphp php=php=php selfphp:php:ALLphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_typephp php=php arrayphp_keysphp(php$thisphp-php>php_cardLengthphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp actualphp setphp service
php php php php php php*
php php php php php php*php php@returnphp callback
php php php php php php*php/
php php php php publicphp functionphp getServicephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_servicephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp callbackphp forphp servicephp validation
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$service
php php php php php php*php/
php php php php publicphp functionphp setServicephp(php$servicephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$servicephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp callbackphp givenphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_servicephp php=php php$servicephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp followsphp thephp Luhnphp algorithmphp php(modphp-php1php0php checksumphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp,php php$valuephp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!ctypephp_digitphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:CONTENTphp,php php$valuephp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$lengthphp php=php strlenphp(php$valuephp)php;
php php php php php php php php php$typesphp php php=php php$thisphp-php>getTypephp(php)php;
php php php php php php php php php$foundpphp php=php falsephp;
php php php php php php php php php$foundlphp php=php falsephp;
php php php php php php php php foreachphp php(php$typesphp asphp php$typephp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_cardTypephp[php$typephp]php asphp php$prefixphp)php php{
php php php php php php php php php php php php php php php php ifphp php(substrphp(php$valuephp,php php0php,php strlenphp(php$prefixphp)php)php php=php=php php$prefixphp)php php{
php php php php php php php php php php php php php php php php php php php php php$foundpphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$lengthphp,php php$thisphp-php>php_cardLengthphp[php$typephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundlphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp php2php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$foundpphp php=php=php falsephp)php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:PREFIXphp,php php$valuephp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$foundlphp php=php=php falsephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:LENGTHphp,php php$valuephp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$sumphp php php php php=php php0php;
php php php php php php php php php$weightphp php=php php2php;

php php php php php php php php forphp php(php$iphp php=php php$lengthphp php-php php2php;php php$iphp php>php=php php0php;php php$iphp-php-php)php php{
php php php php php php php php php php php php php$digitphp php=php php$weightphp php*php php$valuephp[php$iphp]php;
php php php php php php php php php php php php php$sumphp php+php=php floorphp(php$digitphp php/php php1php0php)php php+php php$digitphp php%php php1php0php;
php php php php php php php php php php php php php$weightphp php=php php$weightphp php%php php2php php+php php1php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php1php0php php-php php$sumphp php%php php1php0php)php php%php php1php0php php!php=php php$valuephp[php$lengthphp php-php php1php]php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:CHECKSUMphp,php php$valuephp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_servicephp)php)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Callbackphp.phpphp'php;
php php php php php php php php php php php php php php php php php$callbackphp php=php newphp Zendphp_Validatephp_Callbackphp(php$thisphp-php>php_servicephp)php;
php php php php php php php php php php php php php php php php php$callbackphp-php>setOptionsphp(php$thisphp-php>php_typephp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$callbackphp-php>isValidphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:SERVICEphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php catchphp php(Zendphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:SERVICEFAILUREphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
