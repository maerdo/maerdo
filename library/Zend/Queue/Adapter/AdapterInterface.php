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
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php AdapterInterfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Interfacephp forphp commonphp queuephp operations
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Queuephp_Adapterphp_AdapterInterface
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp,php Zendphp_Queuephp php$queuephp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp queuephp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queue
php php php php php php*php/
php php php php publicphp functionphp getQueuephp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp queuephp instnace
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp Zendphp_Queuephp_Adapterphp_AdapterInterface
php php php php php php*php/
php php php php publicphp functionphp setQueuephp(Zendphp_Queuephp php$queuephp)php;

php php php php php/php*php*
php php php php php php*php Doesphp aphp queuephp alreadyphp existphp?
php php php php php php*
php php php php php php*php Usephp isSupportedphp(php'isExistsphp'php)php tophp determinephp ifphp anphp adapterphp canphp testphp for
php php php php php php*php queuephp existancephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Queuephp name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isExistsphp(php$namephp)php;

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp queue
php php php php php php*
php php php php php php*php Visibilityphp timeoutphp isphp howphp longphp aphp messagephp isphp leftphp inphp thephp queue
php php php php php php*php php"invisiblephp"php tophp otherphp readersphp.php php Ifphp thephp messagephp isphp acknowlegedphp php(deletedphp)
php php php php php php*php beforephp thephp timeoutphp,php thenphp thephp messagephp isphp deletedphp.php php Howeverphp,php ifphp the
php php php php php php*php timeoutphp expiresphp thenphp thephp messagephp willphp bephp madephp availablephp tophp otherphp queue
php php php php php php*php readersphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$namephp Queuephp name
php php php php php php*php php@paramphp php integerphp php$timeoutphp Defaultphp visibilityphp timeout
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp createphp(php$namephp,php php$timeoutphp=nullphp)php;

php php php php php/php*php*
php php php php php php*php Deletephp aphp queuephp andphp allphp ofphp itsphp messages
php php php php php php*
php php php php php php*php Returnphp falsephp ifphp thephp queuephp isphp notphp foundphp,php truephp ifphp thephp queuephp existsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Queuephp name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$namephp)php;

php php php php php/php*php*
php php php php php php*php Getphp anphp arrayphp ofphp allphp availablephp queues
php php php php php php*
php php php php php php*php Notphp allphp adaptersphp supportphp getQueuesphp(php)php;php usephp isSupportedphp(php'getQueuesphp'php)
php php php php php php*php tophp determinephp ifphp thephp adapterphp supportsphp thisphp featurephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getQueuesphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnphp thephp approximatephp numberphp ofphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp|nullphp php$queue
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(Zendphp_Queuephp php$queuephp php=php nullphp)php;

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Messsagephp managementphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Sendphp aphp messagephp tophp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$messagephp Messagephp tophp sendphp tophp thephp activephp queue
php php php php php php*php php@paramphp php Zendphp_Queuephp|nullphp php$queue
php php php php php php*php php@returnphp Zendphp_Queuephp_Message
php php php php php php*php/
php php php php publicphp functionphp sendphp(php$messagephp,php Zendphp_Queuephp php$queuephp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Getphp messagesphp inphp thephp queue
php php php php php php*
php php php php php php*php php@paramphp php integerphp|nullphp php$maxMessagesphp Maximumphp numberphp ofphp messagesphp tophp return
php php php php php php*php php@paramphp php integerphp|nullphp php$timeoutphp Visibilityphp timeoutphp forphp thesephp messages
php php php php php php*php php@paramphp php Zendphp_Queuephp|nullphp php$queue
php php php php php php*php php@returnphp Zendphp_Queuephp_Messagephp_Iterator
php php php php php php*php/
php php php php publicphp functionphp receivephp(php$maxMessagesphp php=php nullphp,php php$timeoutphp php=php nullphp,php Zendphp_Queuephp php$queuephp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Deletephp aphp messagephp fromphp thephp queue
php php php php php php*
php php php php php php*php Returnphp truephp ifphp thephp messagephp isphp deletedphp,php falsephp ifphp thephp deletionphp is
php php php php php php*php unsuccessfulphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp_Messagephp php$message
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deleteMessagephp(Zendphp_Queuephp_Messagephp php$messagephp)php;

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Supportingphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp thephp configurationphp optionsphp inphp thisphp adapterphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnphp aphp listphp ofphp queuephp capabilitiesphp functions
php php php php php php*
php php php php php php*php php$arrayphp[php'functionphp namephp'php]php php=php truephp orphp false
php php php php php php*php truephp isphp supportedphp,php falsephp isphp notphp supportedphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getCapabilitiesphp(php)php;

php php php php php/php*php*
php php php php php php*php Indicatesphp ifphp aphp functionphp isphp supportedphp orphp notphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Functionphp name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isSupportedphp(php$namephp)php;
php}
