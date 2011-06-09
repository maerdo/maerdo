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
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Faultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_XmlRpcphp_Fault
php php*php/
requirephp_oncephp php'Zendphp/XmlRpcphp/Faultphp.phpphp'php;


php/php*php*
php php*php XMLRPCphp Serverphp Faults
php php*
php php*php Encapsulatesphp anphp exceptionphp forphp usephp asphp anphp XMLRPCphp faultphp responsephp.php Valid
php php*php exceptionphp classesphp thatphp mayphp bephp usedphp forphp generatingphp thephp faultphp codephp andphp fault
php php*php stringphp canphp bephp attachedphp usingphp php{php@linkphp attachFaultExceptionphp(php)php}php;php allphp othersphp usephp a
php php*php genericphp php'php4php0php4php Unknownphp errorphp'php responsephp.
php php*
php php*php Youphp mayphp alsophp attachphp faultphp observersphp,php whichphp wouldphp allowphp youphp tophp monitor
php php*php particularphp faultphp casesphp;php thisphp isphp donephp viaphp php{php@linkphp attachObserverphp(php)php}php.php Observers
php php*php needphp onlyphp implementphp aphp staticphp php'observephp'php methodphp.
php php*
php php*php Tophp allowphp methodphp chainingphp,php youphp mayphp usephp thephp php{php@linkphp getInstancephp(php)php}php factory
php php*php tophp instantiatephp aphp Zendphp_XmlRpcphp_Serverphp_Faultphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_XmlRpc
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_XmlRpcphp_Serverphp_Faultphp extendsphp Zendphp_XmlRpcphp_Fault
php{
php php php php php/php*php*
php php php php php php*php php@varphp Exception
php php php php php php*php/
php php php php protectedphp php$php_exceptionphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp exceptionphp classesphp thatphp mayphp definephp xmlrpcphp faults
php php php php php php*php/
php php php php protectedphp staticphp php$php_faultExceptionClassesphp php=php arrayphp(php'Zendphp_XmlRpcphp_Serverphp_Exceptionphp'php php=php>php truephp)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp faultphp observers
php php php php php php*php/
php php php php protectedphp staticphp php$php_observersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp Exceptionphp php$e
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Serverphp_Fault
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Exceptionphp php$ephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_exceptionphp php=php php$ephp;
php php php php php php php php php$codephp php php php php php php php php php php php php php=php php4php0php4php;
php php php php php php php php php$messagephp php php php php php php php php php php=php php'Unknownphp errorphp'php;
php php php php php php php php php$exceptionClassphp php php php=php getphp_classphp(php$ephp)php;

php php php php php php php php foreachphp php(arrayphp_keysphp(selfphp:php:php$php_faultExceptionClassesphp)php asphp php$classphp)php php{
php php php php php php php php php php php php ifphp php(php$ephp instanceofphp php$classphp)php php{
php php php php php php php php php php php php php php php php php$codephp php php php php=php php$ephp-php>getCodephp(php)php;
php php php php php php php php php php php php php php php php php$messagephp php=php php$ephp-php>getMessagephp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$codephp,php php$messagephp)php;

php php php php php php php php php/php/php Notifyphp exceptionphp observersphp,php ifphp present
php php php php php php php php ifphp php(php!emptyphp(selfphp:php:php$php_observersphp)php)php php{
php php php php php php php php php php php php foreachphp php(arrayphp_keysphp(selfphp:php:php$php_observersphp)php asphp php$observerphp)php php{
php php php php php php php php php php php php php php php php callphp_userphp_funcphp(arrayphp(php$observerphp,php php'observephp'php)php,php php$thisphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp Zendphp_XmlRpcphp_Serverphp_Faultphp instance
php php php php php php*
php php php php php php*php php@paramphp Exceptionphp php$e
php php php php php php*php php@returnphp Zendphp_XmlRpcphp_Serverphp_Fault
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(Exceptionphp php$ephp)
php php php php php{
php php php php php php php php returnphp newphp selfphp(php$ephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp validphp exceptionsphp thatphp canphp bephp usedphp tophp definephp xmlrpcphp faults
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$classesphp Classphp namephp orphp arrayphp ofphp classphp names
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp attachFaultExceptionphp(php$classesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$classesphp)php)php php{
php php php php php php php php php php php php php$classesphp php=php php(arrayphp)php php$classesphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$classesphp asphp php$classphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$classphp)php php&php&php classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_faultExceptionClassesphp[php$classphp]php php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Detachphp faultphp exceptionphp classes
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$classesphp Classphp namephp orphp arrayphp ofphp classphp names
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp detachFaultExceptionphp(php$classesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$classesphp)php)php php{
php php php php php php php php php php php php php$classesphp php=php php(arrayphp)php php$classesphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$classesphp asphp php$classphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$classphp)php php&php&php issetphp(selfphp:php:php$php_faultExceptionClassesphp[php$classphp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(selfphp:php:php$php_faultExceptionClassesphp[php$classphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp anphp observerphp class
php php php php php php*
php php php php php php*php Allowsphp observationphp ofphp xmlrpcphp serverphp faultsphp,php thusphp allowingphp loggingphp orphp mail
php php php php php php*php notificationphp ofphp faultphp responsesphp onphp thephp xmlrpcphp serverphp.
php php php php php php*
php php php php php php*php Expectsphp aphp validphp classphp namephp;php thatphp classphp mustphp havephp aphp publicphp staticphp method
php php php php php php*php php'observephp'php thatphp acceptsphp anphp exceptionphp asphp itsphp solephp argumentphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$class
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp attachObserverphp(php$classphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$classphp)
php php php php php php php php php php php php php|php|php php!classphp_existsphp(php$classphp)
php php php php php php php php php php php php php|php|php php!isphp_callablephp(arrayphp(php$classphp,php php'observephp'php)php)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(selfphp:php:php$php_observersphp[php$classphp]php)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_observersphp[php$classphp]php php=php truephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Detachphp anphp observer
php php php php php php*
php php php php php php*php php@paramphp stringphp php$class
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp detachObserverphp(php$classphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(selfphp:php:php$php_observersphp[php$classphp]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php unsetphp(selfphp:php:php$php_observersphp[php$classphp]php)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp exception
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*php php@returnphp Exception
php php php php php php*php/
php php php php publicphp functionphp getExceptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_exceptionphp;
php php php php php}
php}
