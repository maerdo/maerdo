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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Measure
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Abstractphp.phpphp php2php1php3php2php9php php2php0php1php0php-php0php3php-php0php4php php2php2php:php0php6php:php0php8Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Locale
php php*php/
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Localephp_Math
php php*php/
requirephp_oncephp php'Zendphp/Localephp/Mathphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Localephp_Format
php php*php/
requirephp_oncephp php'Zendphp/Localephp/Formatphp.phpphp'php;

php/php*php*
php php*php Abstractphp classphp forphp allphp measurements
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Abstract
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Measurephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Plainphp valuephp inphp standardphp unit
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_value
php php php php php php*php/
php php php php protectedphp php$php_valuephp;

php php php php php/php*php*
php php php php php php*php Originalphp typephp forphp thisphp unit
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_type
php php php php php php*php/
php php php php protectedphp php$php_typephp;

php php php php php/php*php*
php php php php php php*php Localephp identifier
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_locale
php php php php php php*php/
php php php php protectedphp php$php_localephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Unitphp typesphp forphp thisphp measurement
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Zendphp_Measurephp_Abstractphp isphp anphp abstractphp classphp forphp thephp differentphp measurementphp types
php php php php php php*
php php php php php php*php php@paramphp php php$valuephp php mixedphp php php-php Valuephp asphp stringphp,php integerphp,php realphp orphp float
php php php php php php*php php@paramphp php php$typephp php php typephp php php php-php OPTIONALphp aphp measurephp typephp fphp.ephp.php Zendphp_Measurephp_Lengthphp:php:METER
php php php php php php*php php@paramphp php php$localephp localephp php-php OPTIONALphp aphp Zendphp_Localephp Type
php php php php php php*php php@throwsphp Zendphp_Measurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp,php php$typephp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(php$typephp php!php=php=php nullphp)php andphp php(Zendphp_Localephp:php:isLocalephp(php$typephp,php nullphp,php falsephp)php)php)php php{
php php php php php php php php php php php php php$localephp php=php php$typephp;
php php php php php php php php php php php php php$typephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setLocalephp(php$localephp)php;
php php php php php php php php ifphp php(php$typephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_unitsphp[php'STANDARDphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_unitsphp[php$typephp]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php"Typephp php(php$typephp)php isphp unknownphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setValuephp(php$valuephp,php php$typephp,php php$thisphp-php>php_localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp actualphp setphp locale
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLocalephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_localephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp localephp forphp thephp valuephp representation
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Newphp localephp tophp set
php php php php php php*php php@paramphp booleanphp php php php php php php php php php php php php$checkphp php Falsephp,php checkphp butphp donphp'tphp setphp;php Truephp,php setphp thephp newphp locale
php php php php php php*php php@returnphp Zendphp_Measurephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setLocalephp(php$localephp php=php nullphp,php php$checkphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$localephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Localephp'php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$localephp php=php Zendphp_Registryphp:php:getphp(php'Zendphp_Localephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php newphp Zendphp_Localephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!Zendphp_Localephp:php:isLocalephp(php$localephp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php ifphp php(php!Zendphp_Localephp:php:isLocalephp(php$localephp,php falsephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php"Languagephp php(php"php php.php php(stringphp)php php$localephp php.php php"php)php isphp unknownphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$localephp php=php newphp Zendphp_Localephp(php$localephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$checkphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_localephp php=php php(stringphp)php php$localephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp internalphp value
php php php php php php*
php php php php php php*php php@paramphp integerphp php php php php php php php php php php php php$roundphp php php(Optionalphp)php Roundsphp thephp valuephp tophp anphp givenphp precisionphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Defaultphp isphp php-php1php whichphp returnsphp withoutphp rounding
php php php php php php*php php@paramphp stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Localephp forphp numberphp representation
php php php php php php*php php@returnphp integerphp|string
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php$roundphp php=php php-php1php,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$roundphp <php php0php)php php{
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$returnphp php=php Zendphp_Localephp_Mathphp:php:roundphp(php$thisphp-php>php_valuephp,php php$roundphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setLocalephp(php$localephp,php truephp)php;
php php php php php php php php php php php php returnphp Zendphp_Localephp_Formatphp:php:toNumberphp(php$returnphp,php arrayphp(php'localephp'php php=php>php php$localephp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp newphp value
php php php php php php*
php php php php php php*php php@paramphp php integerphp|stringphp php php php php php php$valuephp php php Valuephp asphp stringphp,php integerphp,php realphp orphp float
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php$typephp php php php OPTIONALphp Aphp measurephp typephp fphp.ephp.php Zendphp_Measurephp_Lengthphp:php:METER
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp numbers
php php php php php php*php php@throwsphp Zendphp_Measurephp_Exception
php php php php php php*php php@returnphp Zendphp_Measurephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp,php php$typephp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(php$typephp php!php=php=php nullphp)php andphp php(Zendphp_Localephp:php:isLocalephp(php$typephp,php nullphp,php falsephp)php)php)php php{
php php php php php php php php php php php php php$localephp php=php php$typephp;
php php php php php php php php php php php php php$typephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>php_localephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setLocalephp(php$localephp,php truephp)php;
php php php php php php php php ifphp php(php$typephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_unitsphp[php'STANDARDphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_unitsphp[php$typephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php"Typephp php(php$typephp)php isphp unknownphp"php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$valuephp php=php Zendphp_Localephp_Formatphp:php:getNumberphp(php$valuephp,php arrayphp(php'localephp'php php=php>php php$localephp)php)php;
php php php php php php php php php}php catchphp(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
php php php php php php php php php$thisphp-php>setTypephp(php$typephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp originalphp type
php php php php php php*
php php php php php php*php php@returnphp type
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp newphp typephp,php andphp convertphp thephp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp Newphp typephp tophp set
php php php php php php*php php@throwsphp Zendphp_Measurephp_Exception
php php php php php php*php php@returnphp Zendphp_Measurephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_unitsphp[php$typephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php"Typephp php(php$typephp)php isphp unknownphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_typephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Convertphp tophp standardphp value
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_valuephp;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_unitsphp[php$thisphp-php>getTypephp(php)php]php[php0php]php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_unitsphp[php$thisphp-php>getTypephp(php)php]php[php0php]php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp php"php/php"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$foundphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$divphp,php php$valuephp,php php$foundphp,php php2php5php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php casephp php"php+php"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$addphp,php php$valuephp,php php$foundphp,php php2php5php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php casephp php"php-php"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$subphp,php php$valuephp,php php$foundphp,php php2php5php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$mulphp,php php$valuephp,php php$foundphp,php php2php5php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$mulphp,php php$valuephp,php php$thisphp-php>php_unitsphp[php$thisphp-php>getTypephp(php)php]php[php0php]php,php php2php5php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Convertphp tophp expectedphp value
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_unitsphp[php$typephp]php[php0php]php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(arrayphp_reversephp(php$thisphp-php>php_unitsphp[php$typephp]php[php0php]php)php asphp php$keyphp php=php>php php$foundphp)php php{
php php php php php php php php php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp php"php/php"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$mulphp,php php$valuephp,php php$foundphp,php php2php5php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php casephp php"php+php"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$subphp,php php$valuephp,php php$foundphp,php php2php5php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php casephp php"php-php"php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$addphp,php php$valuephp,php php$foundphp,php php2php5php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$foundphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$divphp,php php$valuephp,php php$foundphp,php php2php5php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$divphp,php php$valuephp,php php$thisphp-php>php_unitsphp[php$typephp]php[php0php]php,php php2php5php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$slengthphp php=php strlenphp(php$valuephp)php;
php php php php php php php php php php php php php$lengthphp php php=php php0php;
php php php php php php php php php php php php forphp(php$iphp php=php php1php;php php$iphp <php=php php$slengthphp;php php+php+php$iphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$valuephp[php$slengthphp php-php php$iphp]php php!php=php php'php0php'php)php php{
php php php php php php php php php php php php php php php php php php php php php$lengthphp php=php php2php6php php-php php$iphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php Zendphp_Localephp_Mathphp:php:roundphp(php$valuephp,php php$lengthphp)php;
php php php php php php php php php php php php php$thisphp-php>php_typephp php php=php php$typephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Comparephp ifphp thephp valuephp andphp typephp isphp equal
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Measurephp_Abstractphp php$objectphp objectphp tophp compare
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp equalsphp(php$objectphp)
php php php php php{
php php php php php php php php ifphp php(php(stringphp)php php$objectphp php=php=php php$thisphp-php>toStringphp(php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp representation
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php$roundphp php php(Optionalphp)php Rundsphp thephp valuephp tophp anphp givenphp exception
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Localephp tophp setphp forphp thephp number
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$roundphp php=php php-php1php,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>php_localephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getValuephp(php$roundphp,php php$localephp)php php.php php'php php'php php.php php$thisphp-php>php_unitsphp[php$thisphp-php>getTypephp(php)php]php[php1php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp representation
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp conversionphp list
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getConversionListphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_unitsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Aliasphp functionphp forphp setTypephp returningphp thephp convertedphp unit
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php$typephp php php Constantphp Type
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php$roundphp php php(Optionalphp)php Roundsphp thephp valuephp tophp aphp givenphp precision
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Localephp tophp setphp forphp thephp number
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp convertTophp(php$typephp,php php$roundphp php=php php2php,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setTypephp(php$typephp)php;
php php php php php php php php returnphp php$thisphp-php>toStringphp(php$roundphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp anphp unitphp tophp anotherphp one
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Measurephp_Abstractphp php$objectphp objectphp ofphp samephp unitphp type
php php php php php php*php php@returnphp Zendphp_Measurephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp addphp(php$objectphp)
php php php php php{
php php php php php php php php php$objectphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php$valuephp php php=php php$thisphp-php>getValuephp(php-php1php)php php+php php$objectphp-php>getValuephp(php-php1php)php;

php php php php php php php php php$thisphp-php>setValuephp(php$valuephp,php php$thisphp-php>getTypephp(php)php,php php$thisphp-php>php_localephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Substractsphp anphp unitphp fromphp anotherphp one
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Measurephp_Abstractphp php$objectphp objectphp ofphp samephp unitphp type
php php php php php php*php php@returnphp Zendphp_Measurephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp subphp(php$objectphp)
php php php php php{
php php php php php php php php php$objectphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php$valuephp php php=php php$thisphp-php>getValuephp(php-php1php)php php-php php$objectphp-php>getValuephp(php-php1php)php;

php php php php php php php php php$thisphp-php>setValuephp(php$valuephp,php php$thisphp-php>getTypephp(php)php,php php$thisphp-php>php_localephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Comparesphp twophp units
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Measurephp_Abstractphp php$objectphp objectphp ofphp samephp unitphp type
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp comparephp(php$objectphp)
php php php php php{
php php php php php php php php php$objectphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php php$valuephp php php=php php$thisphp-php>getValuephp(php-php1php)php php-php php$objectphp-php>getValuephp(php-php1php)php;

php php php php php php php php ifphp php(php$valuephp <php php0php)php php{
php php php php php php php php php php php php returnphp php-php1php;
php php php php php php php php php}php elsephp ifphp php(php$valuephp php>php php0php)php php{
php php php php php php php php php php php php returnphp php1php;
php php php php php php php php php}

php php php php php php php php returnphp php0php;
php php php php php}
php}
