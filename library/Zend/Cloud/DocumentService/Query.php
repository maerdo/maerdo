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

requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/QueryAdapterphp.phpphp'php;

php/php*php*
php php*php Genericphp queryphp object
php php*
php php*php Aggregatesphp operationsphp inphp anphp arrayphp ofphp clausesphp,php wherephp thephp firstphp element
php php*php describesphp thephp clausephp typephp,php andphp thephp nextphp elementphp describesphp thephp criteriaphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php implementsphp Zendphp_Cloudphp_DocumentServicephp_QueryAdapter
php{
php php php php php/php*php*
php php php php php php*php Knownphp queryphp types
php php php php php php*php/
php php php php constphp QUERYphp_SELECTphp php php=php php'selectphp'php;
php php php php constphp QUERYphp_FROMphp php php php php=php php'fromphp'php;
php php php php constphp QUERYphp_WHEREphp php php php=php php'wherephp'php;
php php php php constphp QUERYphp_WHEREIDphp php=php php'whereidphp'php;php php/php/php requestphp elementphp byphp ID
php php php php constphp QUERYphp_LIMITphp php php php=php php'limitphp'php;
php php php php constphp QUERYphp_ORDERphp php php php=php php'orderphp'php;

php php php php php/php*php*
php php php php php php*php Clausephp list
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_clausesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Genericphp clause
php php php php php php*
php php php php php php*php Youphp canphp usephp anyphp clausephp byphp doingphp php$queryphp-php>foophp(php'barphp'php)
php php php php php php*php butphp concretephp adaptersphp shouldphp bephp ablephp tophp recognisephp it
php php php php php php*
php php php php php php*php Thephp callphp willphp bephp iterpretedphp asphp clausephp php'foophp'php withphp argumentphp php'barphp'
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Clausephp/methodphp name
php php php php php php*php php@paramphp php mixedphp php$args
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$namephp,php php$argsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_clausesphp[php]php php=php arrayphp(strtolowerphp(php$namephp)php,php php$argsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php SELECTphp clausephp php(fieldsphp tophp bephp selectedphp)
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp|arrayphp php$select
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp selectphp(php$selectphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$selectphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_stringphp(php$selectphp)php php&php&php php!isphp_arrayphp(php$selectphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php"SELECTphp argumentphp mustphp bephp aphp stringphp orphp anphp arrayphp ofphp stringsphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_clausesphp[php]php php=php arrayphp(selfphp:php:QUERYphp_SELECTphp,php php$selectphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php FROMphp clause
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Fieldphp names
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp fromphp(php$namephp)
php php php php php{
php php php php php php php php ifphp(php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php"FROMphp argumentphp mustphp bephp aphp stringphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_clausesphp[php]php php=php arrayphp(selfphp:php:QUERYphp_FROMphp,php php$namephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php WHEREphp query
php php php php php php*
php php php php php php*php php@paramphp stringphp php$condphp Condition
php php php php php php*php php@paramphp arrayphp php$argsphp Argumentsphp tophp substitutephp insteadphp ofphp php?php'sphp inphp condition
php php php php php php*php php@paramphp stringphp php$opphp relationphp tophp otherphp clausesphp php-php andphp/or
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp wherephp(php$condphp,php php$valuephp php=php nullphp,php php$opphp php=php php'andphp'php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$condphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php"WHEREphp argumentphp mustphp bephp aphp stringphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_clausesphp[php]php php=php arrayphp(selfphp:php:QUERYphp_WHEREphp,php arrayphp(php$condphp,php php$valuephp,php php$opphp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Selectphp recordphp orphp fieldsphp byphp ID
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$valuephp Identifierphp tophp selectphp by
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp whereIdphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_scalarphp(php$valuephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php"WHEREIDphp argumentphp mustphp bephp aphp scalarphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_clausesphp[php]php php=php arrayphp(selfphp:php:QUERYphp_WHEREIDphp,php php$valuephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php LIMITphp clausephp php(howphp manyphp itemsphp tophp returnphp)
php php php php php php*
php php php php php php*php php@paramphp php intphp php$limit
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp limitphp(php$limitphp)
php php php php php{
php php php php php php php php ifphp php(php$limitphp php!php=php php(intphp)php php$limitphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php"LIMITphp argumentphp mustphp bephp anphp integerphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_clausesphp[php]php php=php arrayphp(selfphp:php:QUERYphp_LIMITphp,php php$limitphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php ORDERphp clausephp;php fieldphp orphp fieldsphp tophp sortphp byphp,php andphp directionphp tophp sort
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp|arrayphp php$sort
php php php php php php*php php@paramphp php stringphp php$direction
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Query
php php php php php php*php/
php php php php publicphp functionphp orderphp(php$sortphp,php php$directionphp php=php php'ascphp'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_clausesphp[php]php php=php arrayphp(selfphp:php:QUERYphp_ORDERphp,php arrayphp(php$sortphp,php php$directionphp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php"Assemblephp"php thephp query
php php php php php php*
php php php php php php*php Simplyphp returnsphp thephp clausesphp presentphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getClausesphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp queryphp clausesphp asphp anphp array
php php php php php php*
php php php php php php*php php@returnphp arrayphp Clausesphp inphp thephp query
php php php php php php*php/
php php php php publicphp functionphp getClausesphp(php)
php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_clausesphp;
php php php php php}
php}
