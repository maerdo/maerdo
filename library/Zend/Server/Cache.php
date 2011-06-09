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
php php*php php@packagephp php php php Zendphp_Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Cachephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Serverphp_Cachephp:php cachephp serverphp definitions
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serverphp_Cache
php{
php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Methodsphp tophp skipphp whenphp cachingphp server
php php php php php php*php/
php php php php protectedphp staticphp php$php_skipMethodsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Cachephp aphp filephp containingphp thephp dispatchphp listphp.
php php php php php php*
php php php php php php*php Serializesphp thephp serverphp definitionphp storesphp thephp information
php php php php php php*php inphp php$filenamephp.
php php php php php php*
php php php php php php*php Returnsphp falsephp onphp anyphp errorphp php(typicallyphp,php inabilityphp tophp writephp tophp filephp)php,php true
php php php php php php*php onphp successphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@paramphp php Zendphp_Serverphp_Interfacephp php$server
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp savephp(php$filenamephp,php Zendphp_Serverphp_Interfacephp php$serverphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$filenamephp)
php php php php php php php php php php php php php|php|php php(php!filephp_existsphp(php$filenamephp)php php&php&php php!isphp_writablephp(dirnamephp(php$filenamephp)php)php)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$methodsphp php=php php$serverphp-php>getFunctionsphp(php)php;

php php php php php php php php ifphp php(php$methodsphp instanceofphp Zendphp_Serverphp_Definitionphp)php php{
php php php php php php php php php php php php php$definitionphp php=php newphp Zendphp_Serverphp_Definitionphp(php)php;
php php php php php php php php php php php php foreachphp php(php$methodsphp asphp php$methodphp)php php{
php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$methodphp-php>getNamephp(php)php,php selfphp:php:php$php_skipMethodsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$definitionphp-php>addMethodphp(php$methodphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$methodsphp php=php php$definitionphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php0php php=php=php=php php@filephp_putphp_contentsphp(php$filenamephp,php serializephp(php$methodsphp)php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp serverphp definitionphp fromphp aphp file
php php php php php php*
php php php php php php*php Unserializesphp aphp storedphp serverphp definitionphp fromphp php$filenamephp.php Returnsphp falsephp if
php php php php php php*php itphp failsphp inphp anyphp wayphp,php truephp onphp successphp.
php php php php php php*
php php php php php php*php Usefulphp tophp preventphp needingphp tophp buildphp thephp serverphp definitionphp onphp each
php php php php php php*php requestphp.php Samplephp usagephp:
php php php php php php*
php php php php php php*php php<codephp>
php php php php php php*php ifphp php(php!Zendphp_Serverphp_Cachephp:php:getphp(php$filenamephp,php php$serverphp)php)php php{
php php php php php php*php php php php php requirephp_oncephp php'Somephp/Servicephp/Classphp.phpphp'php;
php php php php php php*php php php php php requirephp_oncephp php'Anotherphp/Servicephp/Classphp.phpphp'php;
php php php php php php*
php php php php php php*php php php php php php/php/php Attachphp Somephp_Servicephp_Classphp withphp namespacephp php'somephp'
php php php php php php*php php php php php php$serverphp-php>attachphp(php'Somephp_Servicephp_Classphp'php,php php'somephp'php)php;
php php php php php php*
php php php php php php*php php php php php php/php/php Attachphp Anotherphp_Servicephp_Classphp withphp namespacephp php'anotherphp'
php php php php php php*php php php php php php$serverphp-php>attachphp(php'Anotherphp_Servicephp_Classphp'php,php php'anotherphp'php)php;
php php php php php php*
php php php php php php*php php php php php Zendphp_Serverphp_Cachephp:php:savephp(php$filenamephp,php php$serverphp)php;
php php php php php php*php php}
php php php php php php*
php php php php php php*php php$responsephp php=php php$serverphp-php>handlephp(php)php;
php php php php php php*php echophp php$responsephp;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@paramphp php Zendphp_Serverphp_Interfacephp php$server
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp getphp(php$filenamephp,php Zendphp_Serverphp_Interfacephp php$serverphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$filenamephp)
php php php php php php php php php php php php php|php|php php!filephp_existsphp(php$filenamephp)
php php php php php php php php php php php php php|php|php php!isphp_readablephp(php$filenamephp)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}


php php php php php php php php ifphp php(falsephp php=php=php=php php(php$dispatchphp php=php php@filephp_getphp_contentsphp(php$filenamephp)php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(falsephp php=php=php=php php(php$dispatchArrayphp php=php php@unserializephp(php$dispatchphp)php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$serverphp-php>loadFunctionsphp(php$dispatchArrayphp)php;

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp deletephp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$filenamephp)php php&php&php filephp_existsphp(php$filenamephp)php)php php{
php php php php php php php php php php php php unlinkphp(php$filenamephp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}
php}
