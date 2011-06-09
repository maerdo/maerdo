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
php php*php php@versionphp php php php php$Idphp:php Ipphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
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
classphp Zendphp_Validatephp_Ipphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp INVALIDphp php php php php php php php php=php php'ipInvalidphp'php;
php php php php constphp NOTphp_IPphp_ADDRESSphp php=php php'notIpAddressphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp php php php php php php php php=php>php php"Invalidphp typephp givenphp.php Stringphp expectedphp"php,
php php php php php php php php selfphp:php:NOTphp_IPphp_ADDRESSphp php=php>php php"php'php%valuephp%php'php doesphp notphp appearphp tophp bephp aphp validphp IPphp addressphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php internalphp options
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'allowipvphp6php'php php=php>php truephp,
php php php php php php php php php'allowipvphp4php'php php=php>php true
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$optionsphp OPTIONALphp Optionsphp tophp setphp,php seephp thephp manualphp forphp allphp availablephp options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'allowipvphp6php'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'allowipvphp4php'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php php$optionsphp php+php=php php$thisphp-php>php_optionsphp;
php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp setphp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp optionsphp forphp thisphp validator
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Validatephp_Ip
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'allowipvphp6php'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'allowipvphp6php'php]php php=php php(booleanphp)php php$optionsphp[php'allowipvphp6php'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'allowipvphp4php'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'allowipvphp4php'php]php php=php php(booleanphp)php php$optionsphp[php'allowipvphp4php'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_optionsphp[php'allowipvphp4php'php]php php&php&php php!php$thisphp-php>php_optionsphp[php'allowipvphp6php'php]php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Nothingphp tophp validatephp.php Checkphp yourphp optionsphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp isphp aphp validphp IPphp address
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;
php php php php php php php php ifphp php(php(php$thisphp-php>php_optionsphp[php'allowipvphp4php'php]php php&php&php php!php$thisphp-php>php_optionsphp[php'allowipvphp6php'php]php php&php&php php!php$thisphp-php>php_validateIPvphp4php(php$valuephp)php)php php|php|
php php php php php php php php php php php php php(php!php$thisphp-php>php_optionsphp[php'allowipvphp4php'php]php php&php&php php$thisphp-php>php_optionsphp[php'allowipvphp6php'php]php php&php&php php!php$thisphp-php>php_validateIPvphp6php(php$valuephp)php)php php|php|
php php php php php php php php php php php php php(php$thisphp-php>php_optionsphp[php'allowipvphp4php'php]php php&php&php php$thisphp-php>php_optionsphp[php'allowipvphp6php'php]php php&php&php php!php$thisphp-php>php_validateIPvphp4php(php$valuephp)php php&php&php php!php$thisphp-php>php_validateIPvphp6php(php$valuephp)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_IPphp_ADDRESSphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp anphp IPvphp4php address
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php/
php php php php protectedphp functionphp php_validateIPvphp4php(php$valuephp)php php{
php php php php php php php php php$ipphp2longphp php=php ipphp2longphp(php$valuephp)php;
php php php php php php php php ifphp(php$ipphp2longphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp php=php=php longphp2ipphp(php$ipphp2longphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp anphp IPvphp6php address
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Valuephp tophp checkphp against
php php php php php php*php php@returnphp booleanphp Truephp whenphp php$valuephp isphp aphp validphp ipvphp6php address
php php php php php php*php php php php php php php php php php php php php php php php php Falsephp otherwise
php php php php php php*php/
php php php php protectedphp functionphp php_validateIPvphp6php(php$valuephp)php php{
php php php php php php php php ifphp php(strlenphp(php$valuephp)php <php php3php)php php{
php php php php php php php php php php php php returnphp php$valuephp php=php=php php'php:php:php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(strposphp(php$valuephp,php php'php.php'php)php)php php{
php php php php php php php php php php php php php$lastcolonphp php=php strrposphp(php$valuephp,php php'php:php'php)php;
php php php php php php php php php php php php ifphp php(php!php(php$lastcolonphp php&php&php php$thisphp-php>php_validateIPvphp4php(substrphp(php$valuephp,php php$lastcolonphp php+php php1php)php)php)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$valuephp php=php substrphp(php$valuephp,php php0php,php php$lastcolonphp)php php.php php'php:php0php:php0php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(strposphp(php$valuephp,php php'php:php:php'php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp pregphp_matchphp(php'php/php\Aphp(php?php:php[aphp-fphp0php-php9php]php{php1php,php4php}php:php)php{php7php}php[aphp-fphp0php-php9php]php{php1php,php4php}php\zphp/iphp'php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$colonCountphp php=php substrphp_countphp(php$valuephp,php php'php:php'php)php;
php php php php php php php php ifphp php(php$colonCountphp <php php8php)php php{
php php php php php php php php php php php php returnphp pregphp_matchphp(php'php/php\Aphp(php?php:php:php|php(php?php:php[aphp-fphp0php-php9php]php{php1php,php4php}php:php)php+php)php:php(php?php:php(php?php:php[aphp-fphp0php-php9php]php{php1php,php4php}php:php)php*php[aphp-fphp0php-php9php]php{php1php,php4php}php)php?php\zphp/iphp'php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php specialphp casephp withphp endingphp orphp startingphp doublephp colon
php php php php php php php php ifphp php(php$colonCountphp php=php=php php8php)php php{
php php php php php php php php php php php php returnphp pregphp_matchphp(php'php/php\Aphp(php?php:php:php:php)php?php(php?php:php[aphp-fphp0php-php9php]php{php1php,php4php}php:php)php{php6php}php[aphp-fphp0php-php9php]php{php1php,php4php}php(php?php:php:php:php)php?php\zphp/iphp'php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}
php}
