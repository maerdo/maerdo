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
php php*php/

php/php*php*
php php*php Zendphp_Serverphp_Reflectionphp_Function
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Functionphp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Reflectionphp_Class
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Classphp.phpphp'php;

php/php*php*
php php*php Reflectionphp forphp determiningphp methodphp signaturesphp tophp usephp withphp serverphp classes
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php$Idphp:php Reflectionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Serverphp_Reflection
php{
php php php php php/php*php*
php php php php php php*php Performphp classphp reflectionphp tophp createphp dispatchphp signatures
php php php php php php*
php php php php php php*php Createsphp aphp php{php@linkphp Zendphp_Serverphp_Reflectionphp_Classphp}php objectphp forphp thephp classphp or
php php php php php php*php objectphp providedphp.
php php php php php php*
php php php php php php*php Ifphp extraphp argumentsphp shouldphp bephp passedphp tophp dispatchablephp methodsphp,php thesephp may
php php php php php php*php bephp providedphp asphp anphp arrayphp tophp php$argvphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|objectphp php$classphp Classphp namephp orphp object
php php php php php php*php php@paramphp nullphp|arrayphp php$argvphp Optionalphp argumentsphp tophp bephp usedphp duringphp thephp methodphp call
php php php php php php*php php@paramphp stringphp php$namespacephp Optionalphp namespacephp withphp whichphp tophp prefixphp the
php php php php php php*php methodphp namephp php(usedphp forphp thephp signaturephp keyphp)php.php Primarilyphp tophp avoidphp collisionsphp,
php php php php php php*php alsophp forphp XmlRpcphp namespacing
php php php php php php*php php@returnphp Zendphp_Serverphp_Reflectionphp_Class
php php php php php php*php php@throwsphp Zendphp_Serverphp_Reflectionphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp reflectClassphp(php$classphp,php php$argvphp php=php falsephp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(isphp_objectphp(php$classphp)php)php php{
php php php php php php php php php php php php php$reflectionphp php=php newphp ReflectionObjectphp(php$classphp)php;
php php php php php php php php php}php elseifphp php(classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php php$reflectionphp php=php newphp ReflectionClassphp(php$classphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp classphp orphp objectphp passedphp tophp attachClassphp(php)php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$argvphp php&php&php php!isphp_arrayphp(php$argvphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp argvphp argumentphp passedphp tophp reflectClassphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Serverphp_Reflectionphp_Classphp(php$reflectionphp,php php$namespacephp,php php$argvphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp functionphp reflectionphp tophp createphp dispatchphp signatures
php php php php php php*
php php php php php php*php Createsphp dispatchphp prototypesphp forphp aphp functionphp.php Itphp returnsphp a
php php php php php php*php php{php@linkphp Zendphp_Serverphp_Reflectionphp_Functionphp}php objectphp.
php php php php php php*
php php php php php php*php Ifphp extraphp argumentsphp shouldphp bephp passedphp tophp thephp dispatchablephp functionphp,php these
php php php php php php*php mayphp bephp providedphp asphp anphp arrayphp tophp php$argvphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$functionphp Functionphp name
php php php php php php*php php@paramphp nullphp|arrayphp php$argvphp Optionalphp argumentsphp tophp bephp usedphp duringphp thephp methodphp call
php php php php php php*php php@paramphp stringphp php$namespacephp Optionalphp namespacephp withphp whichphp tophp prefixphp the
php php php php php php*php functionphp namephp php(usedphp forphp thephp signaturephp keyphp)php.php Primarilyphp tophp avoid
php php php php php php*php collisionsphp,php alsophp forphp XmlRpcphp namespacing
php php php php php php*php php@returnphp Zendphp_Serverphp_Reflectionphp_Function
php php php php php php*php php@throwsphp Zendphp_Serverphp_Reflectionphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp reflectFunctionphp(php$functionphp,php php$argvphp php=php falsephp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$functionphp)php php|php|php php!functionphp_existsphp(php$functionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp functionphp php"php'php php.php php$functionphp php.php php'php"php passedphp tophp reflectFunctionphp'php)php;
php php php php php php php php php}


php php php php php php php php ifphp php(php$argvphp php&php&php php!isphp_arrayphp(php$argvphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp argvphp argumentphp passedphp tophp reflectClassphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Serverphp_Reflectionphp_Functionphp(newphp ReflectionFunctionphp(php$functionphp)php,php php$namespacephp,php php$argvphp)php;
php php php php php}
php}
