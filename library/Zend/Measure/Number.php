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
php php*php php@versionphp php php php$Idphp:php Numberphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Implementphp neededphp classes
php php*php/
requirephp_oncephp php'Zendphp/Measurephp/Abstractphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*
php php*php Classphp forphp handlingphp numberphp conversions
php php*
php php*php Thisphp classphp canphp onlyphp handlephp numbersphp withoutphp precision
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Measure
php php*php php@subpackagephp Zendphp_Measurephp_Number
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Measurephp_Numberphp extendsphp Zendphp_Measurephp_Abstract
php{
php php php php constphp STANDARDphp php=php php'DECIMALphp'php;

php php php php constphp BINARYphp php php php php php php=php php'BINARYphp'php;
php php php php constphp TERNARYphp php php php php php=php php'TERNARYphp'php;
php php php php constphp QUATERNARYphp php php=php php'QUATERNARYphp'php;
php php php php constphp QUINARYphp php php php php php=php php'QUINARYphp'php;
php php php php constphp SENARYphp php php php php php php=php php'SENARYphp'php;
php php php php constphp SEPTENARYphp php php php=php php'SEPTENARYphp'php;
php php php php constphp OCTALphp php php php php php php php=php php'OCTALphp'php;
php php php php constphp NONARYphp php php php php php php=php php'NONARYphp'php;
php php php php constphp DECIMALphp php php php php php=php php'DECIMALphp'php;
php php php php constphp DUODECIMALphp php php=php php'DUODECIMALphp'php;
php php php php constphp HEXADECIMALphp php=php php'HEXADECIMALphp'php;
php php php php constphp ROMANphp php php php php php php php=php php'ROMANphp'php;

php php php php php/php*php*
php php php php php php*php Calculationsphp forphp allphp numberphp units
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unitsphp php=php arrayphp(
php php php php php php php php php'BINARYphp'php php php php php php php=php>php arrayphp(php2php,php php php'php⑵php'php)php,
php php php php php php php php php'TERNARYphp'php php php php php php=php>php arrayphp(php3php,php php php'php⑶php'php)php,
php php php php php php php php php'QUATERNARYphp'php php php=php>php arrayphp(php4php,php php php'php⑷php'php)php,
php php php php php php php php php'QUINARYphp'php php php php php php=php>php arrayphp(php5php,php php php'php⑸php'php)php,
php php php php php php php php php'SENARYphp'php php php php php php php=php>php arrayphp(php6php,php php php'php⑹php'php)php,
php php php php php php php php php'SEPTENARYphp'php php php php=php>php arrayphp(php7php,php php php'php⑺php'php)php,
php php php php php php php php php'OCTALphp'php php php php php php php php=php>php arrayphp(php8php,php php php'php⑻php'php)php,
php php php php php php php php php'NONARYphp'php php php php php php php=php>php arrayphp(php9php,php php php'php⑼php'php)php,
php php php php php php php php php'DECIMALphp'php php php php php php=php>php arrayphp(php1php0php,php php'php⑽php'php)php,
php php php php php php php php php'DUODECIMALphp'php php php=php>php arrayphp(php1php2php,php php'php⑿php'php)php,
php php php php php php php php php'HEXADECIMALphp'php php=php>php arrayphp(php1php6php,php php'php⒃php'php)php,
php php php php php php php php php'ROMANphp'php php php php php php php php=php>php arrayphp(php9php9php,php php'php'php)php,
php php php php php php php php php'STANDARDphp'php php php php php=php>php php'DECIMALphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Definitionphp ofphp allphp romanphp signs
php php php php php php*
php php php php php php*php php@varphp arrayphp php$php_roman
php php php php php php*php/
php php php php privatephp staticphp php$php_romanphp php=php arrayphp(
php php php php php php php php php'Iphp'php php=php>php php1php,
php php php php php php php php php'Aphp'php php=php>php php4php,
php php php php php php php php php'Vphp'php php=php>php php5php,
php php php php php php php php php'Bphp'php php=php>php php9php,
php php php php php php php php php'Xphp'php php=php>php php1php0php,
php php php php php php php php php'Ephp'php php=php>php php4php0php,
php php php php php php php php php'Lphp'php php=php>php php5php0php,
php php php php php php php php php'Fphp'php php=php>php php9php0php,
php php php php php php php php php'Cphp'php php=php>php php1php0php0php,
php php php php php php php php php'Gphp'php php=php>php php4php0php0php,
php php php php php php php php php'Dphp'php php=php>php php5php0php0php,
php php php php php php php php php'Hphp'php php=php>php php9php0php0php,
php php php php php php php php php'Mphp'php php=php>php php1php0php0php0php,
php php php php php php php php php'Jphp'php php=php>php php4php0php0php0php,
php php php php php php php php php'Pphp'php php=php>php php5php0php0php0php,
php php php php php php php php php'Kphp'php php=php>php php9php0php0php0php,
php php php php php php php php php'Qphp'php php=php>php php1php0php0php0php0php,
php php php php php php php php php'Nphp'php php=php>php php4php0php0php0php0php,
php php php php php php php php php'Rphp'php php=php>php php5php0php0php0php0php,
php php php php php php php php php'Wphp'php php=php>php php9php0php0php0php0php,
php php php php php php php php php'Sphp'php php=php>php php1php0php0php0php0php0php,
php php php php php php php php php'Yphp'php php=php>php php4php0php0php0php0php0php,
php php php php php php php php php'Tphp'php php=php>php php5php0php0php0php0php0php,
php php php php php php php php php'Zphp'php php=php>php php9php0php0php0php0php0php,
php php php php php php php php php'Uphp'php php=php>php php1php0php0php0php0php0php0
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Convertionphp tablephp forphp romanphp signs
php php php php php php*
php php php php php php*php php@varphp arrayphp php$php_romanconvert
php php php php php php*php/
php php php php privatephp staticphp php$php_romanconvertphp php=php arrayphp(
php php php php php php php php php'php/php_Vphp/php'php php=php>php php'php/Pphp/php'php,
php php php php php php php php php'php/php_Xphp/php'php php=php>php php'php/Qphp/php'php,
php php php php php php php php php'php/php_Lphp/php'php php=php>php php'php/Rphp/php'php,
php php php php php php php php php'php/php_Cphp/php'php php=php>php php'php/Sphp/php'php,
php php php php php php php php php'php/php_Dphp/php'php php=php>php php'php/Tphp/php'php,
php php php php php php php php php'php/php_Mphp/php'php php=php>php php'php/Uphp/php'php,
php php php php php php php php php'php/IVphp/php'php php=php>php php'php/Aphp/php'php,
php php php php php php php php php'php/IXphp/php'php php=php>php php'php/Bphp/php'php,
php php php php php php php php php'php/XLphp/php'php php=php>php php'php/Ephp/php'php,
php php php php php php php php php'php/XCphp/php'php php=php>php php'php/Fphp/php'php,
php php php php php php php php php'php/CDphp/php'php php=php>php php'php/Gphp/php'php,
php php php php php php php php php'php/CMphp/php'php php=php>php php'php/Hphp/php'php,
php php php php php php php php php'php/Mphp_Vphp/php'php=php>php php'php/Jphp/php'php,
php php php php php php php php php'php/MQphp/php'php php=php>php php'php/Kphp/php'php,
php php php php php php php php php'php/QRphp/php'php php=php>php php'php/Nphp/php'php,
php php php php php php php php php'php/QSphp/php'php php=php>php php'php/Wphp/php'php,
php php php php php php php php php'php/STphp/php'php php=php>php php'php/Yphp/php'php,
php php php php php php php php php'php/SUphp/php'php php=php>php php'php/Zphp/php'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Zendphp_Measurephp_Abstractphp isphp anphp abstractphp classphp forphp thephp differentphp measurementphp types
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php$valuephp php Value
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php$typephp php php php(Optionalphp)php Aphp Zendphp_Measurephp_Numberphp Type
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Aphp Zendphp_Locale
php php php php php php*php php@throwsphp Zendphp_Measurephp_Exceptionphp Whenphp languagephp isphp unknown
php php php php php php*php php@throwsphp Zendphp_Measurephp_Exceptionphp Whenphp typephp isphp unknown
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$valuephp,php php$typephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(php$typephp php!php=php=php nullphp)php andphp php(Zendphp_Localephp:php:isLocalephp(php$typephp,php nullphp,php falsephp)php)php)php php{
php php php php php php php php php php php php php$localephp php=php php$typephp;
php php php php php php php php php php php php php$typephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php newphp Zendphp_Localephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!Zendphp_Localephp:php:isLocalephp(php$localephp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php ifphp php(php!Zendphp_Localephp:php:isLocalephp(php$localephp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php"Languagephp php(php"php php.php php(stringphp)php php$localephp php.php php"php)php isphp unknownphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$localephp php=php newphp Zendphp_Localephp(php$localephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_localephp php=php php(stringphp)php php$localephp;

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
php php php php php php*php Setphp aphp newphp value
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php$valuephp php Value
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php$typephp php php php(Optionalphp)php Aphp Zendphp_Measurephp_Numberphp Type
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Aphp Zendphp_Localephp Type
php php php php php php*php php@throwsphp Zendphp_Measurephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp,php php$typephp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$localephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>php_localephp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_unitsphp[php$typephp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php'unknownphp typephp ofphp numberphp:php'php php.php php$typephp)php;
php php php php php php php php php}

php php php php php php php php switchphp(php$typephp)php php{
php php php php php php php php php php php php casephp php'BINARYphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php]php+php/php'php,php php$valuephp,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'TERNARYphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php]php+php/php'php,php php$valuephp,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'QUATERNARYphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php3php]php+php/php'php,php php$valuephp,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'QUINARYphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php3php4php]php+php/php'php,php php$valuephp,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'SENARYphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php3php4php5php]php+php/php'php,php php$valuephp,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'SEPTENARYphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php3php4php5php6php]php+php/php'php,php php$valuephp,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'OCTALphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php3php4php5php6php7php]php+php/php'php,php php$valuephp,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'NONARYphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php3php4php5php6php7php8php]php+php/php'php,php php$valuephp,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'DUODECIMALphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php3php4php5php6php7php8php9ABphp]php+php/php'php,php strtoupperphp(php$valuephp)php,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'HEXADECIMALphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[php0php1php2php3php4php5php6php7php8php9ABCDEFphp]php+php/php'php,php strtoupperphp(php$valuephp)php,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'ROMANphp'php:
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[IVXLCDMphp_php]php+php/php'php,php strtoupperphp(php$valuephp)php,php php$ergebnisphp)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$ergebnisphp[php0php]php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php Zendphp_Localephp_Formatphp:php:getIntegerphp(php$valuephp,php arrayphp(php'localephp'php php=php>php php$localephp)php)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$compphp,php php$valuephp,php php0php)php <php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$sqrtphp,php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$powphp,php php$valuephp,php php2php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
php php php php php php php php php$thisphp-php>php_typephp php php=php php$typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp inputphp tophp decimalphp valuephp string
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$inputphp Inputphp string
php php php php php php*php php@paramphp php stringphp php php$typephp php Typephp fromphp whichphp tophp convertphp tophp decimal
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_toDecimalphp(php$inputphp,php php$typephp)
php php php php php{
php php php php php php php php php$valuephp php=php php'php'php;
php php php php php php php php php/php/php Convertphp basephp xxphp values
php php php php php php php php ifphp php(php$thisphp-php>php_unitsphp[php$typephp]php[php0php]php <php=php php1php6php)php php{
php php php php php php php php php php php php php$splitphp php php=php strphp_splitphp(php$inputphp)php;
php php php php php php php php php php php php php$lengthphp php=php strlenphp(php$inputphp)php;
php php php php php php php php php php php php forphp php(php$xphp php=php php0php;php php$xphp <php php$lengthphp;php php+php+php$xphp)php php{
php php php php php php php php php php php php php php php php php$splitphp[php$xphp]php php=php hexdecphp(php$splitphp[php$xphp]php)php;
php php php php php php php php php php php php php php php php php$valuephp php php php php php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$addphp,php php$valuephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$mulphp,php php$splitphp[php$xphp]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$powphp,php php$thisphp-php>php_unitsphp[php$typephp]php[php0php]php,php php(php$lengthphp php-php php$xphp php-php php1php)php)php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Convertphp romanphp numbers
php php php php php php php php ifphp php(php$typephp php=php=php=php php'ROMANphp'php)php php{
php php php php php php php php php php php php php$inputphp php=php strtoupperphp(php$inputphp)php;
php php php php php php php php php php php php php$inputphp php=php pregphp_replacephp(arrayphp_keysphp(selfphp:php:php$php_romanconvertphp)php,php arrayphp_valuesphp(selfphp:php:php$php_romanconvertphp)php,php php$inputphp)php;

php php php php php php php php php php php php php$splitphp php=php pregphp_splitphp(php'php/php/php'php,php strrevphp(php$inputphp)php,php php-php1php,php PREGphp_SPLITphp_NOphp_EMPTYphp)php;

php php php php php php php php php php php php forphp php(php$xphp php=php0php;php php$xphp <php sizeofphp(php$splitphp)php;php php$xphp+php+php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$splitphp[php$xphp]php php=php=php php'php/php'php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$numphp php=php selfphp:php:php$php_romanphp[php$splitphp[php$xphp]php]php;
php php php php php php php php php php php php php php php php ifphp php(php(php$xphp php>php php0php andphp php(php$splitphp[php$xphp-php1php]php php!php=php php'php/php'php)php andphp php(php$numphp <php selfphp:php:php$php_romanphp[php$splitphp[php$xphp-php1php]php]php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$numphp php-php=php php$numphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$valuephp php+php=php php$numphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php strphp_replacephp(php'php/php'php,php php'php'php,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp inputphp tophp typephp valuephp string
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$valuephp Inputphp string
php php php php php php*php php@paramphp php stringphp php php$typephp php Typephp tophp convertphp to
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Measurephp_Exceptionphp Whenphp morephp thanphp php2php0php0php digitsphp arephp calculated
php php php php php php*php/
php php php php privatephp functionphp php_fromDecimalphp(php$valuephp,php php$typephp)
php php php php php{
php php php php php php php php php$tempvaluephp php=php php$valuephp;
php php php php php php php php ifphp php(php$thisphp-php>php_unitsphp[php$typephp]php[php0php]php <php=php php1php6php)php php{
php php php php php php php php php php php php php$newvaluephp php=php php'php'php;
php php php php php php php php php php php php php$countphp php php php php=php php2php0php0php;
php php php php php php php php php php php php php$basephp php php php php php=php php$thisphp-php>php_unitsphp[php$typephp]php[php0php]php;

php php php php php php php php php php php php whilephp php(callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$compphp,php php$valuephp,php php0php,php php2php5php)php <php>php php0php)php php{
php php php php php php php php php php php php php php php php php$targetphp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$modphp,php php$valuephp,php php$basephp)php;

php php php php php php php php php php php php php php php php php$newvaluephp php=php strtoupperphp(dechexphp(php$targetphp)php)php php.php php$newvaluephp;

php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$subphp,php php$valuephp,php php$targetphp,php php0php)php;
php php php php php php php php php php php php php php php php php$valuephp php=php callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$divphp,php php$valuephp,php php$basephp,php php0php)php;

php php php php php php php php php php php php php php php php php-php-php$countphp;
php php php php php php php php php php php php php php php php ifphp php(php$countphp php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php"Yourphp valuephp php'php$tempvaluephp'php cannotphp bephp processedphp becausephp itphp extendsphp php2php0php0php digitsphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$newvaluephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php$newvaluephp php=php php'php0php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$typephp php=php=php=php php'ROMANphp'php)php php{
php php php php php php php php php php php php php$iphp php php php php php php php php=php php0php;
php php php php php php php php php php php php php$newvaluephp php=php php'php'php;
php php php php php php php php php php php php php$romanvalphp php=php arrayphp_valuesphp(arrayphp_reversephp(selfphp:php:php$php_romanphp)php)php;
php php php php php php php php php php php php php$romankeyphp php=php arrayphp_keysphp(arrayphp_reversephp(selfphp:php:php$php_romanphp)php)php;
php php php php php php php php php php php php php$countphp php php php php=php php2php0php0php;
php php php php php php php php php php php php whilephp php(callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$compphp,php php$valuephp,php php0php,php php2php5php)php <php>php php0php)php php{
php php php php php php php php php php php php php php php php whilephp php(php$valuephp php>php=php php$romanvalphp[php$iphp]php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php php php php-php=php php$romanvalphp[php$iphp]php;
php php php php php php php php php php php php php php php php php php php php php$newvaluephp php.php=php php$romankeyphp[php$iphp]php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$valuephp <php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php-php-php$countphp;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$countphp php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php"Yourphp valuephp php'php$tempvaluephp'php cannotphp bephp processedphp becausephp itphp extendsphp php2php0php0php digitsphp"php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$newvaluephp php=php strphp_replacephp(php'php/php'php,php php'php'php,php pregphp_replacephp(arrayphp_valuesphp(selfphp:php:php$php_romanconvertphp)php,php arrayphp_keysphp(selfphp:php:php$php_romanconvertphp)php,php php$newvaluephp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$newvaluephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp newphp typephp,php andphp convertphp thephp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp Newphp typephp tophp set
php php php php php php*php php@throwsphp Zendphp_Measurephp_Exceptionphp Whenphp aphp unknownphp typephp isphp given
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_unitsphp[php$typephp]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Measurephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Measurephp_Exceptionphp(php'Unknownphp typephp ofphp numberphp:php'php php.php php$typephp)php;
php php php php php php php php php}

php php php php php php php php php$valuephp php=php php$thisphp-php>php_toDecimalphp(php$thisphp-php>getValuephp(php-php1php)php,php php$thisphp-php>getTypephp(php-php1php)php)php;
php php php php php php php php php$valuephp php=php php$thisphp-php>php_fromDecimalphp(php$valuephp,php php$typephp)php;

php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
php php php php php php php php php$thisphp-php>php_typephp php php=php php$typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Aliasphp functionphp forphp setTypephp returningphp thephp convertedphp unit
php php php php php php*php Defaultphp isphp php0php asphp thisphp classphp onlyphp handlesphp numbersphp withoutphp precision
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$typephp php Typephp tophp convertphp to
php php php php php php*php php@paramphp php integerphp php$roundphp php(Optionalphp)php Precisionphp tophp addphp,php willphp alwaysphp bephp php0
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp convertTophp(php$typephp,php php$roundphp php=php php0php,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setTypephp(php$typephp)php;
php php php php php php php php returnphp php$thisphp-php>toStringphp(php$roundphp,php php$localephp)php;
php php php php php}
php}
