<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Classphp encapsulatingphp documentsphp.php Fieldsphp arephp storedphp inphp aphp namephp/value
php php*php arrayphp.php Dataphp arephp representedphp asphp stringsphp.
php php*
php php*php TODOphp Canphp fieldsphp bephp largephp enoughphp tophp warrantphp supportphp forphp streamsphp?
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_DocumentServicephp_Document
php php php php implementsphp ArrayAccessphp,php IteratorAggregatephp,php Countable
php{
php php php php php/php*php*php keyphp inphp documentphp denotingphp identifierphp php*php/
php php php php constphp KEYphp_FIELDphp php=php php'php_idphp'php;

php php php php php/php*php*
php php php php php php*php IDphp ofphp thisphp documentphp.
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_idphp;

php php php php php/php*php*
php php php php php php*php Namephp/valuephp arrayphp ofphp fieldphp namesphp tophp valuesphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_fieldsphp;

php php php php php/php*php*
php php php php php php*php Constructphp anphp instancephp ofphp Zendphp_Cloudphp_DocumentServicephp_Documentphp.
php php php php php php*
php php php php php php*php Ifphp nophp identifierphp isphp providedphp,php butphp aphp fieldphp matchingphp KEYphp_FIELDphp isphp presentphp,
php php php php php php*php thenphp thatphp fieldphp'sphp valuephp willphp bephp usedphp asphp thephp documentphp identifierphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$fields
php php php php php php*php php@paramphp php mixedphp php$idphp Documentphp identifier
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$fieldsphp,php php$idphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$fieldsphp)php php&php&php php!php$fieldsphp instanceofphp ArrayAccessphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php'Fieldsphp mustphp bephp anphp arrayphp orphp implementphp ArrayAccessphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$fieldsphp[selfphp:php:KEYphp_FIELDphp]php)php)php php{
php php php php php php php php php php php php php$idphp php=php php$fieldsphp[selfphp:php:KEYphp_FIELDphp]php;
php php php php php php php php php php php php unsetphp(php$fieldsphp[selfphp:php:KEYphp_FIELDphp]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fieldsphp php=php php$fieldsphp;
php php php php php php php php php$thisphp-php>setIdphp(php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp documentphp identifier
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$id
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Document
php php php php php php*php/
php php php php publicphp functionphp setIdphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_idphp php=php php$idphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp IDphp namephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_idphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fieldsphp asphp arrayphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFieldsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fieldsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fieldphp byphp namephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getFieldphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_fieldsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_fieldsphp[php$namephp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp fieldphp byphp namephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Document
php php php php php php*php/
php php php php publicphp functionphp setFieldphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fieldsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php getphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getFieldphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php setphp field
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>setFieldphp(php$namephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php doesphp fieldphp existphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$namephp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_fieldsphp[php$namephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php getphp fieldphp byphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getFieldphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php setphp fieldphp tophp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>setFieldphp(php$namephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php ArrayAccessphp:php removephp fieldphp fromphp document
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>offsetExistsphp(php$namephp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_fieldsphp[php$namephp]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php retrievephp andphp setphp fieldsphp byphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$namephp,php php$argsphp)
php php php php php{
php php php php php php php php php$prefixphp php=php substrphp(php$namephp,php php0php,php php3php)php;
php php php php php php php php ifphp php(php$prefixphp php=php=php php'getphp'php)php php{
php php php php php php php php php php php php php/php/php Getphp value
php php php php php php php php php php php php php$optionphp php=php substrphp(php$namephp,php php3php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>getFieldphp(php$optionphp)php;
php php php php php php php php php}php elseifphp php(php$prefixphp php=php=php php'setphp'php)php php{
php php php php php php php php php php php php php/php/php setphp value
php php php php php php php php php php php php php$optionphp php=php substrphp(php$namephp,php php3php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>setFieldphp(php$optionphp,php php$argsphp[php0php]php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/OperationNotAvailableExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cloudphp_OperationNotAvailableExceptionphp(php"Unknownphp operationphp php$namephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Countablephp:php returnphp countphp ofphp fieldsphp inphp document
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_fieldsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php IteratorAggregatephp:php returnphp iteratorphp forphp iteratingphp overphp fields
php php php php php php*
php php php php php php*php php@returnphp Iterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayIteratorphp(php$thisphp-php>php_fieldsphp)php;
php php php php php}
php}
